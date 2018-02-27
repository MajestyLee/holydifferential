<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="f.ico" type="image/x-icon" />
<script type="text/javascript" src="jquery-1.10.1.min.js"></script>
  <script type="text/javascript" src="js/highcharts.js"></script>
  <script type="text/javascript" src="js/exporting.js"></script>
  <script type="text/javascript" src="js/themes/skies.js"></script>
  <script>
  $(function () {                                                                
    $('#container11').highcharts({                                           
        chart: {                                                           
            type: 'bar'                                                    
        },                                                                 
        title: {                                                           
            text: 'Contents of Organic Data'                    
        },                                                                 
        subtitle: {                                                        
            text: 'relative size '                                  
        },                                                                 
        xAxis: {                                                           
            categories: ['Adipose', 'Adrenal', 'liver', 'Orta', ' Esophagus','Gastric','Left Ventricle','Lung','Ovary','Pancreas','Psoas Muscle','Right Ventricle','Right atrium','Sigmoid colon','Spleen','Thymus','Small Intestine','Bladder'],
            title: {                                                       
                text: null                                                 
            }                                                              
        },                                                                 
        yAxis: {                                                           
            min: 0,                                                        
            title: {                                                       
                text: 'size',                             
                align: 'high'                                              
            },                                                             
            labels: {                                                      
                overflow: 'justify'                                        
            }                                                              
        },                                                                 
        tooltip: {                                                         
            valueSuffix: ' millions'                                       
        },                                                                 
        plotOptions: {                                                     
            bar: {                                                         
                dataLabels: {                                              
                    enabled: true                                          
                }                                                          
            }                                                              
        },                                                                 
        legend: {                                                          
            layout: 'vertical',                                            
            align: 'right',                                                
            verticalAlign: 'top',                                          
            x: -40,                                                        
            y: 100,                                                        
            floating: true,                                                
            borderWidth: 1,                                                
            backgroundColor: '#FFFFFF',                                    
            shadow: true                                                   
        },                                                                 
        credits: {                                                         
            enabled: false                                                 
        },                                                                 

        series: [{                                                         
            name: 'size',                                             
            data: [31, 31, 635, 203, 20, 45, 45, 34, 56, 100, 123, 456, 67, 45 ,60 , 78, 45, 56]                                   
        },{                                                         
            name: 'num of hm',                                             
            data: [1, 7, 7, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8, 8 ,8 , 8, 8, 8]                                   
        }]                                                                 
    });                                                                    
});                                                                    

</script>
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Your description goes here" />
  <meta name="keywords" content="your,keywords,goes,here" />
  <meta name="author" content="Your Name" />


  <link rel="stylesheet" type="text/css" href="andreas00.css" media="screen,projection" />
    
  <title>iHMS</title>
  <script language=javascript>
 function check(){



		var textbox=document.getElementsByName('a[]');

  
        for(i=0;i<textbox.length;i++){
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('modification must be checked');
				return false;
                 }
            }else{//2
			//////////////////////////1
			var textbox=document.getElementsByName('celltype[]');

  
        for(i=0;i<textbox.length;i++){//for
            if(!textbox[i].checked){
                if(i==textbox.length-1){
    
				
                 }
                                    }
							else{return true;}
									}//for
		var textbox=document.getElementsByName('o[]');
		for(i=0;i<textbox.length;i++){//for
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('please choose celltype and organs');
				return false;
                 }
                                    }
							else{return true;}
									}//for
		
		////////////////////////1
              return true;
                  }	//2
		}      
     }
	 /////////////////
	 function ExistsData()
	{
		 if(document.getElementById("yu").value == "")
		 {
		    document.getElementById("rrb").disabled = "disabled";
		    return;
		 }
		  
		 document.getElementById("rrb").disabled = "";
	}
	////////////////////

</script>
</head>

<body>


<div id="wrap">
	<div id="header">
		<h1><a href="#" class="announce STYLE2"><img src="img/000.png" alt="" width="640" height="59" align="absbottom" /></a></h1>
		
	</div>

	<div id="leftside">
		<h2 class="hide">Sample menu:</h2>
				<ul class="avmenu">
			<li><a  href="index.html" >Home</a></li>
			
			
			<li><a href="single.php">Single Query</a></li>
			<li><a href="batch.php">Batch Query</a></li>
			<li><a href="../visu/index.html">Visualize</a></li>
			<li><a href="download.php" class="current">Download</a></li>
			
			<li><a href="tutorial.php">Tutorial</a></li>
			<li><a href="help.html">Contact</a></li>

		</ul>
  </div>
  
  <h2>&nbsp; Data Download </h2>
  <p>Search the data ,and download it.This system has two kinds of doctored data.one is histone modification data,the other one is gene expression data.</p>
  
  <div id="1212" style="margin-left:155px">
  <a>Histone Modification Data</a>
  <div>
		<form action="download.php" method="post">		

  <select name="number">
<option value="chr1">chr1</option><option value="chr2">chr2</option><option value="chr3">chr3</option><option value="chr4">chr4</option><option value="chr5">chr5</option><option value="chr6">chr6</option><option value="chr7">chr7</option><option value="chr8">chr8</option><option value="chr9">chr9</option><option value="chr10">chr10</option><option value="chr11">chr11</option><option value="chr12">chr12</option><option value="chr13">chr13</option><option value="chr14">chr14</option><option value="chr15">chr15</option><option value="chr16">chr16</option><option value="chr17">chr17</option><option value="chr18">chr18</option><option value="chr19">chr19</option><option value="chr20">chr20</option><option value="chr21">chr21</option><option value="chr22">chr22</option><option value="chrx">chrx</option><option value="chry">chry</option>

   </select>
									 
										  <input name="submit2" type="submit"  value="Searching" id="rrb" style="background-color: #cccccc; font-family: $Five Double Zero; color: #000000; border: 1 solid #5FB020"/>
</form>
		<blockquote>
		File Description For Every Chrmosome :</br>
		one cell type and one histone modification will make a match,which called attribute here</br> 
		-Lcation,attribute1,attribute2,attribute3......attribute¡ªN,
		
		
		</blockquote>
		<p>
		  <?php
		if(isset($_POST['submit2']))
		{$ch=$_POST['number'];
		echo"		<blockquote>
			<p>\"Searching results for download:<a href=\"alidata/$ch.rar\">$ch.rar</a>\"</p>
		</blockquote>";
		
		
	
		}
		?>	
    </p>
		
  </div>
  <a>Gene Expression Data</a>
		<form action="download.php" method="post">
		<select name="number1">
<option value="chr1">chr1</option><option value="chr2">chr2</option><option value="chr3">chr3</option><option value="chr4">chr4</option><option value="chr5">chr5</option><option value="chr6">chr6</option><option value="chr7">chr7</option><option value="chr8">chr8</option><option value="chr9">chr9</option><option value="chr10">chr10</option><option value="chr11">chr11</option><option value="chr12">chr12</option><option value="chr13">chr13</option><option value="chr14">chr14</option><option value="chr15">chr15</option><option value="chr16">chr16</option><option value="chr17">chr17</option><option value="chr18">chr18</option><option value="chr19">chr19</option><option value="chr20">chr20</option><option value="chr21">chr21</option><option value="chr22">chr22</option><option value="chrx">chrx</option><option value="chry">chry</option>

   </select>
									 
										  <input name="submit22" type="submit"  value="Searching" id="rrbb" style="background-color: #cccccc; font-family: $Five Double Zero; color: #000000; border: 1 solid #5FB020"/>
</form>
		<blockquote>
		File Description For Every Chrmosome :
		-Lcation,cell type1,cell type2,cell type3......cell type¡ªN,		</blockquote>
		<?php
		if(isset($_POST['submit22']))
		{$ch=$_POST['number1'];
		echo"		<blockquote>
			<p>\"Searching results for download:<a href=\"alidata/Gene_$ch.rar\">Gene_$ch.rar</a>\"</p>
		</blockquote>";
		
		
	
		}
		?></p>
</div>
		
		<div style="padding-left:80px">
<iframe src="tree2/tree2.html" width="980px"  scrolling="no" style="border:none"></iframe>
</div>
    <div id="footer">
		
				<p><img src="img/2.png" alt="" width="90" height="82" /><br />
	  Recommended Browser:Firefox or Chrome</p> 
		<p>Maintained by DMB Lab, Tongji University, China </p>
</div>
 
</body>
</html>
