<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;
use App\Models\StudentClass;
use App\Models\FeeCategoryAmount;

class FeeAmountController extends Controller
{
    public function feeAmountView(){

//        $data['allData'] = FeeCategoryAmount::all();
        $data["allData"] = FeeCategoryAmount::select("feeCategoryId")->groupBy("feeCategoryId")->get();
        return view("backend.setup.feeAmount.viewFeeAmount",$data);

    }

    public function feeAmountAdd(){

        $data["feeCategories"] = FeeCategory::all();
        $data["classes"] =  StudentClass::all();
        return view("backend.setup.feeAmount.addFeeAmount",$data);

    }

    public function storeFeeAmount(Request $request){
        $splitAmount = explode(",",$request->Amount);
        $splitclassId = explode(",",$request->classId);
        $count = count($splitAmount);
        if ($count != null){

            for ($i = 0 ;$i < $count ; $i++){

                $feeAmount = new FeeCategoryAmount();
                $feeAmount-> feeCategoryId = $request->feeCategoryId;
                $feeAmount-> classId = $splitclassId[$i];
                $feeAmount-> amount = $splitAmount[$i];
                $feeAmount->save();
            }

        }
        return $this->feeAmountView();

    }

    public function feeAmountEdit($id){

        $data["editData"] = FeeCategoryAmount::where("feeCategoryId",$id)->orderBy("classId","asc")->get();

//        dd($data["editData"]->toArray());
        $data["feeCategories"] = FeeCategory::all();
        $data["classes"] =  StudentClass::all();
        return view("backend.setup.feeAmount.editFeeAmount",$data);

    }

    public function updateFeeAmount(Request $request,$id){

        if($request->classId != null){

            FeeCategoryAmount::where("feeCategoryId",$id)->delete();

            $splitAmount = explode(",",$request->Amount);
            $splitclassId = explode(",",$request->classId);
            $count = count($splitAmount);
            if ($count != null){

                for ($i = 0 ;$i < $count ; $i++){

                    $feeAmount = new FeeCategoryAmount();
                    $feeAmount-> feeCategoryId = $request->feeCategoryId;
                    $feeAmount-> classId = $splitclassId[$i];
                    $feeAmount-> amount = $splitAmount[$i];
                    $feeAmount->save();
                }

            }
            return $this->feeAmountView();
        }
        else{
            return $this->feeAmountEdit($id);
        }


    }

    public function detailsFeeCategory($id){

        $data["detailsData"] = FeeCategoryAmount::where("feeCategoryId",$id)->orderBy("classId","asc")->get();

        return view("backend.setup.feeAmount.details",$data);
    }
}
