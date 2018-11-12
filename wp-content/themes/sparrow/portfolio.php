<?php
/*
Template Name: шаблон портфолио
Template Post Type: page
*/
?>

<?php get_header(); ?>
   <!-- Page Title
   ================================================== -->
   <div id="page-title">

      <div class="row">

         <div class="ten columns centered text-center">
            <h1>Our Amazing Works<span>.</span></h1>

            <p>Aenean condimentum, lacus sit amet luctus lobortis, dolores et quas molestias excepturi
            enim tellus ultrices elit, amet consequat enim elit noneas sit amet luctu. </p>
         </div>

      </div>

   </div> <!-- Page Title End-->

   <!-- Content
   ================================================== -->
   <div class="content-outer">

      <div id="page-content" class="row portfolio">

         <section class="entry cf">

            <div id="secondary"  class="four columns entry-details">

               <h1>Our Portfolio.</h1>

               <p class="lead">Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh.</p>

               <p>Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor,
               nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate
               cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a
               ornare odio.</p>

            </div> <!-- Secondary End-->

            <div id="primary" class="eight columns portfolio-list">

               <div id="portfolio-wrapper" class="bgrid-halves cf">

                  <?php $portfolio_posts = new WP_Query([
                     'post_type' => 'portfolio',
                     'posts_per_page' => 6
                  ]); ?>

                  <?php if ( $portfolio_posts->have_posts() ) : while ( $portfolio_posts->have_posts() ) : $portfolio_posts->the_post(); ?>
                    <!-- post -->
                     <div class="columns portfolio-item">
                        <div class="item-wrap">
                           <a href="<?php the_permalink(); ?>">
                              <?php echo kama_thumb_img(['w' => 280, 'h' => 292]); ?>
                              <div class="overlay"></div>
                              <div class="link-icon"><i class="fa fa-link"></i></div>
                           </a>
                           <div class="portfolio-item-meta">
                              <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                              <p>Illustrration</p>
                           </div>
                        </div>
                     </div>
                    <?php endwhile; ?>
                    <!-- post navigation -->
                    <?php else: ?>
                    <!-- no posts found -->
                  <?php endif; ?>



               </div>

            </div> <!-- primary end-->

         </section> <!-- end section -->

      </div> <!-- #page-content end-->

   </div> <!-- content End-->

   <!-- Tweets Section
   ================================================== -->
   <section id="tweets">

      <div class="row">

         <div class="tweeter-icon align-center">
            <i class="fa fa-twitter"></i>
         </div>

         <ul id="twitter" class="align-center">
            <li>
               <span>
               This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet.
               Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum
               <a href="#">http://t.co/CGIrdxIlI3</a>
               </span>
               <b><a href="#">2 Days Ago</a></b>
            </li>

<?php get_footer(); ?>