


<footer class="footer1">
  


  <div class="container">

    <div class="search-footer-wraper">
      <div class="small-leafs">
        <img src="<?php echo get_template_directory_uri(); ?>/content/img/footer_newsletter_leaftvector.svg" alt="leaf">
      </div>
      <div class="content-main">
        <div class="heading">
          <span>Kostenlose News vom Biohof ins Postfach!</span>
        </div>
        <div class="form-wrap">
        <form>
          <input type="text" name="">
          
        </form>

        <div class="form-btn btn-arrow">
            <a href="">ANMELDEN</a>
          </div>

        </div>
    </div>
  </div>

    <div class="row">
      <div class="col-lg-6">
        <div class="first-div-wrap">
          <div class="logo">
            <img src="<?php echo get_template_directory_uri(); ?>/content/img/logo-foot.png" alt="logo">
          </div>

          <div class="kontakt-wrap">
            <div class="kontakt-title">
              <span>KONTAKT</span>
              <div class="links-wrap">
                <div class="link1 link"><a href="">BIOHOF Jochwand</a></div>
                <div class="link2 link"><a href="tel:+43 699 10 70 41 62">+43 699 10 70 41 62</a></div>
                <div class="link3 link"><a href="mailto:INFO@BIOHOF-JOCHWAND.AT">info@biohof-jochwand.at</a></div>
              </div>


            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="second-div-wrap">

          <div class="first-wrap">
            <div class="content">
              <span>Menü</span>
              <div class="links-wrap">
                <div class="link1 link"><a href="">Biohof</a></div>
                <div class="link2 link"><a href="">Unsere Werte</a></div>
                <div class="link3 link"><a href="">Unsere Tiere</a></div>
              </div>
            </div>
          </div>


          <div class="second-wrap">
            <div class="links-wrap">
                <div class="link1 link"><a href="">Tierpatenschaft</a></div>
                <div class="link2 link"><a href="">Unsere Obstbäume</a></div>
                <div class="link3 link"><a href="">Unsere Wildstäucher</a></div>
                <div class="link3 link"><a href="">Unser Genussladen</a></div>
              </div>
          </div>

           <div class="tird-wrap">
            <div class="links-wrap">
                <div class="link1 link"><a href="">Unsere Partner</a></div>
                <div class="link2 link"><a href="http://biohof-jochwand.localhost/shopinformation/">Shopinformationen</a></div>
                <div class="link3 link"><a href="">Blog</a></div>
                <div class="link3 link"><a href="http://biohof-jochwand.localhost/kontakt/">Kontakt</a></div>
              </div>
          </div>



        </div>
      </div>
    </div>


    

  </div>


</footer>
<div class="footer-blue">
  <div class="small-leaf">
    <img src="<?php echo get_template_directory_uri(); ?>/content/img/small-leaf.svg" alt="leaf">
  </div>
      <div class="container">
        <div class="content">
          <div class="first">
            <a href="http://biohof-jochwand.localhost/impressum/">Impressum</a> I Datenschutz I AGBs I Widerrufsbelehrung
          </div>

          <div class="second">
            <div class="icon-wrap">
              <a href="#"><div class="icon-instagram"></div></a>
              <a href="#"><div class="icon-facebook"></div></a>
            </div>
          </div>
        </div>
      </div>
    </div>























</div>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.easing.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/custom.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/wow.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>




  $('.owl-carousel.places-wrap').owlCarousel({
    stagePadding:450,
    loop:true,
    margin:90,
    nav:false,
    responsive:{
        0:{
            items:1,
            stagePadding:50,
            margin:20

        },
        500:{
            items:1,
            stagePadding:80,
            margin:40
        },
        600:{
            items:1,
            stagePadding:120,
            margin:50
            
            
        },
        840:{
            items:1,
            stagePadding:250,
            margin:50
        },
        1100:{
            items:1,
            stagePadding:350
        },
        1500:{
            items:1

        }
    }
})


  var owl = $('.owl-carousel.places-wrap');
      owl.owlCarousel();

      $('.carousel-arrows .arrows .arrow.right img').click(function() {
          owl.trigger('next.owl.carousel');
      })

      $('.carousel-arrows .arrows .arrow.left img').click(function() {
         owl.trigger('prev.owl.carousel');
      })

</script>

<?php wp_footer() ?>

<script>
   $(window).on('load', function () {
   wow = new WOW({
     boxClass: 'wow',
     animateClass: 'animated',
     offset: 5,
     mobile: false,
     live: true
   })
   wow.init();
   });
</script>
</body>
</html>
