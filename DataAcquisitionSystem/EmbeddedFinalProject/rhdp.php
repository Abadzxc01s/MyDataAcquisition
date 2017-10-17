<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="300">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Acquisition System : Home page</title>
<style>
	div.container-fluid{
		
		background-color: white	
	}
	div.card3{
		
		background-color: #1fdae0
		}
		div.card4{
		
		background-color: #1594d8
		}
		.card3 h3{
		
		color: black
		}
			.card4 h3{
		
		color: black
		}
		
	</style>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- for fontawesome icon css file -->
    <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="weather-icons-master/css/weather-icons.min.css" rel="stylesheet">
    <!-- superslides css -->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- for content animate css file -->
    <link rel="stylesheet" href="css/animate.css">    
    <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">        
    <!-- website theme color file -->   
     <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">    
    <!-- main site css file -->    
    <link href="style.css" rel="stylesheet">    
    <!-- google fonts  -->  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>  
    <!-- Favicon -->
  </head>
<body>

  <!-- Preloader -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
 
  <!-- End Preloader -->   
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  
  <!-- start navbar -->
  <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">Data Acquisition <span>System</span></a>
        <!-- <a class="navbar-brand" href="index.html"><img src="img/logo.png" alt="logo"></a> -->
      </div>
      <div id="navbar" class="navbar-collapse collapse navbar_area">          
        <ul class="nav navbar-nav navbar-right custom_nav">
          <li class="passive"><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Graphs <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
              <li><a href="graph.php">Graph of all data acquired</a></li>
              <li><a href="rhdp.php">Relative Humidity and Dewpoint Graph</a></li>
              <li><a href="templdr.php">Temperature and Light Visibility Graph</a></li>               
            </ul>
          </li>             
          <li><a href="table.php">Data Table</a></li>                  
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->
  <br /><br /><br></br>
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-12 col-lg-12">
		 <h2 align="center">Graph of Relative Humidity and Dewpoint</h2>
			<div id="chart"></div>		 
<?php
$connect = mysqli_connect("localhost", "root", "", "embeddedproject");
$query = "SELECT rh,dp,dateData FROM sensorsdata";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ rh:'".$row["rh"]."', dp:".$row["dp"].",  dateData:'".$row["dateData"]."'}, ";
}
?>

  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<script>
Morris.Line({
 element : 'chart',
 data:[<?php echo $chart_data; ?>],
 xkey:'dateData',
 ykeys:['rh','dp'],
 labels:['Relative Humidity','Dewpoint'],
 hideHover:'auto',
 stacked:true,
  behaveLikeLine:true,
 resize: true,
 grid: true,
 gridTextColor: ['#000000'],
 gridTextSize: 14,
 parsetime: false,
 axes: 'y'
});
</script>
<h4 align="center">Date and Time data acquired</h4>  
        </div>
    </div>

	<div class="col-sm-12 col-xs-12 col-md-6 col-xl-3">
            <div class="card3" style="box-shadow: 5px 5px 5px 5px rgba(0, 201, 207, 1), 5px 5px 5px 5px rgba(0, 201, 207, 1);">
                <div style="text-align: center">
                    <h2 id="lastAltitude"></h2>
                    <h3 class="text-muted">Dew Point</h3>
					<script>
					<?php
				$connect = mysqli_connect("localhost", "root", "", "embeddedproject");
				$query = "Select dp from sensorsdata where dateData = (select MAX(dateData) from sensorsdata)";
				$result = mysqli_query($connect, $query);
				$dewLatestData = '';
				while($row = mysqli_fetch_array($result))
				{
				$dewLatestData .= "".$row["dp"]." ";
				}
				?>
	
					
					
					</script>
					<h3><?php echo $dewLatestData?>&nbsp<i class="fa fa-thermometer-quarter fa-1x"></i> &nbsp<i class="wi wi-raindrops fa-1x"></i><h3>
                </div>
            </div>
            <br>
        </div>
        <div class="col-sm-12 col-xs-12 col-md-6 col-xl-3">
            <div class="card4" style="box-shadow: 5px 5px 5px 5px rgba(3, 120, 183, 1), 5px 5px 5px 5px rgba(3, 120, 183, 1);">
                <div style="text-align: center">
                    <h2 id="lastHumidity"></h2>
                    <h3 class="text-muted">Relative Humidity</h3>
						<script>
					<?php
				$connect = mysqli_connect("localhost", "root", "", "embeddedproject");
				$query = "Select rh from sensorsdata where dateData = (select MAX(dateData) from sensorsdata)";
				$result = mysqli_query($connect, $query);
				$rhLatestData = '';
				while($row = mysqli_fetch_array($result))
				{
				$rhLatestData .= "".$row["rh"]." ";
				}
				?>
	
					
					
					</script>
					<h3><?php echo $rhLatestData?>&nbsp<i class="wi wi-humidity fa-1x"></i><h3>
	
	
	
                </div>
            </div>
            <br>
        </div>
		</div>
  
 
  
  <!-- jQuery Library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <!-- For content animatin  -->
  <script src="js/wow.min.js"></script>
  <!-- bootstrap js file -->
  <script src="js/bootstrap.min.js"></script> 
  <!-- superslides slider -->
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <!-- slick slider js file -->
  <script src="js/slick.min.js"></script>
  <!-- Google map -->
  <script src="https://maps.googleapis.com/maps/api/js"></script>
  <script src="js/jquery.ui.map.js"></script>

  <!-- custom js file include -->
  <script src="js/custom.js"></script>  
      
  </body>
</html>