<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() { var dataArray = [['Model','Car']];
        for (var n =0; n < models.length; n++) { 
 dataArray.push ([models[n], parseInt(cars[n])])
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
