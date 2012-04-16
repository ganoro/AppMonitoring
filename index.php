<!DOCTYPE html>
<html class="ui-mobile-rendering">
<head>
	<meta charset="utf-8">
	<title>Real-time Application Monitoring Notification</title>
	<link rel="stylesheet"  href="//code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.css" />
	<script src="//code.jquery.com/jquery-1.6.4.min.js"></script>
	<script src="//code.jquery.com/mobile/1.0.1/jquery.mobile-1.0.1.min.js"></script>
</head>
<body>

<div data-role="page" class="type-home">
	<div data-role="content">
		<h1>Real-time Application Monitoring Examples</h1>
		<div class="content-secondary">
			<p class="intro"><strong>Welcome.</strong> To get up and close with Zend Studio's Application Monitoring feature, select one of the following events</p>
			<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
				<li data-role="list-divider">Custom Events</li>
				<li><a href="messages/simple_message.php" data-rel="dialog" data-transition="pop">Simple Application Message</a></li>
				<li><a href="messages/simple_message.php" data-rel="dialog" data-transition="pop">Context-Based Application Message</a></li>
				<li data-role="list-divider">Application Errors</li>
				<li><a href="messages/php_error.php" data-rel="dialog" data-transition="pop">PHP Error</a></li>
				<li><a href="messages/fata_php_error.php" data-rel="dialog" data-transition="pop">Fatal PHP Error</a></li>
				<li data-role="list-divider">Performance</li>
				<li><a href="messages/high_mem.php" data-rel="dialog" data-transition="pop">High Memory Usage</a></li>
				<li><a href="messages/slow_request.php" data-rel="dialog" data-transition="pop">Slow Request Execution</a></li>
			</ul>
			
		</div><!--/content-primary-->

	</div>
</div>
</body>
</html>