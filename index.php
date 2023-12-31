<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Домик Князя аренда агроусадьбы</title>
	<?php include "elems/head.php"; ?>
</head>

<body>
	<div class="wrapper">
		<header>
			<img src="images/9.jpg" width="100%" height="400px">
			<h1>Домик Князя аренда агроусадьбы</h1>
			<div class="phone">Для заказа звоните на номер <br><b>+375 29 899 04 08</b> с 9:00-17:00
			</div>
			<div>
				<div class="viber-icon" onclick="openViber()"></div>
				<div class="instagram" onclick="openInstagram()"></div>
				<div class="whatsapp" onclick="openWhatsapp()"></div>
			</div>

		</header>
		<nav>
			<div>
				<a href="index.php" class="bg1" data-behavior="activate">Главная</a>
				<a href="gallery.php" class="bg2" data-behavior="activate">Галерея</a>
				<a href="gallery.php" class="bg3" onclick="openModal()">Календарь</a>

			</div>
		</nav>

		<main>
			<p>Домик расположен в 500 метрах от озера Укля, Витебская обл, на границе Миорского и Браславского района,
				д. Снеги.
				В доме могут разместиться семья, несколько семей или компания друзей. Дом 2-х этажный, имеется камин,
				печь, оборудованая кухня, душ и 3 спальных комнаты.
				Спальных мест - 7,есть кроватка для малыша. Хозяева проживают отдельно от гостей. Гости питаются
				самостоятельно. Возможно приобретение домашней продукции - настоящее домашнее молоко, яйца куриные и
				многое другое.
				Услуги и удобства: холодная и горячая вода в доме, баня, камин, микроволновка, холодильник, сетки от
				насекомых на окнах. Развлечения и отдых : озеро (рядом большая сеть озёр - Браславские озера ), рыбалка,
				лодка, пешие, велосипедные прогулки, сбор грибов, ягод.
				Для детей оборудованая песочница, качели.
			</p>
			Стоимость аренды дома:
			<ul>
				<li>от 1 до 3 человек - <span class="price"></span> руб в сутки.</li>
				<li>от 4 и больше - <span class="price1"></span> руб в сутки.</li>
				<li>ребёнок от 3 до 16 лет. - <span class="price2"></span> руб в сутки.</li>
			</ul>



			<p>
				Детям до 3-х лет проживание бесплатное!
				В стоимость входит пользование лодкой!
				Баня оплачивается отдельно!
			</p>
		</main>

		<footer>
			<?php include "elems/footer.php"; ?>
		</footer>

	</div>
</body>

</html>
