<!DOCTYPE html>
<html lang="ru">
<head>
	<link rel="shortcut icon" href="ico.ico" type="image/x-icon">
 	<link rel="stylesheet" href="styleShop.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
 
<script src="https://snipp.ru/cdn/jquery/2.1.1/jquery.min.js"></script>
 <meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Регистрация</title>
<style>
	.bgAnimObj {
	background: #1abc9c;
	/* Chrome, Safari */
	
	/* Standard Syntax */
	animation: bgColor 15s;
	animation-iteration-count: infinite;
		width: 100%;
		height: 2em;
		text-align: center;
		font-size: 2em;
}
		p{
			text-align: center;
		font-size: 2em;
		}
@keyframes bgColor {
	from {
		background: #1abc9c;
	}
	to {
		background: #ebebeb;
	}
}
		.note_on_comments{
	font-size: 1.3em;
	border-radius: 1em;
	background-color: #E4E4E4;
	padding-left: 20px;
	width: 400px;
}
.poisk{
	position: absolute;
	font-size: 1.2em;
	width: 80%;
	}
main{
	right: 500px;
	margin-left: 500px;
	}
	</style>
</head>
<body>
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
           
              <li> <a class="Account" href="Shop Personal account.php" style="color:black;" > <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
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
 <div class="all">
   <div class="reg col-xs-4">
		 <h2>Регистрация</h2>
    <form action="save_user.php" method="post" class="point">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" class="point">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="pass" type="password" size="15" maxlength="15" class="point">
    </p>
		<p>
    <label>Ваш e-mail:<br></label>
    <input name="email" type="email" size="15" maxlength="15" class="point">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Зарегистрироваться">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
</p></form>
</div>
		<div class="come col-xs-4">
		 <h2>Авторизация</h2>
    <form action="check.php" method="post" class="point">
    <!--**** save_user.php - это адрес обработчика.  То есть, после нажатия на кнопку "Зарегистрироваться", данные из полей  отправятся на страничку save_user.php методом "post" ***** -->
<p>
    <label>Ваш логин:<br></label>
    <input name="login" type="text" size="15" maxlength="15" class="point">
    </p>
<!--**** В текстовое поле (name="login" type="text") пользователь вводит свой логин ***** -->
<p>
    <label>Ваш пароль:<br></label>
    <input name="pass" type="password" size="15" maxlength="15" class="point">
    </p>
<!--**** В поле для паролей (name="password" type="password") пользователь вводит свой пароль ***** --> 
<p>
    <input type="submit" name="submit" value="Войти">
<!--**** Кнопочка (type="submit") отправляет данные на страничку save_user.php ***** --> 
		</p></form></div></div>
        <br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br><br><br><br><br><br><br><br><br>  <br><br><br><br>
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
                <a href="reg.php" style="color:darkorchid">Личный кабинет</a>
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
                <a href="https://yandex.ru/maps/213/moscow/house/kirovogradskaya_ulitsa_13a/Z04YcAdnSUcBQFtvfXpwc31rZg==/?ll=37.607026%2C55.612182&source=wizgeo&utm_medium=maps-desktop&utm_source=serp&z=16" style="color:blue">Кировоградская улица, 13а <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                    <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                    <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg></a>
              </li>
              <li>
                (С 10:00 до 22:00) <a href="#" style="color:blue"> +7 (495) 114-49-77<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                    <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                  </svg> </a>
              </li>
              <li>
                <a href="#" style="color:blue">digdiggggg@mail.ru<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cloud-arrow-up" viewBox="0 0 16 16">
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
        function Search(){
if ((document.getElementById("searchpole").value=="Телефон") || (document.getElementById("searchpole").value=="Телефоны") || (document.getElementById("searchpole").value=="Phone") || (document.getElementById("searchpole").value=="Phones")|| (document.getElementById("searchpole").value=="IPhone")|| (document.getElementById("searchpole").value=="Iphone")|| (document.getElementById("searchpole").value=="Iphone")|| (document.getElementById("searchpole").value=="iPhone")|| (document.getElementById("searchpole").value=="XR")|| (document.getElementById("searchpole").value=="xr")|| (document.getElementById("searchpole").value=="Xr")|| (document.getElementById("searchpole").value=="IPhones")|| (document.getElementById("searchpole").value=="Iphones")|| (document.getElementById("searchpole").value=="Iphones")|| (document.getElementById("searchpole").value=="iPhones")|| (document.getElementById("searchpole").value=="Смартфон") || (document.getElementById("searchpole").value=="iphone")|| (document.getElementById("searchpole").value=="iphones") || (document.getElementById("searchpole").value=="Смартфон Apple iPhone 12")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 12")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone 12") || (document.getElementById("searchpole").value=="Смартфон apple iphone 12") || (document.getElementById("searchpole").value=="смартфон apple iphone 12")|| (document.getElementById("searchpole").value=="Apple iPhone 12")|| (document.getElementById("searchpole").value=="apple iPhone 12")|| (document.getElementById("searchpole").value=="Apple Iphone 12") || (document.getElementById("searchpole").value=="aple iphone 12") || (document.getElementById("searchpole").value=="apple iphone 12") || (document.getElementById("searchpole").value=="IPhone 12")|| (document.getElementById("searchpole").value=="iphone  12")|| (document.getElementById("searchpole").value=="Iphone12")|| (document.getElementById("searchpole").value=="iPhone 12")|| (document.getElementById("searchpole").value=="IPhone 12") || (document.getElementById("searchpole").value=="Смартфон Apple iPhone 12")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 12")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone 12 mini") || (document.getElementById("searchpole").value=="Смартфон apple iphone 12 mini") || (document.getElementById("searchpole").value=="смартфон apple iphone 12 mini")|| (document.getElementById("searchpole").value=="Apple iPhone 12 mini")|| (document.getElementById("searchpole").value=="apple iPhone 12 mini")|| (document.getElementById("searchpole").value=="Apple Iphone 12 mini") || (document.getElementById("searchpole").value=="aple iphone 12 mini") || (document.getElementById("searchpole").value=="apple iphone 12 mini") || (document.getElementById("searchpole").value=="IPhone 12 mini")|| (document.getElementById("searchpole").value=="iphone  12 mini")|| (document.getElementById("searchpole").value=="Iphone12mini")|| (document.getElementById("searchpole").value=="iPhone 12 mini")|| (document.getElementById("searchpole").value=="IPhone 12 mini") || (document.getElementById("searchpole").value=="Смартфон Apple iPhone 12 Pro Max")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 12 pro max")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone 12 Pro Max") || (document.getElementById("searchpole").value=="Смартфон apple iphone 12 pro max") || (document.getElementById("searchpole").value=="смартфон apple iphone 12 pro max")|| (document.getElementById("searchpole").value=="Apple iPhone 12 Pro Max")|| (document.getElementById("searchpole").value=="apple iPhone 12 pro max")|| (document.getElementById("searchpole").value=="Apple Iphone 12 Pro Max") || (document.getElementById("searchpole").value=="aple iphone 12 pro max") || (document.getElementById("searchpole").value=="apple iphone 12 pro max") || (document.getElementById("searchpole").value=="IPhone 12 pro max")||(document.getElementById("searchpole").value=="Iphone  12 pro")||(document.getElementById("searchpole").value=="Iphone  12 pro max")|| (document.getElementById("searchpole").value=="iphone  12 pro max")|| (document.getElementById("searchpole").value=="Iphone12promax")|| (document.getElementById("searchpole").value=="iPhone 12 Pro Max")|| (document.getElementById("searchpole").value=="IPhone 12 Pro Max") || (document.getElementById("searchpole").value=="Смартфон Apple iPhone 12 Pro")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 12 Pro") || (document.getElementById("searchpole").value=="Смартфон Apple iphone 12 pro")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone 12 Pro") || (document.getElementById("searchpole").value=="Смартфон apple iphone 12 pro") || (document.getElementById("searchpole").value=="смартфон apple iphone 12 pro")|| (document.getElementById("searchpole").value=="Apple iPhone 12 pro")|| (document.getElementById("searchpole").value=="apple iPhone 12 pro")|| (document.getElementById("searchpole").value=="Apple Iphone 12 Pro")  || (document.getElementById("searchpole").value=="Apple Iphone 12 pro")|| (document.getElementById("searchpole").value=="aple iphone 12 pro") || (document.getElementById("searchpole").value=="apple iphone 12 pro") || (document.getElementById("searchpole").value=="IPhone 12 pro") || (document.getElementById("searchpole").value=="IPhone 12 Pro")|| (document.getElementById("searchpole").value=="iphone  12 pro")|| (document.getElementById("searchpole").value=="Iphone12pro")|| (document.getElementById("searchpole").value=="iPhone 12 Pro")|| (document.getElementById("searchpole").value=="IPhone 12 pro")|| (document.getElementById("searchpole").value=="Смартфон Apple iPhone 11")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 11")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone 11") || (document.getElementById("searchpole").value=="Смартфон apple iphone 11") || (document.getElementById("searchpole").value=="смартфон apple iphone 11")|| (document.getElementById("searchpole").value=="Apple iPhone 11")|| (document.getElementById("searchpole").value=="apple iPhone 11")|| (document.getElementById("searchpole").value=="Apple Iphone 11") || (document.getElementById("searchpole").value=="aple iphone 11") || (document.getElementById("searchpole").value=="apple iphone 11") || (document.getElementById("searchpole").value=="IPhone 11")|| (document.getElementById("searchpole").value=="iphone  11")|| (document.getElementById("searchpole").value=="Iphone11")|| (document.getElementById("searchpole").value=="iPhone 11")|| (document.getElementById("searchpole").value=="IPhone 11") || (document.getElementById("searchpole").value=="Смартфон Apple iPhone 11")|| (document.getElementById("searchpole").value=="Смартфон Apple iphone 11")|| (document.getElementById("searchpole").value=="Смартфон Apple Iphone xr") || (document.getElementById("searchpole").value=="Смартфон Apple Iphone XR") || (document.getElementById("searchpole").value=="Смартфон apple iphone 12 mini xr") || (document.getElementById("searchpole").value=="смартфон apple iphone 12 xr")|| (document.getElementById("searchpole").value=="Apple iPhone 12 xr")|| (document.getElementById("searchpole").value=="apple iPhone 12 xr")|| (document.getElementById("searchpole").value=="Apple Iphone 12 xr") || (document.getElementById("searchpole").value=="aple iphone 12 xr") || (document.getElementById("searchpole").value=="apple iphone 12 xr") || (document.getElementById("searchpole").value=="IPhone 12 xr")|| (document.getElementById("searchpole").value=="iphone  12 xr")|| (document.getElementById("searchpole").value=="Iphone12xr")|| (document.getElementById("searchpole").value=="iPhone 12 XR")|| (document.getElementById("searchpole").value=="IPhone XR")|| (document.getElementById("searchpole").value=="IPhone xr")){
  document.location.href = "Shop Telephones.php";    }
else if ((document.getElementById("searchpole").value=="Ноутбук") || (document.getElementById("searchpole").value=="Ноутбуки") ||(document.getElementById("searchpole").value=="Компьютер") || (document.getElementById("searchpole").value=="Компьютеры")|| (document.getElementById("searchpole").value=="Mac") || (document.getElementById("searchpole").value=="Macbook") || (document.getElementById("searchpole").value=="MacBook")|| (document.getElementById("searchpole").value=="Apple MacBook Air")|| (document.getElementById("searchpole").value=="Apple macBook air")|| (document.getElementById("searchpole").value=="apple macbook air") ||  (document.getElementById("searchpole").value=="Apple MacBook Air Pro")|| (document.getElementById("searchpole").value=="Apple macBook air  pro")|| (document.getElementById("searchpole").value=="apple macbook air pro")){
document.location.href = "Shop Noyts.php";     }
else  if ((document.getElementById("searchpole").value=="Часы") || (document.getElementById("searchpole").value=="Apple Watch Series 6") || (document.getElementById("searchpole").value=="Apple watch series 6") || (document.getElementById("searchpole").value=="apple watch series 6") || (document.getElementById("searchpole").value=="Apple Watch 6") || (document.getElementById("searchpole").value=="Apple Watch") || (document.getElementById("searchpole").value=="Apple watch  6") || (document.getElementById("searchpole").value=="apple watch 6") || (document.getElementById("searchpole").value=="Apple watch") || (document.getElementById("searchpole").value=="apple watch")){
document.location.href = "Shop Kotli.php";     }
else  if ((document.getElementById("searchpole").value=="Аксессуары") || (document.getElementById("searchpole").value=="Аксессуар") || (document.getElementById("searchpole").value=="Адаптер питания Apple") || (document.getElementById("searchpole").value=="Адаптер питания") || (document.getElementById("searchpole").value=="Адаптер") || (document.getElementById("searchpole").value=="Адаптер питания apple ") || (document.getElementById("searchpole").value=="адаптер питания apple")){
document.location.href = "Shop Accessories.php";   }  
else  if ((document.getElementById("searchpole").value=="Гаджет") || (document.getElementById("searchpole").value=="Гаджеты")|| (document.getElementById("searchpole").value=="Умный брелок Aplle AirTag") || (document.getElementById("searchpole").value=="умный брелок aplle airtag")|| (document.getElementById("searchpole").value=="Умный брелок aplle airtag")|| (document.getElementById("searchpole").value=="Умный брелок")|| (document.getElementById("searchpole").value=="AirTag")|| (document.getElementById("searchpole").value=="Робот Robosen")|| (document.getElementById("searchpole").value=="Робот")|| (document.getElementById("searchpole").value=="Робот robosen")|| (document.getElementById("searchpole").value=="робот robosen")|| (document.getElementById("searchpole").value=="Robosen")|| (document.getElementById("searchpole").value=="robosen")|| (document.getElementById("searchpole").value=="Квадракоптер")|| (document.getElementById("searchpole").value=="квадракоптер")){
document.location.href = "Shop Gadgets.php";     }
else  if ((document.getElementById("searchpole").value=="Планшет")|| (document.getElementById("searchpole").value=="Планшеты")|| (document.getElementById("searchpole").value=="iPad")|| (document.getElementById("searchpole").value=="Ipad")|| (document.getElementById("searchpole").value=="ipad")|| (document.getElementById("searchpole").value=="Apple iPad Pro")|| (document.getElementById("searchpole").value=="Apple ipad pro")|| (document.getElementById("searchpole").value=="apple ipad pro")|| (document.getElementById("searchpole").value=="iPad Pro")|| (document.getElementById("searchpole").value=="iPad pro")|| (document.getElementById("searchpole").value=="Ipad pro")|| (document.getElementById("searchpole").value=="ipad pro")|| (document.getElementById("searchpole").value=="Ipad Pro")){
document.location.href = "Shop Tablets.php";       } 
else  document.getElementById("searchpole").value="Ничего не найдено."
}
</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="path/to/lightbox.js"></script>
</div></div></body>
</html>