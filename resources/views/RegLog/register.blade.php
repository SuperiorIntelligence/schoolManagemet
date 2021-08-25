@extends("RegLog.mainRegLog")
@section("register")

    <div class="m-login__head">
        <h3 class="m-login__title">ثبت نام</h3>
        <div class="m-login__desc"> اطلاعات مورد نیاز را وارد کنید:</div>
    </div>
    <form class="m-login__form m-form" action="{{route('api.register')}}" method="post">
        @csrf
        <div class="form-group m-form__group">
            <input class="form-control m-input" id="name" name="name" type="text" placeholder="نام" >
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" id="email" name="email" type="text" placeholder="ایمیل"  autocomplete="off">
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" name="password" id="password" type="password" placeholder="کلمه عبور" >
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input m-login__form-input--last" name="password_confirmation" id="password_confirmation" type="password" placeholder="تکرار کلمه عبور">
        </div>
        <div class="m-login__form-action">
            <input type="submit"  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" value="ثبت نام" >&nbsp;&nbsp;
            <input type="submit"  class="btn btn-outline-focus m-btn m-btn--pill m-btn--custom m-login__btn" value="لغو">
        </div>

    </form>

@endsection
