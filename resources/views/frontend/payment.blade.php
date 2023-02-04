@extends('frontend.master')

@section('title')
    Payment
@endsection

@section('mainContent')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{url('/')}}">Home</a><span>|</span></li>
				<li>Payment</li>
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
<!-- payment -->
	<!-- <div class="privacy about"> -->
		<!-- <h3>Pay<span>ment</span></h3> -->
			
	    <div class="container">
    	<div class="row">
        	<div class="col-lg-8">
            <h3 class="text-center">Payment Form </h3>
            <hr/>
            <div class="well box box-primary">
                {!! Form::open(['url'=>'/checkout/save-order', 'method'=>'POST']) !!}
                <div class="form-group">
                    <div class="">
                        <label><input type="radio" name="paymentType" value="cashOnDelivery"> Cash On Delivery</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <label><input type="radio" name="paymentType" value="bkash"> Bkash</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="">
                        <label><input type="radio" name="paymentType" value="paypal"> Paypal</label>
                    </div>
                </div>

                <!-- /.box-body -->
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary btn-block">Submit Order</button>
                </div>
                {!! Form::close() !!}
            </div>
        	</div>
    	</div>
		</div>
	<!-- </div> -->
<!-- //payment -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

@endsection