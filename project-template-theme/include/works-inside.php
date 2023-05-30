<div id="post-<?php the_ID(); ?>"<?php post_class('works__item ') ?>>
<time><?php the_time( get_option( 'date_format' ) ); ?></time>  

<a href="<?php the_permalink(); ?>">
                    <div class="works__img">
                      <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('full'); ?>    
                     <?php else: ?>       
                      <img src="https://placehold.jp/340x230.png" alt=""> 
                      <?php endif; ?>
                    </div>
            </a>
            <div class="works__contents">
                    <p class="works__title"><?php the_title(); ?></p>
                    <!-- <div class="works__desc">
                      <p><?php the_excerpt(); ?></p>
                    </div> -->
                    </div>
                  </div>
