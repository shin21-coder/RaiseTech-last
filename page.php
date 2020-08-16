<?php get_header(); ?>
<?php if(have_posts()):	while(have_posts()): the_post(); ?>
    <main>
    <?php the_content();?>
      　　　　<div class="btn">
        <button>ボタン</button>
      </div>

      <p class="margin">boldboldboldboldboldboldbold</p>
    </main>



    <!--▼縦書き固定サイドメニュー▼-->


  <?php get_sidebar(); ?>



<?php endwhile; endif; ?>
  <!--▲縦書き固定サイドメニュー▲-->
<?php get_footer();?>