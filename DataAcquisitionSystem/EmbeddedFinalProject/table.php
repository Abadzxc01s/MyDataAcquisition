<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
	<meta http-equiv="refresh" content="300">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Acquisition System : Home page</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/superslides.css">
	<link rel="stylesheet" href="css/animate.css">      
    <!-- slick slider css file -->
    <link href="css/slick.css" rel="stylesheet">          
    <!-- website theme color file -->   
     <link id="switcher" href="css/themes/cyan-theme.css" rel="stylesheet">       
    <!-- google fonts  -->  
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>    
    <link href='http://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
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
          <li class="active"><a href="table.php">Data Table</a></li>                  
        </ul>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
  <!-- End navbar -->
  <br /><br /><br />
  <div class="container-fluid">
    <div class="row">
        <div class="col-sm-12 col-sm-12 col-lg-12">
		 <h2 align="center">Data Table of All Data Acquired</h2>
<?php  
 $connect = mysqli_connect("localhost", "root", "", "embeddedproject");  
 $query ="SELECT rh,tempC,tempF,tempC,heatC,heatF,dp,dateData FROM sensorsdata";  
 $result = mysqli_query($connect, $query);  
 ?>  
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>  
           <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>            
           <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
		    <div class="container">  
                
                     <table id="sensors_data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>  
                                    <td>Relative Humidity</td>  
                                    <td>Temperature in Celcius</td>  
                                    <td>Temperature in Fahrenheit</td>  
                                    <td>Heat Index in Celcius</td>
									<td>Heat Index in Fahrenheit</td>
									<td>Dewpoint</td>
                                    <td>Date and Time</td>  
                               </tr>  
                          </thead>  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '  
                               <tr>  
                                    <td>'.$row["rh"].'</td>  
                                    <td>'.$row["tempC"].'</td>  
                                    <td>'.$row["tempF"].'</td>  
                                    <td>'.$row["heatC"].'</td>  
                                    <td>'.$row["heatF"].'</td>  
									<td>'.$row["dp"].'</td> 
									<td>'.$row["dateData"].'</td> 
                               </tr>  
                               ';  
                          }  
                          ?>  
                     </table>  
                
           </div>  

		   
		   
		   
		   <br></br>
</div>
</div>
</div>
 <!-- jQuery Library -->
 <script src="js/wow.min.js"></script>
 <script src="js/bootstrap.min.js"></script> 
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.animate-enhanced.min.js"></script>
  <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/slick.min.js"></script>
      </body>  	  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#sensors_data').DataTable();  
 });  
 </script>  

  
 
  
  
      
  </body>
</html>