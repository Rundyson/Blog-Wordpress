<?php get_header() ?>

    <!-- HOME BANNER -->
     <section class="homeBanner py-5">
        <div class="container">
            <div class="homeBanner__title font-bold border-b text-[80px] lg:text-[160px] text-center">
                <?php the_title() ?>
            </div>
            <div class="homeBanner__wrapper py-10 flex flex-col lg:grid lg:grid-cols-[_3fr_2fr] lg:gap-5">
                <div class="homeBanner__large flex flex-col items-start lg:gap-3 lg:flex lg:flex-col">
                            
                
                <?php
                    $args= array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'offset' => 0,
                    );
                    $newQuery = new WP_Query($args);
                ?>

                <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                ?>

                <div class="homeImg">
                    <?php
               
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }

                    ?>
                </div>
                            <small><?php the_date()  ?></small>
                            <h3><?php the_title() ?></h3>
                            <small><?php the_excerpt() ?></small>
                            <a href="<?php the_field('side_informations_read_link') ?>" class="hover:border-b"><?php the_field('side_informations_read') ?></a>

                    <?php
                        endwhile;
                        else :
                            echo "no available content yet";
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>

             <div class="homeBanner__small flex flex-col gap-5">

               <?php
                $args= array(
                    'post_type' => 'post',
                    'posts_per_page' => 4,
                    'offset' => 1,
                );
                $newQuery = new WP_Query($args);
                ?>

                <?php
                 if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                ?>

                    <div class="small--cards flex flex-row gap-5 justify-center items-center">
                <div class="homeImg">
                    <?php
               
                    if(has_post_thumbnail()){
                        the_post_thumbnail();
                    }

                    ?>
                </div>
                        <div class="small--cards--details">
                        <small><?php the_date()  ?></small>
                            <h3><?php the_title() ?></h3>
                            <a href="<?php the_field('side_informations_read_link') ?>" class="hover:border-b"><?php the_field('side_informations_read') ?></a>
                        </div>
                    </div>

    <?php
            endwhile;
            else :
                echo "no available content yet";
            endif;
            wp_reset_postdata();
    ?>

                </div>
            </div>
        </div>
     </section>

     <!-- LATEST STORY -->
      <section class="latestStory py-10">
        <div class="container">
            <div class="latestStory__title text-center font-bold">
                <h1><?php the_field('latest_story_title')?></h1>
            </div>
            <div class="latestStory__wrapper flex flex-col gap-5 lg:grid lg:grid-cols-3 lg:gap-5">
        <?php 
             if(have_rows('latest_story')) :
               while(have_rows('latest_story')): the_row();
          ?>
                <div class="latestStory--cards flex flex-col gap-5">

                        <?php if(get_sub_field('latest_story_img')) : ?>
                <img class="h-[15rem]" src="<?php echo get_sub_field('latest_story_img');?>" alt="">
                <?php endif; ?>
                    <div class="latestStory--cards--details flex flex-col gap-3">
                        <ul class="flex flex-row justify-between">
                            <small><?php echo get_sub_field('latest_story_date')?></small>
                            <small><?php echo get_sub_field('latest_story_fashion')?></small>
                        </ul>
                        <h3><?php echo get_sub_field('latest_story_intro')?></h3>
                        <p><?php echo get_sub_field('latest_story_text')?></p>
                    </div>
                </div>
                          <?php
          
             endwhile;
            else:
               echo "No content yet.";
            endif;

          ?>
            </div>
        </div>
      </section>

      <!-- FEATURE NEW -->
       <section class="featureNew py-10  border-b-8 border-dark lg:border-none">
        <div class="container">
            <div class="featureNew__title flex flex-col gap-5 text-center mb-10">
                <div class="titleBold font-bold">
                    <h1 class="text-[45px] lg:text-[60px]"><?php the_field('feature_new_title') ?></h1>
                    <h2 class="text-[25px] lg:text-[55px]"><?php the_field('feature_new_intro') ?></h2>
                </div>
                <small><?php the_field('feature_new_text') ?></small>
            </div>
            <?php if(get_field('feature_new_img')) : ?>
                <img class="h-[20rem] w-full object-cover" src="<?php the_field('feature_new_img');?>" alt="">
                <?php endif; ?>
            <div class="featureNew__wrapper py-10 flex flex-col gap-5 lg:grid lg:grid-cols-[_3fr_1fr] lg:gap-5">
                <div class="featureNew__threecards flex flex-col gap-5 lg:flex lg:flex-col lg:gap-5">
                    <div class="featureNew--cards flex flex-col gap-5 lg:grid lg:grid-cols-[_1fr_1.5fr] lg:gap-5">
                        
            <?php 
             if(have_rows('feature_new_card')) :
               while(have_rows('feature_new_card')): the_row();
          ?>

                <img  class=" w-full h-[15rem] object-cover" src="<?php echo get_sub_field('feature_new_card_img');?>" alt="">
            
                        <div class="featureNew--cards--details">
                            <small><?php echo get_sub_field('feature_new_card_date');?></small>
                            <h3 class="font-bold mb-3"><?php echo get_sub_field('feature_new_card_title');?></h3>
                            <small><?php echo get_sub_field('feature_new_card_text');?></small>
                        </div>
            <?php
             endwhile;
            else:
               echo "No content yet.";
            endif;

          ?>
                    </div>
                </div>
                <div class="featureNew__sidedetails flex flex-col  lg:flex lg:flex-col lg:justify-between">
                    
                <?php
                    $args= array(
                        'post_type' => 'information',
                        'posts_per_page' => 6,

                    );
                    $newQuery = new WP_Query($args);
                ?>

                <?php
                    if($newQuery->have_posts()) : while($newQuery->have_posts()) : $newQuery->the_post();
                ?>


                <div class="sideDetails--cards border-b py-24 lg:py-0">
                        <small><?php the_date() ?></small>
                        <p class="font-bold"><?php the_title() ?></p>
                    </div>
                                    <?php
                    endwhile;
                    else :
                        echo "no available content yet";
                    endif;
                    wp_reset_postdata();
                ?>
                </div>




        </div>
       </section>

<?php get_footer() ?>