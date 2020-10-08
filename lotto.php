<?php
	session_start (); 
	$username = $_SESSION["username"];
	if ($username == NULL) {
		header ("Location: login.php?redir=lotto.php");
	}
?>
<h2>超神準大樂透預測王</h2>
<hr>
<?php
	$count = 0; //目前取得的數字個數
	while ($count < 6) {
		$t = rand(1, 49); //先取得一個候選的隨機數
		if (in_array($t, $lotto)) continue; 
		$lotto[] = $t;
		$count ++;
	}
	sort($lotto);
	foreach($lotto as $no) {
		echo $no . ", ";
	}

	echo "<br>特別號："; 

	$spec = rand(1, 49);
	while (in_array($spec, $lotto))
		$spec = rand(1, 49);
	echo $spec;
?>
<hr>
<iframe width="560" height="315" src="https://www.youtube.com/embed/B-I2guiXzRA" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<hr>
不準免錢，有中歡迎斗內...