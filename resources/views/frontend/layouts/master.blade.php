<!doctype html>
<html lang="en-US">
	<head>
		@include('frontend.layouts.headcss')
	</head>
    <body class="theme-creote">
		<div id="page" class="page_wapper hfeed site">
			<div id="wrapper_full" class="content_all_warpper">
				
				@include('frontend.layouts.header-menu')
				@yield('main-content')
			</div>
			@include('frontend.layouts.footer')
		</div>
		@include('frontend.layouts.progress-indicator')
		@include('frontend.layouts.footerjs')
		
	</body>
</html>