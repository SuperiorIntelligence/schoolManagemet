<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExamType;

class ExamTypeController extends Controller
{
    public function ExamTypeView(){

        $data["allData"] = ExamType::all();
        return view("backend.setup.examType.viewExamType",$data);

    }

    public function examTypeAdd(){

        return view("backend.setup.examType.addExamType");

    }

    public function storeExamType(Request $request){

        $request->validate([
            "examTypeName"=>"required|unique:exam_types,name"
        ]);

        $class = new ExamType();
        $class->name = $request->examTypeName;
        $class->save();

        return $this->ExamTypeView();

    }

    public function examTypeEdit($id){

        $editExamType = ExamType::find($id);
        return view("backend.setup.examType.editExamType",compact("editExamType"));

    }

    public function updateExamType(Request $request,$id){

        $request->validate([
            "examTypeName"=>"required|unique:exam_types,name,".$id
        ]);
        $update = ExamType::find($id);
        $update->name = $request->examTypeName;
        $update->save();

        return $this->ExamTypeView();


    }

    public function deleteExamType($id){

        $deleteExamType = ExamType::find($id)->delete();
        return $this->ExamTypeView();

    }

}
