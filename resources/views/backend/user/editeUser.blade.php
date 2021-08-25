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
                    Update User
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

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group">
                                                <label for="exampleSelect1">
                                                    User Role
                                                </label>
                                                <select class="form-control m-input m-input--solid" name="usertype"  id="usertype" >
                                                    <option value="" selected="" disabled="">Select Role</option>
                                                    <option value="Admin" {{ ($editeData->usertype == "Admin" ? "selected":"") }}>Admin</option>
                                                    <option value="User" {{ ($editeData->usertype == "User" ? "selected":"") }}>User</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group " >
                                                <label for="exampleInputEmail1">
                                                    User Name <span class="text-danger"> *</span>
                                                </label>
                                                <input type="text" class="form-control m-input m-input--solid" name="name" id="name" placeholder="Enter name" value="{{$editeData->name}}">
                                            </div>
                                        </div>
                                        <div class="col-md-12"><br></div>
                                        <div class="col-md-6">
                                            <div class="form-group m-form__group ">
                                                <label for="exampleInputPassword1">
                                                    User Email <span class="text-danger"> *</span>
                                                </label>
                                                <input type="email" class="form-control m-input m-input--solid" name="email" id="email" placeholder="Enter Email" value="{{$editeData->email}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6">

                                        </div>
                                    </div>

                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <button class="btn btn-success" onclick="loadPage('{{route('api.userUpdate',$editeData->id)}}','POST','Changing',1,2);">
                                            Update
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



