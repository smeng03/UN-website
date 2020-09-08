<!--Sabrina Meng/Tay Mitchell Quarter 1 Project March 14, 2020-->

<!DOCTYPE html>

<html>
<head>
	<title> Queries </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<link rel="stylesheet" href="style.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src = "https://code.jquery.com/jquery-3.3.1.js"> </script>
	<script src = "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
	<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
	<script>
	//creates a table plugin to display information
		$(document).ready(function() {
		$('.table').DataTable( {
			//used lengthMenu property to customize number of records displayed
			"lengthMenu": [ 5, 10, 15, 20 ]
			} );
		} );
	</script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

<!--navbar, scrollspy navbar-->
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="intro.php">Home</a>
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
		  <li><a href="intro.php">About SDG Goal #3</a></li>
		  <li><a href="graphs.php">Graphs</a></li>
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Comparing GDP and Overweight/Wasted<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section1">GDP Growth vs. Wasted Proportion</a></li>
			  <li><a href="#section2">GDP Growth vs. Overweight Proportion</a></li>
            </ul>
          </li>
		  <li><a href="gallery.html">Photo Gallery</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>   

<!--jumbotron to display heading and intro text-->
<div class="jumbotron text-center">
	<h1>GDP Growth and Overweight/Wasted Children</h1>
	<h2>The information below will help you understand trends in GDP growth when compared to the number/proportion of overweight and wasted children.</h2>
</div> 

<div id="section1" class="container-fluid text-center info">
	<h1>GDP vs. Proportion of Wasted Children (2015)</h1>
	<?php
		//connects to the database
		include 'config.php';

		//selecting database to connect to
		mysqli_select_db($conn, 'sdgproject');

		//query using alias and join
		$query = "SELECT gdp.Value AS gdp, wasteproportion.Column_2015 AS waste, wasteproportion.GeoAreaName AS country FROM gdp JOIN wasteproportion ON gdp.GeoAreaName = wasteproportion.GeoAreaName WHERE gdp.TimePeriod = '2015'";
		$result = mysqli_query($conn, $query);
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			echo "<table class='table' class='display' style='width:100%'>
					
					<thead>
						<tr>
							<th>Country</th>
							<th>GDP Growth (%)</th>
							<th>Proportion of Wasted Children (%)</th>
						</tr>
					</thead>
					<tbody>";
					
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				echo "<tr> <td>".$row["country"]."</td> <td>".$row["gdp"]."</td> <td>".$row["waste"]."</td> </tr>";
			}
		}
		else {
			echo "0 results";
		}
	?>

</div>

<div id="section2" class="container-fluid text-center info">

</div>

<div id="section3" class="container-fluid text-center info">
	
</div>

<div id="section4" class="container-fluid text-center info">
	
</div>

<div id="section5" class="container-fluid text-center info">
	
</div>

<div id="section6" class="container-fluid text-center info">
	
</div>


</body>

<script src = "script.js" type = "text/javascript"></script>
</html>