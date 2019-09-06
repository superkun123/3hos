<?php
/*
Template Name: Шаблон главной
*/
?>


<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package house
 */


// get_header();
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Детальный клининг в Екатеринбурге" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="all" href="<?php echo get_template_directory_uri(); ?>/css/animate.css">
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.min.js"></script>
<script>new WOW().init();</script>
    <!-- Required Core Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/glide.core.min.css">

<!-- Optional Theme Stylesheet -->
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/glide.theme.min.css">
<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">

	<title>Три хозяйки! Моем! Чистим! Убираем!</title>
	<?php wp_head(); ?>
  </head>
  <body>
    <header>
        <div class="container-fluid">
            <div class="row logo-row">
              <div class="col-md-6">
                <div class="logo">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="Лого">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 wow fadeInLeft">
                <h1 class="main-title">Детальный клининг в Екатеринбурге</h1>
                <p class="sub-title">Аккуратная уборка жилых комплексов, офисных&nbsp; помещений.  </p>
                <div class="btn-cont">
                    <a href="#" class="header-btn" data-toggle="modal" data-target="#exampleModalCenter">Заказать уборку</a>
                </div>
              </div>
            </div>
        </div>
	</header>
	
	
	

<main>
      <section class="services">
        <div class="container-fluid">
        <div class="row justify-content-center section-title">
          <h2>Наши услуги</h2>
        </div>
        <div class="row justify-content-center  serv">
          <div class="col-md-5 img-col">
            <figure class="serv-img">
            <img src="<?php echo get_template_directory_uri(); ?>/img/serv1.png" alt="Услуга1">
          </figure>
          </div>
          <div class="offset-md-1 col-md-5  serv-text wow fadeIn">
            <h3>Эксперсс уборка</h3>
            <p class="price">От 1700 рублей</p>
            <p class="desc-serv">Обеспыливание горизонтальных поверхностей,
                фасадное мытье с/у и ванной комнаты, сухая
                уборка пылесосом, влажная уборка пола, вынос
                мусор</p>
                <div class="btn-cont">
                    <a href="#" class="header-btn" data-toggle="modal" data-target="#exampleModalCenter">Заказать уборку</a>
                </div>

          </div>
        </div>

        <div class="row justify-content-center serv serv2">
            <div class="col-md-5 img-col img-mobi">
                <figure class="serv-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/serv2.png" alt="Услуга1">
              </figure>
              </div>
          <div class="col-md-5  serv-text wow fadeInLeft">
            <h3>Генеральная уборка</h3>
            <p class="price">от 4000 рублей</p>
            <p class="desc-serv">Экспресс уборка + чистка и дезинфекция с/у и
              ванной комнаты, обеспыливание стен,
              обеспыливание шкафов, чистка кухонного
              гарнитура, плиты с духовым шкафом, вытяжки,
              мытье холодильник</p>
                <div class="btn-cont">
                    <a href="#" class="header-btn" data-toggle="modal" data-target="#exampleModalCenter">Заказать уборку</a>
                </div>

          </div>
            <div class="offset-md-1 col-md-5 img-col long-img">
              <figure class="serv-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/serv2.png" alt="Услуга1">
            </figure>
            </div>
          </div>


          <div class="row justify-content-center serv">
            <div class="col-md-5 img-col">
              <figure class="serv-img">
              <img src="<?php echo get_template_directory_uri(); ?>/img/serv3.png" alt="Услуга1">
            </figure>
            </div>
            <div class="offset-md-1 col-md-5  serv-text wow fadeInRight">
              <h3>Послестроительная уборка</h3>
              <p class="price"></p>
              <p class="desc-serv">Стоимость работ после осмотре объекта&nbsp;</p>
                  <div class="btn-cont">
                      <a href="#" class="header-btn" data-toggle="modal" data-target="#exampleModalCenter">Заказать уборку</a>
                  </div>
  
            </div>
          </div>
          
      </div>
      </section>  
      

      <section class="add-services">
        <div class="container-fluid">
          <div class="row justify-content-end">
            <div class="col-md-12 text-add wow fadeInRight">
              <h2>Мы работаем, чтобы вы отдыхали</h2>
              <p>Ознакомьтесь с дополнительными услугами по уборке</p>
              <div class="btn-cont">
                <a href="https://vk.com/doc259571168_505916659?hash=c1038c29080da9de5c&dl=7533147f29d94174eb" class="header-btn">Ознакомиться</a>
            </div>
            </div>
          </div>
        </div>
      </section>


      <section class="features">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-md-12 section-title">
              <h2>Три хозяйки. Моем! Чистим! Убираем!</h2>
            </div>
          </div>
          <div class="row pictures-row">
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon1.png" alt="">
               <p>Тщательная уборка</p>
           </div>
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon2.png" alt="">
               <p>ответственный персонал</p>
           </div>
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon3.png" alt="">
               <p>Точно в срок</p>
           </div>
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon4.png" alt="">
               <p>Уборка жилых помещений</p>
           </div>
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon5.png" alt="">
               <p>Уборка офисов</p>
           </div>
           <div class="col-md-4">
             <img src="<?php echo get_template_directory_uri(); ?>/img/icon6.png" alt="">
               <p>Мытьё окон и витражей</p>
           </div>
          </div>
        </div>
      </section>




      <section class="result">
        <div class="container">
          <div class="row justify-content-center"> 
            <div class="col lg-12">    
        <h2>Примеры наших работ</h2>
        <div class="glide">
          <div class="glide__track" data-glide-el="track">
            <ul class="glide__slides">
            <li class="glide__slide">
              <img src="<?php the_field('фото_до'); ?>" alt="">
                  <img src="<?php the_field('фото_после'); ?>" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php the_field('фото_до2'); ?>" alt="">
                  <img src="<?php the_field('фото_после2'); ?>" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php the_field('фото_до3'); ?>" alt="">
                  <img src="<?php the_field('фото_после3'); ?>" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php the_field('фото_до4'); ?>" alt="">
                  <img src="<?php the_field('фото_после4'); ?>" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php the_field('фото_до5'); ?>" alt="">
                  <img src="<?php the_field('фото_после5'); ?>" alt="">
            </li>
            </ul>
          </div>
          <div class="glide__arrows" data-glide-el="controls">
            <button class="glide__arrow glide__arrow--left" data-glide-dir="<">Назад</button>
            <button class="glide__arrow glide__arrow--right" data-glide-dir=">">Вперёд</button>
            </div>
          </div>
    </div>
  </div> 
          </div>
        </div>
      </section>



      <!-- <section class="reviews">
       <div class="container">
       <div class="row justify-content-center"> 
            <div class="col lg-12">    
        <h2>Отзывы наших клиентов</h2>
</div>
</div>
     <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active w-100">
                <div class="review-container">
                <div class="avatar">
                  <img src="<?php the_field('аватарка_пользователя'); ?>" alt="">
                </div>
                <div class="text">
                    <h3 class="name"><?php the_field('имя_пользователя'); ?></h2>
               <p class="review"><?php the_field('текст_отзыва'); ?></p>
                </div>
              </div>
              </div>
              <div class="carousel-item">
              <div class="review-container">
                <div class="avatar">
                  <img src="<?php the_field('аватарка_пользователя2'); ?>" alt="">
                </div>
                <div class="text">
                    <h3 class="name"><?php the_field('имя_пользователя2'); ?></h2>
               <p class="review"><?php the_field('текст_отзыва2'); ?></p>
                </div>
              </div>
              </div>
              <div class="carousel-item">
              <div class="review-container">
                <div class="avatar">
                  <img src="<?php the_field('аватарка_пользователя3'); ?>" alt="">
                </div>
                <div class="text">
                    <h3 class="name"><?php the_field('имя_пользователя3'); ?></h2>
               <p class="review"><?php the_field('текст_отзыва3'); ?></p>
                </div>
              </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
     </div>
       </div>
      </section> -->

      
      <!-- Modal -->
      <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-lg-6 modal-img">
                <img src="<?php echo get_template_directory_uri(); ?>/img/modal.jpg" alt="">
              </div>
              <div class="col-lg-6 form-col">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                <h2>Оставить заявку</h2>
                <div class="form">
                    <!-- <form action="">
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Телефон">
                        <input type="text" placeholder="Почта">
                        <select name="" id="">
                          <option value="Эксперсс уборка">Эксперсс уборка</option>
                          <option value="Генеральная уборка">Генеральная уборка</option>
                          <option value="Послестроительная уборка">Послестроительная уборка</option>
                          <option value="Дополнительные услуги">Дополнительные услуги</option>
                        </select>
                        <input class="submit" type="submit">
                      </form> -->
                  <?php echo do_shortcode('[contact-form-7 id="5" title="form-modal"]') ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-body">
              <div class="col-lg-6">
                <img src="<?php echo get_template_directory_uri(); ?>/img/modal.jpg" alt="">
              </div>
              <div class="col-lg-6 form-col">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                <h2>Оставить заявку</h2>
                <div class="form">
                    <form action="">
                        <input type="text" placeholder="Имя">
                        <input type="text" placeholder="Телефон">
                        <input type="text" placeholder="Почта">
                        <select name="" id="">
                          <option value="Эксперсс уборка">Эксперсс уборка</option>
                          <option value="Генеральная уборка">Генеральная уборка</option>
                          <option value="Послестроительная уборка">Послестроительная уборка</option>
                          <option value="Дополнительные услуги">Дополнительные услуги</option>
                        </select>
                        <input class="submit" type="submit">
                      </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </main>
    <footer>
      <div class="container-fluid">
        <div class="row">
          <div class="col lg-4 contacts">
            <h2>Контакты</h2>
            <p>Телефон: <a type="tel" href="+79630358068"> 8-963-035-80-68</a></p>
            <p>Email: <a href="">uborkadoma66@gmail.com</a></p>
            <div class="social-media">
              <a href="https://vk.com/uborkadoma66"><img src="<?php echo get_template_directory_uri(); ?>/img/vk.png" alt=""></a>
            </div>
          </div>
          <div class="col-lg-8 partners">
           <h2>Наши партнеры</h2>
           <div class="labels">
             <a href="http://www.servis-uborka.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/partner1.png" alt=""></a>
             <a href="https://nikaural.ru/"><img src="<?php echo get_template_directory_uri(); ?>/img/partner2.png" alt=""></a>
             <a href="http://www.vsedlyauborki.ru/catalog/cleaning_floors/"><img src="<?php echo get_template_directory_uri(); ?>/img/patner3.png" alt=""></a>
             <a href="http://pro-brite.com/"><img src="<?php echo get_template_directory_uri(); ?>/img/partner4.png" alt=""></a>
           </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script> -->
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    
    <script src="https://unpkg.com/@glidejs/glide@3.3.0/dist/glide.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/glide.min.js"></script>
    <script>
      new Glide('.glide').mount()
	</script>
	
	<?php wp_footer(); ?>
  </body>
</html>
<?php
// get_footer();
