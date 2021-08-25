<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\api\AuthorController;
use App\Http\Controllers\Controller;
use App\Models\Author;

use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class ProfileController extends Controller
{
    public function logout(){
        $author  = Author::where("remember_token",$_COOKIE['Authorization'])->first();
        $author->remember_token = "";
        $idAuthor = $author->id;
        $author->save();

        DB::table('oauth_access_tokens')->where('user_id', '=', $idAuthor)->delete();
        unset($_COOKIE['Authorization']);
        setcookie("Authorization",null,-1,"/");
        return redirect()->route("login");
    }


    public function profileView(){

        $userWorking = Author::where("remember_token",$_COOKIE['Authorization'])->first();

        return view("backend.user.viewProfile",compact("userWorking"));

    }


    public function updateProfile(Request $request,$id){

        $request->validate([
            "name"=>"required",
            "email"=>"required|email|unique:authors,email,".$id
        ]);

        $oldImage = $request->oldImage;
        $picProfile = $request->file('pic');

        if($picProfile){

            $nameImage = hexdec(uniqid());
            $imgExt = strtolower($picProfile->getClientOriginalExtension());
            $imgName = $nameImage.".".$imgExt;




            $data = Carbon::now()->format('Y');
            $locationDirectory  = 'image\picProfile\\';

            if(!is_dir($locationDirectory.$data)){
                mkdir($locationDirectory.$data);
            }

            $picProfile->move($locationDirectory.$data,$imgName);
            if(file_exists($oldImage)){
                unlink($oldImage);
            }


            $dataImage = $locationDirectory.$data."\\".$imgName;

            $author = Author::find($id);
            $author->profile_photo = $dataImage;
            $author->usertype = $request->typestyle;
            $author->name = $request->name;
            $author->email = $request->email;
            $author->save();

        }
        else{

            $author = Author::find($id);
            $author->usertype = $request->typestyle;
            $author->name = $request->name;
            $author->email = $request->email;
            $author->save();

        }



        return $this->profileView();



    }

    public function changePassword(){
        return view("backend.user.editePassword");
    }

    public function passwordUpdate(Request $request){

        $request->validate([
            "current_password"=>"required",
            "password"=>"required|confirmed",
        ],[
            "current_password.required" => "The current password field is empty",
            "password.required"=>"The password field is empty",
            "password.confirmed"=>"The password is not the same",
        ]);

        $user = Author::where("remember_token",$_COOKIE['Authorization'])->first();
        if(Hash::check($request->current_password,$user->password)){
            $user->password = Hash::make($request->password);
            $user->save();
            return $this->logout();
        }





    }

}
