@extends('frontend.master')

@section('title')
    Show Cart
@endsection

@section('mainContent')

<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Checkout</li>
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
			<h3>Chec<span>kout</span></h3>
			
	      <div class="checkout-right">
					<h4>Your shopping cart contains: </h4>
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>Remove</th>
	                        <th>Product Name</th>
	                        <th>Quantity</th>
	                        <th>Price</th>
	                        <th>Item Total</th>
						</tr>
					</thead>
					<?php $total = 0 ?>
                @foreach($cartProducts as $cartProduct)
                <tr class="rem1">
                    <td class="invert-closeb">
                        <div class="rem">
                            <a href="{{ url('/cart/delete/'.$cartProduct->rowId) }}" class="btn btn-danger">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </div>
                    </td>
                    <td class="invert">{{ $cartProduct->name }}</td>
                    <td class="invert">
                        <!-- <div class="quantity">                           
                            <form>
                                <div class="input-group">
                                    <input type="number" name="qty" class="form-control" value="{{ $cartProduct->qty }}"/>
                                    <span class="input-group-btn">
                                        <button type="submit" name="btn" class="btn btn-primary">
                                            <span class="glyphicon glyphicon-upload"></span>
                                        </button>
                                    </span>
                                </div>
                            </form>
                        </div> -->
                        {{ $cartProduct->qty }}
                    </td>

                    <td class="invert">TK. {{ $cartProduct->price }}</td>
                    <td class="invert">TK. {{ $itemTotal = $cartProduct->price*$cartProduct->qty }}</td>
                </tr>
                <?php $total = $total + $itemTotal ?>
                @endforeach
            	</table>
			</div>
			<div class="checkout-left">
				<div class="checkout-right-basket animated wow slideInRight" data-wow-delay=".5s">
	                <a href="{{ url('/products') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Back To Shopping</a>                
	                <?php
	                // $customerId = Session::get('customerId');

	                // $shippingId = Session::get('shippingId');
	                // if ($customerId != null && $shippingId != null) {
	                // dd($cartProduct->name);
	                 // $productname=Session::get($cartProducts->name);

	                if ($total != 0) { ?>
	                    <a href="{{ url('/checkout/shipping') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>                
	                <?php } else { ?>
	                    <a href="{{ url('/products') }}"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Checkout</a>                
	                <?php } ?>
	            </div>
	            <div class="checkout-left-basket animated wow slideInLeft" data-wow-delay=".5s">
	                <h4>Shopping basket</h4>
	                <ul>
	                    <li>Total <i>-</i> <span>TK. {{ $total }}</span></li>
	                    <li>Service Charges <i>-</i> <span>TK. 60.00</span></li>
	                    <?php
	                    Session::put('orderTotal', $total);
	                    ?>
	                </ul>
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