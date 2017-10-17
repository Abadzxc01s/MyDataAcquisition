/**
 * Created by user on 16.07.2017.
 */
 
 <?php
$connect = mysqli_connect("localhost", "root", "", "embeddedproject");
$query = "SELECT rh,tempC,tempF,heatC,heatF,dp,ldr,dateData FROM sensorsdata";
$result = mysqli_query($connect, $query);
$chart_data = '';
while($row = mysqli_fetch_array($result))
{
 $chart_data .= "{ rh:'".$row["rh"]."', tempC:".$row["tempC"].",  heatC:".$row["heatC"].",
 dp:".$row["dp"].", ldr:".$row["ldr"].", dateData:'".$row["dateData"]."'}, ";
}
?
  


  var TemperatureChart = Morris.Area({
    element: "temperature-chart",
    data:[<?php echo $chart_data; ?>],
 xkey:'dateData',
 ykeys:['rh', 'tempC','heatC','dp','ldr'],
 labels:['Relative Humidity', 'Temperature in Celcius','Heat Index in Celcius','Dewpoint','Light Visibility'],
    hideHover: "false",
    parseTime: false,
    //resize: true,
    rounded: true,
    pointSize: 0,
    fillOpacity: 0.75,
    lineColors: ["#ff6600"]
  });
  PressureChart = Morris.Area({
    element: "pressure-chart",
    data: [{}],
    xkey: "timestamp",
    ykeys: ["pressure"],
    labels: ["pressure in bar"],
    hideHover: "false",
    parseTime: false,
    resize: true,
    rounded: true,
    pointSize: 0,
    fillOpacity: 0.75
  });
  HumidityChart = Morris.Area({
    element: "humidity-chart",
    data: [
      {
        id: "60",
        timestamp: "1499871154",
        temperature: "26.9",
        pressure: "98362",
        humidity: "0",
        "sealevel-preasure": "98362",
        altitude: "249.571"
      }
    ],
    xkey: "timestamp",
    ykeys: ["humidity"],
    labels: ["humidity in %"],
    hideHover: "false",
    parseTime: false,
    resize: true,
    rounded: true,
    pointSize: 0,
    fillOpacity: 0.75,
    lineColors: ["#0080ff"]
  });

  var intervall = setInterval(updateData, 3000);
  function stopInterval() {
    clearInterval(intervall);
  }
  //updateData();

  var delay = (function() {
    var timer = 0;
    return function(callback, ms) {
      clearTimeout(timer);
      timer = setTimeout(callback, ms);
    };
  })();

  $(window)
    .resize(function() {
      delay(function() {
        TemperatureChart.redraw();
      }, 300);
    })
    .trigger("resize");
});