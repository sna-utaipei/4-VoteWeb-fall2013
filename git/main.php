<html>
<head>
	<meta charset="UTF-8">
    <link href="first.css" type="text/css" rel="stylesheet"/>
</head>
<body>
    <h1>VoteWeb - 投票網</h1>
    <a href="./say.php"><button WIDTH="200" style="WIDTH: 140px; HEIGHT: 90px"><h2>發新話題</h2></button></a><br><br>
    <div class="fb-like" data-href="http://meta4.web44.net/" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div><br>
    <div class="fb-send" data-href="http://meta4.web44.net/" data-colorscheme="light"></div><br>
	
    <!--傳送外掛-->
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=182021418670222";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <!--按讚外掛-->
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=182021418670222";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    <br>
	<b class="b">主題是「No.數字」皆為可使用的空投票區~</b><br>
    <?php
	$f01="subtxt01.txt";
	$fp=fopen($f01,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array1=explode(" ",$getnum);
	
	$f02="subtxt02.txt";
	$fp=fopen($f02,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array2=explode(" ",$getnum);
	
	$f03="subtxt03.txt";
	$fp=fopen($f03,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array3=explode(" ",$getnum);
	
	$f04="subtxt04.txt";
	$fp=fopen($f04,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array4=explode(" ",$getnum);
	
	$f05="subtxt05.txt";
	$fp=fopen($f05,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array5=explode(" ",$getnum);
	
	$f06="subtxt06.txt";
	$fp=fopen($f06,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array6=explode(" ",$getnum);
	
	$f07="subtxt07.txt";
	$fp=fopen($f07,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array7=explode(" ",$getnum);
	
	$f08="subtxt08.txt";
	$fp=fopen($f08,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array8=explode(" ",$getnum);
	
	$f09="subtxt09.txt";
	$fp=fopen($f09,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array9=explode(" ",$getnum);
	
	$f10="subtxt10.txt";
	$fp=fopen($f10,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array10=explode(" ",$getnum);
	?>
    <table style="border: 5px double rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 300px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
    	<tbody>
    		<tr>
    			<td><a href="subweb01.php"><?php echo $ta_array1[0]; ?></a></td>
    		</tr>
    		<tr>
    			<td><a href="subweb02.php"><?php echo $ta_array2[0]; ?></a></td>
    		</tr>
    		<tr>
    			<td><a href="subweb03.php"><?php echo $ta_array3[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb04.php"><?php echo $ta_array4[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb05.php"><?php echo $ta_array5[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb06.php"><?php echo $ta_array6[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb07.php"><?php echo $ta_array7[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb08.php"><?php echo $ta_array8[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb09.php"><?php echo $ta_array9[0]; ?></td>
    		</tr>
    		<tr>
    			<td><a href="subweb10.php"><?php echo $ta_array10[0]; ?></td>
    		</tr>
    	</tbody>
    </table>
	<?php
	$f11="subtxt11.txt";
	$fp=fopen($f11,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array11=explode(" ",$getnum);
	
	$f12="subtxt12.txt";
	$fp=fopen($f12,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array12=explode(" ",$getnum);
	
	$f13="subtxt13.txt";
	$fp=fopen($f13,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array13=explode(" ",$getnum);
	
	$f14="subtxt14.txt";
	$fp=fopen($f14,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array14=explode(" ",$getnum);
	
	$f15="subtxt15.txt";
	$fp=fopen($f15,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array15=explode(" ",$getnum);
	
	$f16="subtxt16.txt";
	$fp=fopen($f16,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array16=explode(" ",$getnum);
	
	$f17="subtxt17.txt";
	$fp=fopen($f17,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array17=explode(" ",$getnum);
	
	$f18="subtxt18.txt";
	$fp=fopen($f18,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array18=explode(" ",$getnum);
	
	$f19="subtxt19.txt";
	$fp=fopen($f19,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array19=explode(" ",$getnum);
	
	$f20="subtxt20.txt";
	$fp=fopen($f20,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array20=explode(" ",$getnum);
	?>
    <table style="border: 5px double rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 300px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
        <tbody>
            <tr>
                <td><a href="subweb11.php"><?php echo $ta_array11[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb12.php"><?php echo $ta_array12[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb13.php"><?php echo $ta_array13[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb14.php"><?php echo $ta_array14[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb15.php"><?php echo $ta_array15[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb16.php"><?php echo $ta_array16[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb17.php"><?php echo $ta_array17[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb18.php"><?php echo $ta_array18[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb19.php"><?php echo $ta_array19[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb20.php"><?php echo $ta_array20[0]; ?></td>
            </tr>
        </tbody>
    </table>
	<?php
	$f21="subtxt21.txt";
	$fp=fopen($f21,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array21=explode(" ",$getnum);
	
	$f22="subtxt22.txt";
	$fp=fopen($f22,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array22=explode(" ",$getnum);
	
	$f23="subtxt23.txt";
	$fp=fopen($f23,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array23=explode(" ",$getnum);
	
	$f24="subtxt24.txt";
	$fp=fopen($f24,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array24=explode(" ",$getnum);
	
	$f25="subtxt25.txt";
	$fp=fopen($f25,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array25=explode(" ",$getnum);
	
	$f26="subtxt26.txt";
	$fp=fopen($f26,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array26=explode(" ",$getnum);
	
	$f27="subtxt27.txt";
	$fp=fopen($f27,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array27=explode(" ",$getnum);
	
	$f28="subtxt28.txt";
	$fp=fopen($f28,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array28=explode(" ",$getnum);
	
	$f29="subtxt29.txt";
	$fp=fopen($f29,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array29=explode(" ",$getnum);
	
	$f30="subtxt30.txt";
	$fp=fopen($f30,"r");
	$getnum=fgets($fp,1024);
	fclose($fp);
	$ta_array30=explode(" ",$getnum);
	?>
    <table style="border: 5px double rgb(109, 2, 107); height: 100px; background-color: rgb(255, 255, 255); width: 300px;" align="left" cellpadding="5" cellspacing="5" frame="border" rules="all">
        <tbody>
            <tr>
                <td><a href="subweb21.php"><?php echo $ta_array21[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb22.php"><?php echo $ta_array22[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb23.php"><?php echo $ta_array23[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb24.php"><?php echo $ta_array24[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb25.php"><?php echo $ta_array25[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb26.php"><?php echo $ta_array26[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb27.php"><?php echo $ta_array27[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb28.php"><?php echo $ta_array28[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb29.php"><?php echo $ta_array29[0]; ?></td>
            </tr>
            <tr>
                <td><a href="subweb30.php"><?php echo $ta_array30[0]; ?></td>
            </tr>
        </tbody>
    </table>
	<br>
    <div id="fb-root"></div>
	<script>(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/zh_TW/all.js#xfbml=1&appId=182021418670222";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
	<div class="fb-comments" data-href="http://meta4.web44.net/" data-width="900" data-numposts="5" data-colorscheme="light"></div>
</body>
</html>
