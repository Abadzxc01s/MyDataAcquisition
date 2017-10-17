/**
 * Created by user on 16.07.2017.
 */
$(document).ready(function() {
  function updateData() {
    console.log("Update Data ->" + new Date());
    response = JSON.parse(
      '{"data":{"last":{"temperature":"32","altitude":"253.14","pressure":0.983,"humidity":"54","date":"08.08.2017 16:38:23","id":"64470"},"chart":{"temperature":[{"temperature":28.24,"timestamp":"17:01"},{"temperature":28.31,"timestamp":"17:32"},{"temperature":28.44,"timestamp":"18:02"},{"temperature":28.56,"timestamp":"18:32"},{"temperature":28.68,"timestamp":"19:02"},{"temperature":28.78,"timestamp":"19:32"},{"temperature":29,"timestamp":"20:02"},{"temperature":28.97,"timestamp":"20:32"},{"temperature":28.71,"timestamp":"21:02"},{"temperature":27.73,"timestamp":"21:33"},{"temperature":27,"timestamp":"22:03"},{"temperature":26.97,"timestamp":"22:33"},{"temperature":26.95,"timestamp":"23:03"},{"temperature":26.88,"timestamp":"23:33"},{"temperature":26.82,"timestamp":"00:03"},{"temperature":26.74,"timestamp":"00:33"},{"temperature":26.64,"timestamp":"01:04"},{"temperature":26.44,"timestamp":"01:34"},{"temperature":26.15,"timestamp":"02:04"},{"temperature":25.93,"timestamp":"02:34"},{"temperature":25.58,"timestamp":"03:04"},{"temperature":25.21,"timestamp":"03:34"},{"temperature":25.04,"timestamp":"04:04"},{"temperature":24.89,"timestamp":"04:34"},{"temperature":24.76,"timestamp":"05:05"},{"temperature":24.53,"timestamp":"05:35"},{"temperature":24.24,"timestamp":"06:05"},{"temperature":24.05,"timestamp":"06:35"},{"temperature":24.03,"timestamp":"07:05"},{"temperature":24.06,"timestamp":"07:35"},{"temperature":24.1,"timestamp":"08:05"},{"temperature":24.28,"timestamp":"08:36"},{"temperature":24.56,"timestamp":"09:06"},{"temperature":25.01,"timestamp":"09:36"},{"temperature":25.42,"timestamp":"10:06"},{"temperature":25.85,"timestamp":"10:36"},{"temperature":26.19,"timestamp":"11:06"},{"temperature":26.44,"timestamp":"11:36"},{"temperature":26.73,"timestamp":"12:07"},{"temperature":27.03,"timestamp":"12:37"},{"temperature":27.32,"timestamp":"13:07"},{"temperature":27.63,"timestamp":"13:37"},{"temperature":27.91,"timestamp":"14:07"},{"temperature":28.21,"timestamp":"14:37"},{"temperature":28.61,"timestamp":"15:07"},{"temperature":28.9,"timestamp":"15:37"},{"temperature":29.2,"timestamp":"16:08"},{"temperature":29.43,"timestamp":"16:38"}],"pressure":[{"pressure":0.995,"timestamp":"17:01"},{"pressure":0.995,"timestamp":"17:32"},{"pressure":0.995,"timestamp":"18:02"},{"pressure":0.994,"timestamp":"18:32"},{"pressure":0.994,"timestamp":"19:02"},{"pressure":0.994,"timestamp":"19:32"},{"pressure":0.994,"timestamp":"20:02"},{"pressure":0.994,"timestamp":"20:32"},{"pressure":0.994,"timestamp":"21:02"},{"pressure":0.994,"timestamp":"21:33"},{"pressure":0.994,"timestamp":"22:03"},{"pressure":0.994,"timestamp":"22:33"},{"pressure":0.994,"timestamp":"23:03"},{"pressure":0.994,"timestamp":"23:33"},{"pressure":0.994,"timestamp":"00:03"},{"pressure":0.994,"timestamp":"00:33"},{"pressure":0.993,"timestamp":"01:04"},{"pressure":0.993,"timestamp":"01:34"},{"pressure":0.993,"timestamp":"02:04"},{"pressure":0.993,"timestamp":"02:34"},{"pressure":0.992,"timestamp":"03:04"},{"pressure":0.992,"timestamp":"03:34"},{"pressure":0.992,"timestamp":"04:04"},{"pressure":0.992,"timestamp":"04:34"},{"pressure":0.992,"timestamp":"05:05"},{"pressure":0.991,"timestamp":"05:35"},{"pressure":0.991,"timestamp":"06:05"},{"pressure":0.991,"timestamp":"06:35"},{"pressure":0.99,"timestamp":"07:05"},{"pressure":0.99,"timestamp":"07:35"},{"pressure":0.99,"timestamp":"08:05"},{"pressure":0.99,"timestamp":"08:36"},{"pressure":0.989,"timestamp":"09:06"},{"pressure":0.989,"timestamp":"09:36"},{"pressure":0.989,"timestamp":"10:06"},{"pressure":0.989,"timestamp":"10:36"},{"pressure":0.988,"timestamp":"11:06"},{"pressure":0.988,"timestamp":"11:36"},{"pressure":0.988,"timestamp":"12:07"},{"pressure":0.988,"timestamp":"12:37"},{"pressure":0.987,"timestamp":"13:07"},{"pressure":0.987,"timestamp":"13:37"},{"pressure":0.987,"timestamp":"14:07"},{"pressure":0.987,"timestamp":"14:37"},{"pressure":0.987,"timestamp":"15:07"},{"pressure":0.987,"timestamp":"15:37"},{"pressure":0.987,"timestamp":"16:08"},{"pressure":0.987,"timestamp":"16:38"}],"humidity":[{"humidity":80.07,"timestamp":"17:01"},{"humidity":79.82,"timestamp":"17:32"},{"humidity":79.43,"timestamp":"18:02"},{"humidity":80.87,"timestamp":"18:32"},{"humidity":80.1,"timestamp":"19:02"},{"humidity":79.78,"timestamp":"19:32"},{"humidity":80.15,"timestamp":"20:02"},{"humidity":79.98,"timestamp":"20:32"},{"humidity":81.18,"timestamp":"21:02"},{"humidity":79.48,"timestamp":"21:33"},{"humidity":79.13,"timestamp":"22:03"},{"humidity":79.35,"timestamp":"22:33"},{"humidity":80.82,"timestamp":"23:03"},{"humidity":80.07,"timestamp":"23:33"},{"humidity":80.32,"timestamp":"00:03"},{"humidity":78.6,"timestamp":"00:33"},{"humidity":78.97,"timestamp":"01:04"},{"humidity":80.23,"timestamp":"01:34"},{"humidity":80.87,"timestamp":"02:04"},{"humidity":78.27,"timestamp":"02:34"},{"humidity":80.1,"timestamp":"03:04"},{"humidity":79.83,"timestamp":"03:34"},{"humidity":80.12,"timestamp":"04:04"},{"humidity":80.02,"timestamp":"04:34"},{"humidity":80.63,"timestamp":"05:05"},{"humidity":79.23,"timestamp":"05:35"},{"humidity":80.08,"timestamp":"06:05"},{"humidity":80.6,"timestamp":"06:35"},{"humidity":80.52,"timestamp":"07:05"},{"humidity":79.62,"timestamp":"07:35"},{"humidity":79.07,"timestamp":"08:05"},{"humidity":80.17,"timestamp":"08:36"},{"humidity":79.58,"timestamp":"09:06"},{"humidity":79.67,"timestamp":"09:36"},{"humidity":79.43,"timestamp":"10:06"},{"humidity":80.15,"timestamp":"10:36"},{"humidity":78.55,"timestamp":"11:06"},{"humidity":80.38,"timestamp":"11:36"},{"humidity":81.25,"timestamp":"12:07"},{"humidity":80.33,"timestamp":"12:37"},{"humidity":79.9,"timestamp":"13:07"},{"humidity":80.22,"timestamp":"13:37"},{"humidity":80.83,"timestamp":"14:07"},{"humidity":80.25,"timestamp":"14:37"},{"humidity":80.73,"timestamp":"15:07"},{"humidity":79.32,"timestamp":"15:37"},{"humidity":80.05,"timestamp":"16:08"},{"humidity":79.42,"timestamp":"16:38"}],"minimum":{"temperature":19.03,"humidity":73.27,"pressure":0.887}}},"success":true,"code":200,"message":"ok","currentTime":"08.08.2017 20:56:14"}'
    );
    if (response.success === true) {a
      TemperatureChart.setData(response.data.chart.temperature);
      //var heightBefore = document.getElementById("temperature-chart").firstChild.height.animVal.value;
      TemperatureChart.ymin = response.data.chart.minimum.temperature;
      //TemperatureChart.redraw();
      //$(window).trigger("resize");
      //document.getElementById("temperature-chart").height = heightBefore;
      PressureChart.setData(response.data.chart.pressure);
      HumidityChart.setData(response.data.chart.humidity);
      $("#lastTemperature").html(response.data.last.temperature + " °C");
      $("#lastPressure").html(response.data.last.pressure + " °C");
      $("#lastAltitude").html(response.data.last.altitude + " m");
      $("#lastHumidity").html(response.data.last.humidity + " %");
      year = new Date().getFullYear();
      if (year > 2017) {
        copyright = "&copy; 2017 - " + year + " Cripi | ";
      } else {
        copyright = "&copy; 2017 Cripi | ";
      }
      $("#footer").html(
        copyright +
          "Last update: " +
          response.currentTime +
          " | Time of the data: " +
          response.data.last.date
      );
    } else {
      console.error("error");
    }
  }

  var TemperatureChart = Morris.Area({
    element: "temperature-chart",
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
    ykeys: ["temperature"],
    labels: ["Temperature in °C"],
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