<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\StudentClass;

class StudentClassController extends Controller
{
    public function studentClassView(){

    $data['allData'] = StudentClass::all();
    return view("backend.setup.studentClass.viewClass",$data);

    }

    public function studentClassAdd(){

        return view("backend.setup.studentClass.addClass");

    }

    public function storeStudentClass(Request $request){

        $request->validate([
            "className"=>"required|unique:student_classes,name"
        ]);

        $class = new StudentClass();
        $class->name = $request->className;
        $class->save();

        return $this->studentClassView();

    }

    public function studentClassEdit($id){

        $editeClass = StudentClass::find($id);
        return view("backend.setup.studentClass.editeClass",compact("editeClass"));

    }

    public function updateStudentClass(Request $request,$id){

        $request->validate([
            "className"=>"required|unique:student_classes,name,".$id
        ]);
        $update = StudentClass::find($id);
        $update->name = $request->className;
        $update->save();

        return $this->studentClassView();

    }

    public function deleteStudentClass($id){

        $deleteStudentClass = StudentClass::find($id)->delete();
        return $this->studentClassView();

    }


}
