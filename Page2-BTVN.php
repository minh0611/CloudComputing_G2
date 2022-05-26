<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php #bài 2: Max, Min
$so1 = array(2);
$so2 = array(9);
$so3 = array(4);
$max = max(max($so1),max($so2),max($so3));
$min = min(min($so1),min($so2),min($so3));
echo "Gia tri Max: ".$max."<br />";
echo "Gia tri Min: ".$min."<br />";
?><br><br>
<?php # bài 1: Tuổi
function getAge($birthdate = '25-03-2002') {
	if ($birthdate == '25-03-2002') return 'Unknown';

	$bits = explode('-', $birthdate);
	$age = date('Y') - $bits[0] - 1;

	$arr[1] = 'm';
	$arr[2] = 'd';

	for ($i = 1; $arr[$i]; $i++){
		$n = date($arr[$i]);
		if ($n < $bits[$i])
			break;
		if ($n > $bits[$i]){
			++$age;
			break;
		}
	}
	return $age;
}
?>
<br><br>
<!-- Bài 5: Bảng cửu chương-->
<table align="left" border="1px" >
	<?php
	for($i = 1; $i <= 9; $i++){
		echo "<tr>";
		for ($j = 2; $j <=9; $j++){
			echo "<td> $i * $j = ".$i * $j."</td>";
		}
		echo "</td>";
	}
	?>
</table>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php # Bài 6: chèn phần tử vào vị trí bất kì của mảng
$old = array( '9 - ','8 - ','7 - ','6 - ','5' );
echo 'Mảng old: '."<br />";
foreach ($old as $k) {
	echo "$k";
}
echo "<br />";
$new = '99 - ';
array_splice($old, 4, 0, $new);
echo "Sau khi chèn phần tử '99' thì mảng new: "."<br />";
foreach($old as $k){
	echo "$k";
}
echo "<br />";
?>
<br><br>
<?php # Bài 7: 

echo strlen("btec.fpt.edu.vn");
?>
<br><br>
<?php
 $birthDate = "25/03/2000";
  $birthDate = explode("/", $birthDate);
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
 echo "<br> tuổi bằng:" . $age;

?>
</body>
</html>