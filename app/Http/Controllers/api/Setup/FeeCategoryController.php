<?php

namespace App\Http\Controllers\api\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\FeeCategory;

class FeeCategoryController extends Controller
{
    public function feeCategoryView(){

        $data['allData'] = FeeCategory::all();
        return view("backend.setup.feeCategory.viewFeeCategory",$data);

    }

    public function feeCategoryAdd(){

        return view("backend.setup.feeCategory.addFeeCategory");

    }

    public function storeFeeCategory(Request $request){

        $request->validate([
            "feeCatName"=>"required|unique:fee_categories,name"
        ]);

        $class = new FeeCategory();
        $class->name = $request->feeCatName;
        $class->save();

        return $this->feeCategoryView();

    }

    public function feeCategoryEdit($id){

        $editFeeCategory = FeeCategory::find($id);
        return view("backend.setup.feeCategory.editFeeCategory",compact("editFeeCategory"));

    }

    public function updateFeeCategory(Request  $request,$id){

        $request->validate([
            "feeCatName"=>"required|unique:fee_categories,name,".$id
        ]);
        $update = FeeCategory::find($id);
        $update->name = $request->feeCatName;
        $update->save();

        return $this->feeCategoryView();

    }

    public function deleteFeeCategory($id){

        $deleteStudentClass = FeeCategory::find($id)->delete();
        return $this->feeCategoryView();


    }

}
