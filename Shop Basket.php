<!DOCTYPE html>
<html lang="en"> 
<head>
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 <style>
   
	body{ background-color: #F5F5F5}
    form {
  position: relative;
  margin: 4.3em;
}
input {
  display: block;
  width: 100%;
  height: 3em;
  line-height: 3em;
  border-radius: 1.5em;
  border: 1px solid;
  padding: 0 1.5em;
}
button {
  position: absolute;
  top: .50em;
  right: .10em;
  height: 2.2em;
  border-radius: 1.1em;
  border: 1px solid;
  text-transform: uppercase;
  height: 1.7em;
}
.hits{
    margin-top: 10em;
}
.underMenu {
    margin-top: -4em;
    margin-left: 12em;
    font-size: 12px;
}
.underMenuS:hover{color:black;
}
.underMenuS{
    display: inline-block; 
line-height: 1; 
color:#2F73B6;
}
.underMenu a:after{
    display: block; 
content: ""; 
height: 3px; 
width: 0%; 
background-color: darkorchid; 
transition: width 0.4s ease-in-out; 
}
.underMenu a:hover:after,
.underMenu a:focus:after {
width: 100%;
}
.Right a{
    display: inline-block; 
line-height: 1; 
color:darkorchid;
}
.Right a.Account:hover:after,
.Right a.Account:focus:after {
width: 100%;content: "Личный кабинет"; 
    color: darkorchid;
}
.Right a.Basket:hover:after,
.Right a.Basket:focus:after {
width: 100%;content: "Корзина"; 
    color: darkorchid;
}
.Right a.Account:after{
content: ""; 
height: 3px; 
width: 0%; 
}
.Right a.Basket:after{
    display: block; 
content: ""; 
height: 3px; 
width: 0%; 
background-color: darkorchid; 
transition: width 0.4s ease-in-out; 
}
img{
    width: 100%;
    height: 20em;
  
}
#img_container {
position:relative;
margin:0 auto;
}
#img_container img {
position:absolute;
-webkit-transition: opacity 1s ease-in-out;
-moz-transition: opacity 1s ease-in-out;
-o-transition: opacity 1s ease-in-out;
transition: opacity 1s ease-in-out;
}
#img_container {
position:relative;
margin:0 auto;
}
#img_container img {
position:absolute;
left:0;
-webkit-transition: opacity 1s ease-in-out;
-moz-transition: opacity 1s ease-in-out;
-o-transition: opacity 1s ease-in-out;
transition: opacity 1s ease-in-out;
}
@-webkit-keyframes cf3FadeInOut {
0% {
opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}
@-moz-keyframes cf3FadeInOut {
0% {
opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}
@-o-keyframes cf3FadeInOut {
0% {
opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}
@keyframes cf3FadeInOut {
0% {
opacity:1;
}
45% {
opacity:1;
}
55% {
opacity:0;
}
100% {
opacity:0;
}
}

#img_container img.top {
    -webkit-animation-name: cf3FadeInOut;
-webkit-animation-timing-function: ease-in-out;
-webkit-animation-iteration-count: infinite;
-webkit-animation-duration: 5s;
-webkit-animation-direction: alternate;
-moz-animation-name: cf3FadeInOut;
-moz-animation-timing-function: ease-in-out;
-moz-animation-iteration-count: infinite;
-moz-animation-duration: 5s;
-moz-animation-direction: alternate;
-o-animation-name: cf3FadeInOut;
-o-animation-timing-function: ease-in-out;
-o-animation-iteration-count: infinite;
-o-animation-duration: 5s;
-o-animation-direction: alternate;
animation-timing-function: ease-in-out;
animation-iteration-count: infinite;
animation-duration: 5s;
animation-direction: alternate;
}
@media (max-width: 2400px){
    img{
        height: 30em;
    }
    .socSeti{
    width: 100%;
    height: 100%;
}
    .underMenu {
    margin-left: 55em;
    font-size: 12px;
}
.hits{
    margin-top: 35em;
}
@media (max-width: 1800px){
    img{
        height: 20em;
    }
    .underMenu {
        margin-left: 30em;
    font-size: 12px;
    }
    .socSeti{
    width: 100%;
    height: 100%;
}
    .hits{
    margin-top: 25em;
}
}
@media (max-width: 1410px){
    .underMenu {
       
        margin-left: 12em;
    font-size: 12px;
    }
    .socSeti{
    width: 100%;
    height: 100%;
}   
}  
}
.product-wrapper { 
    margin-top: 5px auto;
	display: block;
	width: 100%;
	float: left;
	transition: width .2s;
}
@media only screen and (max-width: 450px) {
  
    .textBtn{
font-size: 8px;
    }
    .photo2{
  width: 100%;
height: 70%;
}
}
@media only screen and (min-width: 450px) {
  .photo2{
  width: 50%;
height: 30%;
}
	.product-wrapper {
		width: 50%;   
	}
    .textBtn{
font-size: 12px;
    }
    .socSeti{
    width: 100%;
    height: 100%;
}  
}
@media only screen and (min-width: 768px) {
	.product-wrapper {
		width: 33.333%;  
	}
    .socSeti{
    width: 100%;
    height: 100%;
}
}
@media only screen and (min-width: 1000px) {
	.product-wrapper {
		width: 25%;
	}
  .photo2{
  width: 30%;
height: 30%;

}
    .socSeti{
    width: 100%;
    height: 100%;
}
}
@media only screen and (min-width: 1800px) {
	.product-wrapper {
		width: 20%;
	}
    .socSeti{
    width: 100%;
    height: 100%;
}
}
    @media only screen and (min-width: 2100px) {
	.product-wrapper {
		width: 15%;
	}
  .hit{
      margin-top: -40px;
  }
   .underMenu {
    margin-left: 70em;
    font-size: 12px;
}
.socSeti{
    width: 100%;
    height: 100%;
}
    }
    @media only screen and (min-width: 1340px) {
    .photo2{
  width: 20%;
height: 30%;
}
    }
@media only screen and (min-width: 2400px) {
	.product-wrapper {
		width: 15%;
	}
  .hit{
      margin-top: 300px;
  }
   .underMenu {
    margin-left: 70em;
    font-size: 12px;
}
.socSeti{
    width: 100%;
    height: 100%;
}
    }
    
      @media only screen and (max-width: 666px) {
        .modalDialog {
size: 40%;
}
    }
    @media only screen and (min-width: 2300px) {
      .underMenu {
    margin-left: 70em;
    font-size: 12px;
}
    }
    @media only screen and (max-width: 844px) {
      .underMenu {
    
    font-size: 8px;
}
    }
    .product {
	display: block;
	border: 2px solid #F5F5F5;
	border-radius: 3px;
	position: relative;
	background: #fff;
	margin: 50px 20px 100px 0;
	text-decoration: none;
	color: #474747;
	z-index: 0;
	height: 300px;
}
.products {
	list-style: none;
	margin: 0px -20px 0 0;
	padding: 0;
}


.product-photo {
	position: relative;
	padding-bottom: 100%;
	overflow: hidden;
   
}
.product-photo img {
	position: absolute;
	top: 20px;
	bottom: 0;
	left: 0;
	right: 0;
	max-width: 100%;
	max-height: 100%;
	margin: auto;
	transition: transform .4s ease-out;
}
.product:hover .product-photo img {
	transform: scale(1.05);
}
.product p {
	position: relative;
	margin: 0;
	font-size: 1em;
	line-height: 1.4em;
	height: 5.6em;
	overflow: hidden;
}
.ImgForHits{

    width: 40%;
    height: 40%;
}
.modalDialog {
  position:absolute;
z-index:99999999999;
font-family: Arial;
top: 0;
right: -180em;
bottom: 0;
left: 0;
background: rgba(0, 0, 0, 0.5);
display: none;
pointer-events: none;
width: 100%;
height: 100%;

}
.modalDialog:target {
display: block;
pointer-events: auto;

}
.modalDialog > div {
width: 400px;
height: 140px;
background: #ffffff00;
position: absolute;
top: 20%;
left: 40%;
}
.closeX {
width: 15px;
height: 30px;
font-size: 20pt;
background: #ffffff00;
color: black(255, 255, 255);
position: absolute;
right: 4px;
top: -4px;
text-decoration: none;
text-align: center;
}
.osn{
width: 440px;
height: 380px;
background: #ffffff;
position: absolute;
top: 10px;
left: -80px;
box-shadow: 0px 15px 15px #0000008a;
}
.p{
font-family: 'Bahnschrift';
position: relative;
top: -10px;
left: 10px;
color: rgb(7, 7, 7);
font-size: 16pt;
}
.ps{
font-family: 'Bahnschrift';
color: rgb(121, 121, 121);
font-size: 10pt;
margin-top: 40px;
}
.phone{
height: 30px;
width: 240px;
font-size: 14pt;
position: absolute;
top: 170px;
}
.but{
background: #ce0000;
font-family: 'Bahnschrift';
color: rgb(255, 255, 255);
font-size: 18pt;
height: 50px;
width: 300px;
vertical-align: middle;
text-align: center;
line-height: 50px;
position: absolute;
top: 260px;
right: 90px;
border-radius: 5px 5px;
}
.wrapper {
  position: relative;
  min-height: 100%;
}
.content {
  height:100%;
}
.content .left-content {
  width:50%;
  float:left;
}
.content .right-content {
  width:50%;
  float:right;
}

 </style>
 <script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
 <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Index</title>
</head>
<nav class="navbar navbar-expand-lg navbar-light bg-light " role="navigation">
  <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-collapse-1">
          <span class="sr-only">Навигация</span>
          <span class="icon-bar"style="color:black;">―</span>
          <span class="icon-bar"style="color:black;">―</span>
          <span class="icon-bar"style="color:black;">―</span>
      </button>
      
      <a  href="Index.php">  
          <div class="navbar-brand" style="color:black;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
          </svg>FriDay</div></a>
      
  </div>
  <div class="collapse navbar-collapse " id="bs-example-collapse-1">
      <ul class="nav navbar-nav navbar-left">
           <li><a href="Shop About company.php" style="color:black;"> О компании</a></li>
          <li><a href="#openModal"style="color:black;"  ><p>Обратная связь</p></a></li>
      </ul>
      <div class="Right">
          <ul class="nav navbar-nav navbar-right">
         
            <li> <a class="Account" href="reg1.php" style="color:black;" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                  <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg> </a> </li>
              <li> <a  class="Basket" href="Shop Basket.php" style="color:black;" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-fill" viewBox="0 0 16 16">
                  <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5z"/>
                </svg></a> </li>
          </ul>
      </div>
           <div id="search">
              <div class="container">
                  
                  <form class="has-light has-feedback has-feedback-left">
                     
                      <input class="form-control" type="text" id="searchpole" placeholder="Искать">
                      <span class="glyphicon glyphicon-search form-control-feedback" > </span>
                      <button class="btn btn-light " type="button" onclick="Search()" ></button>
                  </form>
              </div>
      </div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light " role="navigation" style="margin-top: -65px;">
        <div class="navbar-header ">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-collapse-2">
                <span class="sr-only">Навигация</span>
               Каталог товаров<b class="caret"></b>
            </button>
        </div>
     
      <div class="collapse navbar-collapse " id="bs-example-collapse-2">
        <div class="underMenu">
  <ul class="nav navbar-nav navbar-left" style="font-size: 14px;">
    <br><br>
          <li><a href="Shop Telephones.php"class="underMenuS" style="color:darkorchid;"> Телефоны</a></li>
          <li><a href="Shop Noyts.php" class="underMenuS" style="color:darkorchid;"> Ноутбуки</a></li>
          <li><a href="Shop Kotli.php" style="color:darkorchid;" class="underMenuS"> Часы</a></li>
          <li><a href="Shop Tablets.php" class="underMenuS" style="color:darkorchid;"> Планшеты</a></li>
          <li><a href="Shop Accessories.php" style="color:darkorchid;" class="underMenuS"> Аксессуары</a></li>
          <li><a href="Shop Gadgets.php" class="underMenuS" style="color:darkorchid;"> Гаджеты</a></li>
  </ul>
</div>
  </div>
  </nav>
</nav>
<div id="openModal" class="modalDialog col-xs-12">
<div>
<div class="osn">
<div class="p">
<h3  style="text-align:center;">Перезвоните мне </h3>
<h4 text-indent="40px;">
    Наш менеджер перезвонит вам в течение <br></h4><h4>20 минут,
в противном случае мы предоставим вам скидку 10% 
</h4>
<input type="text" class="phone" id="textarea" name="textarea" >
<h6 class="ps"><br><br>Введите ваш номер телефона</h6>

<a href="#"class="btn-danger" ><div class="but" id="but" aria-disabled="false">Заказать звонок</div>

</a></div>
<a href="#close"class="closeX"><div class="closeX">✕</div></a>
</div>
</div>
</div>
<hr>
    <div class="container-fluid">
<h1 style="color: black;">Корзина</h1>

    
      <button type="button" class="btn btn-secondary btn-danger col-xs-1" onclick="ClearTextField()"><p style="margin-top: -5px;">Очистить корзину</p></button> 
    
       <a href="Index.html"><button type="button" class="btn btn-success col-xs-1"><p style="margin-top: -5px;">Добавить в корзину</p></button></a></div></div>
       <br><br>
       <div class="container-fluid">
       <div class="wrapper">
        <div class="content">
          <div class="left-content"><h1 style="color: black;">Ваш заказ</h1><ul class="products clearfix">
            <li class="product-wrapper  ">
                <a class="product"><div class="product-photo">
                    <img class="ImgForHits"src="https://static.re-store.ru/upload/iblock/3b5/3b54596cdfe2415b4d11420c2ff4e46f.jpg" alt="">
                </div></a>
                <p  style="margin-top:-90px; text-align:center;">  Наушники AirPods Pro,<br>White<br>24 990 ₽</p> 
             
    </li>
    </ul></div>
          <div class="right-content"><h1 style="color: black;">Итоговая сумма:<br><br><br>24 990 ₽</h1><br> <button type="button" class="btn btn-danger col-xs-4 btn-lg"><p style="margin-top: -5px;">Оформить заказ</p></button></div></div></div>
        </div>
      
       <h1>Информация о доставке</h1><br><div class="container-fluid">
<h3>При заказе от 1000 рублей возможна доставка курьером на указанный адресс. При заказе до 1000 рублей осуществляется самовывоз из точки выдачи, находящейся по адресу город Москва, Кировоградская улица, 13а.</h3></div>
<footer  style="background-color: #808080; text-align:center; color:white;">
  <div class="container p-4">
    <section class="mb-4">
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img class="socSeti"  src="https://img.icons8.com/fluent/48/000000/facebook-new.png"/></a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img class="socSeti" src="https://img.icons8.com/fluent/48/000000/twitter.png"/></a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img class="socSeti" src="https://img.icons8.com/color/48/000000/google-logo.png"/></a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        > <img class="socSeti"src="https://img.icons8.com/fluent/48/000000/instagram-new.png"/></a>
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><img class="socSeti" src="https://img.icons8.com/color/48/000000/vk-com.png"/></a>
    </section>
    <section class="left">
    <div class="row text-left">
      <a  href="Index.html">  
          <div class="navbar-brand" style="color:white;"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-basket-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M5.071 1.243a.5.5 0 0 1 .858.514L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5H15v5a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V9H.5a.5.5 0 0 1-.5-.5v-2A.5.5 0 0 1 .5 6h1.717L5.07 1.243zM3.5 10.5a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3zm2.5 0a.5.5 0 0 0-1 0v3a.5.5 0 0 0 1 0v-3z"/>
          </svg>FriDay</div></a>
  </section>
    <section class="A">
      <form >
        <div class="row d-flex justify-content-center">
          <div class="col-auto">
            <p class="pt-2">
              </p><strong><h3>Подпишитесь на нашу рассылку</h3></strong>
            <p></p>
          </div>
          <div class="col-md-5 col-12">
   
            <div class="form-outline form-white mb-4">
              <input type="email" id="formExample" class="form-control" />
              <label class="form-label" for="form5Example2">Email address</label>
            </div>
          </div>
          <div class="col-auto">
            <div class="col-xs-4"></div>
              <button type="button" o class="btn btn-outline-light btn-danger mb-4 col-xs-4 col-sm-4 col-md-4" onclick="ClearTextField()" style="margin-top: -1px; "  >
            <p class="textBtn" style="margin-top: -3px">Подписаться</p>  
            </button>
          </div>
        </div>
      </form>
    </section>
    <section class="mb-4" >
      <p ><br>
       Мы - группа энтузиастов, одержимых идеей помогать людям в их ежедневном выборе компьютеров и мобильных устройств. Мы можем подсказать вам, как решать многие проблемы, связанные с данной техникой более качественно и быстрее.
      </p>
    </section>
    <section class="">
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Меню</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="Shop About company.php" style="color:darkorchid">О компании</a>
            </li>
            <li>
              <a href="Shop Feedback.php" style="color:darkorchid">Обратная связь</a>
            </li>
            <li>
              <a href="Shop Personal account.php" style="color:darkorchid">Личный кабинет</a>
            </li>
            <li>
              <a href="Shop Basket.php" style="color:darkorchid">Корзина</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Каталог товаров</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="Shop Telephones.php" style="color:darkorchid">Телефоны</a>
            </li>
            <li>
              <a href="Shop Noyts.php" style="color:darkorchid">Ноутбуки</a>
            </li>
            <li>
              <a href="Shop Kotli.php"style="color:darkorchid">Часы</a>
            </li>
            <li>
              <a href="Shop Tablets.php" style="color:darkorchid">Планшеты</a>
            </li>
            <li>
              <a href="Shop Accessories.php" style="color:darkorchid">Аксессуары</a>
            </li>
            <li>
              <a href="Shop Gadgets.php" style="color:darkorchid">Гаджеты</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Партнёры</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://www.sberbank.ru/ru/person" style="color:darkorchid">Сбербанк</a>
            </li>
            <li>
              <a href="https://burgerking.ru/" style="color:darkorchid">Бургер Кинг</a>
            </li>
            <li>
              <a href="https://hh.ru/" style="color:darkorchid">HeadHunter</a>
            </li>
            <li>
              <a href="https://www.obi.ru/" style="color:darkorchid">ОБИ</a>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Юридическая информация</h5>
          <ul class="list-unstyled mb-0">
            <li>
              <a href="https://yandex.ru/maps/213/moscow/house/kirovogradskaya_ulitsa_13a/Z04YcAdnSUcBQFtvfXpwc31rZg==/?ll=37.607026%2C55.612182&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16" style="color:darkorchid">Кировоградская улица, 13а <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                  <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg></a>
            </li>
            <li>
              (С 10:00 до 22:00) <a href="#" style="color:darkorchid"> +7 (495) 114-49-77<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg> </a>
            </li>
            <li>
              <a href="#" style="color:darkorchid">digdiggggg@mail.ru<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
                  <path fill-rule="evenodd" d="M7.646 5.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 6.707V10.5a.5.5 0 0 1-1 0V6.707L6.354 7.854a.5.5 0 1 1-.708-.708l2-2z"/>
                  <path d="M4.406 3.342A5.53 5.53 0 0 1 8 2c2.69 0 4.923 2 5.166 4.579C14.758 6.804 16 8.137 16 9.773 16 11.569 14.502 13 12.687 13H3.781C1.708 13 0 11.366 0 9.318c0-1.763 1.266-3.223 2.942-3.593.143-.863.698-1.723 1.464-2.383zm.653.757c-.757.653-1.153 1.44-1.153 2.056v.448l-.445.049C2.064 6.805 1 7.952 1 9.318 1 10.785 2.23 12 3.781 12h8.906C13.98 12 15 10.988 15 9.773c0-1.216-1.02-2.228-2.313-2.228h-.5v-.5C12.188 4.825 10.328 3 8 3a4.53 4.53 0 0 0-2.941 1.1z"/>
                </svg></a>
            </li>
          </ul>
        </div>
      </div>
    </section>
  </div>
  <hr>
  <div class="text-center p-3" style="color: white;background-color: rgba(0, 0, 0, 0.2); margin-top: -20px;">
    © 2021 Амыральное Опг
  </div>
</footer>
      
      
      <script>
           
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="path/to/lightbox.js"></script>

</div></body></html>