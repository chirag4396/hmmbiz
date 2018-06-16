<!DOCTYPE html>
<html>
<head>
	<title>Task 2</title>
	<script type="text/javascript" src = "js/jquery.min.js"></script>
	<script type="text/javascript">
		function openTab(id) {
			var tabs = ['#first', '#second', '#third'];

			$(id).show();
			newIds = jQuery.grep(tabs, function(value) {
				return value != id;
			});
			$(newIds.join(', ')).hide();
			if(id == '#second'){
				getData();
			}
		}
	</script>
</head>
<body>
	<a href="javascript:;" onclick="openTab('#first');">First</a>
	<a href="javascript:;" onclick="openTab('#second');">Second</a>
	<a href="javascript:;" onclick="openTab('#third');">Third</a>	
	<div id = "first">
		<h3>Explain about yourself (convince us why we should hire you?)</h3>
		<p>All I can say about me is, I’m a self-learner and motivator, means if some task is there and i need to do it whether it a professional (code) or personal life and I don't know about it, than i can learn it by my way and try to complete it anyhow, even though if it takes much more time to achieve than also i could try until I’ll not get succeeded on it. </p>
		<p>During my professional career of 3 years, i had learned my new technologies by just listing from my other friend and colleagues, like if someone is telling some new technology which is in market and has an good scope than I tried to learn it and implement it to my current company that is the result were my current company is using Laravel, Git, Linux Hosting, OpenCart, Wordpress, Bootstrap and many other small thing. </p>
		<p>At last I can say that, if your organization is going to hire me than it could be a plus point for them, because there will be not much afford have to take to groom my knowledge and I’m also flexible to learn new technologies which can be beneficial to the organization in a very short period of time. </p>
		<p>If you want someone who can work, learn and implement new things, than that one person could be me.</p>
	</div>
	<div id = "second">		
		<h3>Write a program (preferably PHP or JavaScript) to create a randomly distributed list of 1000
		integers (each in the range 1 -100).</h3>

		<button onclick="getData('asc');">Asc</button>
		<button onclick="getData('desc');">Desc</button>
		<button onclick="getData('prev');">Previous Stat</button>

		<div id = "data"></div>
	</div>
	<div id = "third">
		<h3>
			Compare the below websites based on (not limiting to):<br/>
			Server type, frameworks, technologies, readability, performance, content, site rankings<br/>
			Websites:
		</h3>		
		<ul>
			<li>budding.in
				<ol>
					<li>jQuery</li>
					<li>Bootstrap</li>
					<li>Modernizr</li>
					<li>Nginx</li>
				</ol>
			</li>
			<li>echai.in
				<ol>
					<li>Ubuntu</li>	
					<li>Ngnix</li>	
					<li>Bootstrap</li>	
					<li>Moment.js</li>	
					<li>Jquery</li>	
				</ol>
			</li>
			<li>globalincorporations.com
				<ol>
					<li>Apache</li>
					<li>Woo-commerce</li>
					<li>Modernizer</li>
					<li>Underscore</li>
				</ol>
			</li>
		</ul>	
		<p><b>Note: for these i took an help of https://w3techs.com/sites</b></p>			
	</div>

	<script type="text/javascript">		
		openTab('#first');
		function getData(sort) {
			$('#data').html('<h3>Loading..</h3>');			
			$.post('req/get_data.php',{sort:sort}, function(data){
				$('#data').html(data);
			});
		}		
	</script>
</body>
</html>	