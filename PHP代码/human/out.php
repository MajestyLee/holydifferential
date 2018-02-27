<?php
session_start();
$filename='Export-batch.csv';
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
if(isset($_POST['submit2']))//2
{
	$ce1 = array(11, 13, 17, 7, 8, 9);
	$ce2 = array(31, 33, 37, 27, 28, 29);
	$ce3 = array(56, 58, 63, 52, 53, 54);
	$ce4 = array(80, 82, 85, 76, 77, 78);
	$ce5 = array(100, 102, 105, 96, 97, 98);
	$org = array(array(2, 3, 4, 5, 6, 7), array(13, 14, 15, 16, 17, 18), array(19, 20, 21, 22, 23, 24), array(25, 26, 27, 28, 29, 30), array(31, 32, 33, 34, 35, 36), array(37, 38, 39, 40, 41, 42), array(43, 44, 45, 46, 47, 48), array(49, 50, 51, 52, 53, 54), array(55, 56, 57, 58, 59, 60), array(61, 62, 63, 64, 65, 66), array(67, 68, 69, 70, 71, 72), array(73, 74, 75, 76, 77, 78), array(79, 80, 81, 82, 83, 84), array(85, 86, 87, 88, 89, 90), array(91, 92, 93, 94, 95, 96));
	$orname = array("adr", "aorta", "eso", "gas", "leftven", "lung", "ovary", "pan", "psoas", "rightven", "rightatri", "sigmo", "spleen", "thymus", "smallintestine");
	$file = $_POST['yu'];
	// print_r $file
	$thre = $_POST['yu1'];
	//print_r($file);
	$file = explode(";", $file);
	$bin = array();
	$chr = array();
	$hmdis = array();
	//print_r(count($file));
	if ($_POST['dfmethod']=='hm_dis') {
		//print_r($file);
		for ($qq = 0; $qq < count($file); $qq++) {
			$mm = $file[$qq];
			$file[$qq] = explode(",", $file[$qq]);
			if (count($file[$qq]) > 2) {
				//print_r(count($file[$qq]));
				$llo = array();
				$ll = array();
				$location1 = $file[$qq][1];
				$location2 = $file[$qq][2];
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/x_chr/x_" . $file[$qq][0] . ".txt";
				// $txt_name = "/Users/majestylee/Desktop/chr3/x_chr3.txt";
				$myfile = fopen($txt_name, "r");
				while (!feof($myfile)) {
					$temp = fgets($myfile);
					$pieces = explode(" ", $temp);
					if ((int)$pieces[0] >= (int)$location1 && (int)$pieces[0] <= (int)$location2) {
						array_push($ll, $pieces);
						array_push($bin, $pieces[0]);
						array_push($chr, $file[$qq][0]);
						//print_r($chr);
					}
					if ((int)$pieces[0] > (int)$location2) {
						break;
					}
				}
				//print_r($location1);
// some code to be executed....
				fclose($myfile);
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/or_chr/or_" . $file[$qq][0] . ".txt";
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
				//echo "string";
				$array1 = $_POST['celltype'];
				$array2 = $_POST['a'];
				$array3 = $_POST['o'];
				$n = count($array1);
				$n3 = count($array3);
				$n1 = count($array2);
				$n_sum = $n + $n3;
				$c1 = array();//hm char array
				$nn = count($ll);
				//echo $ll[1][$ce1[1]];
				for ($ii = 0; $ii < $nn; $ii++) {
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
					//echo "557"."<br>";
					array_push($hmdis, (string)$han_all);
				}
			}
		}
		echo "Samples_Modification:";
		echo "\r\n";
		echo "chr,location,hanming_distance\r\n";
		//print_r($chr);
	}
	elseif($_POST['dfmethod']=='shannon') {
		//print_r($file);
		for ($qq = 0; $qq < count($file); $qq++) {
			$mm = $file[$qq];
			$file[$qq] = explode(",", $file[$qq]);
			if (count($file[$qq]) > 2) {
				//print_r(count($file[$qq]));
				$llo = array();
				$ll = array();
				$location1 = $file[$qq][1];
				$location2 = $file[$qq][2];
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/x_chr/x_" . $file[$qq][0] . ".txt";
				// $txt_name = "/Users/majestylee/Desktop/chr3/x_chr3.txt";
				$myfile = fopen($txt_name, "r");
				while (!feof($myfile)) {
					$temp = fgets($myfile);
					$pieces = explode(" ", $temp);
					if ((int)$pieces[0] >= (int)$location1 && (int)$pieces[0] <= (int)$location2) {
						array_push($ll, $pieces);
						array_push($bin, $pieces[0]);
						array_push($chr, $file[$qq][0]);
						//print_r($chr);
					}
					if ((int)$pieces[0] > (int)$location2) {
						break;
					}
				}
				//print_r($location1);
// some code to be executed....
				fclose($myfile);
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/or_chr/or_" . $file[$qq][0] . ".txt";
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
				//echo "string";
				$array1 = $_POST['celltype'];
				$array2 = $_POST['a'];
				$array3 = $_POST['o'];
				$n = count($array1);
				$n3 = count($array3);
				$n1 = count($array2);
				$n_sum = $n + $n3;
				$c1 = array();//hm char array
				$nn = count($ll);
				//echo $ll[1][$ce1[1]];
				for ($ii = 0; $ii < $nn; $ii++) {
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
					$shdata = array();
					$ssum = 0.0;
					for ($i = 0; $i < $n_sum; $i++) {
						//echo $c[$i] . "<br>";
						$ssum = $ssum + (float)$c[$i];
					}
					//echo $ssum;
					for ($i = 0; $i < $n_sum; $i++) {
						//echo $c[$i] . "<br>";
						if ($c[$i] == 0){
							$ps = 0.0;
						}
						else {
							$ps = asin(sqrt((float)$c[$i] / $ssum));
						}
						array_push($shdata,$ps);
					}
					$shdata2 = $shdata;
					sort($shdata);
					$mr =0.0;
					//echo $shdata[1];
					if ($n_sum % 2 == 0){
						$mr = ($shdata[$n_sum/2-1]+$shdata[$n_sum/2])/2;
					}
					else{
						$mr = $shdata[(int)($n_sum/2)];
					}
					//echo $mr;
					$sh3 = array();
					for ($i = 0; $i < $n_sum; $i++)
					{
						$ttee = $c[$i] - $mr;
						//echo $ttee;
						array_push($sh3,$ttee);
					}
					$sh2 = $sh3;
					sort($sh3);
					$sr = 0.0;
					//echo $sh3[1];
					if ($n_sum % 2 == 0){
						$sr = ($sh3[$n_sum/2-1]+$sh3[$n_sum/2])/2;
					}
					else{
						$sr = $sh3[(int)($n_sum/2)];
					}
					//echo $sr;
					$urs = array();
					$wurs = array();
					for ($i = 0; $i < $n_sum; $i++) {
						array_push($urs,sh2[$i]/(5 * $sr + 0.0001));
						//echo $sh2[$i];
					}
					//echo $urs[2];
					$wurs_all = 0.0;
					$wh_all = 0.0;
					for ($i = 0; $i < $n_sum; $i++) {
						if (abs($urs[$i]) > 1){
							array_push($wurs,0);
						}
						else{
							array_push($wurs,(1- $urs[$i] * $urs[$i]) * (1- $urs[$i] * $urs[$i]));
						}
					}
					//echo $wurs[2];
					for ($i = 0; $i < $n_sum; $i++) {
						$wh_all = $wh_all + $wurs[$i] * $sh2[$i];
						$wurs_all = $wurs_all + $wurs[$i];
					}
					if ($wurs_all == 0){
						$Tbr = 0.0;
					}
					else{
						$Tbr = $wh_all / $wurs_all;
					}
					//echo $Tbr;
					$hrs_all = 0.0;
					$hr_hanlde = array();
					for ($i = 0; $i < $n_sum; $i++) {
						array_push($hr_hanlde,abs($sh2[$i]-$Tbr));
						$hrs_all = $hrs_all + abs($sh2[$i]-$Tbr);
					}
					//echo $hr_hanlde[2];
					$Hp = 0.0;
					for ($i = 0; $i < $n_sum; $i++) {
						if ($hrs_all == 0){
							$psr = 0.0;
						}
						else{
							$psr = $hr_hanlde[$i] / $hrs_all;
						}
						if ($psr == 0.0){
							$Hp = $Hp + 0.0;
						}
						elseif ($psr == 1){
							$Hp = $Hp - 1;
						}
						else{
							$Hp = $Hp + (-$psr / log($psr,2));
						}
					}
					//echo "<br>";
					array_push($hmdis,$Hp);
				}
			}
		}
		echo "Samples_Modification:";
		echo "\r\n";
		echo "chr,location,Hp_distance\r\n";
		//print_r($chr);
	}
	else{
		for ($qq = 0; $qq < count($file); $qq++) {
			$mm = $file[$qq];
			$file[$qq] = explode(",", $file[$qq]);
			if (count($file[$qq]) > 2) {
				//print_r(count($file[$qq]));
				$llo = array();
				$ll = array();
				$location1 = $file[$qq][1];
				$location2 = $file[$qq][2];
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/x_chr/x_" . $file[$qq][0] . ".txt";
				// $txt_name = "/Users/majestylee/Desktop/chr3/x_chr3.txt";
				$myfile = fopen($txt_name, "r");
				while (!feof($myfile)) {
					$temp = fgets($myfile);
					$pieces = explode(" ", $temp);
					if ((int)$pieces[0] >= (int)$location1 && (int)$pieces[0] <= (int)$location2) {
						array_push($ll, $pieces);
						array_push($bin, $pieces[0]);
						array_push($chr, $file[$qq][0]);
						//print_r($chr);
					}
					if ((int)$pieces[0] > (int)$location2) {
						break;
					}
				}
				//print_r($location1);
// some code to be executed....
				fclose($myfile);
				$txt_name = "/Volumes/MajestyLee/graduation/chr_data/or_chr/or_" . $file[$qq][0] . ".txt";
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
				//echo "string";
				$array1 = $_POST['celltype'];
				$array2 = $_POST['a'];
				$array3 = $_POST['o'];
				$n = count($array1);
				$n3 = count($array3);
				$n1 = count($array2);
				$n_sum = $n + $n3;
				$c1 = array();//hm char array
				$nn = count($ll);
				//echo $ll[1][$ce1[1]];
				for ($ii = 0; $ii < $nn; $ii++) {
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
					$shdata = array();
					$ssum = 0.0;
					for ($i = 0; $i < $n_sum; $i++) {
						//echo $c[$i] . "<br>";
						$ssum = $ssum + (float)$c[$i];
					}
					//echo $ssum;
					for ($i = 0; $i < $n_sum; $i++) {
						//echo $c[$i] . "<br>";
						if ($c[$i] == 0) {
							$ps = 0.0;
						} else {
							$ps = asin(sqrt((float)$c[$i] / $ssum));
						}
						array_push($shdata, $ps);
					}
					$length = count($shdata);
					$average = array_sum($shdata) / $length;
					$count = 0;
					foreach ($shdata as $v) {
						$count += pow($average - $v, 2);
					}
					$variance = $count / $length;
					if ($average > 0.0) {
						$diff = $variance / $average;
					} else {
						$diff = 0;
					}
					array_push($hmdis, $diff);
				}
			}
		}
		echo "Samples_Modification:";
		echo "\r\n";
		echo "chr,location,Df_distance\r\n";
	}
	//print_r($chr);
	$_SESSION['xxdata'] = serialize($hmdis);
	$_SESSION['hmm'] = serialize($bin);
	$_SESSION['ccc'] = serialize($chr);
	$n=count($bin);//����������
	$n=$n-1;
	$n1=count($hmdis);//������
	$n1=$n1-1;
	$hhmdis = unserialize($_SESSION['xxdata']);
	$bbin = unserialize($_SESSION['hmm']);
	$cchr = unserialize($_SESSION['ccc']);
	$hmdis_temp = $hhmdis;
	rsort($hmdis_temp);
	$lll = $thre / 100 * ($n1+1);
	$ttt = $hmdis_temp[(int)$lll];
	for($j=0;$j<$n1;$j++)
	{
		if ($hhmdis[$j] >= $ttt)
		{
		echo $cchr[$j];
		echo ",";
		echo $bbin[$j];
		echo ",";
		echo $hhmdis[$j];
		echo "\r\n";
		}
	}
	echo $cchr[$n1];
	echo ",";
	echo $bbin[$n1];
	echo ",";
	echo $hhmdis[$n1];
	echo "\r\n";
	exit();

}
?>