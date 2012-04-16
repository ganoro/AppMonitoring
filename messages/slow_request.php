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

<div data-role="dialog">
	
		<div data-role="header" data-theme="d">
			<h1>Slow Request</h1>
		</div>

		<div data-role="content" data-theme="c">
			<p>Text for Slow Request<br/>
			<code>&lt;?php<br/>
for ($i = 0; $i &lt; 99999; $i++) {<br/>
&nbsp;&nbsp;$a = hash_hmac('ripemd160', 'The quick ....', 'secret');<br/>
}<br/>
?&gt;
</code></p>
			<a data-role="button" data-rel="back" data-theme="c">Close</a>    
		</div>
	</div>
</body>
</html>

<?php
for ($i = 0; $i < 99999; $i++) {
	$a = hash_hmac('ripemd160', 'The quick brown fox jumped over the lazy dog.', 'secret');
}
?>