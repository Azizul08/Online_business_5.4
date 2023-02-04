@extends('frontend.master')

@section('title')
    Shipping
@endsection

@section('mainContent')

<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Shipping</li>
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
	<!-- about -->
		<div class="privacy about">
			<h3>Shipping</h3>
			
			<div class="checkout-left">	
				
				<div class="col-md-8 address_form_agile">
					  <h4>Add a new Details</h4>
				{!! Form::open(['url'=>'/checkout/save-shipping', 'method'=>'POST', 'name'=>'shippingForm']) !!}
									<section class="creditly-wrapper wthree, w3_agileits_wrapper">
										<div class="information-wrapper">
											<div class="first-row form-group">
												<div class="controls">
													<label class="control-label">Full name: </label>
													<input class="billing-address-name form-control" type="text" name="fullName" value="{{ $customerById->firstName.' '.$customerById->lastName}}" placeholder="Full Name">
												</div>
												<div class="w3_agileits_card_number_grids">
													<div class="w3_agileits_card_number_grid_left">
														<div class="controls">
															<label class="control-label">Email Address:</label>
														    <input type="email" name="emailAddress" value="{{ $customerById->emailAddress }}" class="form-control" placeholder="Email Address">
														</div>
													</div>
													<div class="w3_agileits_card_number_grid_right">
														<div class="controls">
															<label class="control-label">Phone Number: </label>
														 <input type="number" name="phoneNumber" value="{{ $customerById->phoneNumber }}" class="form-control" placeholder="Enter Phone Number">
														</div>
													</div>
													<div class="clear"> </div>
												</div>
												<div class="controls">
													<label class="control-label">Address: </label>
												 <textarea name="address" class="form-control" placeholder="Enter Address">{{ $customerById->address }}</textarea>
												</div>
											</div>
											<button class="submit check_out">Delivery to this Address</button>
										</div>
									</section>
								 {!! Form::close() !!}
							<!-- <div class="checkout-right-basket">
				        	 	<a href="{{url('/checkout/payment')}}">Make a Payment <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a>
			      			</div> -->
					</div>
			
				<div class="clearfix"> </div>
				
			</div>

		</div>
<!-- //about -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->
@endsection