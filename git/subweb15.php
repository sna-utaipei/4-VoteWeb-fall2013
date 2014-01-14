<html>
<head>
</head>
<body>
<?php
	$fname="subtxt15.txt";
	$fp=fopen($fname,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array=explode(" ",$getnum);
?>
標題0：<?php echo $ta_array[0]; ?> <br>
選項1：「<?php echo $ta_array[1]; ?>」有<?php echo $ta_array[2]; ?>票<br>
選項2：「<?php echo $ta_array[3]; ?>」有<?php echo $ta_array[4]; ?>票<br>
選項3：「<?php echo $ta_array[5]; ?>」有<?php echo $ta_array[6]; ?>票<br>
<form name="form" method="post">
	請輸入欲投選項：<input type="text" name="vote" size="30"/><br>
	<input type="submit" id="search-submit" value="submit"/>
</form>
<?php
	if(isset($_POST['vote'])) 
	{
		$value = "cookie15";
		setcookie("TestCookie",$value,time()+30*24*3600);//發送cookie
		if($_COOKIE['TestCookie']==$value){echo "您已投過票囉！";}
		else
		{
			$v1 = $_POST['vote'];
			$v2 = $v1*2;
			$ta_array[$v2] = $ta_array[$v2]+1;
			$ta = implode(" ", $ta_array);
			$myFile = "subtxt15.txt";
			$fh = fopen($myFile, 'w') or die("can't open file");
			fwrite($fh, $ta);
			fclose($fh);
		}
	}
?>
	<div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=182021418670222";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-comments" data-href="http://meta4.web44.net/subweb15.php" data-width="900" data-numposts="5" data-colorscheme="light"></div>
</body>
</html>