<style>
    #test {
        width: 80px;
        height: 80px;
        position: absolute;
        top: 70px;
        left: 50%;
        transform: translateX(-50%);
        clip-path: circle();
    }
    #file {
        display: none;
    }
    #avatar{
        width: 80px;
        height: 80px;

    }
</style>
{{--<script>--}}
{{--    alert(1)--}}
{{--    const input = document.querySelector('#file');--}}
{{--    alert(2)--}}
{{--    console.log(input)--}}
{{--    alert(3)--}}
{{--    input.addEventListener('onchange', (e) => {--}}
{{--        console.log(e.files[0])--}}
{{--    })--}}
{{--</script>--}}
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title ">
                    My Profile
                </h3>
            </div>
            <div>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->
    <div class="m-content">
        <div class="row">
            <div class="col-xl-3 col-lg-4">
                <div class="m-portlet m-portlet--full-height  ">
                    <div class="m-portlet__body">
                        <div class="m-card-profile">
                            <div class="m-card-profile__title m--hide">
                                Your Profile
                            </div>
                            <div class="m-card-profile__pic">
                                <div class="m-card-profile__pic-wrapper "  >
                                    <input type="hidden" name="oldImage" id="oldImage" value="{{$userWorking->profile_photo}}">
                                    <label id="test" for="file">
                                    </label>
                                    <input type="file" name="file" id="file" onchange="loadFile(event)" accept=".jpg, .jpeg, .png , .gif" multiple>
                                    <img id="avatar" src="{{!empty($userWorking->profile_photo) ? url($userWorking->profile_photo) : url('image\picProfile\no_image.jpg')}}" alt=""/>
{{--                                    <button   style="border-radius: 50px; background-image: url('{{asset('assets/app/media/img/users/user4.jpg')}}');width: 84px;height: 83px;"  id="img-result" onclick="picProfile()" ></button>--}}

                                </div>

                            </div>
                            <div class="m-card-profile__details">
                                                <span class="m-card-profile__name">
													{{$userWorking->name}}
												</span>
                                <a href="#" class="m-card-profile__email m-link">
                                    {{$userWorking->email}}
                                </a>
                            </div>
                        </div>

                        <div class="m-portlet__body-separator"></div>

                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="m-portlet m-portlet--full-height m-portlet--tabs  ">

                    <div class="tab-content">
                        <div class="tab-pane active" id="m_user_profile_tab_1">
                            <div class="m-form m-form--fit m-form--label-align-right" onsubmit="submit()"  >
                                @csrf
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group m--margin-top-10 m--hide">
                                        <div class="alert m-alert m-alert--default" role="alert">
                                            The example form below demonstrates common HTML form elements that receive updated styles from Bootstrap with additional classes.
                                        </div>
                                    </div>

                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            User Role
                                        </label>
                                        <div class="col-7">
                                            <select class="form-control m-input m-input--solid" name="usertype"  id="usertype" >
                                                <option value="" selected="" disabled="">Select Role</option>
                                                <option value="Admin" {{ ($userWorking->usertype == "Admin" ? "selected":"") }}>Admin</option>
                                                <option value="User" {{ ($userWorking->usertype == "User" ? "selected":"") }}>User</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            Name
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" name="name" id="name" type="text" value="{{$userWorking->name}}">
                                        </div>
                                    </div>
                                    <div class="form-group m-form__group row">
                                        <label for="example-text-input" class="col-2 col-form-label">
                                            email
                                        </label>
                                        <div class="col-7">
                                            <input class="form-control m-input" name="email" id="email" type="text" value="{{$userWorking->email}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="m-portlet__foot m-portlet__foot--fit">
                                    <div class="m-form__actions">
                                        <div class="row">
                                            <div class="col-2"></div>
                                            <div class="col-7">
                                                <button type="submit" class="btn btn-accent m-btn m-btn--air m-btn--custom" onclick="loadPage('{{route('api.updateProfile',$userWorking->id)}}','POST','Changing',1,3);">
                                                    Save changes
                                                </button>
                                                &nbsp;&nbsp;
                                                <button type="reset" class="btn btn-secondary m-btn m-btn--air m-btn--custom" onclick="loadPage('{{route('api.profileView')}}','GET','Changing',1,0)">
                                                    Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane " id="m_user_profile_tab_2"></div>
                        <div class="tab-pane " id="m_user_profile_tab_3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
