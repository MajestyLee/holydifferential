<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<link rel="shortcut icon" href="f.ico" type="image/x-icon" />
  <meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta name="description" content="Your description goes here" />
  <meta name="keywords" content="your,keywords,goes,here" />
  <meta name="author" content="Your Name" />
 <style class="cp-pen-styles">
        html
        {
            font-family: 'Noto Sans' , serif;
        }
        
        .blocks
        {
            margin: auto;
            max-width: 1070px;
            padding: 0;
        }
        
        .blocks li
        {
            color: #fff;
            background-color: #2196F3;
            cursor: default;
            float: left;
            list-style: none;
            margin: 1%;
            padding: 60px 0;
            position: relative;
            text-align: center;
            -webkit-transition: .3s cubic-bezier(.3,0,0,1.3);
            transition: .3s cubic-bezier(.3,0,0,1.3);
            width: 31%;
            border-radius: 4px;
            font-weight: bold;
        }
        
        .blocks li:hover
        {
            -webkit-transform: scale(.7);
            -ms-transform: scale(.7);
            transform: scale(.7);
            z-index: 3000;
        }
        
        .popup
        {
            background-color: inherit;
            color: #fff;
            height: 100%;
            width: 100%;
            left: 0;
            opacity: 0;
            position: absolute;
            top: 0;
            padding: 15px;
            border-radius: 4px;
            -webkit-transition: .3s cubic-bezier(.3,0,0,1.37);
            transition: .3s cubic-bezier(.3,0,0,1.37);
        }
        
        .popup span
        {
            font-size: 12px;
            font-weight: normal;
            left: 0;
            padding: 15px 25px;
            position: absolute;
            top: 50%;
            -webkit-transform: translateY(-50%);
            -ms-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        
        .popup h3
        {
            font-size: 13px;
            margin: 0 0 5px;
            padding: 0;
        }
        
        .blocks li:hover .popup
        {
            opacity: 1;
            -webkit-transform: scale(2);
            -ms-transform: scale(2);
            transform: scale(2);
            box-shadow: 0 0 10px 2px rgba(0,0,0,.4);
        }
    </style>

  <link rel="stylesheet" type="text/css" href="andreas00.css" media="screen,projection" />


  <title>iHMS</title>
  <script language=javascript>  

function am(i)
{  

   
   
   ///////////////////////////////////////////////
   if(a[i].checked==true){
  
      if (a[i].type == "checkbox") a[i].checked = true;
   }
   else
   {
   
      if (a[i].type == "checkbox") a[i].checked = true;
   }
}
function bm(i)
{
   var a = document.getElementsByName('a[]');
   if(a[i].checked==true){
  
      if (a[i].type == "checkbox") a[i].checked = false;
   }

}
function bm1(i)
{
   var c = document.getElementsByTagName("input");
   if(c[i].checked==true){
  
      if (c[i].type == "checkbox") c[i].checked = false;
   }

}
function men()
{
var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
for(var a=0;a<18;a++)
{
am(b[a]);
}
}

function tro ()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22,];
for(var a=0;a<22;a++)
{
am(b[a]);
}
}
function cell()
{
var b=[4,0,2,5,3,6,1,27,8,9,26,11,10,12,13,14,15,16,17,18,19,7,23,24,20,22];
for(var a=0;a<27;a++)
{
am(b[a]);
}
}
function stem()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
for(var a=0;a<20;a++)
{
am(b[a]);
}
}
function cul()
{
var b=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22,28,25];
for(var a=0;a<22;a++)
{
am(b[a]);
}
}
function c_all()
{
for(var i=0;i<29;i++)
{bm(i);}
for(var i=0;i<5;i++)
{bm1(i);}
}
//////////////表单验证
      function check(){



		var textbox=document.getElementsByName('a[]');

  
        for(i=0;i<textbox.length;i++){
            if(!textbox[i].checked){
                if(i==textbox.length-1){
                alert('Please choose modification type');
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
                alert('please choose celltypes and Organs samples');
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
		    document.getElementById("rb").disabled = "disabled";
		    return;
		 }
		  
		 document.getElementById("rb").disabled = "";
	}
	////////////////////
	 function ExistsData1()
	{
		 if(document.getElementById("yu2").value == "")
		 {
		    document.getElementById("rb2").disabled = "disabled";
		    return;
		 }
		  
		 document.getElementById("rb2").disabled = "";
	}
	////////////////////////////////////quick
	function che()
  {
     var a = document.getElementsByName('a[]');
	 var g=0;
	 for(i=0;i<a.length;i++)
     {if(a[i].checked==true) g=g+1;}
	return g;
  
  }
  
  ///////////////////////////
function am(i)
{  //f
   var g=0;

   var a = document.getElementsByName('a[]');

   ////////////////////
   if(a[i].checked==true){
  
      a[i].checked = false;
   }
   else
   {
   
 a[i].checked = true;
   }
}//f
////////////////////////////////////////////
function contains(arr, str) {//zaibuzai
    var i = arr.length;
    while (i--) {
           if (arr[i] === str) {
           return true;
           }   
    }   
    return false;
}
/////////////////////////////////////////

/////////////////////////
function men()
{

var b=[0,2,3,1,8,9,11,10,12,13,14,15,16,17,18,19,7,20];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_BMP4_Derived_Mesendoderm_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_BMP4_Derived_Mesendoderm_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
/////////////////////////////////////////////
function tro ()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,18,19,7,21,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_BMP4_Derived_Trophoblast_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_BMP4_Derived_Trophoblast_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
///////////////////////////////////////////////
function cell()
{
var b=[4,0,2,5,3,6,1,27,8,9,26,11,10,12,13,14,15,16,17,18,19,7,23,24,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_H1_cell_line_Line');
for(var a=0;a<18;a++)
{
am(b[a]);

}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_H1_cell_line_Line');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
//////////////////////////////////////////////
function stem()
{
var b=[4,0,2,5,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_Derived_Mesenchymal_Stem_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_Derived_Mesenchymal_Stem_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
///////////////////////////////
function cul()
{
var b=[0,2,5,3,1,27,8,9,11,10,12,13,14,15,16,17,19,7,20,22];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in H1_Derived_Neuronal_Progenitor_Cultured_Cells');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with H1_Derived_Neuronal_Progenitor_Cultured_Cells');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
//////////////////////////////////////
function or()
{
var b=[15,17,7,11,10,12];
var u=0;
u=che();
if(u==0)
{//if

alert('Qucik Choose all modification type in Organs');
for(var a=0;a<18;a++)
{
am(b[a]);
}
}//if
if(u!=0)
//for(var r=0;r<28;r++)
{//if
alert('Intersection with Organs');
    var a = document.getElementsByName('a[]');
    for(var r=0;r<30;r++)
	{//1
	if(a[r].checked==true)
	   if(contains(b,r)==false)
	       a[r].checked=false;
	}//1
}//if
}
	////////////////////////////////////////
</script>

  <style type="text/css">
<!--
.STYLE1 {font-family: Verdana, Arial, Helvetica, sans-serif}
-->
  </style>
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
			<li><a href="download.php" >Download</a></li>
			
			<li><a href="tutorial.php" class="current">Tutorial</a></li>
			<li><a href="help.html">Contact</a></li>
		</ul>
  </div>
  <h2>&nbsp;Input Format & Tutorial List</h2>
  <div id="contentwide">
  <div id="dfdf" style="width:725px">
  
  <table width="50%" height="185">
	
		<thead>
			<tr>
				<th width="15%"  scope="col">Function </th>
				<th width="59%"  scope="col">Input </th>
				<th width="26%"  scope="col">Output </th>
		    </tr>
		</thead>
		<tbody>
			<tr>
				<th scope="row"><a href="">Single Query</a></th>
				<td>histone modification;cell type ;region</td>
				<td>querying result</td>
		    </tr>
			<tr>
				<th scope="row"><a href="">Batch  Query</a></th>
				<td>histone modification;cell type ;batch regions</td>
				<td>exporting files</td>
		    </tr>
			<tr>
				<th scope="row"><a href="">Visualize</a></th>
				<td> histone modification;cell type;chrmosome</td>
				<td>tendency chart</td>
		    </tr>
			<tr>
				<th scope="row"><a href="">Download</a></th>
				<td> histone modification;cell type;chrmosome</td>
				<td>file in zip</td>
		    </tr>
	
		</tbody>
  </table>
  </p>
  </div>
	
	
<h3> 1.Single query page(Input)</h3>
<img src="img/single1.png" alt="" width="681" height="285" />
<li>Cell Type: It is required to select one or more cell types.</li>
<li>
Histone modification: The related histone modification types are selected automatically when the query cell types are selected.  You can also cancel the selection of histon modification marks.
</li>
<li>
Region: The query region can be specified by location or GeneID (click GeneList to get GeneID List).</li>
<h3> 2.Single Query Page(Output)</h3>
<p><img src="img/single2.png"width="681" height="433" /></p>
<li>Result Marix: The column represents cell type_ histone modification
 The row reprents location.</li>

<img src="img/single3.png" alt="" width="681" height="215" />
<li>attributes:cell type_modification on the left can be zoomed.</li>

<h3> 3.Batch Query Page(input)</h3>
<img src="img/batch4.png" alt="" width="681" height="727" />
<li>Cell Type: It is required to select one or more cell types.</li> 
<li>Histone modification: The related histone modification types are selected automatically when the query cell types are selected. You can also cancel the selection of histon modification marks.</li> 
<li>Regions: The query regions can be submitted through textarea or uploaded file. </li>
<h3> 4.Batch Query Page(output)</h3>

<img src="img/123.png" alt="" width="681" height="263" />
<li>Search Results: The results are output as File (in wig format). The file includes the following information: regions ,cell type, histone modification mark,and tag num.</li>
<h3> 5.Visualization Page</h3>
<img src="img/visualize1.png" alt="" width="681" />
<p>
In this page, you can visualize and compare genome-wide diverse histone modification states of  different cell types.


<p>&nbsp;</p>

<img src="img/mrna.png" alt="" width="681" />
<li>Cell type on the left and tracks can be chosed</li>



<h3> 8.Download Page</h3>
<img src="img/download.png" alt="" width="681" />
<p>&nbsp;</p>
 
<p>You can search and download the genome-wide histone modificaiton data by chrmosome or by cell type and histone modication type.
</p>
<li>Cell Type: Specify the cell type.</li>


<h3>Some Common Questions</h3>
<div id="dfdf" style="margin-left:0px"><iframe width="1018" height="320" frameborder="0" src="jiaoben3311/index.html"   ></iframe></div>
</div>
  <div id="footer">
				<p><img src="img/2.png" alt="" width="100" height="60" /><br />
		Recommended Browser:Firefox or Chrome</p> 
		<p>Maintained by DMB Lab, Tongji University, China </p>
</div>
</body>
</html>
