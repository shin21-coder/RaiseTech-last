<div class="side-menu">
<h3 class="side_theme">Menu</h3>
      <p class="side-menu__icon">
<i class="fas fa-times"></i></p>

      <?php wp_nav_menu(array('theme_location' => 'main-menu1','menu_class' => 'main-menu1','menu_id' => 'gnav-ul','container' => 'div','container_class' => 'gnav-container')); //メニューを表示 ?>
      

      <!-- <?php wp_nav_menu(array('theme_location' => 'footer-menu','menu_class' => 'main-menu1','menu_id' => 'gnav-ul','container' => 'div','container_class' => 'gnav-container')); //メニューを表示 
      //theme_locationが一番大切。ここが表示される場所を決定づける一番のポイント
      ?> -->
      
    </div>