<?php
/* Template Name: Contact Template */
  get_header();
?>

<div class="container"><!-- Contact form START-->
  <div class="row">
    <div class="recent">
      <button class="btn-primarys">
      <h3><?php the_title(); ?></h3></button>
      <hr>
    </div>
    <div class="col-lg-6">
      <div class="recent">
        <button class="btn-primarys">
        <h3>Send us a message</h3></button>
      </div>
      <!-- Display content inside the visual editor page of contact page  -->
      <?php
        while(have_posts()) : the_post();
          the_content();
        endwhile;
       ?>
    </div>
    <div class="col-lg-6">
      <div class="recent">
        <button class="btn-primarys">
        <h3>Get in touch with us</h3></button>
      </div>
      <div class="contact-area">
        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil
        imperdiet doming id quod mazim placerat facer possim assum. Typi non
        habent claritatem insitam; est usus legentis in iis qui facit
        eorum.</p>
        <p>Nam liber tempor cum soluta nobis eleifend option congue nihil
        imperdiet doming id quod mazim placerat facer possim assum. Typi non
        habent claritatem insitam; est usus legentis in iis qui facit
        eorum.</p>
        <h4>Address:</h4>123 Street Texas,USA<br>
        <h4>Telephone:</h4>123 456 789<br>
        <h4>Fax:</h4>123 456 789
      </div>
    </div>
  </div><!-- Row End-->
</div><!-- Contact form End-->

<?php
  get_footer();
?>
