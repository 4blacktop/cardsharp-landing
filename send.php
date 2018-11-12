<?php header("Content-Type: text/html; charset=utf-8");
include_once('inc.php'); 
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
<head>
	<title>Магазин оригинальных ножей-кредиток CARDSHARP 2 с доставкой по всей России</title>
	<meta name="description" content="Магазин оригинальных ножей-кредиток CARDSHARP 2 с доставкой по всей России">
	<meta name="keywords" content="Магазин оригинальных ножей-кредиток (ножей-визиток) CARDSHARP 2 с доставкой по всей России. Купить.">
	<meta name="author" content="Магазин оригинальных ножей-кредиток CARDSHARP STORE. Доставка по всей России">
	<!-- <link href="images/css00000.css" rel="stylesheet" type="text/css"> -->
	<link href="images/style0001.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
	<div class="holder">
		<div style="height:112px;">
		<div id="logo"><img src="images/logo0000.jpg" height="94px" width="777px"></div>
		
		
		
		</div>
		
		
		
		
		
						<div id="subscribeblock" style="margin-top: 25px; background:url(images/top-7.jpg); height: 220px;">
			<div class="sale" style="width: 980px; height: 180px;">
			<img alt="" style="float:left; width:100px; margin:-4px -20px 0px -4px;" src="images/timer001.png">
				<div style="margin-top:10px;">
				<span style="font-size:28pt; line-height:34px; color:#F00; ">
				
				
				
				<?php
				if(preg_match("/.+@.+\..+/i", htmlspecialchars($_POST['mail'])))
				// if(htmlspecialchars($_POST['mail']))
				{ ?>
				Благодарим за заказ в нашем интернет магазине!<br />
				В ближайшее время наш менеджер свяжется с Вами</span>
				<div style="float:left; font-size:12pt; color:#000">
				Ваши данные: <br />
				ФИО: <?php echo htmlspecialchars($_POST['name']); ?><br />
				Кол-во: <?php echo htmlspecialchars($_POST['qty']);?><br />
				E-mail: <?php echo htmlspecialchars($_POST['mail']);?><br />
				</div>
				
				
				
				
				
				<?php complete_mail(); } else { ?>
				
				Упс! Вы ввели что-то не так.<br />Введите данные внимательно и Вас ждет сюрприз!</span>
				<form method="POST" action="http://faceplate.ru/send.php" style="margin: 50px 0 0 0;">
					
					<input type="text" name="name" placeholder="Имя*" class="inputform" onFocus="this.select()" style="margin: 0 15px 0 20px; width: 200px;">
					<input type="text" style="width: 180px;" onFocus="this.select()" name="qty" placeholder="Количество ножей*" class="inputform">
					<input type="text" style="width: 180px; margin-left: 15px;" name="mail" onFocus="this.select()" placeholder="e-mail*" class="inputform">
	
					<input type="submit" value="заказать сейчас!" class="redbutton" style="float:right; margin:0px 20px 10px 0px;  padding: 0 55px; height: 50px; margin-top: -10px; font-weight:bold;">
				</form>
				
				
				
				<?php
				}
				?>
				
				
				
				
				
				
				
				
				
	
				</div>
			</div>
		</div>
		
		
		
		
		
		        <div id="subscribeblock" style="height:300px; width: 1020px; background:url(images/topsend.jpg) no-repeat ; margin-left: 0px; "></div>   
		
		
		
		
	</div>
</header>	  










<div style="clear:both;"></div>

</body>
</html>

