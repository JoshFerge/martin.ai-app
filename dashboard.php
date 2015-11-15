<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
<?php //<link rel="icon" href="../../favicon.ico">?>

	<title>Martin.ai</title>

	<!-- Bootstrap core CSS -->
	<link href="dashboard_assets/bootstrap.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="dashboard_assets/dashboard.css" rel="stylesheet">

	<script src="//d3js.org/d3.v3.min.js"></script>
	<style>
		circle {
			fill: rgb(31, 119, 180);
			fill-opacity: .25;
			stroke: rgb(31, 119, 180);
			stroke-width: 1px;
		}
		.leaf circle {
			fill: #ff7f0e;
			fill-opacity: 1;
		}
		text {
			font: 10px sans-serif;
		}
	</style>
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container-fluid">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Martin.ai</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a href="#">Dashboard</a></li>
				<li><a href="#">Settings</a></li>
<?php //		<li><a href="#">Profile</a></li>?>
				<li><a href="#">Help</a></li>
			</ul>
			<form class="navbar-form navbar-right">
				<input type="text" class="form-control" placeholder="Search...">
			</form>
		</div>
	</div>
</nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3 col-md-2 sidebar">
			<ul class="nav nav-sidebar">
				<li class="active"><a href="#">Overview <span class="sr-only">(current)</span></a></li>
				<li><a href="#">Reports</a></li>
				<li><a href="#">Analytics</a></li>
				<li><a href="#">Export</a></li>
			</ul>
<?php /*	<ul class="nav nav-sidebar">
				<li><a href="">Nav item</a></li>
				<li><a href="">Nav item again</a></li>
				<li><a href="">One more nav</a></li>
				<li><a href="">Another nav item</a></li>
				<li><a href="">More navigation</a></li>
			</ul>
			<ul class="nav nav-sidebar">
				<li><a href="">Nav item again</a></li>
				<li><a href="">One more nav</a></li>
				<li><a href="">Another nav item</a></li>
			</ul>
*/?>	</div>
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<h1 class="page-header" style="position:absolute">Why</h1>

<?php /*	<div class="row placeholders">
				<div class="col-xs-6 col-sm-3 placeholder">
					<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
					<h4>Label</h4>
					<span class="text-muted">Something else</span>
				</div>
				<div class="col-xs-6 col-sm-3 placeholder">
					<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
					<h4>Label</h4>
					<span class="text-muted">Something else</span>
				</div>
				<div class="col-xs-6 col-sm-3 placeholder">
					<img data-src="holder.js/200x200/auto/sky" class="img-responsive" alt="Generic placeholder thumbnail">
					<h4>Label</h4>
					<span class="text-muted">Something else</span>
				</div>
				<div class="col-xs-6 col-sm-3 placeholder">
					<img data-src="holder.js/200x200/auto/vine" class="img-responsive" alt="Generic placeholder thumbnail">
					<h4>Label</h4>
					<span class="text-muted">Something else</span>
				</div>
			</div>

			<h2 class="sub-header">Section title</h2>
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
					<tr>
						<th>#</th>
						<th>Header</th>
						<th>Header</th>
						<th>Header</th>
						<th>Header</th>
					</tr>
					</thead>
					<tbody>
					<tr>
						<td>1,001</td>
						<td>Lorem</td>
						<td>ipsum</td>
						<td>dolor</td>
						<td>sit</td>
					</tr>
					<tr>
						<td>1,002</td>
						<td>amet</td>
						<td>consectetur</td>
						<td>adipiscing</td>
						<td>elit</td>
					</tr>
					<tr>
						<td>1,003</td>
						<td>Integer</td>
						<td>nec</td>
						<td>odio</td>
						<td>Praesent</td>
					</tr>
					<tr>
						<td>1,003</td>
						<td>libero</td>
						<td>Sed</td>
						<td>cursus</td>
						<td>ante</td>
					</tr>
					<tr>
						<td>1,004</td>
						<td>dapibus</td>
						<td>diam</td>
						<td>Sed</td>
						<td>nisi</td>
					</tr>
					<tr>
						<td>1,005</td>
						<td>Nulla</td>
						<td>quis</td>
						<td>sem</td>
						<td>at</td>
					</tr>
					<tr>
						<td>1,006</td>
						<td>nibh</td>
						<td>elementum</td>
						<td>imperdiet</td>
						<td>Duis</td>
					</tr>
					<tr>
						<td>1,007</td>
						<td>sagittis</td>
						<td>ipsum</td>
						<td>Praesent</td>
						<td>mauris</td>
					</tr>
					<tr>
						<td>1,008</td>
						<td>Fusce</td>
						<td>nec</td>
						<td>tellus</td>
						<td>sed</td>
					</tr>
					<tr>
						<td>1,009</td>
						<td>augue</td>
						<td>semper</td>
						<td>porta</td>
						<td>Mauris</td>
					</tr>
					<tr>
						<td>1,010</td>
						<td>massa</td>
						<td>Vestibulum</td>
						<td>lacinia</td>
						<td>arcu</td>
					</tr>
					<tr>
						<td>1,011</td>
						<td>eget</td>
						<td>nulla</td>
						<td>Class</td>
						<td>aptent</td>
					</tr>
					<tr>
						<td>1,012</td>
						<td>taciti</td>
						<td>sociosqu</td>
						<td>ad</td>
						<td>litora</td>
					</tr>
					<tr>
						<td>1,013</td>
						<td>torquent</td>
						<td>per</td>
						<td>conubia</td>
						<td>nostra</td>
					</tr>
					<tr>
						<td>1,014</td>
						<td>per</td>
						<td>inceptos</td>
						<td>himenaeos</td>
						<td>Curabitur</td>
					</tr>
					<tr>
						<td>1,015</td>
						<td>sodales</td>
						<td>ligula</td>
						<td>in</td>
						<td>libero</td>
					</tr>
					</tbody>
				</table>
			</div>
*/?>        <div id="chart" style="zoom:80%">

			</div>
			<script>

				var diameter = 960,
					format = d3.format(",d");

				var pack = d3.layout.pack()
					.size([diameter - 4, diameter - 4])
					.value(function(d) { return d.size; });

				var svg = d3.select("#chart").append("svg")
					.attr("width", diameter)
					.attr("height", diameter)
					.append("g")
					.attr("transform", "translate(2,2)");

				d3.json("flare.json", function(error, root) {
					if (error) throw error;

					var node = svg.datum(root).selectAll(".node")
						.data(pack.nodes)
						.enter().append("g")
						.attr("class", function(d) { return d.children ? "node" : "leaf node"; })
						.attr("transform", function(d) { return "translate(" + d.x + "," + d.y + ")"; });

					node.append("title")
						.text(function(d) { return d.name + (d.children ? "" : ": " + format(d.size)); });

					node.append("circle")
						.attr("r", function(d) { return d.r; });

					node.filter(function(d) { return !d.children; }).append("text")
						.attr("dy", ".3em")
						.style("text-anchor", "middle")
						.text(function(d) { return d.name.substring(0, d.r / 3); });
				});

				d3.select(self.frameElement).style("height", diameter + "px");

			</script>
		</div>
	</div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="dashboard_assets/bootstrap.min.js"></script>
</body>
</html>
