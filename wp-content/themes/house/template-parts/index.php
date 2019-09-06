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

get_header();
?>


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
          <div class="offset-md-1 col-md-5  serv-text wow fadeInRigth">
            <h3 class="wow fadeInRigth">Эксперсс уборка</h3>
            <p class="price wow fadeInRigth">От 1700 рублей</p>
            <p class="desc-serv wow fadeInRigth">Обеспыливание горизонтальных поверхностей,
                фасадное мытье с/у и ванной комнаты, сухая
                уборка пылесосом, влажная уборка пола, вынос
                мусор</p>
                <div class="btn-cont wow fadeInRigth">
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
              <p class="price">От 1700 рублей</p>
              <p class="desc-serv">Перечень работ при осмотре объекта по
                желанию клиен</p>
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
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide1.jpg" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide2.2.jpg" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide3.3.jpg" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide4.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide4.4.jpg" alt="">
            </li>
            <li class="glide__slide">
              <img src="<?php echo get_template_directory_uri(); ?>/img/slide5.jpg" alt="">
                  <img src="<?php echo get_template_directory_uri(); ?>/img/slide5.5.jpg" alt="">
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
     <div class="row">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active w-100">
               <h2>Заголовок</h2>
               <p>Текст</p>
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="..." alt="Third slide">
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

<?php
get_footer();
