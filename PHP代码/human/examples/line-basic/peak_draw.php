<!doctype html>
<html lang="en">
<head>
<link rel="shortcut icon" href="../../f.ico" type="image/x-icon" />
  <script type="text/javascript" src="../../jquery-1.10.1.min.js"></script>

  <script>
    $(function () {
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Temperature',
            x: -20 //center
        },
        subtitle: {
            text: 'Source: WorldClimate.com',
            x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: 'Temperature (°„C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°„C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'peak',
            data: [7.0, 6.9, null, null, -2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        },{
            name: 'value',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }]
    });
});
				
  </script>
</head>
<body>
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>
<script src="../../js/themes/grid.js"></script>
  <div id="container" style="min-width:700px;height:400px"></div>
</body>
</html>