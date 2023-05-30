<?php 
 $args =[
       'parent' => 3,
       'hide_empty' => false,
      

         ];
$cats = get_categories($args);
?>
             <div class="news-cate">  
                <p clss="sub-title">カテゴリー一覧</p>                    
                <ul class="news-cate__ul appear up">
                <?php foreach($cats as $cat ): ?>            
                   <?php
                  
                     $cat_id = $cat->cat_ID;                     
                     $cat_title = $cat->name;
                     $cat_url = get_term_link($cat->term_id);
                     ?>   
                <li class="<?php if(is_category($cat_id)){ echo 'current'; } ?> item"><a class="btn shadow " href="<?= esc_url($cat_url); ?>"><?= esc_html($cat_title); ?></a></li>      
                    <?php endforeach; ?>             
                   </ul>               
              </div> 