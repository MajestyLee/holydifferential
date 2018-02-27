<?php
$filename='Export-single.csv';//要导出的文件的文件名需要加上文件后缀



header('Content-Type: text/x-sql');

header('Expires: ' . gmdate('D, d M Y H:i:s') . ' GMT');

header('Content-Disposition: attachment; filename="' .$filename. '"');

$is_ie = 'IE';

   if ($is_ie == 'IE') {

       header('Cache-Control: must-revalidate, post-check=0, pre-check=0');

       header('Pragma: public');

} else {

       header('Pragma: no-cache');

       header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

   }
   ?>
<?php
session_start();
$t=array();
$t[0]='mesen_h2ak5ac';
$t[1]='mesen_h2bk120ac';
$t[2]='mesen_h2bk15ac';
$t[3]='mesen_h2bk5ac';
$t[4]='mesen_h3k18ac';
$t[5]='mesen_h3k23ac';
$t[6]='mesen_h3k27ac';
$t[7]='mesen_h3k27me3';
$t[8]='mesen_h3k36me3';
$t[9]='mesen_h3k4ac';
$t[10]='mesen_h3k4me1';
$t[11]='mesen_h3k4me2';
$t[12]='mesen_h3k4me3';
$t[13]='mesen_h3k79me1';
$t[14]='mesen_h3k79me2';
$t[15]='mesen_h3k9ac';
$t[16]='mesen_h3k9me3';
$t[17]='mesen_h4k8ac';
$t[18]='tro_h2a.z';
$t[19]='tro_h2ak5ac';
$t[20]='tro_h2bk120ac';
$t[21]='tro_h2bk12ac';
$t[22]='tro_h2bk5ac';
$t[23]='tro_h3k14ac';
$t[24]='tro_h3k18ac';
$t[25]='tro_h3k23ac';
$t[26]='tro_h3k27ac';
$t[27]='tro_h3k27me3';
$t[28]='tro_h3k36me3';
$t[29]='tro_h3k4ac';
$t[30]='tro_h3k4me1';
$t[31]='tro_h3k4me2';
$t[32]='tro_h3k4me3';
$t[33]='tro_h3k79me1';
$t[34]='tro_h3k79me2';
$t[35]='tro_h3k9ac';
$t[36]='tro_h3k9me3';
$t[37]='tro_h4k12ac';
$t[38]='tro_h4k8ac';
$t[39]='tro_h4k91ac';
$t[40]='H1_cell_line_h2a.z';
$t[41]='H1_cell_line_h2ak5ac';
$t[42]='H1_cell_line_h2bk120ac';
$t[43]='H1_cell_line_h2bk12ac';
$t[44]='H1_cell_line_h2bk15ac';
$t[45]='H1_cell_line_h2bk20ac';
$t[46]='H1_cell_line_h2bk5ac';
$t[47]='H1_cell_line_h3k14ac';
$t[48]='H1_cell_line_h3k18ac';
$t[49]='H1_cell_line_h3k23ac';
$t[50]='H1_cell_line_h3k23me2';
$t[51]='H1_cell_line_h3k27ac';
$t[52]='H1_cell_line_h3k27me3';
$t[53]='H1_cell_line_h3k36me3';
$t[54]='H1_cell_line_h3k4ac';
$t[55]='H1_cell_line_h3k4me1';
$t[56]='H1_cell_line_h3k4me2';
$t[57]='H1_cell_line_h3k4me3';
$t[58]='H1_cell_line_h3k56ac';
$t[59]='H1_cell_line_h3k79me1';
$t[60]='H1_cell_line_h3k79me2';
$t[61]='H1_cell_line_h3k9ac';
$t[62]='H1_cell_line_h3k9me3';
$t[63]='H1_cell_line_h4k20me1';
$t[64]='H1_cell_line_h4k5ac';
$t[65]='H1_cell_line_h4k8ac';
$t[66]='H1_cell_line_h4k91ac';
$t[67]='stem_h2a.z';
$t[68]='stem_h2ak5ac';
$t[69]='stem_h2bk120ac';
$t[70]='stem_h2bk12ac';
$t[71]='stem_h2bk5ac';
$t[72]='stem_h3k14ac';
$t[73]='stem_h3k18ac';
$t[74]='stem_h3k23ac';
$t[75]='stem_h3k27ac';
$t[76]='stem_h3k27me3';
$t[77]='stem_h3k36me3';
$t[78]='stem_h3k4ac';
$t[79]='stem_h3k4me1';
$t[80]='stem_h3k4me2';
$t[81]='stem_h3k4me3';
$t[82]='stem_h3k79me1';
$t[83]='stem_h3k9ac';
$t[84]='stem_h3k9me3';
$t[85]='stem_h4k8ac';
$t[86]='stem_h4k91ac';
$t[87]='cul_h2ak5ac';
$t[88]='cul_h2bk120ac';
$t[89]='cul_h2bk12ac';
$t[90]='cul_h2bk15ac';
$t[91]='cul_h2bk5ac';
$t[92]='cul_h3k14ac';
$t[93]='cul_h3k18ac';
$t[94]='cul_h3k23ac';
$t[95]='cul_h3k27ac';
$t[96]='cul_h3k27me3';
$t[97]='cul_h3k36me3';
$t[98]='cul_h3k4ac';
$t[99]='cul_h3k4me1';
$t[100]='cul_h3k4me2';
$t[101]='cul_h3k4me3';
$t[102]='cul_h3k79me1';
$t[103]='cul_h3k9ac';
$t[104]='cul_h3k9me3';
$t[105]='cul_h4k8ac';
$t[106]='cul_h4k91ac';
$ot=array();
$ot[0]='adi_h3k27ac';
$ot[1]='adr_h3k4me1';
$ot[2]='adr_h3k4me3';
$ot[3]='adr_h3k9me3';
$ot[4]='adr_h3k27ac';
$ot[5]='adr_h3k27me3';
$ot[6]='adr_h3k36me3';
$ot[7]='adult_h3k4me1';
$ot[8]='adult_h3k4me3';
$ot[9]='adult_h3k9me3';
$ot[10]='adult_h3k27me3';
$ot[11]='adult_h3k36me3';
$ot[12]='aorta_h3k4me1';
$ot[13]='aorta_h3k4me3';
$ot[14]='aorta_h3k9me3';
$ot[15]='aorta_h3k27ac';
$ot[16]='aorta_h3k27me3';
$ot[17]='aorta_h3k36me3';
$ot[18]='eso_h3k36me3';
$ot[19]='eso_h3k27me3';
$ot[20]='eso_h3k27ac';
$ot[21]='eso_h3k9me3';
$ot[22]='eso_h3k4me3';
$ot[23]='eso_h3k4me1';
$ot[24]='gas_h3k4me1';
$ot[25]='gas_h3k4me3';
$ot[26]='gas_h3k9me3';
$ot[27]='gas_h3k27ac';
$ot[28]='gas_h3k27me3';
$ot[29]='gas_h3k36me3';
$ot[30]='leftven_h3k4me1';
$ot[31]='leftven_h3k4me3';
$ot[32]='leftven_h3k9me3';
$ot[33]='leftven_h3k27ac';
$ot[34]='leftven_h3k27me3';
$ot[35]='leftven_h3k36me3';
$ot[36]='lung_h3k4me1';
$ot[37]='lung_h3k4me3';
$ot[38]='lung_h3k9me3';
$ot[39]='lung_h3k27ac';
$ot[40]='lung_h3k27me3';
$ot[41]='lung_h3k36me3';
$ot[42]='ovary_h3k4me1';
$ot[43]='ovary_h3k4me3';
$ot[44]='ovary_h3k9me3';
$ot[45]='ovary_h3k27ac';
$ot[46]='ovary_h3k27me3';
$ot[47]='ovary_h3k36me3';
$ot[48]='pan_h3k4me1';
$ot[49]='pan_h3k4me3';

$ot[50]='pan_h3k9me3';
$ot[51]='pan_h3k27ac';
$ot[52]='pan_h3k27me3';
$ot[53]='pan_h3k36me3';
$ot[54]='psoas_h3k4me1';
$ot[55]='psoas_h3k4me3';
$ot[56]='psoas_h3k9me3';
$ot[57]='psoas_h3k27ac';
$ot[58]='psoas_h3k27me3';
$ot[59]='psoas_h3k36me3';
$ot[60]='rightatri_h3k4me1';
$ot[61]='rightatri_h3k4me3';
$ot[62]='rightatri_h3k9me3';
$ot[63]='rightatri_h3k27ac';
$ot[64]='rightatri_h3k27me3';
$ot[65]='rightatri_h3k36me3';
$ot[66]='rightven_h3k4me1';
$ot[67]='rightven_h3k4me3';
$ot[68]='rightven_h3k9me3';
$ot[69]='rightven_h3k27ac';
$ot[70]='rightven_h3k27me3';
$ot[71]='rightven_h3k36me3';
$ot[72]='sigmo_h3k4me1';
$ot[73]='sigmo_h3k4me3';
$ot[74]='sigmo_h3k9me3';
$ot[75]='sigmo_h3k27ac';
$ot[76]='sigmo_h3k27me3';
$ot[77]='sigmo_h3k36me3';
$ot[78]='spleen_h3k4me1';
$ot[79]='spleen_h3k4me3';
$ot[80]='spleen_h3k9me3';
$ot[81]='spleen_h3k27ac';
$ot[82]='spleen_h3k27me3';
$ot[83]='spleen_h3k36me3';
$ot[84]='thymus_h3k4me1';
$ot[85]='thymus_h3k4me3';
$ot[86]='thymus_h3k9me3';
$ot[87]='thymus_h3k27ac';
$ot[88]='thymus_h3k27me3';
$ot[89]='thymus_h3k36me3';
$ot[90]='smallintestine_h3k4me1';
$ot[91]='smallintestine_h3k4me3';
$ot[92]='smallintestine_h3k9me3';
$ot[93]='smallintestine_h3k27ac';
$ot[94]='smallintestine_h3k27me3';
$ot[95]='smallintestine_h3k36me3';
$ot[96]='bladder_h3k4me1';
$ot[97]='bladder_h3k27ac';
$ot[98]='bladder_h3k36me3';
$chr = unserialize($_SESSION['number']);
$location1 = unserialize($_SESSION['lo1']);
$location2 = unserialize($_SESSION['lo2']);
$arraya = unserialize($_SESSION['a']);
$arrayo = unserialize($_SESSION['o']);
$arrayc = unserialize($_SESSION['c']);

function find($a,$b,&$c,&$c1,$t)
{
$d=$a.'_'.$b;
$y=array_search($d,$t);
if(array_search($d,$t))
{ 
  $y1='hm'.''.$y;
  array_push($c,$y1);
  array_push($c1,$d);

}

if($d=='mesen_h2ak5ac')
{
array_push($c,'hm0');
array_push($c1,'mesen_h2ak5ac');
}

}

function or_find($a,$b,&$c,&$c1,$t)
{
$d=$a.'_'.$b;
$y=array_search($d,$t);
if(array_search($d,$t))
{ 
  $y1='hm'.''.$y;
  array_push($c,$y1);
  array_push($c1,$d);

}
if($d=='adi_h3k27ac')
{
array_push($c,'hm0');
array_push($c1,'adi_h3k27ac');
}

}
//////////////////////////////////////////////////
function getc($b)
{

$n=count($b);
if($n==1)
{$a=$b[0];
 return $a;
}
if($n==2)
{
$a=$b[0].','.$b[1];
return $a;

}

else 
{
$a=$b[0].','.$b[1];
for($i=2;$i<$n;$i++)
{$a=$a.','.$b[$i];}
return $a;
}
}


echo "Result Matrix";
echo "\r\n";
if($arrayc[0]!=null)
{//ifififif
    $a0=$chr;//chr

    $a1=$location1;
	$a2=$location2;
	if($arrayc[0]!=null)
	$array1=$arrayc;
	else $array1=array();
	$array2=$arraya;
    $n=count($array1);
	$n1=count($array2);
	$c=array();//hm array
	$c1=array();//hm char array
	for($i=0;$i<$n;$i++)
	  {
	    for($j=0;$j<$n1;$j++)
		{ find($array1[$i],$array2[$j],$c,$c1,$t);}
		
	  }
	  
	  //print_r($c);
	  //print_r($c1);
	  $n=count($c);
	  if($n!=0)
	  {//aaa
	  $s=getc($c);
	  $s1='location'.','.$s;
	  $sql="select $s1 from $a0 where (location between $a1 and $a2) ";

			echo"Location,";
			$vn=count($c1);
			for($i=0;$i<$vn;$i++)           {
			if($i<($vn-1))
			echo"$c1[$i],";
			else 
			{echo"$c1[$i]";echo"\r\n";
			}
			}
         
		$conn=mysql_connect("localhost","root","000000");
		mysql_select_db("test");
        $res1=mysql_query($sql);
		$h=array();//single value 
		$m=0;
		while($row=mysql_fetch_row($res1))
		{
		$h[$m]=array();
		$nl=count($row);//clo of the row
		//print_r($row);
		//echo"<tr>";
		for($i=0;$i<$nl;$i++)
		{
		
		$h[$m][$i]=$row[$i];
		
		
		$r=$h[$m][$i];

		if($i<($nl-1))
			echo"$r,";
			else 
			{echo"$r";echo"\r\n";
			}
		
		
		}//for
		echo "\r\n";
		$m=$m+1;
		}//while
			
          
		                                                                                                                                                                                                                                                                                                                                
	    
		$_SESSION['xdata'] = serialize($h);	
		$_SESSION['hm'] = serialize($c1);
		

		//print_r($h);
		mysql_close();
		
		}//aaa

	}//ifififif

	



if($arrayo[0]!=null)
{//ififif
$a0=$chr;//chr

    $a1=$location1;
	$a2=$location2;
	$array2=$arraya;
	if($arrayo[0]!=null)
	$array1=$arrayo;
	else $array1=array();
    $n=count($array1);
	$n1=count($array2);
	$c=array();//hm array
	$c2=array();//hm char array
	for($i=0;$i<$n;$i++)
	  {
	    for($j=0;$j<$n1;$j++)
		{ or_find($array1[$i],$array2[$j],$c,$c2,$ot);}
		
	  }
	  
	  //print_r($c);
	  //print_r($c2);
	  $n=count($c);
	  if($n!=0)
	  {//if_0
	  $s=getc($c);
	  $s1='location'.','.$s;
	  $a00='or_'.$a0;
	  $sql="select $s1 from $a00 where (location between $a1 and $a2) ";
	  

			echo"Location ";
			$vn=count($c2);
			for($i=0;$i<$vn;$i++)           {
			if($i<($vn-1))
			echo"$c2[$i],";
			else 
			{echo"$c2[$i]";echo"\r\n";
			}
			}

		$conn=mysql_connect("localhost","root","000000");
		mysql_select_db("test");
        $res1=mysql_query($sql);
		$or_h=array();//single value 
		$m=0;
		while($row=mysql_fetch_row($res1))
		{
		$or_h[$m]=array();
		$nl=count($row);//clo of the row
		//print_r($row);
		//echo"<tr>";
		for($i=0;$i<$nl;$i++)
		{
		
		$or_h[$m][$i]=$row[$i];
		
		
		$r=$or_h[$m][$i];
		if($i<($nl-1))
			echo"$r,";
			else 
			{echo"$r";echo"\r\n";
			}
		
		}//for
	
		$m=$m+1;
		}//while
			
	            
		                                                                                                                                                                                                                                                                                                                                
	    
		//$_SESSION['xdata'] = serialize($h);	
		//$_SESSION['hm'] = serialize($c1);
        $_SESSION['or_xdata'] = serialize($or_h);	
		$_SESSION['or_hm'] = serialize($c2);
		//print_r($or_h);
		
		}//if_0
}//ififif


	?>
