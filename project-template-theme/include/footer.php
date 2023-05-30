<div class="footer appear up">
          <div class="footer__inner">
            <div class="footer__left">
          <div class="logo item">
             original theme
            </div> 
            <ul class="footer__address">
              <li>〒000-1234　鹿児島県姶良市山田１−１</li>
              <li>TEL : ０９９５−００−００００</li>
              <li>FAX : ０９９５−１１−１１１１</li>
            </ul>    
          <nav class="footer__nav">
          <?php
                $args=[
                  'menu'=>'footer-nav',
                  'menu_class'=>'footer__ul appear left',
                  'container'=>false,
                
                ];
                wp_nav_menu($args);
                
                ?>     
           </nav>
            </div>
            <div class="footer__right">
            <div class="footer__img">
              <a href="https://www.city-kirishima.jp/"target="_blank" rel="noopener">
              <img src="https://placehold.jp/500x280.png" alt="">
              </a>
            </div>
       
          </div> 
        </div>
        <div class="footer__copyright item">Copyright&copy; aomaru<span> All Rights Reserved.</span> </div>
        <div id="page_top"><a href="#"></a></div>
        </div>
        
