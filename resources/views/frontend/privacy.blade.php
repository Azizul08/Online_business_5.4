@extends('frontend.master')

@section('title')
    HOME
@endsection

@section('mainContent')
	<!-- products-breadcrumb -->
	<div class="products-breadcrumb">
		<div class="container">
			<ul>
				<li><i class="fa fa-home" aria-hidden="true"></i><a href="index.html">Home</a><span>|</span></li>
				<li>Privacy Policy & Terms of Use</li>
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
						<li><a href="products.html">Branded Foods</a></li>
						<li><a href="household.html">Households</a></li>
						<li class="dropdown mega-dropdown active">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Veggies & Fruits<span class="caret"></span></a>				
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>	
										<li><a href="vegetables.html">Vegetables</a></li>
										<li><a href="vegetables.html">Fruits</a></li>
									</ul>
								</div>                  
							</div>				
						</li>
						<li><a href="kitchen.html">Kitchen</a></li>
						<li><a href="short-codes.html">Short Codes</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Beverages<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="drinks.html">Soft Drinks</a></li>
										<li><a href="drinks.html">Juices</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="pet.html">Pet Food</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Frozen Foods<span class="caret"></span></a>
							<div class="dropdown-menu mega-dropdown-menu w3ls_vegetables_menu">
								<div class="w3ls_vegetables">
									<ul>
										<li><a href="frozen.html">Frozen Snacks</a></li>
										<li><a href="frozen.html">Frozen Nonveg</a></li>
									</ul>
								</div>                  
							</div>	
						</li>
						<li><a href="bread.html">Bread & Bakery</a></li>
					</ul>
				 </div><!-- /.navbar-collapse -->
			</nav>
		</div>
		<div class="w3l_banner_nav_right">
<!-- privacy -->
		<div class="privacy">
			<div class="privacy1">
				<h3>Privacy Policy</h3>
				<div class="banner-bottom-grid1 privacy1-grid">
					<ul>
						<li><i class="glyphicon glyphicon-user" aria-hidden="true"></i></li>
						<li>Profile <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-search" aria-hidden="true"></i></li>
						<li>Search <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-paste" aria-hidden="true"></i></li>
						<li>News Feed <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-qrcode" aria-hidden="true"></i></li>
						<li>Applications <span>Excepteur sint occaecat cupidatat non proident, sunt in
							culpa qui officia deserunt mollit anim id est laborum.</span></li>
					</ul>
				</div>
			</div>
			<div class="privacy1">
				<h3>Terms of Use</h3>
				<div class="banner-bottom-grid1 privacy2-grid">
					<div class="privacy2-grid1">
						<h4>deserunt mollit anim id est laborum?</h4>
						<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
						<div class="privacy2-grid1-sub">
							<h5>1. sint occaecat cupidatat non proident, sunt</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>2.perspiciatis unde omnis iste natus error</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>3. natus error sit voluptatem accusant</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>4. occaecat cupidatat non proident, sunt in</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
						<div class="privacy2-grid1-sub">
							<h5>5. deserunt mollit anim id est laborum</h5>
							<p>Excepteur sint occaecat cupidatat non proident, sunt in
								culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
<!-- //privacy -->
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //banner -->

@endsection