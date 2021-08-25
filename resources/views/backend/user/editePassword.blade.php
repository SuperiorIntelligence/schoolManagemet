<style>
    .m-form , .m-form label
    {
        font-size: 1.5rem;
        font-family: Roboto
    }
    .btn{
        font-family: Roboto
    }
</style>
<div class="m-grid__item m-grid__item--fluid m-wrapper" >
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    Change Password
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
                        <div  id="m_datatable_latest_orders">

                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body" >

{{--                                    <div class="row">--}}

{{--                                        <div class="col-md-12">--}}
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    Current Password <span class="text-danger"> *</span>
                                                </label>
                                                <input type="password" class="form-control m-input m-input--solid" name="current_password" id="current_password" placeholder="Enter name">
                                            </div>
{{--                                        </div>--}}
{{--                                        <div class="col-md-12"><br></div>--}}
{{--                                        <div class="col-md-12">--}}
                                            <div class="form-group m-form__group ">
                                                <label for="exampleInputPassword1">
                                                    New Password <span class="text-danger"> *</span>
                                                </label>
                                                <input type="password" class="form-control m-input m-input--solid" name="password" id="password" placeholder="Enter Email">
                                            </div>
{{--                                        </div>--}}
{{--                                        <div class="col-md-12">--}}
                                            <div class="form-group m-form__group ">
                                                <label for="exampleInputPassword1">
                                                    Confirm Password <span class="text-danger"> *</span>
                                                </label>
                                                <input type="password" class="form-control m-input m-input--solid" name="password_confirmation" id="password_confirmation" placeholder="Enter password">
                                            </div>
{{--                                        </div>--}}
{{--                                    </div>--}}

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.passwordUpdate')}}','post','end',1,4);">
                                            Submit
                                        </button>
                                        <button type="reset" class="btn btn-secondary">
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



