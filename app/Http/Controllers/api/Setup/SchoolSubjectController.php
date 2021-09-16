<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;

class SchoolSubjectController extends Controller
{
    public function schoolSubjectView(){

        $data["allData"] = SchoolSubject::all();
        return view("backend.setup.SchoolSubject.viewSchoolSubject",$data);

    }

    public function schoolSubjectAdd(){

        return view("backend.setup.SchoolSubject.addSchoolSubject");

    }

    public function storeSchoolSubject(Request $request){

        $request->validate([
            "subjectName"=>"required|unique:school_subjects,name"
        ]);

        $class = new SchoolSubject();
        $class->name = $request->subjectName;
        $class->save();

        return $this->schoolSubjectView();

    }

    public function schoolSubjectEdit($id){

        $editSchoolSubject = SchoolSubject::find($id);
        return view("backend.setup.SchoolSubject.editSchoolSubject",compact("editSchoolSubject"));

    }

    public function updateSchoolSubject(Request $request,$id){

        $request->validate([
            "subjectName"=>"required|unique:school_subjects,name,".$id
        ]);
        $update = SchoolSubject::find($id);
        $update->name = $request->subjectName;
        $update->save();

        return $this->schoolSubjectView();

    }

    public function deleteSchoolSubject($id){

        $deleteSchoolSubject = SchoolSubject::find($id)->delete();
        return $this->schoolSubjectView();

    }
}
