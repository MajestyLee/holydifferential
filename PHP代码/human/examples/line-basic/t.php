
<!DOCTYPE HTML>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<script type="text/javascript" src="../../jquery-1.10.1.min.js"></script>
		<script type="text/javascript">
	    <?php
$a=file_get_contents('D:/out_regulate_1.txt');
$lo=explode("\r\n",$a);//真实数据
$b=file_get_contents('D:/results.txt');
$lo1=explode(",",$b);//测得的位置
$n=count($lo)-2;//总位置个数
$n1=count($lo1)-1;//测得位置个数


?>
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
            categories: [
			<?php
			$n=$n-1;
			for($i=0;$i<$n;$i++)
			{
			echo "'";
			$t=$i+1;
			echo $t;
			echo "'";
			echo ",";
			}
			echo "'";
			echo $n;
			echo "'";
			?>
			
			
			
			//'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'
			
			
			]
        },
        yAxis: {
            title: {
                text: 'Temperature (°C)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'data_set',
            data: [
			<?php
			$n=$n-1;
			for($i=2;$i<$n;$i++)
			{
			echo $lo[$i];
			echo ",";
			}
			echo $lo[$n];
			?>
			
			//7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6
			]
        }, 
		{
            name: 'Peak_region',
            data: [
			<?php
			$n=$n-1;
			$j=0;//精灵
			$p=0;//第二个精灵
			for($i=0;$i<$n;$i++)
			{
			if($j==$lo1[$p])
			 {echo -4;
			  echo ",";
			  $j=$j+1;
			  $p=$p+1;}
			 else 
			  {
			  echo 'null';
			  echo ",";
			  $j=$j+1;
			  }
			  }
			  echo -4;
			  
			  
			  
			//3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8
			?>
			]
        }]
    });
});
				
    

		</script>
	</head>
	<body>
<script src="../../js/highcharts.js"></script>
<script src="../../js/modules/exporting.js"></script>
<script src="../../js/themes/grid.js"></script>
<div id="container" style="min-width: 310px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
