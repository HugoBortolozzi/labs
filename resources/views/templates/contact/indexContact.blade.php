<!DOCTYPE html>
<html lang="en">

	@yield('head')
	
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader">
			<img src="img/logo.png" alt="">
			<h2>Loading.....</h2>
		</div>
	</div>


	<!-- Header section -->
	<header class="header-section">
		<div class="logo">
			<img src="img/logo.png" alt=""><!-- Logo -->
		</div>
		<!-- Navigation -->
		<div class="responsive"><i class="fa fa-bars"></i></div>
		<nav>
			<ul class="menu-list">
				<li><a href="/">Home</a></li>
				<li><a href="/services">Services</a></li>
				<li><a href="/blog">Blog</a></li>
				<li class="active"><a href="/contact">Contact</a></li>
			</ul>
		</nav>
	</header>
	<!-- Header section end -->

	@yield('contactHeader')

	@yield('contactSection')

	@yield('footer')
</body>
</html>
