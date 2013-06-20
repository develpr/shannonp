<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
	<meta charset='utf-8' />
	<meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible' />
	<meta content='width=device-width' name='viewport' />
	<title>@yield('title')</title>
	<link type="text/css" href="http://fonts.googleapis.com/css?family=Iceland" media="screen" rel="stylesheet" />
	<link rel="stylesheet" href="{{URL::to('stylesheets/app.css')}}" />
	@yield('styles')
	<link rel="icon" type="image/png" href="/images/morsel_logo.png" />
</head>
<body>
<header>
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
				<li class='divider'></li>
				<li>
					<a href='#'>Contact Me</a>
				</li>
			</ul>
		</section>
	</nav>
</header>

<section class='main' role='main'>

	@yield('content')

	<footer></footer>
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

		ga('create', 'UA-10817444-23', 'develpr.com');
		ga('send', 'pageview');

	</script>
	<script>
		$(function(){
			$('.morsel').hover(function(){
				$(this).html('-- --- .-. ... . .-..');
			}, function(){
				$(this).html('Morsel');
			})
		});
	</script>
</section>
</body>
</html>