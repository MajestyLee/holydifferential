<!DOCTYPE HTML>
<html>
	<head>

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>iHHMD_single</title>
        <link rel="shortcut icon" href="../../f.ico" type="image/x-icon" />
		 <link rel="stylesheet" type="text/css" href="../../andreas00.css" media="screen,projection" />
		<script type="text/javascript" src="../../jquery-1.8.3.min.js"></script>
		
		
		<script type="text/javascript">
	<?php
	session_start();
	if(isset($_SESSION['xdata']))
					{//if
	echo "
$(function () {
        $('#container').highcharts({
            title: {
                text: 'Query Result _Click and drag to zoom in. Hold down shift key to pan.',
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
					
					
		            $t = unserialize($_SESSION['xdata']);
					$c1 = unserialize($_SESSION['hm']);
					$n=count($c1);
					$n=$n-1;
					$n1=count($t);
					$n1=$n1-1;
				for($i=0;$i<$n1;$i++)
				{  echo"'";
				echo $t[$i][0];
				 echo "'";
				   echo ",";    
				    }
				   echo "'";
				   echo $t[$i][0];
				   echo "'";
				
				//'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    //'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'  location
					
					echo "]
            },
            yAxis: {
                title: {
                    text: 'Modification Value '
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'tag num'
            },
            legend: {
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
			

$n=count($c1);
$n=$n-1;
		for($i=0;$i<$n;$i++)
		{ echo"	
			{
                name: ";
				
				echo "'";
				echo $c1[$i];
				 echo"'";
				echo ","; 
				echo "
                data: [";
				$n1=count($t);
				$n1=$n1-1;
				$f=$i+1;
				for($j=0;$j<$n1;$j++)
				{ 
				  echo $t[$j][$f];
				  echo ",";
				  }
				  echo $t[$n1][$f];
				  echo"]},";
				
				}
				//7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            //}, 
			
			
			
			echo"	
			{
                name: ";
				
				echo "'";
				echo $c1[$n];
				echo "'";
				echo ","; 
				echo "
                data: [";
				$n1=count($t);
				$n1=$n1-1;
				$f=$n+1;
				for($j=0;$j<$n1;$j++)
				{ 
				  echo $t[$j][$f];
				  echo ",";
				  }
				  echo $t[$n1][$f];
				  echo"]}]";
			
			//{
           //     name: 'London',
          //      data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
         //   }
			
			
		echo "	
        });
    });";
	}//if
	?>
	<?php
	if(isset($_SESSION['or_xdata']))
	{//hj
	echo "
$(function () {
        $('#container1').highcharts({
            title: {
                text: 'Query Result _Click and drag to zoom in. Hold down shift key to pan.',
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
					//session_start();
		            $t = unserialize($_SESSION['or_xdata']);
					//print_r($t);
				    $c1 = unserialize($_SESSION['or_hm']);
					$n=count($c1);
					$n=$n-1;
					$n1=count($t);
					$n1=$n1-1;
				for($i=0;$i<$n1;$i++)
				{  echo"'";
				echo $t[$i][0];
				 echo "'";
				   echo ",";    
				    }
				   echo "'";
				   echo $t[$i][0];
				   echo "'";
				
				//'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                    //'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'  location
					echo "
					]
            },
            yAxis: {
                title: {
                    text: 'Modification Value'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'tag num'
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'middle',
                borderWidth: 0,
				 title: {
                text: 'Cell type_modification<br/><span style=\"font-size: 9px; color: #666; font-weight: normal\">(Click to hide)</span>',
                style: {
                    fontStyle: 'italic'
                }
            }
            },
            series: [";
			

$n=count($c1);
$n=$n-1;
		for($i=0;$i<$n;$i++)
		{ echo"	
			{
                name: ";
				
				echo "'";
				echo $c1[$i];
				 echo"'";
				echo ","; 
				echo "
                data: [";
				$n1=count($t);
				$n1=$n1-1;
				$f=$i+1;
				for($j=0;$j<$n1;$j++)
				{ 
				  echo $t[$j][$f];
				  echo ",";
				  }
				  echo $t[$n1][$f];
				  echo"]},";
				
				}
				//7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
            //}, 
			
			
			
			echo"	
			{
                name: ";
				
				echo "'";
				echo $c1[$n];
				echo "'";
				echo ","; 
				echo "
                data: [";
				$n1=count($t);
				$n1=$n1-1;
				$f=$n+1;
				for($j=0;$j<$n1;$j++)
				{ 
				  echo $t[$j][$f];
				  echo ",";
				  }
				  echo $t[$n1][$f];
				  echo"]}]";
			
			//{
           //     name: 'London',
          //      data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
         //   }
			
			echo "
			
        });
    });";
	}//hj
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


<img src="../../img/001.png">
<p></p>
<blockquote>Some old charts of your querying history may be kept in this page</p>
<a href="index.php">If the charts didnt change,please press here to refresh</a></blockquote>
<p></p>
<?php
if(isset($_SESSION['xdata']))
					{//5
					echo "
<div id=\"container\" style=\"min-width: 1100px; height: 400px; margin: 0 auto\"></div>";
}//5

if(isset($_SESSION['or_xdata']))
{
echo "
<div id=\"container1\" style=\"min-width: 1100px; height: 400px; margin: 0 auto\"></div>";
}
?>
	</body>
</html>
