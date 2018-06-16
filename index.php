<!DOCTYPE html>
<html>
<head>
	<title>Task 2</title>
</head>
<body>
	<h3>Write a program (preferably PHP or JavaScript) to create a randomly distributed list of 1000
	integers (each in the range 1 -100).</h3>

	<button onclick="getData('asc');">Asc</button>
	<button onclick="getData('desc');">Desc</button>
	<button onclick="getData('prev');">Previous Stat</button>

	<div id = "data"></div>

	<script type="text/javascript" src = "js/jquery.min.js"></script>
	<script type="text/javascript">
		function getData(sort) {
			$('#data').html('<h3>Loading..</h3>');			
			$.post('req/get_data.php',{sort:sort}, function(data){
				$('#data').html(data);
			});
		}
		getData();
	</script>
</body>
</html>