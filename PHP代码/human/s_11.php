<?php
session_start();
$arrayo=$_GET['o'];
$arrayo=explode(',',$arrayo);
$arrayc=$_GET['c'];
$arrayc=explode(',',$arrayc);
$arraya=$_GET['a'];$arraya=explode(',',$arraya);
$chr=$_GET['number'];
$location1=$_GET['lo1'];
$location2=$_GET['lo2'];
$r=0;
if($arrayc[0]!=Null && $arrayo[0]==Null){
	$r=1;
}elseif ($arrayc[0]==Null && $arrayo[0]!=Null) {
	$r=2;
}elseif ($arrayc[0]!=Null && $arrayo[0]!=Null) {
	$r=3;
}
	$_SESSION['r'] = serialize($r);
?>
<?php

$t=array();
$t[0]='H1_cell_line_h3k4me1';
$t[1]='H1_cell_line_h3k4me3';
$t[2]='H1_cell_line_h3k9me3';
$t[3]='H1_cell_line_h3k27ac';
$t[4]='H1_cell_line_h3k27me3';
$t[5]='H1_cell_line_h3k36me3';
$t[6]='mesen_h3k4me1';
$t[7]='mesen_h3k4me3';
$t[8]='mesen_h3k9me3';
$t[9]='mesen_h3k27ac';
$t[10]='mesen_h3k27me3';
$t[11]='mesen_h3k36me3';
$t[12]='tro_h3k4me1';
$t[13]='tro_h3k4me3';
$t[14]='tro_h3k9me3';
$t[15]='tro_h3k27ac';
$t[16]='tro_h3k27me3';
$t[17]='tro_h3k36me3';
$t[18]='stem_h3k4me1';
$t[19]='stem_h3k4me3';
$t[20]='stem_h3k9me3';
$t[21]='stem_h3k27ac';
$t[22]='stem_h3k27me3';
$t[23]='stem_h3k36me3';
$t[24]='cul_h3k4me1';
$t[25]='cul_h3k4me3';
$t[26]='cul_h3k9me3';
$t[27]='cul_h3k27ac';
$t[28]='cul_h3k27me3';
$t[29]='cul_h3k36me3';
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
 $_SESSION['number'] = serialize($chr);
 $_SESSION['lo1'] = serialize($location1);
 $_SESSION['lo2'] = serialize($location2);
 $_SESSION['o'] = serialize($arrayo);
 $_SESSION['c'] = serialize($arrayc);
 $_SESSION['a'] = serialize($arraya);

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


echo "<div id=\"dfdf\" style=\"width:1000px\"><iframe width=\"1300\" height=\"400\" src=\"examples/line-basic/index1.php\" scrolling=\"no\" ></iframe></div> ";
echo "<p></p>";
/*echo "<a>Result Matrix:</a>";echo "</br>";
echo "
<input type=\"checkbox\" a href=\"#\"  onclick=\"window.open('s_1_1.php','go1','scrollbars=yes,top=100,left=0,resizable=yes,alwaysRaised=yes,z-look=yes,width=1238,height=350')\" value=\"Open in a new page\" name=\"B1\" >Open in a new page";
echo "</br>";*/
echo "
<input type=\"checkbox\" a href=\"#\"  onclick=\"window.open('s_11_1_out.php','go1','scrollbars=yes,top=100,left=0,resizable=yes,alwaysRaised=yes,z-look=yes,width=1238,height=350')\" value=\"Open in a new page\" name=\"B1\" >Export to CSV file";
echo "<p></p>";
$judge=0;
$ll=array();
$ce1 = array(11,13,17,7,8,9);
$ce2 = array(31,33,37,27,28,29);
$ce3 = array(56,58,63,52,53,54);
$ce4 = array(80,82,85,76,77,78);
$ce5 = array(100,102,105,96,97,98);
$org = array(array(2,3,4,5,6,7),array(13,14,15,16,17,18),array(19,20,21,22,23,24),array(25,26,27,28,29,30),array(31,32,33,34,35,36),array(37,38,39,40,41,42),array(43,44,45,46,47,48),array(49,50,51,52,53,54),array(55,56,57,58,59,60),array(61,62,63,64,65,66),array(67,68,69,70,71,72),array(73,74,75,76,77,78),array(79,80,81,82,83,84),array(85,86,87,88,89,90),array(91,92,93,94,95,96));
$orname = array("adr","aorta","eso","gas","leftven","lung","ovary","pan","psoas","rightven","rightatri","sigmo","spleen","thymus","smallintestine");
$bin = array();
$llo = array();
if($arrayc[0]!=null || $arrayo[0]!=null) {//ifififif
    $a0 = $chr;//chr
    $txt_name = "/Volumes/MajestyLee/graduation/chr_data/x_chr/x_" . $chr . ".txt";
    // $txt_name = "/Users/majestylee/Desktop/chr3/x_chr3.txt";
    $myfile = fopen($txt_name, "r");
    while (!feof($myfile)) {
        $temp = fgets($myfile);
        $pieces = explode(" ", $temp);
        if ((int)$pieces[0] >= (int)$location1 && (int)$pieces[0] <= (int)$location2) {
            array_push($ll, $pieces);
            array_push($bin, $pieces[0]);
        }
        if ((int)$pieces[0] > (int)$location2) {
            break;
        }
    }
// some code to be executed....
    fclose($myfile);
    $txt_name = "/Volumes/MajestyLee/graduation/chr_data/or_chr/or_" . $chr . ".txt";
    // $txt_name = "/Users/majestylee/Desktop/chr3/or_chr3.txt";
    $myfile = fopen($txt_name, "r");
    while (!feof($myfile)) {
        $temp = fgets($myfile);
        $pieces = explode(" ", $temp);
        if ((int)$pieces[0] >= (int)$location1 && (int)$pieces[0] <= (int)$location2) {
            array_push($llo, $pieces);

        }
        if ((int)$pieces[0] > (int)$location2) {
            break;
        }
    }
// some code to be executed....
    fclose($myfile);
    $a1 = $location1;
    $a2 = $location2;
    $array1 = $arrayc;
    $array2 = $arraya;
    $array3 = $arrayo;
    $n = count($array1);
    $n3 = count($array3);
    $n1 = count($array2);
    $n_sum = $n + $n3;
    $c1 = array();//hm char array
    $nn = count($ll);
    //echo $ll[1][$ce1[1]];
    $hmdis = array();
    for ($ii = 0; $ii < $nn; $ii++)
    {
        $c = array();//hm array
        for ($i = 0; $i < $n3; $i++) {
            for ($ior = 0; $ior < 15; $ior++) {
                if ($array1[$i] == $orname[$ior]) {
                    if ($array2[0] == 'h3k4me1') {
                        array_push($c, $llo[$ii][$org[$ior][0]]);
                        //echo $ll[$ii][$ce1[0]]."<br>";
                    } elseif ($array2[0] == 'h3k4me3') {
                        array_push($c, $llo[$ii][$org[$ior][1]]);
                    } elseif ($array2[0] == 'h3k9me3') {
                        array_push($c, $llo[$ii][$org[$ior][2]]);
                    } elseif ($array2[0] == 'h3k27ac') {
                        array_push($c, $llo[$ii][$org[$ior][3]]);
                    } elseif ($array2[0] == 'h3k27me3') {
                        array_push($c, $llo[$ii][$org[$ior][4]]);
                    } else {
                        array_push($c, $llo[$ii][$org[$ior][5]]);
                    }
                }
            }
        }
        for ($i = 0; $i < $n; $i++) {
            if ($array1[$i] == "H1_cell_line") {
                if ($array2[0] == 'h3k4me1') {
                    array_push($c, $ll[$ii][$ce1[0]]);
                    //echo $ll[$ii][$ce1[0]]."<br>";
                } elseif ($array2[0] == 'h3k4me3') {
                    array_push($c, $ll[$ii][$ce1[1]]);
                } elseif ($array2[0] == 'h3k9me3') {
                    array_push($c, $ll[$ii][$ce1[2]]);
                } elseif ($array2[0] == 'h3k27ac') {
                    array_push($c, $ll[$ii][$ce1[3]]);
                } elseif ($array2[0] == 'h3k27me3') {
                    array_push($c, $ll[$ii][$ce1[4]]);
                } else {
                    array_push($c, $ll[$ii][$ce1[5]]);
                }
            }
            if ($array1[$i] == "mesen") {
                if ($array2[0] == 'h3k4me1') {
                    array_push($c, $ll[$ii][$ce2[0]]);
                } elseif ($array2[0] == 'h3k4me3') {
                    array_push($c, $ll[$ii][$ce2[1]]);
                } elseif ($array2[0] == 'h3k9me3') {
                    array_push($c, $ll[$ii][$ce2[2]]);
                } elseif ($array2[0] == 'h3k27ac') {
                    array_push($c, $ll[$ii][$ce2[3]]);
                } elseif ($array2[0] == 'h3k27me3') {
                    array_push($c, $ll[$ii][$ce2[4]]);
                } else {
                    array_push($c, $ll[$ii][$ce2[5]]);
                }
            }
            if ($array1[$i] == "tro") {
                if ($array2[0] == 'h3k4me1') {
                    array_push($c, $ll[$ii][$ce3[0]]);
                } elseif ($array2[0] == 'h3k4me3') {
                    array_push($c, $ll[$ii][$ce3[1]]);
                } elseif ($array2[0] == 'h3k9me3') {
                    array_push($c, $ll[$ii][$ce3[2]]);
                } elseif ($array2[0] == 'h3k27ac') {
                    array_push($c, $ll[$ii][$ce3[3]]);
                } elseif ($array2[0] == 'h3k27me3') {
                    array_push($c, $ll[$ii][$ce3[4]]);
                } else {
                    array_push($c, $ll[$ii][$ce3[5]]);
                }
            }
            if ($array1[$i] == "stem") {
                if ($array2[0] == 'h3k4me1') {
                    array_push($c, $ll[$ii][$ce4[0]]);
                } elseif ($array2[0] == 'h3k4me3') {
                    array_push($c, $ll[$ii][$ce4[1]]);
                } elseif ($array2[0] == 'h3k9me3') {
                    array_push($c, $ll[$ii][$ce4[2]]);
                } elseif ($array2[0] == 'h3k27ac') {
                    array_push($c, $ll[$ii][$ce4[3]]);
                } elseif ($array2[0] == 'h3k27me3') {
                    array_push($c, $ll[$ii][$ce4[4]]);
                } else {
                    array_push($c, $ll[$ii][$ce4[5]]);
                }
            }
            if ($array1[$i] == "cul") {
                if ($array2[0] == 'h3k4me1') {
                    array_push($c, $ll[$ii][$ce5[0]]);
                } elseif ($array2[0] == 'h3k4me3') {
                    array_push($c, $ll[$ii][$ce5[1]]);
                } elseif ($array2[0] == 'h3k9me3') {
                    array_push($c, $ll[$ii][$ce5[2]]);
                } elseif ($array2[0] == 'h3k27ac') {
                    array_push($c, $ll[$ii][$ce5[3]]);
                } elseif ($array2[0] == 'h3k27me3') {
                    array_push($c, $ll[$ii][$ce5[4]]);
                } else {
                    array_push($c, $ll[$ii][$ce5[5]]);
                }
            }
        }
        //print_r($c);
        //print_r($c1);
        $hanming = 0;
        $th = 10;
        //$binary = array();
        for ($i = 0; $i < $n_sum; $i++) {
            //echo $c[$i] . "<br>";
            if ((int)$c[$i] > $th) {
                //array_push($binary, '1');
                $hanming++;
            } //else {
                //array_push($binary, '0');
            //}
        }
        $han_all = $hanming * ($n_sum - $hanming) * 2;
        //echo $han_all."<br>";
        array_push($hmdis, (string)$han_all);
    }
    if ($hmdis != 0) {
        $judge += 1;
    }
    //echo"</tbody>
    //</table>"	;

    $_SESSION['xdata'] = serialize($hmdis);
    $_SESSION['hm'] = serialize($bin);


    //print_r($h);
    //$tem = count($hmdis);
    //for ($jj=0;$jj < $hmdis;$jj++){
        //echo $hmdis[15]."<br>";
    //echo $n;
    //echo $array2[0]."<br>";
    //echo $llo[0][17];
    //}
}//ififif
$emp=$judge==0?0:1;
echo "taohan$emp";

	?>