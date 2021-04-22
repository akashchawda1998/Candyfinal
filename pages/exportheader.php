<body class="home style-v1">

	<div id="wrap">

		<!-- Header -->
		<header id="header" class="header">
			<div class="header-inner">
				<div class="container">
					<!-- Top Header -->
					<div class="header-top">

						<div class="row">
							<div class="col-sm-4 header-left col-xs-6">
							</div>
							<div class="col-sm-4 header-right col-sm-push-4  col-xs-6">
							</div>

							<!-- Logo -->
							<div id="logo" class="col-sm-4 logo col-sm-pull-4">
								<a href="../index.php"><img alt="The Retation"
									src="../logo.png"></a>
							</div>

						</div>
					</div>

				</div>

				<!-- Main Menu -->
					<nav id="primary-navigation" class="navbar" role="navigation">
						<div class="navbar-inner">
							<div class="navbar-header">
								<button type="button" class="navbar-toggle collapsed"
									data-toggle="collapse" data-target="#navbar">
									<span class="sr-only">Toggle navigation</span> <span
										class="icon-bar"></span> <span class="icon-bar"></span> <span
										class="icon-bar"></span>
								</button>
								<h3 class="navbar-brand">Menu</h3>
							</div>
							<div id="navbar" class="navbar-collapse collapse">
								<ul class="nav navbar-nav">
	                <li class="<?php if ($page == "home") { echo "active"; } ?>"><a href="../index.php">Home</a></li>
	                <li class="<?php if ($page == "about") { echo "active"; } ?>"><a href="about.php">About</a></li>
	                <li class="<?php if ($page == "products") { echo "active"; } ?>"><a href="products.php">Products</a></li>
	                <li class="<?php if ($page == "brochure") { echo "active"; } ?>"><a href="product_catalogue.pdf" target="_blank">Catalogue</a></li>
	                <li class="active"><a href="#">Export</a></li>
	                <li class="<?php if ($page == "contact") { echo "active"; } ?>"><a href="contact.php">Contacts</a></li>
	              </ul>
							</div>
							<!--/.navbar-collapse -->
						</div>
					</nav>

			</div>

			<!-- Banner -->
			<div id="banner">
				<div class="slider-wrapper">
					<div class="nivoSlider">
						<img src="images/export/export.jpg" alt="" title="#nivoCaption-1" />
					</div>
					<!--<div id="nivoCaption-1" class="nivo-html-caption">
						<div class="nivo-caption-img-1 animated animation-delay-50"
							data-animate="fadeInUp">
							<img alt="" src="images/home/slider/img-1.png">
						</div>
						<div class="nivo-caption-img-2 animated" data-animate="fadeInUp">
							<img alt="" src="images/home/slider/img-2.png">
						</div>
						<div class="nivo-caption-content">
							<h1 class="line-title title animated animation-delay-75"
								data-animate="fadeInUp"> Global Presense<i class="fa">&#xf111;</i>
							</h1>
							<p class="desc animated animation-delay-100"
								data-animate="fadeInUp">Coffee culture is a great coffee
								taste and it rests on the basis of responsible &amp; respectful</p>
						</div>
					</div>-->
				</div>
			</div>

		</header>
