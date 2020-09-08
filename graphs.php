<!--Sabrina Meng/Tay Mitchell Quarter 1 Project March 14, 2020-->

<!DOCTYPE html>

<html>
<head>
	<title> Graphs </title>
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
		  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Graphs<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#section1">Overweight Proportion</a></li>
			  <li><a href="#section2">Overweight Number</a></li>
			  <li><a href="#section3">Wasted Proportion</a></li>
			  <li><a href="#section4">Wasted Number</a></li>
            </ul>
          </li>
		  <li><a href="query.php">Comparing GDPs and Overweight/Wasted</a></li>
		  <li><a href="gallery.html">Photo Gallery</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>   

<!--jumbotron to display heading and intro text-->
<div class="jumbotron text-center">
	<h1>Understanding the Statistics</h1>
	<h2>Please read reference the tables and graphs below to see how overweight and wasted children proportions and numbers vary according to location.</h2>
</div> 

<div id="section1" class="container-fluid text-center info">
	<h1>Overweight Graph (2015)</h1>
	<div id = "graph"> </div>
	
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