<!-- Meta Tag -->
@yield('meta')
<!-- Title Tag  -->
<title>@yield('title')</title>
<!-- Favicon -->
<link rel="icon" type="image/png" href="images/favicon.png">
<!-- Web Font -->
<link href="https://fonts.googleapis.com/css?family=Poppins:200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap" rel="stylesheet">

<!-- StyleSheet -->
<link rel="manifest" href="/manifest.json">
<!-- Bootstrap -->
<link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
<!-- Magnific Popup -->
<link rel="stylesheet" href="{{asset('frontend/css/magnific-popup.min.css')}}">
<!-- Font Awesome -->
<link rel="stylesheet" href="{{asset('frontend/css/font-awesome.css')}}">
<!-- Fancybox -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery.fancybox.min.css')}}">
<!-- Themify Icons -->
<link rel="stylesheet" href="{{asset('frontend/css/themify-icons.css')}}">
<!-- Nice Select CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/niceselect.css')}}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
<!-- Flex Slider CSS -->
<link rel="stylesheet" href="{{asset('frontend/css/flex-slider.min.css')}}">
<!-- Owl Carousel -->
<link rel="stylesheet" href="{{asset('frontend/css/owl-carousel.css')}}">
<!-- Slicknav -->
<link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}">
<!-- Jquery Ui -->
<link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.css')}}">

<!-- Eshop StyleSheet -->
<link rel="stylesheet" href="{{asset('frontend/css/reset.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">
<link rel="stylesheet" href="{{asset('frontend/css/responsive.css')}}">
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
<style>
    /* Multilevel dropdown */
    .dropdown-submenu {
    position: relative;
    }

    .dropdown-submenu>a:after {
    content: "\f0da";
    float: right;
    border: none;
    font-family: 'FontAwesome';
    }

    .dropdown-submenu>.dropdown-menu {
    top: 0;
    left: 100%;
    margin-top: 0px;
    margin-left: 0px;
    }
    .product-img{
        width:100%;
        height:100%;
        
        
    }
    .product-img a .img_section{
        width: 100% !important;
        height: 250px;
        object-fit: cover;
        border-radius: 8px;

    }
   
    .product-content{
        background-color: rgb(230, 250, 250);
    }
    
    .single_product_div{
        transition: all 0.5s ease;
    }

    .single_product_div:hover{
        box-shadow: rgba(50, 50, 93, 0.25) 0px 30px 60px -12px, rgba(0, 0, 0, 0.3) 0px 18px 36px -18px;
    }
    .tab_content_mini{
        border-radius: 8px;
    }
    .tab_content_mini:hover{
        border-radius: 8px;
    }
    .header-inner-div{
        background-color: #67595E !important;
    }
    .topbar{
        background-color :#EED6D3 !important;
    }
    .add_to_cart_btn{
        background-color: #F7941D !important;
        padding: 10px 20px !important;
        text-align: center !important;
        border-radius: 8px !important;
        color: #fff !important;

    }
    .add_to_cart_btn:hover{
        background-color: transparent !important;
        color: #F7941D !important;
    }
    .single_product_div{
        background-color: #F6F7FB !important;
    }
    .main_catergories{
        background-color: floralwhite;
    }
    .category_specific_div .sub_categories {
        padding: 15px 0px;
    }
    .category_specific_div .sub_categories h5{
        margin-top: 10px;
    }

    
    .category_specific_div img{
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }
  

    /*
</style>
@stack('styles')
