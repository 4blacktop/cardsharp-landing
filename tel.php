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
				<div style="margin:10px 10px 10px 30px;">
				<span style="font-size:28pt; line-height:40px; color:#F00; ">
				
				
				<?php
				// регулярка хз откуда
				// if(!preg_match("/^[0-9]{10,10}+$/", htmlspecialchars($_POST['phone'])))
				
				// регулярка с хабра
				if(preg_match("#^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$#", htmlspecialchars($_POST['phone'])))
				{ ?>
				Благодарим за заказ в нашем интернет магазине!
				<br />В ближайшее время наш менеджер свяжется с Вами<br />по телефону:
				
				<?php echo htmlspecialchars($_POST['phone']) . "</span>"; 
				// print_r($_POST);
				
				
				complete_mail();
				
				} 
				
				
				
				
				else { ?>
				
				Упс! Неверный номер телефона.<br />Введите его правильно и Вас ждет сюрприз!</span>
				<form action="http://faceplate.ru/tel.php" method="POST">
					<br /><input placeholder="+7 999 123 45 67" type="text" name="phone"><br />
					<input class="bluebutton" type="submit" value="Заказать звонок">
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