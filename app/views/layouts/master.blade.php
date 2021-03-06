<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<meta content='width=device-width' name='viewport' />
	<title>@yield('title')</title>
	<link type="text/css" rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Marcellus+SC&subset=latin,latin-ext" />
	<link rel="stylesheet" href="{{URL::to('stylesheets/app.css')}}" />
	@yield('styles')
	<link rel="icon" type="image/png" href="/images/favicon.png" />
</head>
<body>
<header>
	<div class="row">
		<div class="columns large-12 small-12">
			<nav class='top-bar'>
				<ul class='title-area'>
					<li class='name'>
						<h1>
							<a href='#'>Shannon Pearce Designs</a>
						</h1>
					</li>
					<li class='toggle-topbar menu-icon'>
						<a href='#'>
							<span>menu</span>
						</a>
					</li>
				</ul>
				<section class='top-bar-section'>
					<ul class='right'>
						<li class="has-dropdown">
							<a href='#'>Collections</a>
							<ul class="dropdown">
								<li><a href="/cottage-collection">Cottage Collection</a></li>
								<li><a href="/vintage-collection">Vintage Collection</a></li>
								<li><a href="/whimsy-collection">Whimsy Collection</a></li>
							</ul>
						</li>
						<li class='divider'></li>
						<li>
							<a href='#'>About</a>
						</li>
						<li class='divider'></li>
						<li>
							<a href='#'>Contact Me</a>
						</li>
					</ul>
				</section>
			</nav>
		</div>
	</div>
</header>

<br />

<section class='main' role='main' id="root">

	@yield('content')

	<footer id="footer" class="row">

			<div class="columns large-12 small-12" id="footer-contents">
				&copy; Shannon Pearce Designs 2013
			</div>

	</footer>
	<script type='text/javascript'>
		//<![CDATA[
		document.write('<script src=/javascripts/vendor/'
			+ 'jquery'
			+ '.js><\/script>');
		//]]>
	</script>
	<script type="text/javascript" src="{{URL::to('javascripts/vendor/custom.modernizr.js')}}"></script>
	<script type="text/javascript" src="{{URL::to('javascripts/app.js')}}"></script>
	@yield('scripts')

	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', 'UA-10817444-24', 'develpr.com');
		ga('send', 'pageview');

	</script>

</section>
</body>
</html>