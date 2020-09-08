<!--Sabrina Meng/Tay Mitchell Quarter 1 Project March 14, 2020-->
<!--Sources:
	https://sqlizer.io/#/ (convert CSV to SQL)
	https://www.csvjson.com/csv2json (convert CSV to JSON)
	W3Schools Tutorials
	Stack Overflow (debugging)
-->

<!DOCTYPE html>

<html>
<head>
	<title> Introduction </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<link rel = "stylesheet" href = "https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src = "https://code.jquery.com/jquery-3.3.1.js"> </script>
	<script src = "https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"> </script>
	
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.js"></script>
	<script src = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.css">
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="shortcut icon" type="image/jpg" href="favicon.png"/>
	<!--<script src = "https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src = "https://code.highcharts.com/highcharts.js"></script>
	<script src = "https://code.highcharts.com/modules/no-data-to-display.js"></script>-->
	<script src = "script.js" type = "text/javascript"></script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50" onload = "getData()">

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
		  <!--uses dropdown menu to divide sections of the page-->
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">About SDG Goal #3<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section2">SDG Goal #3 Targets</a></li>
			  <li><a href="#section3">Overweight Proportion</a></li>
			  <li><a href="#section4">Overweight Number</a></li>
			  <li><a href="#section5">Wasted Proportion</a></li>
			  <li><a href="#section6">Wasted Number</a></li>
			  <li><a href="#section7">Global GDP Trends</a></li>
            </ul>
          </li>
		  <li><a href="graphs.php">Graphs</a></li>
		  <li><a href="query.php">Comparing GDPs and Overweight/Wasted</a></li>	
          <li><a href="gallery.html">Photo Gallery</a></li>		  
        </ul>
      </div>
    </div>
  </div>
</nav>   

<!--jumbotron to display heading and intro text-->
<div class="jumbotron text-center">
	<h1>Together, we can make the world a healthier place.</h1>
	<h2>Please read the statistics below to get familiarized with UN Sustainable Development Goal #3: Good Health and Well-Being.</h2>
</div> 

<div id="section1" class="container-fluid text-center info">
	<h1>About UN Sustainable Development Goal #3</h1>
	<h3 style = "line-height: 2;"> The UN Sustainable Development Goal #3 is Good Health and Well-Being. This goal is focused on improving global health and allowing increased access to health resources. In this website, we are focused on the relationship between the proportion of overweight children, proportion of wasted (malnourished) children, and the GDP growth of the country. Our data is from the UN Sustainable Development Goal database and features data collected over many years. Please note that not all countries' data was collected every year. </h3>
	<img src = "goals.jpg" alt = "Goals">
</div>

<div id="section2" class="container-fluid text-center info">
	<h1>SDG Goal #3 Targets</h1>
	<h3>Within the larger SDG Goal of Good Health and Well-Being, there are four main targets, listed below. Click on each image to learn more about each target.</h3> <br/>
	
	<!--using bootstrap columns (4 columns)-->
	<div class="row">
		<div class="col-sm-3">
			
			<!--popover feature, click on image to get more info-->
			<a data-toggle="popover" title = "Reproductive, Maternal, Newborn, and Child Health" data-content="Targets include reducing deaths due to pregnancy complications, decreasing child mortality rates, increasing access to vaccination, and expanding access to modern contraceptive methods"><img src="baby.jpg" class="img-responsive small-img" style="width:100%" alt="Image"></a> <br/>
			<p class = "imgcap">Reproductive, Maternal, Newborn, and Child Health</p>
		</div>
		<div class="col-sm-3">
			<a data-toggle="popover" title = "Infectious Diseases" data-content="Target Diseases include HIV/AIDS, tuberculosis, malaria, hepatitis B/C, and tropical diseases"><img src="disease.jpg" class="img-responsive small-img" style="width:100%" alt="Image"></a> <br/>
			<p class = "imgcap">Infectious Diseases</p>
		</div>
		<div class="col-sm-3">
			<a data-toggle="popover" title="Non-communicable Diseases, Mental Health, and Envrionmental Risks" data-content="The following are important goals within this target: reducing cardiovascular disease, cancer, chronic respiratory diseases, and diabetes; lowering suicide rate; reducing tobacco use; reducing road traffic deaths; mitigating air pollution; and providing clean and safe drinking water"><img src="cancer.jpg" class="img-responsive small-img" style="width:100%" alt="Image"></a> <br/>
			<p class = "imgcap">Non-communicable Diseases, Mental Health, and Environmental Risks</p>
		</div>
		<div class="col-sm-3">
			<a data-toggle="popover" title = "Health Systems and Funding" data-content="Main goals include increasing assistance for basic health needs and increasing the number of doctors available to treat disease" data-placement="left"><img src="health.jpg" class="img-responsive small-img" style="width:100%" alt="Image"></a> <br/>
			<p class = "imgcap">Health Systems and Funding</p>
		</div>
    </div> 
	 
<br/>
</div>

<div id="section3" class="container-fluid text-center info">
	<h1>Overweight Proportion</h1>
	<?php
		//connects to the database
		include 'config.php';

		//selecting database to connect to
		mysqli_select_db($conn, 'sdgproject');

		//query
		$query = "SELECT AVG(Column_2015) FROM overweightproportion";
		$result = mysqli_query($conn, $query);
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<h3> In 2015, of the countries surveyed, the average proportion of overweight children (less than 5 years old) was <strong>" . round($row["AVG(Column_2015)"], 1). "%</strong>.</h3>";
			}
		}
		else {
			echo "0 results";
		}
	?>
	<h3>That's more than <strong> 1 in 20 </strong> children who are overweight in all countries surveyed in 2015.</h3>
	<img src = "1in20.png" alt = "1 in 20"> 
<br/><br/>
</div>

<div id="section4" class="container-fluid text-center info">
	<h1>Overweight Number</h1>
	<?php
		//connects to the database
		include 'config.php';

		//selecting database to connect to
		mysqli_select_db($conn, 'sdgproject');
		
		//query1, getting total count of regions
		$query1 = "SELECT COUNT(*) AS number FROM overweightnumber WHERE Column_2015 IS NOT NULL";
		$result = mysqli_query($conn, $query1);
		$regionNumber = 0;
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				$regionNumber = $row["number"];
			}
		}
		else {
			echo "0 results";
		}
		
		//query2, getting sum of all regions with data
		$query2 = "SELECT SUM(Column_2015) AS sum FROM overweightnumber";
		$result = mysqli_query($conn, $query2);
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<h3> In 2015, of the $regionNumber regions surveyed, the total number of overweight children (less than 5 years old) was <strong>" . round($row["sum"]). "</strong>.</h3>";
			}
		}
		else {
			echo "0 results";
		}
	?>
	<h3>Although this number may not sound high, this is still a significant portion of the population. Please keep in mind that not all countries and regions were surveyed in this particular year.</h3>
</div>

<div id="section5" class="container-fluid text-center info">
	<h1>Wasted Proportion</h1>
	<?php
		//connects to the database
		include 'config.php';

		//selecting database to connect to
		mysqli_select_db($conn, 'sdgproject');

		//query
		$query = "SELECT AVG(Column_2015) FROM wasteproportion";
		$result = mysqli_query($conn, $query);
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<h3> In 2015, of the countries surveyed, the average proportion of wasted (malnourished) children (less than 5 years old) was <strong>" . round($row["AVG(Column_2015)"], 1). "%</strong>.</h3>";
			}
		}
		else {
			echo "0 results";
		}
	?>
	<h3>That's around <strong> 1 in 15 </strong> children who are wasted in all countries surveyed in 2015.</h3>
	<img src = "1in15.png" alt = "1 in 15"> 
</div>

<div id="section6" class="container-fluid text-center info">
	<h1>Wasted Number</h1>
	<?php
		//connects to the database
		include 'config.php';

		//selecting database to connect to
		mysqli_select_db($conn, 'sdgproject');
		
		//query1
		$query1 = "SELECT COUNT(*) AS number FROM wastenumber WHERE Column_2015 IS NOT NULL";
		$result = mysqli_query($conn, $query1);
		$regionNumber = 0;
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				$regionNumber = $row["number"];
			}
		}
		else {
			echo "0 results";
		}
		
		//query2
		$query2 = "SELECT SUM(Column_2015) AS sum FROM wastenumber";
		$result = mysqli_query($conn, $query2);
		
		//checks if there are any results obtained
		if (mysqli_num_rows($result) > 0) {
			
			//iterates through each row to display requested info
			while($row = mysqli_fetch_assoc($result)) {
				
				echo "<h3> In 2015, of the $regionNumber regions surveyed, the total number of wasted (malnourished) children (less than 5 years old) was <strong>" . round($row["sum"]). "</strong>.</h3>";
			}
		}
		else {
			echo "0 results";
		}
	?>
	<h3>Although this number may not sound high, this is still a significant portion of the population. Please keep in mind that not all countries and regions were surveyed in this particular year.</h3>
</div>

<!--<div id="section7" class="container-fluid text-center info">
	<h1>Global GDP Trends (2000-2017)</h1>
	<h3>The chart below shows worldwide GDP growth (in percent) from 2000-2017.</h3>
	<div id = "chart">
		<?php 
		/*
		//getting contents of the JSON file and decoding for use in PHP file
		$myJSON = file_get_contents("gdp.json");
		$myObjects = json_decode($myJSON);
		
		//making arrays for the year and associated gdp
		$year = array();
		$gdp = array();
		
		//iterates through the JSON data and stores the year and gdp in respective arrays
		foreach ($myObjects as $obj) {
			if ($obj->GeoAreaCode == 1) {
				array_push($year, $obj->TimePeriod);
				array_push($gdp, $obj->Value);
			}
		}
		//displaying the information in datatable
		echo "<table id = 'table' class='display' style='width:100%'>
					
					<thead>
						<tr>
							<th>Year</th>
							<th>GDP Growth (%)</th>
						</tr>
					</thead>
					<tbody>";
					
		for ($i = 0; $i < count($year); $i++) {
			echo "<tr> <td>".$year[$i]."</td> <td>".$gdp[$i]."</td> </tr>";
		}
		
		echo "</tbody> </table>";
*/		
		?>
	</div>
</div>
-->

<div id="section8" class="container-fluid text-center info">
	<h1> Number of Overweight Children in the World in Thousands of Children (2015) </h1>
	<canvas id="myChart" width="400" height="400"></canvas>
</div>

</body>

<script>
	//creates a table plugin to display information
		$(document).ready(function() {
		$('.table').DataTable( {
			//used lengthMenu property to customize number of records displayed
			"lengthMenu": [ 5, 10, 15, 20 ]
			} );
		} );
		
		//enables functioning of bootstrap popovers
		$(function () {
			$('[data-toggle="popover"]').popover( {
				container: 'body'
			} )
		})
		
		var region = [];
		var number = [];

		function getData() {
			$.getJSON("overweightNumber.json", function(data) { 
				$.each(data, function() {
					$.each(this, function(k, v) {
						if(k == "GeoAreaName") {
							region.push(v);
						}
						if(k == "2015") {
							number.push(v);
						}
					});
				});
			});
			drawChart();
		}
		
		function drawChart() {
			var ctx = document.getElementById('myChart').getContext('2d');
			var myChart = new Chart(ctx, {
				type: 'bar',
				data: {
					labels: region,
					datasets: [{
						label: 'Number of Overweight Children',
						data: number,
						backgroundColor: [
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)',
							'rgba(255, 99, 132, 0.2)',
							'rgba(54, 162, 235, 0.2)',
							'rgba(255, 206, 86, 0.2)',
							'rgba(75, 192, 192, 0.2)',
							'rgba(153, 102, 255, 0.2)',
							'rgba(255, 159, 64, 0.2)'
						],
						borderColor: [
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)',
							'rgba(255, 99, 132, 1)',
							'rgba(54, 162, 235, 1)',
							'rgba(255, 206, 86, 1)',
							'rgba(75, 192, 192, 1)',
							'rgba(153, 102, 255, 1)',
							'rgba(255, 159, 64, 1)'
						],
						borderWidth: 1
					}]
				},
				options: {
					scales: {
						yAxes: [{
							ticks: {
								min: 0
							}
						}],
						xAxes: [{
							ticks: {
								min:0
							}
						}]
					}
				}
			});
			setTimeout(function() {
			myChart.update()}, 200);
		}
		
		
			
	</script>

</html>