<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use App\Models\StudentShift;
use Illuminate\Http\Request;

class StudentShiftController extends Controller
{
    public function studentShiftView(){

        $data['allData'] = StudentShift::all();
        return view("backend.setup.shift.viewShift",$data);

    }

    public function studentShiftAdd(){

        return view("backend.setup.shift.addShift");

    }

    public function storeStudentShift(Request $request){

        $request->validate([
            "nameShift"=>"required|unique:student_shifts,name"
        ]);

        $class = new StudentShift();
        $class->name = $request->nameShift;
        $class->save();

        return $this->studentShiftView();

    }

    public function studentShiftEdit($id){

        $editShift = StudentShift::find($id);
        return view("backend.setup.shift.editShift",compact("editShift"));

    }

    public function updateStudentShift(Request $request,$id){

        $request->validate([
            "nameShift"=>"required|unique:student_shifts,name,".$id
        ]);
        $update = StudentShift::find($id);
        $update->name = $request->nameShift;
        $update->save();

        return $this->studentShiftView();

    }

    public function deleteStudentShift($id){

        $deleteStudentShift = StudentShift::find($id)->delete();
        return $this->studentShiftView();

    }
}
