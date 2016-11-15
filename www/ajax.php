<!DOCTYPE html>
<html>
<head>
	<script
		src="https://code.jquery.com/jquery-2.2.4.js"
		integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
		crossorigin="anonymous">
	</script>
	<title>Ajax</title>
<script type="text/javascript">
	$.ajax({
	    url: "doajax.php",
	}).done(function(data){
	    alert('success!!');
	}).fail(function(data){
	    alert('error!!!');
	});
</script>
</head>

<body>
<h1>Ajax</h1>

</body>
</html>

