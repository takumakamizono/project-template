<li id="post-<?php the_ID(); ?>"<?php post_class('news__box item') ?> >
<a href="<?php the_permalink(); ?>">
                                 
                       <ul class="cat fontSerif">
                       <?php categories_label(); ?>
                       </ul>
                   
                   <time><?php the_time( get_option( 'date_format' ) ); ?></time>  
                   <p class="news__des"><?php the_title(); ?></p>
                   </a>                      
                  
                </li>
             

                