@extends('frontend.master')

@section('title')
    All Products
@endsection

@section('mainContent')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Products</li>
			</ul>
		</div>
	</div>
<!-- //products-breadcrumb -->
<!-- banner -->
	<div class="banner">
		<div class="w3l_banner_nav_left">
			<nav class="navbar nav_bottom">
			 <!-- Brand and toggle get grouped for better mobile display -->
			  <div class="navbar-header nav_2">
				  <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
			   </div> 
			   <!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
					<ul class="nav navbar-nav nav_1">
						<li><a href="{{url('/products')}}">Branded Foods</a></li>
						<li><a href="{{url('/allproducts')}}">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="{{url('/allproducts')}}">Vegetables</a></li>
										<li><a href="{{url('/allproducts')}}">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="{{url('/allproducts')}}">Kitchen</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="{{url('/allproducts')}}">Soft Drinks</a></li>
										<li><a href="{{url('/allproducts')}}">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="{{url('/allproducts')}}">Frozen Snacks</a></li>
										<li><a href="{{url('/allproducts')}}">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="{{url('/bread')}}">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
			<!-- <div class="w3l_banner_nav_right_banner3">
				<h3>Best Deals For New Products<span class="blink_me"></span></h3>
			</div> -->
			<!-- <div class="w3l_banner_nav_right_banner3_btm">
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="{{ asset('frontend/images/13.jpg')}}" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Utensils</h4>
					<ol>
						<li>sunt in culpa qui officia</li>
						<li>commodo consequat</li>
						<li>sed do eiusmod tempor incididunt</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="{{ asset('frontend/images/14.jpg')}}" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Hair Care</h4>
					<ol>
						<li>enim ipsam voluptatem officia</li>
						<li>tempora incidunt ut labore et</li>
						<li>vel eum iure reprehenderit</li>
					</ol>
				</div>
				<div class="col-md-4 w3l_banner_nav_right_banner3_btml">
					<div class="view view-tenth">
						<img src="{{ asset('frontend/images/15.jpg')}}" alt=" " class="img-responsive" />
						<div class="mask">
							<h4>Grocery Store</h4>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt.</p>
						</div>
					</div>
					<h4>Cookies</h4>
					<ol>
						<li>dolorem eum fugiat voluptas</li>
						<li>ut aliquid ex ea commodi</li>
						<li>magnam aliquam quaerat</li>
					</ol>
				</div>
				<div class="clearfix"> </div>
			</div> -->
			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>Popular Brands</h3>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>food</h6>
					@foreach($publishedProducts as $key=>$publishedProduct)
					@if($key<8)
					<div class="col-md-3 w3ls_w3l_banner_left">
						
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{ asset('frontend/images/offer.png')}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{url('/product-details/'.$publishedProduct->id)}}"><img src="{{ asset($publishedProduct->productImage) }}" alt=" " class="img-responsive" /></a>
											<p>{{ $publishedProduct->productName }}</p>
											<h4>BDT {{ $publishedProduct->productPrice }} <span>BDT {{ $publishedProduct->productPriceOld }}</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="{{url('/product-details/'.$publishedProduct->id)}}" method="get">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>	
					</div>
					@endif
					@endforeach
					<div class="clearfix"></div>

				</div>
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6>vegetables & fruits</h6>
					@foreach($publishedProducts as $key=>$publishedProduct)
					@if($key>7)
					<div class="col-md-3 w3ls_w3l_banner_left">
						
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid">
							<div class="agile_top_brand_left_grid_pos">
								<img src="{{ asset('frontend/images/offer.png')}}" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="{{url('/product-details/'.$publishedProduct->id)}}"><img src="{{ asset($publishedProduct->productImage) }}" alt=" " class="img-responsive" /></a>
											<p>{{ $publishedProduct->productName }}</p>
											<h4>BDT {{ $publishedProduct->productPrice }} <span>BDT {{ $publishedProduct->productPriceOld }}</span></h4>
										</div>
										<div class="snipcart-details">
											<form action="{{url('/product-details/'.$publishedProduct->id)}}" method="get">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="knorr instant soup" />
													<input type="hidden" name="amount" value="3.00" />
													<input type="hidden" name="discount_amount" value="1.00" />
													<input type="hidden" name="currency_code" value="USD" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Add to cart" class="button" />
												</fieldset>
											</form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>	
					</div>
					@endif
					@endforeach
					
					<div class="clearfix"> </div>
				</div>
				
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

@endsection