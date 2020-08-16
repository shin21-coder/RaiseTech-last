<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div class="position">

    <header>
      <div class="header__title">
        <h1 class="hamburger">
          <a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
        <p class="slide-target">Menu</p>

        <?php get_search_form(); ?>

      </div>

    </header>
    <?php if(is_home()):?>
    <div class="header__bg">
      <h2 class="header__bg-title">ダミーサイト</h2>
    </div>
    <?php
    elseif(is_category()): ?>
    <div class="header__category">
      <h2 class="header__menutitle">Menu:<span><?php single_cat_title(); ?></span></h2>
    </div>
    <?php elseif(is_search()): ?>
      <div class="header__search">
      <h2 class="header__menutitle">Menu:<span><?php the_search_query();  ?></span></h2>
    </div>
    <?php elseif(is_single()): ?>
      <div class="header__single">
      <h2 class="header__menutitle">Menu:<span><?php the_title();  ?></span></h2>
    </div>
    <?php elseif(is_page()): ?>
      <div class="header__page">
      <h2 class="header__menutitle"><span><?php the_title();  ?></span></h2>
    </div>
    <?php
    endif;
    ?>