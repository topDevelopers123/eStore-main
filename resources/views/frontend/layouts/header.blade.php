<style>
    .main_header nav {
        height: 6rem;
        width: 100%;
        background-color: #555;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        position: relative;
        z-index: 10;
        justify-content: space-around;
    }

    /*Styling logo*/
    .logo {
        padding: 1vh 1vw;
        text-align: center;
    }

    .logo img {
        height: 4rem;
        width: 5rem;
        padding-top: 20px;
    }

    /*Styling Links*/
    .nav-links {
        display: flex;
        list-style: none;
        padding: 0 0.7vw;
        justify-content: space-evenly;
        align-items: center;
        text-transform: uppercase;
    }

    .nav-links li a {
        text-decoration: none;
        margin: 0 0.7vw;
    }

    .nav-links li a:hover {
        color: #f7941d;
    }

    .nav-links li {
        position: relative;
        color: #fff;
    }

    .nav-links li a::before {
        content: "";
        display: block;
        height: 3px;
        width: 0%;
        background-color: #f7941d;
        position: absolute;
        transition: all ease-in-out 250ms;
        margin: 0 0 0 10%;
    }

    .nav-links li a:hover::before {
        width: 80%;
    }

    /*Styling Buttons*/
    .login-button {
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        margin-left: 2vw;
        font-size: 1rem;
        cursor: pointer;

    }

    .login-button:hover {
        color: #131418;
        background-color: #f2f5f7;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    .join-button {
        color: #131418;
        background-color: #f7941d;
        border: 1.5px solid #f7941d;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .join-button:hover {
        color: #f2f5f7;
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    /*Styling Hamburger Icon*/
    .hamburger div {
        width: 30px;
        height: 3px;
        background: #f2f5f7;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .hamburger {
        display: none;
    }

    /*Stying for small screens*/
    @media screen and (max-width: 991px) {
        .main_header nav {
            position: relative;
            z-index: 3;
        }

        .hamburger {
            display: block;
            position: absolute;
            cursor: pointer;
            right: 20%;
            top: 45%;
            transform: translate(-5%, -50%);
            z-index: 2;
            transition: all 0.7s ease;
            z-index: 99;
        }

        .nav-links {
            position: fixed;
            background: #131418;
            height: 100vh;
            width: 100%;
            flex-direction: column;
            clip-path: circle(50px at 90% -20%);
            -webkit-clip-path: circle(50px at 90% -10%);
            transition: all 1s ease-out;
            pointer-events: none;
            z-index: 9;
        }

        .nav-links.open {
            clip-path: circle(1000px at 90% -10%);
            -webkit-clip-path: circle(1000px at 90% -10%);
            pointer-events: all;
        }

        .nav-links li {
            opacity: 0;
        }

        .nav-links li:nth-child(1) {
            transition: all 0.5s ease 0.2s;
        }

        .nav-links li:nth-child(2) {
            transition: all 0.5s ease 0.4s;
        }

        .nav-links li:nth-child(3) {
            transition: all 0.5s ease 0.6s;
        }

        .nav-links li:nth-child(4) {
            transition: all 0.5s ease 0.7s;
        }

        .nav-links li:nth-child(5) {
            transition: all 0.5s ease 0.8s;
        }

        .nav-links li:nth-child(6) {
            transition: all 0.5s ease 0.9s;
            margin: 0;
        }

        .nav-links li:nth-child(7) {
            transition: all 0.5s ease 1s;
            margin: 0;
        }

        li.fade {
            opacity: 1;
        }
    }

    /*Animating Hamburger Icon on Click*/
    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle .line2 {
        transition: all 0.7s ease;
        width: 0;
    }

    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }
</style>
<header class="header shop">
    <!-- Topbar -->

    <!-- End Topbar -->
    <!-- <div class="middle-inner">
        <div class="container">
            <div class="row">
                <div class="col-lg-2 col-md-2 col-12"> -->
    <!-- Logo -->
    <!-- <div class="logo">
                        @php
                            $settings=DB::table('settings')->get();
                        @endphp                    
                        <a href="{{route('home')}}"><img src="@foreach($settings as $data) {{$data->logo}} @endforeach" alt="logo"></a>
                    </div> -->
    <!--/ End Logo -->
    <!-- Search Form -->
    <!-- <div class="search-top">
                        <div class="top-search"><a href="#0"><i class="ti-search"></i></a></div>
                         Search Form 
                        <div class="search-top">
                            <form class="search-form">
                                <input type="text" placeholder="Search here..." name="search">
                                <button value="search" type="submit"><i class="ti-search"></i></button>
                            </form>
                        </div>
                        / End Search Form -->
    <!-- </div> -->
    <!--/ End Search Form -->
    <!-- <div class="mobile-nav"></div>
                </div>
                
                <div class="col-lg-2 col-md-3 col-12"> -->

    <!-- </div>
            </div>
        </div>
    </div> -->
    <!-- Header Inner -->
    <!-- <div class="header-inner header-inner-div">
        <div class="container-fluid">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <div class="menu-area p-0 col-lg-12 col-md-12 col-sm-12  d-flex justify-content-center align-items-center ">
                            <nav class="navbar navbar-expand-lg w-100">
                                <div class="navbar-collapse  w-100 px-3">
                                    <div class="nav-inner nav_inner_div  d-flex align-items-center">
                                        <img src="https://www.seekpng.com/png/full/428-4289671_logo-e-commerce-good-e-commerce-logo.png" class="pl-3  bg-transparent m-0" style="width: 100px;" alt="">
                                        <ul class="nav main-menu menu navbar-nav ml-5">

                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a><span class="new">New</span></li>
                                           
                                            
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>

                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                        <div class="right-content w-100">
                                            <div class=" d-flex justify-content-center  align-content-center  ">
                                                <div class="search-bar-top ">
                                                    <div class="search-bar">

                                                        <form method="POST" action="{{route('product.search')}}">
                                                            @csrf
                                                            <input name="search" placeholder="Search Products Here....." type="search">
                                                            <button class="btnn" type="submit"><i class="ti-search"></i></button>
                                                        </form>
                                                    </div>
                                                </div>
                                                <div class="right-bar">
                                                    <div class="sinlge-bar shopping">
                                                        @php
                                                        $total_prod=0;
                                                        $total_amount=0;
                                                        @endphp
                                                        @if(session('wishlist'))
                                                        @foreach(session('wishlist') as $wishlist_items)
                                                        @php
                                                        $total_prod+=$wishlist_items['quantity'];
                                                        $total_amount+=$wishlist_items['amount'];
                                                        @endphp
                                                        @endforeach
                                                        @endif
                                                        <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count">{{Helper::wishlistCount()}}</span></a>
                                                        @auth
                                                        <div class="shopping-item">
                                                            <div class="dropdown-cart-header">
                                                                <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                                                <a href="{{route('wishlist')}}">View Wishlist</a>
                                                            </div>
                                                            <ul class="shopping-list">
                                                                {{-- {{Helper::getAllProductFromCart()}} --}}
                                                                @foreach(Helper::getAllProductFromWishlist() as $data)
                                                                @php
                                                                $photo=explode(',',$data->product['photo']);
                                                                @endphp
                                                                <li>
                                                                    <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                                    <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                                    <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                                    <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                                </li>
                                                                @endforeach
                                                            </ul>
                                                            <div class="bottom">
                                                                <div class="total">
                                                                    <span>Total</span>
                                                                    <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                                                </div>
                                                                <a href="{{route('cart')}}" class="btn animate">Cart</a>
                                                            </div>
                                                        </div>
                                                        @endauth
                                                    </div>
                                                    {{-- <div class="sinlge-bar">
                                                <a href="{{route('wishlist')}}" class="single-icon"><i class="fa                    fa-heart-o" aria-hidden="true"></i></a>
                                                </div> --}}
                                                <div class="sinlge-bar shopping">
                                                    <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                                                    @auth
                                                    <div class="shopping-item">
                                                        <div class="dropdown-cart-header">
                                                            <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                                                            <a href="{{route('cart')}}">View Cart</a>
                                                        </div>
                                                        <ul class="shopping-list">
                                                            {{-- {{Helper::getAllProductFromCart()}} --}}
                                                            @foreach(Helper::getAllProductFromCart() as $data)
                                                            @php
                                                            $photo=explode(',',$data->product['photo']);
                                                            @endphp
                                                            <li>
                                                                <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                                                <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                                                <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                                                <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                                            </li>
                                                            @endforeach
                                                        </ul>
                                                        <div class="bottom">
                                                            <div class="total">
                                                                <span>Total</span>
                                                                <span class="total-amount">${{number_format(Helper::totalCartPrice(),2)}}</span>
                                                            </div>
                                                            <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                                        </div>
                                                    </div>
                                                    @endauth
                                                </div>
                                            </div>

                                        </div>

                                    </div>

                                    <div>

                                    </div>
                            </nav>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--/ End Header Inner -->

    <!-- Header  -->
    <div class="main_header">
        <nav>
            <div class="logo"><a href="{{route('home')}}">
                    <img src="https://www.seekpng.com/png/full/428-4289671_logo-e-commerce-good-e-commerce-logo.png" class="pl-3  bg-transparent m-0" style="width: 100%;" alt="Mayavi Fashion Logo"></a>
            </div>
            <div class="hamburger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-links">
                <li><a href="{{route('home')}}">Home</a></li>
                <li><a href="{{route('product-grids')}}">Products</a></li>
                <li><a href="{{route('about-us')}}">About Us</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>

            </ul>
            <div class=" d-flex justify-content-center" style="align-items: center;">
                <div class="right-content w-100">
                    <div class=" d-flex justify-content-center  align-content-center">
                        <div class="search-bar-top ">
                            <div class="search-bar">

                                <form method="POST" action="{{route('product.search')}}">
                                    @csrf
                                    <input name="search" placeholder="Search Products Here....." type="search">
                                    <button class="btnn" type="submit"><i class="ti-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <div class="right-bar">
                            <div class="sinlge-bar shopping">
                                @php
                                $total_prod=0;
                                $total_amount=0;
                                @endphp
                                @if(session('wishlist'))
                                @foreach(session('wishlist') as $wishlist_items)
                                @php
                                $total_prod+=$wishlist_items['quantity'];
                                $total_amount+=$wishlist_items['amount'];
                                @endphp
                                @endforeach
                                @endif
                                <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o"></i> <span class="total-count">{{Helper::wishlistCount()}}</span></a>
                                @auth
                                <div class="shopping-item">
                                    <div class="dropdown-cart-header">
                                        <span>{{count(Helper::getAllProductFromWishlist())}} Items</span>
                                        <a href="{{route('wishlist')}}">View Wishlist</a>
                                    </div>
                                    <ul class="shopping-list">
                                        {{-- {{Helper::getAllProductFromCart()}} --}}
                                        @foreach(Helper::getAllProductFromWishlist() as $data)
                                        @php
                                        $photo=explode(',',$data->product['photo']);
                                        @endphp
                                        <li>
                                            <a href="{{route('wishlist-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                            <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                            <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                            <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                        </li>
                                        @endforeach
                                    </ul>
                                    <div class="bottom">
                                        <div class="total">
                                            <span>Total</span>
                                            <span class="total-amount">${{number_format(Helper::totalWishlistPrice(),2)}}</span>
                                        </div>
                                        <a href="{{route('cart')}}" class="btn animate">Cart</a>
                                    </div>
                                </div>
                                @endauth
                            </div>
                            {{-- <div class="sinlge-bar">
                                                <a href="{{route('wishlist')}}" class="single-icon"><i class="fa                    fa-heart-o" aria-hidden="true"></i></a>
                        </div> --}}
                        <div class="sinlge-bar shopping">
                            <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                            @auth
                            <div class="shopping-item">
                                <div class="dropdown-cart-header">
                                    <span>{{count(Helper::getAllProductFromCart())}} Items</span>
                                    <a href="{{route('cart')}}">View Cart</a>
                                </div>
                                <ul class="shopping-list">
                                    {{-- {{Helper::getAllProductFromCart()}} --}}
                                    @foreach(Helper::getAllProductFromCart() as $data)
                                    @php
                                    $photo=explode(',',$data->product['photo']);
                                    @endphp
                                    <li>
                                        <a href="{{route('cart-delete',$data->id)}}" class="remove" title="Remove this item"><i class="fa fa-remove"></i></a>
                                        <a class="cart-img" href="#"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></a>
                                        <h4><a href="{{route('product-detail',$data->product['slug'])}}" target="_blank">{{$data->product['title']}}</a></h4>
                                        <p class="quantity">{{$data->quantity}} x - <span class="amount">${{number_format($data->price,2)}}</span></p>
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="bottom">
                                    <div class="total">
                                        <span>Total</span>
                                        <span class="total-amount">${{number_format(Helper::totalCartPrice(),2)}}</span>
                                    </div>
                                    <a href="{{route('checkout')}}" class="btn animate">Checkout</a>
                                </div>
                            </div>
                            @endauth
                        </div>
                    </div>

                </div>

            </div>
        </nav>
    </div>


    <!--/ Start Category Section -->

    <div class="contaier-fluid main_catergories">
        <div class="container">


            <div class="row   justify-content-center position-relative">

                <div class="col-lg-6 col-md-12 col-12 d-flex category_specific_main_div justify-content-between ">

                    <div class="col-lg-4 col-md-4 col-4 w-100 d-flex justify-content-center  category_specific_div position-static ">
                        <div class="sub_categories sub_categories_1  text-center w-100 ">
                            <img src="https://t3.ftcdn.net/jpg/03/28/19/46/360_F_328194664_RKSHvMLgHphnD1nwQYb4QKcNeEApJmqa.jpg" class="category_image" alt="">
                            <h5>Men's</h5>

                        </div>

                        <div class="sub_Category_h1  col-lg-12 col-md-12 col-12 d-none ">
                            <div class="col-lg-4 col-md-4 col-sm-4  d-flex justify-content-center">
                                <div class="sub_mega  w-100">


                                    <h5>Topwear</h5>
                                    <li><a href="javascript:void">T-Shirts</a></li>
                                    <li><a href="javascript:void">Casual Shirts</a></li>
                                    <li><a href="javascript:void">Formal Shirts</li>
                                    <li><a href="javascript:void">Jacket</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Rain Coats</a></li>
                                    <li><a href="javascript:void">Coats</a></li>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                                <div class="sub_mega w-100">

                                    <h5>Footwear</h5>





                                    <li><a href="javascript:void">Play Shoes</a></li>
                                    <li><a href="javascript:void">Casual Shoes</a></li>
                                    <li><a href="javascript:void">Formal Shoes</a></li>
                                    <li><a href="javascript:void">Sneakers</a></li>
                                    <li><a href="javascript:void">Sandals & Floaters</a></li>
                                    <li><a href="javascript:void">Flip Flops</a></li>
                                    <li><a href="javascript:void">Socks</a></li>

                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                                <div class="sub_mega w-100">
                                    <h5>Bottomwear</h5>





                                    <li><a href="javascript:void">Casual Trousers</a></li>
                                    <li><a href="javascript:void">Formal Trousers</a></li>
                                    <li><a href="javascript:void">Shorts</a></li>
                                    <li><a href="javascript:void">Track Pants & Joggers</a></li>
                                    <li><a href="javascript:void">Jeans</a></li>

                                </div>
                            </div>




                        </div>
                    </div>



                    <div class="col-lg-4 col-md-4 col-4 w-100    d-flex justify-content-center  category_specific_div position-static">
                        <div class="sub_categories sub_categories_2 w-100  text-center">
                            <img src="https://st4.depositphotos.com/13193658/25036/i/450/depositphotos_250363326-stock-photo-smiling-attractive-woman-white-sweater.jpg" alt="">
                            <h5>Women's</h5>
                        </div>
                        <div class=" sub_Category_h2 col-lg-12 col-md-12 col-12 d-none ">
                            <div class="col-lg-4 col-md-4 col-sm- d-flex justify-content-center">
                                <div class="sub_mega w-100">
                                    <h5> Indian & Fusion Wear</h5>
                                    <li><a href="javascript:void">Kurta</a> </li>
                                    <li><a href="javascript:void">Sarees</a></li>
                                    <li><a href="javascript:void">Shirts & Palazzos</a></li>
                                    <li><a href="javascript:void">Jackets</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Rain Coats</a></li>
                                    <li><a href="javascript:void">Lahenga</a></li>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center ">
                                <div class="sub_mega w-100">
                                    <h5>Western Wear</h5>

                                    <li><a href="javascript:void">Dress</a> </li>
                                    <li><a href="javascript:void">Shirts</a></li>
                                    <li><a href="javascript:void">Playsuit</a></li>
                                    <li><a href="javascript:void">Jacket</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Jeans Coats</a> </li>
                                    <li><a href="javascript:void">Coats</a></li>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                                <div class="sub_mega w-100">

                                    <h5>Footwear</h5>
                                    <li><a href="javascript:void">Play Shoes</a></li>
                                    <li><a href="javascript:void">Casual Shoes</a></li>
                                    <li><a href="javascript:void">Formal Shirts</a></li>
                                    <li><a href="javascript:void">Heels</a></li>
                                    <li><a href="javascript:void">Boots</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Flats</a></li>
                                    <li><a href="javascript:void">Sports Shoes</a></li>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-4  d-flex justify-content-center  category_specific_div position-static">
                        <div class="sub_categories sub_categories_3  text-center">
                            <img src="https://img.freepik.com/premium-photo/small-4-year-old-boy-with-curly-hairstyle-stand-against-pastel-color-background_758367-99107.jpg" alt="">
                            <h5>Kid's</h5>
                        </div>
                        <div class="sub_Category_h3 col-lg-12 col-md-12 col-12 d-none  ">
                            <div class="col-lg-4 col-md-4 col-sm-4  d-flex justify-content-center">
                                <div class="sub_mega w-100">

                                    <h5> Boys Clothing</h5>
                                    <li><a href="javascript:void">T-Shirts</a></li>
                                    <li><a href="javascript:void">Casual Shirts</a></li>
                                    <li><a href="javascript:void">Formal Shirts</a></li>
                                    <li><a href="javascript:void">Jacket</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Rain Coats</a></li>
                                    <li><a href="javascript:void">Coats</a></li>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                                <div class="sub_mega w-100">

                                    <h5>Girls Clothing</h5>

                                    <li><a href="javascript:void">T-Shirts</a></li>
                                    <li><a href="javascript:void">Casual Shirts</a></li>
                                    <li><a href="javascript:void">Formal Shirts</a></li>
                                    <li><a href="javascript:void">Jacket</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Rain Coats</a></li>
                                    <li><a href="javascript:void">Coats</a></li>
                                </div>
                            </div>

                            <div class="col-lg-4 col-md-4 col-sm-4 d-flex justify-content-center">
                                <div class="sub_mega w-100">

                                    <h5>Footwear</h5>
                                    <li><a href="javascript:void">T-Shirts</a></li>
                                    <li><a href="javascript:void">Casual Shirts</a></li>
                                    <li><a href="javascript:void">Formal Shirts</a></li>
                                    <li><a href="javascript:void">Jacket</a></li>
                                    <li><a href="javascript:void">Sweaters</a></li>
                                    <li><a href="javascript:void">Suits</a></li>
                                    <li><a href="javascript:void">Rain Coats</a></li>
                                    <li><a href="javascript:void">Coats</a></li>
                                </div>
                            </div>

                        </div>
                    </div>



                </div>
            </div>
        </div>
</header>

<script>
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    hamburger.addEventListener('click', () => {
        //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });

        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });
</script>