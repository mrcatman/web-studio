<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
<script src="http://code.jquery.com/jquery-3.1.1.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Rubik:300,400,500,700,900" rel="stylesheet">

<style>
body {margin:0;padding:0;font-family:Rubik;font-weight:300;}
.container{max-width:1000px;width:100%;margin:0 auto;}
.header {margin:30px 0;}
.header__logo {width:330px;height:70px;background-size:cover;background-image:url(images/logo.png);margin:0 auto;}
.header__text {text-align:center;font-size:30px;}
.top-menu{
	background: #ddd;
	height: 60px;
}
.top-menu__holder{display:flex;justify-content:space-around;}
.top-menu__item {
	font-size:20px;
	text-decoration:none;
	color:#555;
	display:block;
	height: 60px;
	width:100%;
	text-align:center;
    line-height: 60px;
}
.top-menu__item:hover{background:rgba(255,255,255,0.3);}
.top-menu__item_selected{
	color:#0f89ca;
}
.carousel{   
	position: relative;
	height:400px;
	overflow:hidden;
}
.carousel__background{
	 position: absolute;
    top: -10px;
    left: -10px;
    width: calc(100% + 10px);
    height: calc(100% + 10px);
    filter: blur(5px);
	z-index:0;
	background-size:cover;
	background-position:center center;
}
.carousel__title {
	position:absolute;
	z-index:1;
	top: 125px;
	left:0;
	width:100%;
	color:#fff;
}
h1 {   
	font-size: 72px;
    margin: 10px 0;
	font-weight:500;
}
h2 {
	font-size:56px;
	font-weight:300;
	margin: 10px 0;
}
.about__header{font-size: 32px;
    text-align: center;
    font-weight: 500;
    color: #555;}
.about__text {font-size:20px;text-align:center;margin-bottom:60px;}
.services {
    display: flex;
    justify-content: space-between;
}
.services__divider{
	width: 3px;
    height: 410px;
    background: #ddd;
    margin: 0 30px;
}
.service {  
  margin-bottom: 40px;
 }
.service__icon {
    width: 75px;
    height: 75px;
    background-size: contain;
    background-repeat: no-repeat;
    background-position: center center;
    display: inline-block;
    vertical-align: top;
}
.service__info{
   width: calc(100% - 95px);
    display: inline-block;
	margin-left:10px;
}
.service__name {
    font-size: 20px;
    font-weight: 500;
    color: #555;
	margin:0;
}
.works {
	background: #ddd;
    text-align: center;
	padding:20px 0;
}
.works__header {
	font-size:36px;
	font-weight:500;
	color:#555;
}
.works__menu{
	display: flex;
    justify-content: space-around;
}
.works__menu__item {
    width: 100%;
    text-align: center;
    cursor: pointer;
    font-size: 20px;
	padding: 15px 0;
}
.works__menu__item:hover {
	background:#eee;
}
.works__menu__item_selected{
	background:#fff;
}
.works__container{
	background: #fff;
    padding: 10px;
}
.works__row{
	display: flex;
    justify-content: space-around;
}
.work {
    width: 100%;
	margin:10px;
    padding: 5px;
	cursor:pointer;
}
.work:hover {
   background:#eee;
}
.work__photo {
    padding-top: 65%;
    background-size: cover;
    background-position: center center;
}
.work__title {
    font-weight: 400;
    font-size: 18px;
    margin: 5px 0;
}
.employees__title{font-size:24px;font-weight:500;text-align:center; margin:30px 0;}
	</style>
  </head>
  <body>
	<div class="header">
		<div class="container">
			<div class="header__logo"></div>
			<div class="header__text">web-студия</div>
		</div>
	</div>
	<div class="top-menu">
		<div class="container">
			<div class="top-menu__holder">
				<a href="#" class="top-menu__item top-menu__item_selected">Главная</a>
				<a href="#" class="top-menu__item">О нас</a>
				<a href="#" class="top-menu__item">Почему мы?</a>
				<a href="#" class="top-menu__item">Наши проекты</a>
				<a href="#" class="top-menu__item">Наша команда</a>
				<a href="#" class="top-menu__item">Контакты</a>
			</div>
		</div>
	</div>
	<div class="carousel">
		<div class="carousel__background" style="background-image:url(http://placekitten.com/1280/720)"></div>
		<div class="carousel__title">
			<div class="container">
				<h1>Верхняя строчка слогана</h1>
				<h2>Нижняя строчка слогана</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="about">
			<p class="about__header">Кто мы?</p>
			<p class="about__text">Мы, веб-студия E-Create, создаём различные веб-проекты с индивидуальным дизайном, разрабатываем промо- и корпоративные сайты, интернет-магазины и многое другое.</p>
			<p class="about__header">Почему именно мы?</p>
			<p class="about__text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
			<p class="about__header">Что мы делаем?</p>
		</div>
		<div class="services">
			<div class="services__column">
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon1.png)"></div>
					<div class="service__info">
						<p class="service__name">Веб-дизайн и разработка</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon3.png)"></div>
					<div class="service__info">
						<p class="service__name">Автоматизация бизнеса</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon4.png)"></div>
					<div class="service__info">
						<p class="service__name">Брендинг</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>
			<div class="services__divider"></div>
			<div class="services__column">
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon2.png)"></div>
					<div class="service__info">
						<p class="service__name">Мобильные приложения</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon4.png)"></div>
					<div class="service__info">
						<p class="service__name">Поддержка сайтов</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
				<div class="service">
					<div class="service__icon" style="background-image:url(images/work-icon6.png)"></div>
					<div class="service__info">
						<p class="service__name">SEO-продвижение сайтов</p>
						<p class="service__description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="works">
		<div class="container">
			<p class="works__header">Наши работы</p>
			<div class="works__menu">
				<a class="works__menu__item">Все</a>
				<a class="works__menu__item">Брендинг</a>
				<a class="works__menu__item works__menu__item_selected">Веб-дизайн</a>
				<a class="works__menu__item">Интерфейсы</a>
				<a class="works__menu__item">Другое</a>
			</div>
			<div class="works__container">
				<div class="works__row">
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
				</div>
				<div class="works__row">
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
					<div class="work">
						<div class="work__photo" style="background-image:url(http://placekitten.com/640/480)"></div>
						<p class="work__title">Название работы</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="employees">
		<div class="container">
			<p class="employees__title">Наши сотрудники</p>
		</div>
	</div>
  </body>
</html>
