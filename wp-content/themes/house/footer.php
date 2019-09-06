<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package house
 */

?>

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
