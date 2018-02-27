<?php
session_start();

?>
<!DOCTYPE HTML>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>iHHMD_da</title>
        <link rel="shortcut icon" href="../../f.ico" type="image/x-icon" />
		 <link rel="stylesheet" type="text/css" href="../../andreas00.css" media="screen,projection" />
		<script type="text/javascript" src="../../jquery-1.8.3.min.js"></script>
		<script type="text/javascript">
<?php

	echo "
$(function () {
        $('#container').highcharts({
            title: {
                text: 'Query Result _Click and drag to zoom in. Hold down shift key to move.',
                //x: -20, //center
				align: 'left'
            },
			             chart: {
            type: 'line',
            zoomType: 'x',
			resetZoomButton: {
                position: {
                   align: 'left',
                    verticalAlign: 'top'

                }
            },
            panning: 'true',
            panKey: 'shift'
        },
            subtitle: {
                text: ''},
            xAxis: {
            categories: ";

                  echo "[";


						//echo"r==1";
		            $t = unserialize($_SESSION['xdata']);
					$c1 = unserialize($_SESSION['hm']);
					$n=count($c1);

				for($i=0;$i<$n-1;$i++)
				{  echo"'";
				echo $c1[$i];
				 echo "'";
				   echo ",";
				    }
				   echo "'";
				   echo $c1[$n-1];
				   echo "'";

				//'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    //'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'  location
						//if
					echo "]
            },
            yAxis: {
                title: {
                    text: 'differential analysis '
                },
		gridLineColor: '#FFFFFF',
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#FFFFFF'
                }]
            },

            tooltip: {
                valueSuffix: 'HM DIS'
            },
            legend: {
            	maxHeight:300,
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'middle',
				 title: {
                text: 'Cell type_modification<br/><span style=\"font-size: 9px; color: #666; font-weight: normal\">(Click to hide)</span>',
                style: {
                    fontStyle: 'italic'
                }
            },
                borderWidth: 0
            },
            series: [";
			echo"
			{
                name: ";

				echo "'";
				echo "dfference";
				 echo"'";
				echo ",";
				echo "
                data: [";
				$n1=count($t);
				$n1=$n1-1;
				//$f=$i+1;
				for($j=0;$j<$n1;$j++)
				{
				    if ($t[$j] > $t[$j-1] && $t[$j] > $t[$j+1]) {
                        echo "{
                            y: ";
                        echo $t[$j];
                        echo ",
                marker: {
                            symbol: 'url(https://www.highcharts.com/demo/gfx/sun.png)'
                }
                    },";
                    }
                    else {
                        echo $t[$j];
                        echo ",";
                    }
				  }
				  echo $t[$n1];
				  echo"]}";
				echo "]";
				//7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            //},

echo "
        });
    });";

	?>
	
		</script>
	    <style type="text/css">
<!--
.STYLE1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
        </style>
</head>
	<body>
<script src="../../highcharts.js"></script>


<div id="container" style="min-width: 1100px; height: 400px; margin: 0 auto"></div>

	</body>
</html>
