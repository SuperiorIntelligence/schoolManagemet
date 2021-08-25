<!DOCTYPE html>
<!--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en" >
<!-- begin::Head -->
<head>

    <meta charset="utf-8" />
    <title>
        Metronic | Dashboard
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
{{--    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>--}}
{{--    <script>--}}
{{--        WebFont.load({--}}
{{--            google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},--}}
{{--            active: function() {--}}
{{--                sessionStorage.fonts = true;--}}
{{--            }--}}
{{--        });--}}
{{--    </script>--}}

    <!--end::Web font -->
    <!--begin::Base Styles -->
    <!--begin::Page Vendors -->
    <link href="{{asset('backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors -->
    <link href="{{asset('backend/assets/vendors/base/vendors.bundle.css')}}" rel='stylesheet' type="text/css" />
    <link href="{{asset('backend/assets/demo/demo12/base/style.bundle.css')}}" rel='stylesheet' type="text/css" />
    <!--end::Base Styles -->


    <link rel="shortcut icon" href="{{asset('backend/assets/demo/demo12/media/img/logo/favicon.ico')}}" />
</head>
<!-- end::Head -->
<!-- end::Body -->
<body  class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default" >
<!-- begin:: Page -->
<div class="m-grid m-grid--hor m-grid--root m-page" id="end">

</div>
<!-- end:: Page -->
<!-- begin::Quick Sidebar -->

<!-- end::Quick Sidebar -->
<!-- begin::Scroll Top -->
<div id="m_scroll_top" class="m-scroll-top">
    <i class="la la-arrow-up"></i>
</div>

<!-- end::Scroll Top -->		    <!-- begin::Quick Nav -->

<!-- begin::Quick Nav -->
<!--begin::Base Scripts -->

<script src="{{asset('jquery.js')}}" type="text/javascript"></script>

<script src="{{asset('backend/assets/vendors/base/vendors.bundle.js')}}" type="text/javascript"></script>
<script src="{{asset('backend/assets/demo/demo12/base/scripts.bundle.js')}}" type="text/javascript"></script>
<!--end::Base Scripts -->
<!--begin::Page Vendors -->
<script src="{{asset('backend/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js')}}" type="text/javascript"></script>
<!--end::Page Vendor    s -->
<!--begin::Page Snippets -->
<script src="{{asset('backend/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
<!--end::Page Snippets -->


<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js" integrity="sha512-bZS47S7sPOxkjU/4Bt0zrhEtWx0y0CRkhEp8IckzK+ltifIIE9EMIMTuT/mEzoIMewUINruDBIR/jJnbguonqQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="{{asset('helper.js')}}" type="text/javascript"></script>

<script type="text/javascript">


    @if($url and $method and $location)

    loadPage('{{$url}}','{{$method}}','{{$location}}',{{$kind}});

    @endif


</script>



<!--begin::Page Snippets -->
<script src="{{asset('backend/assets/app/js/dashboard.js')}}" type="text/javascript"></script>
<!--end::Page Snippets -->





</body>
<!-- end::Body -->
</html>
