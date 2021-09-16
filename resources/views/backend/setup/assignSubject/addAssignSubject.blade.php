<style>
    .m-form , .m-form label
    {
        font-size: 1.2rem;
        font-family: Roboto
    }
    .btn{
        font-family: Roboto
    }
    .m-form.m-form--fit .m-form__content, .m-form.m-form--fit .m-form__group, .m-form.m-form--fit .m-form__heading{
        padding-left: 23px;
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Add Assign Subject
                </h3>
            </div>

        </div>
    </div>
    <div class="m-content">

        <div class="row">
            <div class="col-xl-12">



                <div class="m-portlet m-portlet--mobile  m-portlet--unair">
                    <div class="m-portlet__body">
                        <!--begin: Datatable -->
                        <div  id="">



                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >

                                    <div class="form-group m-form__group">
                                        <label for="exampleSelect1">
                                            Class Name<span class="text-danger"> *</span>
                                        </label>
                                        <select class="form-control m-input m-input--solid" name="classId" id="classId"  >
                                            <option value="" selected="" disabled="">Select Class</option>
                                            @foreach($classes as $class)
                                                <option value="{{$class->id}}">{{$class->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div class="add_item">
                                        <div class="row">
                                            <div class="col-md-12"><br></div>
                                            <div class="col-md-3">


                                                <div class="form-group m-form__group">
                                                    <label for="exampleSelect1">
                                                        Student Subject<span class="text-danger"> *</span>
                                                    </label>
                                                    <select class="form-control m-input m-input--solid subjectId" name="subjectId[]"   >
                                                        <option value="" selected="" disabled="">Select Subject</option>
                                                        @foreach($subjects as $subject)
                                                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>


                                            </div>

                                            <div class="col-md-2">
                                                <div class="form-group m-form__group " >
                                                    <label for="exampleInputEmail1">
                                                        Full Mark<span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="text" name="fullMark[]"  class="form-control m-input m-input--solid fullMark"  >
                                                </div>
                                            </div>{{-- End col md 5--}}

                                            <div class="col-md-2">
                                                <div class="form-group m-form__group " >
                                                    <label for="exampleInputEmail1">
                                                        Pass Mark<span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="text" name="passMark[]"  class="form-control m-input m-input--solid passMark"  >
                                                </div>
                                            </div>{{-- End col md 5--}}

                                            <div class="col-md-3">
                                                <div class="form-group m-form__group " >
                                                    <label for="exampleInputEmail1">
                                                        Subjective Mark<span class="text-danger"> *</span>
                                                    </label>
                                                    <input type="text" name="subjectiveMark[]"  class="form-control m-input m-input--solid subjectiveMark"  >
                                                </div>
                                            </div>{{-- End col md 5--}}

                                            <div class="col-md-2" style="padding-top: 30px">
                                            <span class="btn btn-success addeventmore" style="border-radius: 6px">
                                                <i class="fa fa-plus-circle" > </i>
                                            </span>
                                            </div>

                                        </div>

                                    </div>{{-- end add_item                --}}

                                </div>

                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        {{--                                        <button class="btn btn-success" onclick="loadPage('{{route('api.storeFeeAmount')}}','post','Changing',1,10);">--}}
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.storeAssignSubject')}}','post','Changing',1,13);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary" onclick="loadPage('{{route('api.assignSubjectView')}}','GET','Changing',1,0)">
                                            Cancel
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--                        {{$allData->links()}}--}}
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div style="visibility: hidden">
    <div class="whole_extra_item_add" id="whole_extra_item_add">
        <div class="delete_whole_extra_item_add" id="delete_whole_extra_item_add">
            <div class="form-row">

                <div class="col-md-12"><br></div>

                <div class="col-md-3">


                    <div class="form-group m-form__group">
                        <label for="exampleSelect1">
                            Student Subject<span class="text-danger"> *</span>
                        </label>
                        <select class="form-control m-input m-input--solid subjectId" name="subjectId[]"   >
                            <option value="" selected="" disabled="">Select Class</option>
                            @foreach($subjects as $subject)
                                <option value="{{$subject->id}}">{{$subject->name}}</option>
                            @endforeach
                        </select>
                    </div>


                </div>

                <div class="col-md-2">
                    <div class="form-group m-form__group " >
                        <label for="exampleInputEmail1">
                            Full Mark<span class="text-danger"> *</span>
                        </label>
                        <input type="text" name="fullMark[]"  class="form-control m-input m-input--solid fullMark"  >
                    </div>
                </div>{{-- End col md 5--}}

                <div class="col-md-2">
                    <div class="form-group m-form__group " >
                        <label for="exampleInputEmail1">
                            Pass Mark<span class="text-danger"> *</span>
                        </label>
                        <input type="text" name="passMark[]"  class="form-control m-input m-input--solid passMark"  >
                    </div>
                </div>{{-- End col md 5--}}

                <div class="col-md-3">
                    <div class="form-group m-form__group " >
                        <label for="exampleInputEmail1">
                            Subjective Mark<span class="text-danger"> *</span>
                        </label>
                        <input type="text" name="subjectiveMark[]"  class="form-control m-input m-input--solid subjectiveMark"  >
                    </div>
                </div>{{-- End col md 5--}}

                <div class="col-md-2" style="padding-top: 30px">
                                            <span class="btn btn-success addeventmore" style="border-radius: 6px">
                                                <i class="fa fa-plus-circle" > </i>
                                            </span>
                                            <span class="btn btn-danger removeeventmore" style="border-radius: 6px">
                                                <i class="fa fa-minus-circle" > </i>
                                            </span>
                </div>


            </div>
        </div>
    </div>
</div>







