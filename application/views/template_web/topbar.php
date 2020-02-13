<body>
<!-- <?php/* $this->session->flashdata('message'); */?> -->
	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler pull-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">
	<!-- Header start -->
	<header id="header" class="navbar-fixed-top header2" role="banner">
		<div class="container">
			<div class="row">
				<!-- Logo start -->
				<div class="navbar-header">
				    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				    </button>
				    <div class="navbar-brand">
					    <a href="<?= base_url() ;?>assets/index.html">
					    	<img class="img-responsive" src="<?= base_url() ;?>assets/images/logo.png" alt="logo">
					    </a> 
				    </div>                   
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown active">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Home <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="<?= base_url() ;?>assets/index.html">Home 1</a></li>
		                            <li class="active"><a href="<?= base_url() ;?>assets/index-2.html">Home 2</a></li>
		                            <li><a href="<?= base_url() ;?>assets/index-3.html">Home 3</a></li>
		                            <li><a href="<?= base_url() ;?>assets/index-4.html">Home 4</a></li>
		                        </ul>
	                    	</div>
	                    </li>
						<li class="dropdown">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Company <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="<?= base_url() ;?>assets/about.html">About Us</a></li>
		                            <li><a href="<?= base_url() ;?>assets/service.html">Services</a></li>
		                            <li><a href="<?= base_url() ;?>assets/career.html">Career</a></li>
		                            <li><a href="<?= base_url() ;?>assets/testimonial.html">Testimonials</a></li>
		                            <li><a href="<?= base_url() ;?>assets/faq.html">Faq</a></li>
		                        </ul>
	                    	</div>
	                    </li>
						<li class="dropdown">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                            <li><a href="<?= base_url() ;?>assets/portfolio-classic.html">Portfolio Classic</a></li>
		                            <li><a href="<?= base_url() ;?>assets/portfolio-static.html">Portfolio Static</a></li>
		                            <li><a href="<?= base_url() ;?>assets/portfolio-item.html">Portfolio Single</a></li>
		                        </ul>
	                    	</div>
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Pages <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	<li><a href="<?= base_url() ;?>assets/team.html">Our Team</a></li>
		                           	<li><a href="<?= base_url() ;?>assets/about2.html">About Us - 2</a></li>
		                           	<li><a href="<?= base_url() ;?>assets/service2.html">Services - 2</a></li>
		                           	<li><a href="<?= base_url() ;?>assets/service-single.html">Services Single</a></li>
		                           	<li><a href="<?= base_url() ;?>assets/pricing.html">Pricing Table</a></li>
		                           	<li><a href="<?= base_url() ;?>assets/404.html">404 Page</a></li>
		                        </ul>
	                    	</div>
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Blog <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	 <li><a href="<?= base_url() ;?>assets/blog-rightside.html">Blog with Sidebar</a></li>
	                            	<li><a href="<?= base_url() ;?>assets/blog-item.html">Blog Single</a></li>
		                        </ul>
	                    	</div>
	                    </li>
	                    <li class="dropdown">
                       		<a href="<?= base_url() ;?>assets/#" class="dropdown-toggle" data-toggle="dropdown">Features <i class="fa fa-angle-down"></i></a>
                       		<div class="dropdown-menu">
								<ul>
		                           	 <li><a href="<?= base_url() ;?>assets/typography.html">Typography</a></li>
	                            	<li><a href="<?= base_url() ;?>assets/elements.html">Elements</a></li>
		                        </ul>
	                    	</div>
	                    </li>
            			<li><a href="<?= base_url('auth') ;?>">Login</a></li>
                    </ul>
				</nav><!--/ Navigation end -->
			</div><!--/ Row end -->
		</div><!--/ Container end -->
	</header><!--/ Header end -->