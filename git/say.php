<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
	<form name="form" method="post">
		請輸入標題0：<input type="text" name="text_box0" size="50"/><br>
        請輸入選項1：<input type="text" name="text_box1" size="50"/><br>
		請輸入選項2：<input type="text" name="text_box2" size="50"/><br>
		請輸入選項3：<input type="text" name="text_box3" size="50"/><br>
		請選擇文章編號：<input type="text" name="text_boxs" size="30"/><br>
		※請選擇空的投票區喔！主題是數字的皆為空的投票區！<a href="main.php"  target="_blank">點我回主頁查看空的投票區！</a>※<br>
        <input type="submit" id="search-submit" value="submit" />
    </form>
	<?php
	if(isset($_POST['text_box0'], $_POST['text_box1'], $_POST['text_box2'], $_POST['text_box3'], $_POST['text_boxs'])) {
	$t0 = $_POST['text_box0'];
	$t1 = $_POST['text_box1'];
	$t2 = $_POST['text_box2'];
	$t3 = $_POST['text_box3'];
	$ts = $_POST['text_boxs'];
	
	$ff="subtxt$ts.txt";
	$fp=fopen($ff,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array=explode(" ",$getnum);
	
	if($ta_array[7] == "notwrite"){echo "不可創造投票";}
	else
	{
		$ta_array = array($t0, $t1, 0, $t2, 0, $t3, 0, "notwrite");
		$ta = implode(" ", $ta_array);
		$myFile = "subtxt$ts.txt";
		$fh = fopen($myFile, 'w') or die("can't open file");
		fwrite($fh, $ta);
		fclose($fh);
	}
	}
	?>
</body>
</html>

