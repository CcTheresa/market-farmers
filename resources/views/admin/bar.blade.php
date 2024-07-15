<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
      

   
        var view = google.visualization.arrayToDataTable(<?php echo json_encode($barChartData); ?>);

        var options = {
            title: 'Number of Orders per Produce',
            chartArea: {width: '50%'},
                hAxis: {
                    title: 'Number of Orders',
                    minValue: 0
                },
                vAxis: {
                    title: 'Product'
                }
        };

      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
  </script>
<div id="barchart_values" style="width: 700px; height: 200px;"></div>