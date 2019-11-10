<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() { var dataArray = [['Months','Events']];
        for (var n =0; n < monthsArray.length; n++) { 
	dataArray.push ([monthsArray[n], parseInt(numberEventsArray[n])])  /// monthsArray con tiene [enero febrero ... diciembre] y el array  numberEventsArray la cantidad de eventos en ese mes 
}
    var data = new google.visualization.arrayToDataTable(dataArray);
      var options = {'title':'My Average Day', 'width':400, 'height':300};

      // Display the chart inside the <div> element with id="piechart"
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, options);
    }
    </script>
  </head>
  <body>
    <div id="piechart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
