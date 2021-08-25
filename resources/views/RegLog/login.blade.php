@extends("RegLog.mainRegLog")
@section("login")

    <div class="m-login__head">
        <h3 class="m-login__title">ورود به پنل مدیریت</h3>
    </div>
    <form class="m-login__form m-form" action="{{route('api.login')}}" method="post">
        @csrf

        <div class="form-group m-form__group">
            <input class="form-control m-input" id="email" name="email" type="email" placeholder="ایمیل"  autocomplete="off" value="{{old("email")}}">
        </div>
        <div class="form-group m-form__group">
            <input class="form-control m-input" name="password" id="password" type="password" placeholder="کلمه عبور" value="{{old("password")}}" >
        </div>

        <div class="m-login__form-action">
            <input type="submit"  class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn" value="ورود" >
        </div>

    </form>


@endsection
