@extends('frontend.layouts.master')

@section('title','E-SHOP || About Us')

@section('main-content')

<!-- Breadcrumbs -->
<div class="breadcrumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="bread-inner">
					<ul class="bread-list">
						<li><a href="index1.html">Home<i class="ti-arrow-right"></i></a></li>
						<li class="active"><a href="blog-single.html">About Us</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- End Breadcrumbs -->

<!-- About Us -->
<section class="about-us section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="about-content">
					@php
					$settings=DB::table('settings')->get();
					@endphp
					<h3>Welcome To <span>MayaviFashion</span></h3>
					<p>@foreach($settings as $data) {{$data->description}} @endforeach</p>
					<div class="button">
						<!-- <a href="{{route('blog')}}" class="btn">Our Blog</a> -->
						<a href="{{route('contact')}}" class="btn primary">Contact Us</a>
					</div>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="about-img ">

					<!-- IMAGE GALLERY  -->
					<div class="gallery">
						<div class="container">
							<div class="row">
								<div class="col-md-4">
									<div class="image">
										<img src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.webp?b=1&s=612x612&w=0&k=20&c=81f5HaMtoPNUrdfa4hnS8NcwEgD9tH2nnTUBu25Msug=" alt="">
										<img class="mt-4" src="https://wallpapers.com/images/hd/portrait-photography-1080-x-1920-background-fdzq7m343huzqzo1.jpg" alt="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="image">
										<img src="https://mrwallpaper.com/images/hd/hd-nature-landscape-portrait-wwvfe5ydt4y38zk3.jpg" alt="">
										<img class="mt-4" src="https://media.istockphoto.com/id/517188688/photo/mountain-landscape.webp?b=1&s=612x612&w=0&k=20&c=81f5HaMtoPNUrdfa4hnS8NcwEgD9tH2nnTUBu25Msug=" alt="">
									</div>
								</div>
								<div class="col-md-4">
									<div class="image">
										<img src="https://cdn.pixabay.com/photo/2012/08/27/14/19/mountains-55067_640.png" alt="">
										<img class="mt-4" src="https://wallpapers.com/images/hd/portrait-photography-1080-x-1920-background-fdzq7m343huzqzo1.jpg" alt="">
									</div>
								</div>

							</div>
						</div>
					</div>
					<!-- IMAGE GALLERY  -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- End About Us -->

<!-- What We Do  -->
<section class="wwd section">
	<div class="container">
		<div class="heading text-center">
			<h2>What We Do</h2>
			<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore, nisi eos! Exercitationem laboriosam hic aliquid.</p>
		</div>

		<div class="row">
			<div class="col-md-3">
				<div class="wwd_box">
					<div class="icon">

					</div>
					<div class="title">
						<h4>Donation</h4>
					</div>
					<div class="desc">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid. Eaque fugiat laborum ducimus, saepe aut debitis ad magnam, nulla ex aliquid incidunt veniam tenetur repellendus laudantium? Tempora, sapiente animi!</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wwd_box">
					<div class="icon">

					</div>
					<div class="title">
						<h4>Donation</h4>
					</div>
					<div class="desc">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid. Eaque fugiat laborum ducimus, saepe aut debitis ad magnam, nulla ex aliquid incidunt veniam tenetur repellendus laudantium? Tempora, sapiente animi!</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wwd_box">
					<div class="icon">

					</div>
					<div class="title">
						<h4>Donation</h4>
					</div>
					<div class="desc">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid. Eaque fugiat laborum ducimus, saepe aut debitis ad magnam, nulla ex aliquid incidunt veniam tenetur repellendus laudantium? Tempora, sapiente animi!</p>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<div class="wwd_box">
					<div class="icon">

					</div>
					<div class="title">
						<h4>Donation</h4>
					</div>
					<div class="desc">
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit, aliquid. Eaque fugiat laborum ducimus, saepe aut debitis ad magnam, nulla ex aliquid incidunt veniam tenetur repellendus laudantium? Tempora, sapiente animi!</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- What We Do  -->


<!-- Start Shop Services Area -->
<section class="shop-services section home">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-rocket"></i>
					<h4>Free shiping</h4>
					<p>Orders over $100</p>
				</div>
				<!-- End Single Service -->
			</div>
<<<<<<< HEAD
	</section>
	<!-- End About Us -->


	
	<!-- Start Shop Services Area -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>Free shiping</h4>
						<p>Orders over $100</p>
					</div>
					<!-- End Single Service -->
=======
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-reload"></i>
					<h4>Free Return</h4>
					<p>Within 30 days returns</p>
>>>>>>> c5be3f5ef9326624a0dfd82ba5da4942cbe35c23
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-lock"></i>
					<h4>Sucure Payment</h4>
					<p>100% secure payment</p>
				</div>
				<!-- End Single Service -->
			</div>
			<div class="col-lg-3 col-md-6 col-12">
				<!-- Start Single Service -->
				<div class="single-service">
					<i class="ti-tag"></i>
					<h4>Best Peice</h4>
					<p>Guaranteed price</p>
				</div>
				<!-- End Single Service -->
			</div>
		</div>
	</div>
</section>
<!-- End Shop Services Area -->


@include('frontend.layouts.newsletter')
@endsection