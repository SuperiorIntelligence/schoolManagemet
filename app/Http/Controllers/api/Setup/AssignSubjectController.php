<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SchoolSubject;
use App\Models\StudentClass;
use App\Models\AssignSubject;

class AssignSubjectController extends Controller
{
    public function assignSubjectView(){

//        $data['allData'] = AssignSubject::all();
        $data["allData"] = AssignSubject::select("classId")->groupBy("classId")->get();
        return view("backend.setup.assignSubject.viewAssignSubject",$data);

    }

    public function assignSubjectAdd(){

        $data["subjects"] = SchoolSubject::all();
        $data["classes"] =  StudentClass::all();
        return view("backend.setup.assignSubject.addAssignSubject",$data);

    }

    public function storeAssignSubject(Request $request){

        $splitSubjectId = explode(",",$request->subjectId);
        $splitFullMark = explode(",",$request->fullMark);
        $splitPassMark = explode(",",$request->passMark);
        $splitSubjectiveMark = explode(",",$request->subjectiveMark);
        $count = count($splitSubjectId);

        if ($count != null){

            for ($i = 0 ;$i < $count ; $i++){

                $assignSubject = new AssignSubject();
                $assignSubject-> classId = $request->classId;
                $assignSubject-> subjectId = $splitSubjectId[$i];
                $assignSubject-> fullMark = $splitFullMark[$i];
                $assignSubject-> passMark = $splitPassMark[$i];
                $assignSubject-> subjectiveMark = $splitSubjectiveMark[$i];
                $assignSubject->save();

            }

        }
        return $this->assignSubjectView();

    }

    public function assignSubjectEdit($id){

        $data["editData"] = AssignSubject::where("classId",$id)->orderBy("subjectId","asc")->get();

        $data["subjects"] = SchoolSubject::all();
        $data["classes"] =  StudentClass::all();
        return view("backend.setup.assignSubject.editAssignSubject",$data);

    }

    public function updateAssignSubject(Request $request,$id){

        if($request->classId != null){

            AssignSubject::where("classId",$id)->delete();

            $splitSubjectId = explode(",",$request->subjectId);
            $splitFullMark = explode(",",$request->fullMark);
            $splitPassMark = explode(",",$request->passMark);
            $splitSubjectiveMark = explode(",",$request->subjectiveMark);
            $count = count($splitSubjectId);
            if ($count != null){

                for ($i = 0 ;$i < $count ; $i++){

                    $assignSubject = new AssignSubject();
                    $assignSubject-> classId = $request->classId;
                    $assignSubject-> subjectId = $splitSubjectId[$i];
                    $assignSubject-> fullMark = $splitFullMark[$i];
                    $assignSubject-> passMark = $splitPassMark[$i];
                    $assignSubject-> subjectiveMark = $splitSubjectiveMark[$i];
                    $assignSubject->save();
                }

            }
            return $this->assignSubjectView();
        }
        else{
            return $this->assignSubjectEdit($id);
        }


    }

    public function detailsAssignSubject($id){

        $data["detailsData"] = AssignSubject::where("classId",$id)->orderBy("subjectId","asc")->get();

        return view("backend.setup.assignSubject.detailsAssignSubject",$data);
    }


}
