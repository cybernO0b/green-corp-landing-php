<?php
/*
Template Name: home

*/
?>

<?php get_header(); ?>
   
   <section class="about"> 
    <canvas class="orb-canvas" id="orb-canvas"></canvas>
    <div class="about__info animate__animated animate__fadeInLeft">
      <h1>Солнечные панели GreenRobotic</h1>
      <p>Производите дешёвую экологически чистую электроэнергию из солнечного света</p>
      <button class="icon">Узнать подробнее<i class="fas fa-angle-right"></i></button>
    </div>
    <div class="about__images animate__animated animate__fadeInRight">
      <img class="about__sun-image" src="<?php bloginfo('template_url');?>/assets/img/sun.png">
      <img class="about__image" src="<?php bloginfo('template_url');?>/assets/img/solar-panel.png">
    </div>
  </section>


  <section class="features" id="features">
    <div class="cards">
      <div class="card">
        <div class="card__logo yellow">
          <i class="fas fa-solar-panel"></i>
        </div>
        <h3>Уменьшите счета за электричество</h3>
        <p>
            Используйте чистую солнечную энергию для питания своего дома: уменьшите зависимость от электросети и счета за электричество.
        </p>
      </div>
      <div class="card">
        <div class="card__logo red">
            24/7
        </div>
        <h3>Мониторинг электроэнергии</h3>
        <p>
            Управляйте своей системой солнечных панелей из любой точки мира с помощью специального мобильного приложения.
        </p>
      </div>
      <div class="card">
        <div class="card__logo green">
          <i class="fas fa-chart-line"></i>
        </div>
        <h3>Максимальная эффективность</h3>
        <p>
            Солнечные панели GreenRobotic обеспечивают максимальное производство энергии круглый год, даже на крышах со сложными углами.
        </p>
      </div>
    </div>
    
    <div class="features__border"></div>

    <div class="features__feedback">
      <div class="features__feedback-left">
        <h2>
          Нам доверяет
          <br>
          <div class="features__clients-count">5000+</div> счастливых клиентов
        </h2>
        <p>
           Мы помогли тысячам людей перейти на зеленую энергию.
          <br>
           После заказа мы позаботимся обо всем: доставка панелей, проект, установка, помощь в использовании
        </p>
      </div>
      <div class="features__feedback-right">
        <div class="features__box features__savings-box">
          <h3>30 млн ₽</h3>
          <p>Помогаем экономить нашим клиентам ежемесячно</p>
        </div>
        <div class="features__box features__rate-box">
          <h3>4.7</h3>
          <p class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
          </p>
          <p>
            Средняя оценка наших клиентов
          </p>
        </div>
      </div>
    </div>
  </section>



  <section class="promo">
    <div class="promo__image"></div>
    <div class="promo__right">
      <div class="promo__text">
        <h2>Зарядите свой дом</h2>
        <p>
            Солнечные панели сертифицированы мировыми экспертами: система безопасна и надежна.
        </p>
        <p>
            Следите за накоплением энергии вашего дома в режиме реального времени и настраивайте процент расхода и накопления энергии.
        </p>
        <div class="promo__button-wrap">
          <button type="button">Заказать <i class="fas fa-chevron-right"></i></button>
        </div>
      </div>
    </div>
  </section>
  
  <section class="form" id="form">
    <div class="form-container">
      <h1>Оставьте свои контакты</h1>
      <p>Поможем подобрать модель. <br>Выбрать удобный вариант доставки и установки. <br>Гарантия возврата денег.</p>
        <form>
            <div class="form__group">
             <label for="name">Ваше имя</label>
              <input type="text" placeholder="Введите имя" id="name"></input>
            </div>
            <div class="form__group">
             <label for="email">Электронный адрес</label>
              <input type="email" placeholder="***@yandex.ru" id="email"></intup>
            </div>
            <div class="form__group">
             <label for="tel">Номер телефона</label>
              <input type="tel" placeholder="7 (999) 999-99-99" id="phone"></input>
            </div>
            <div class="form__group">
             <label for="budget">Примерный бюджет</label>
              <select id="budget" placeholder="Выберите вариант">
               <option>Выберите вариант</option>
               <option value="10-30">10 000₽ – 30 000₽</option>
               <option value="30-60">30 000₽ – 60 000₽</option>
               <option value="60-100">60 000₽ – 100 000₽</option>
               <option value="other">Другое</option>
              </select>
            </div>
          <button type="submit" class="form__submit">Отправить заявку</button>
        </form>
    </div>
  </section>

<?php get_footer(); ?>

