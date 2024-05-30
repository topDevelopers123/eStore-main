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
    <div class="header-inner header-inner-div">
        <div class="container-fluid">
            <div class="cat-nav-head">
                <div class="row">
                    <div class="col-lg-12 col-12 p-0 d-flex justify-content-between align-items-center">
                        <div class="menu-area p-0 col-lg-12 col-md-12 col-sm-12  d-flex justify-content-center align-items-center ">
                            <!-- Main Menu -->
                            <nav class="navbar navbar-expand-lg w-100">
                                <div class="navbar-collapse border border-dark w-100 px-3">
                                    <div class="nav-inner nav_inner_div">
                                        <ul class="nav main-menu menu navbar-nav ">

                                            <li class="{{Request::path()=='home' ? 'active' : ''}}"><a href="{{route('home')}}">Home</a></li>
                                            <li class="@if(Request::path()=='product-grids'||Request::path()=='product-lists')  active  @endif"><a href="{{route('product-grids')}}">Products</a><span class="new">New</span></li>
                                            {{Helper::getHeaderCategory()}}
                                            <!-- <li class="{{Request::path()=='blog' ? 'active' : ''}}"><a href="{{route('blog')}}">Blog</a></li>									 -->
                                            <li class="{{Request::path()=='about-us' ? 'active' : ''}}"><a href="{{route('about-us')}}">About Us</a></li>

                                            <li class="{{Request::path()=='contact' ? 'active' : ''}}"><a href="{{route('contact')}}">Contact Us</a></li>
                                        </ul>
                                    </div>
                                    <div class=" d-flex justify-content-center">
                                        <!-- Top Right -->
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
                                                    <!-- Search Form -->
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
                                                        <!-- Shopping Item -->
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
                                                        <!--/ End Shopping Item -->
                                                    </div>
                                                    {{-- <div class="sinlge-bar">
                            <a href="{{route('wishlist')}}" class="single-icon"><i class="fa fa-heart-o" aria-hidden="true"></i></a>
                                                </div> --}}
                                                <div class="sinlge-bar shopping">
                                                    <a href="{{route('cart')}}" class="single-icon"><i class="ti-bag"></i> <span class="total-count">{{Helper::cartCount()}}</span></a>
                                                    <!-- Shopping Item -->
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
                                                    <!--/ End Shopping Item -->
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
    </div>
    <!--/ End Header Inner -->


    <!--/ Start Category Section -->

    <div class="contaier-fluid main_catergories">
        <div class="container">


            <div class="row   justify-content-center position-relative">

                <div class="col-lg-6 col-md-12 col-12 d-flex category_specific_main_div justify-content-between border border-dark">

                    <div class="col-lg-4 col-md-4 col-4 w-100 d-flex justify-content-center  category_specific_div position-static ">
                        <div class="sub_categories sub_categories_1  text-center w-100 ">
                            <img src="https://t3.ftcdn.net/jpg/03/28/19/46/360_F_328194664_RKSHvMLgHphnD1nwQYb4QKcNeEApJmqa.jpg" class="category_image" alt="">
                            <h5>Men's</h5>

                        </div>

                        <div class="sub_Category_h1  col-lg-12 col-md-12 col-12 d-none  border border-dark">

                                <div class="sub_mega col-lg-4 col-md-4 col-sm-4">
                                    <h1> Topwear</h1>
                                    <li>T-Shirts</li>
                                    <li>Casual Shirts</li>
                                    <li>Formal Shirts</li>
                                    <li>Jacket</li>
                                    <li>Sweaters</li>
                                    <li>Suits</li>
                                    <li>Rain Coats</li>
                                    <li>Coats</li>
                                </div>
                                
                                <div class="sub_mega col-lg-4 col-md-4 col-sm-4">
                                <h1>Bottomwear</h1>

                                <li>T-Shirts</li>
                                <li>Casual Shirts</li>
                                <li>Formal Shirts</li>
                                <li>Jacket</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Rain Coats</li>
                                <li>Coats</li>
                                </div>

                                <div class="sub_mega col-lg-4 col-md-4 col-sm-4">

                                <h1>Footwear</h1>
                                <li>Play Shoes</li>
                                <li>Casual Shoes</li>
                                <li>Formal Shirts</li>
                                <li>Heels</li>
                                <li>Boots</li>
                                <li>Suits</li>
                                <li>Flats</li>
                                <li>Sports Shoes</li>
                                </div>


                        </div>
                    </div>


           
                    <div class="col-lg-4 col-md-4 col-4 w-100    d-flex justify-content-center  category_specific_div position-static">
                        <div class="sub_categories sub_categories_2 w-100  text-center">
                            <img src="https://st4.depositphotos.com/13193658/25036/i/450/depositphotos_250363326-stock-photo-smiling-attractive-woman-white-sweater.jpg" alt="">
                            <h5>Women's</h5>
                        </div>
                        <div class=" sub_Category_h2 col-lg-12 col-md-12 col-12 d-none  border border-dark">

                         
                                <h1> Indian & Fusion Wear</h1>
                                <li>Kurta </li>
                                <li>Sarees</li>
                                <li>Shirts & Palazzos</li>
                                <li>Jackets</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Rain Coats</li>
                                <li>Lahenga</li>

                                <h1>Western Wear</h1>

                                <li>Dress </li>
                                <li>Shirts</li>
                                <li>Playsuit</li>
                                <li>Jacket</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Jeans Coats</li>
                                <li>Coats</li>

                                <h1>Footwear</h1>
                                <li>Play Shoes</li>
                                <li>Casual Shoes</li>
                                <li>Formal Shirts</li>
                                <li>Heels</li>
                                <li>Boots</li>
                                <li>Suits</li>
                                <li>Flats</li>
                                <li>Sports Shoes</li>

               

                        </div>
                    </div>


                    <div class="col-lg-4 col-md-4 col-4  d-flex justify-content-center  category_specific_div position-static">
                        <div class="sub_categories sub_categories_3  text-center">
                            <img src="https://img.freepik.com/premium-photo/small-4-year-old-boy-with-curly-hairstyle-stand-against-pastel-color-background_758367-99107.jpg" alt="">
                            <h5>Kid's</h5>
                        </div>
                        <div class="sub_Category_h3 col-lg-12 col-md-12 col-12 d-none  border border-dark">

                    

                                <h1> Boys Clothing</h1>
                                <li>T-Shirts</li>
                                <li>Casual Shirts</li>
                                <li>Formal Shirts</li>
                                <li>Jacket</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Rain Coats</li>
                                <li>Coats</li>

                                <h1>Girls Clothing</h1>

                                <li>T-Shirts</li>
                                <li>Casual Shirts</li>
                                <li>Formal Shirts</li>
                                <li>Jacket</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Rain Coats</li>
                                <li>Coats</li>

                                <h1>Footwear</h1>
                                <li>T-Shirts</li>
                                <li>Casual Shirts</li>
                                <li>Formal Shirts</li>
                                <li>Jacket</li>
                                <li>Sweaters</li>
                                <li>Suits</li>
                                <li>Rain Coats</li>
                                <li>Coats</li>

                        

                        </div>
                    </div>


          
            </div>
        </div>
    </div>
</header>