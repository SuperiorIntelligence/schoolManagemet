<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentGroup;

class StudentGroupController extends Controller
{
    public function studentGroupView(){

        $data['allData'] = StudentGroup::all();
        return view("backend.setup.group.viewGroup",$data);

    }

    public function studentGroupAdd(){

        return view("backend.setup.group.addGroup");
    }

    public function storeStudentGroup(Request $request){

        $request->validate([
            "name"=>"required|unique:student_groups,name"
        ]);

        $class = new StudentGroup();
        $class->name = $request->name;
        $class->save();

        return $this->studentGroupView();

    }

    public function studentGroupEdit($id){

        $editGroup = StudentGroup::find($id);
        return view("backend.setup.group.editGroup",compact("editGroup"));

    }

    public function updateStudentGroup(Request $request,$id){

        $request->validate([
            "name"=>"required|unique:student_groups,name,".$id
        ]);
        $update = StudentGroup::find($id);
        $update->name = $request->name;
        $update->save();

        return $this->studentGroupView();

    }

    public function deleteStudentGroup($id){

        $delete = StudentGroup::find($id)->delete();
        return $this->studentGroupView();

    }

}
