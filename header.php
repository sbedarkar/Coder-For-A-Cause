<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>No Nonsense Nutrition</title>
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >

    <div class="container-fluid">

      <div class="row">
        <div class="col-xs-12">
          
          <header class="header-container text-center background-image" style="background-image: url(<?php header_image(); ?>);">
            <!-- <?php //echo "<br> <br><br> <br><br> <br>";//var_dump(header_image()); ?> -->
                
                <div class="header-content">
                  <div class="container">
                    <div class="jumbotron jumbotron-style shadow p-3 mb-5 bg-white rounded">
                        <?php 
                          

                           if( have_posts() ):
                            
                            while( have_posts() ): the_post(); 
                          ?>

                            <?php 

                            get_template_part('content') 
                            ?>

                            <?php 
                          endwhile;
                            
                          endif;
                              
                          ?>
                        </div>
                        <div class= "small-jumbotron">
                          <div class="col-xs-12 col-sm-4">
                             <div class="jumbotron ">
                                <?php 
                                  $args = array(
                                                'type' => 'post',
                                                'posts_per_page' => 1,
                                                'category_in' =>array(19),
                                                'category_not_in'=> array(31,17)
                                              );

                                  

                                   $lastBlog = new WP_Query($args);
                                   if( $lastBlog->have_posts() ):
          
                                      while( $lastBlog->have_posts() ): $lastBlog->the_post(); ?>
                                        
                                        <div class="col-xs-12 col-sm-4">
                                        
                                          <?php get_template_part('content','featured'); ?>
                                        
                                        </div>
                                      
                                      <?php endwhile;
                                      
                                    endif;
                                    
                                    wp_reset_postdata();
                                      
                                  ?>
                                </div>
                             </div>

                    <div class="col-xs-12 col-sm-4">
                      <div class="jumbotron ">
                        <?php 
                          

                           if( have_posts() ):
                            
                            while( have_posts() ): the_post(); 
                          ?>

                            <?php 

                            get_template_part('content') 
                            ?>

                            <?php 
                          endwhile;
                            
                          endif;
                              
                          ?>
                        </div>
                    </div>
                      <div class="col-xs-12 col-sm-4">
                        <div class="jumbotron ">
                        <?php 
                          

                           if( have_posts() ):
                            
                            while( have_posts() ): the_post(); 
                          ?>

                            <?php 

                            get_template_part('content') 
                            ?>

                            <?php 
                          endwhile;
                            
                          endif;
                              
                          ?>
                        </div>
                      </div>
                    
                         </div><!-- .smaller jumbotrons -->
                  </div>
                  
                   
          </div><!-- .header-content -->
            <!-- </div>.col-xs-12 -->
        
        <div class="nav-continer">
        <nav class="navbar navbar-default navbar-nononsense ">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>       
                    </button>
                   <!--  <a class="navbar-brand" href="#">No Nonsense Nutrition</a> -->
                  </div>
                  <div class="collapse navbar-collapse" id="myNavbar">
                    <?php 
                              wp_nav_menu(array(
                                'theme_location' => 'primary',
                                'container' => false,
                                'menu_class' => 'nav navbar-nav navbar-center'
                                )
                              );
                            ?>
                  </div>
                  
                </div>
        </nav>
        </div><!-- .nav-container -->
        </header><!-- .header -->
            
          </div> <!-- .col-xs-12 -->
        </div> <!-- .row -->

      </div><!-- .container-fluid -->


  

        
 
