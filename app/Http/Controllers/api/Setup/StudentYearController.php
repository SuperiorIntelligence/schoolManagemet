<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentYear;

class StudentYearController extends Controller
{
    public function studentYearView(){

        $data['allData'] = StudentYear::all();
        return view("backend.setup.year.viewYear",$data);

    }

    public function studentYearAdd(){

        return view("backend.setup.year.addYear");
    }

    public function storeStudentYear(Request $request){

        $request->validate([
            "numberYear"=>"required|unique:student_years,name"
        ]);

        $class = new StudentYear();
        $class->name = $request->numberYear;
        $class->save();

        return $this->studentYearView();
    }

    public function studentYearEdit($id){

        $editYear = StudentYear::find($id);
        return view("backend.setup.year.editYear",compact("editYear"));

    }

    public function updateStudentYear(Request $request,$id){

        $request->validate([
            "numberYear"=>"required|unique:student_years,name,".$id
        ]);
        $update = StudentYear::find($id);
        $update->name = $request->numberYear;
        $update->save();

        return $this->studentYearView();

    }

    public function deleteStudentYear($id){

        $deleteStudentYear = StudentYear::find($id)->delete();
        return $this->studentYearView();

    }

}
