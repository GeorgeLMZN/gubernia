<?php
/*
Template Name: Главная
*/
?>
<? get_header();?>
<? 
$page_id = 35;

$cities = carbon_get_post_meta( $page_id, 'catalog_city');


$heading= carbon_get_post_meta( $page_id, 'main_heading');
$sub_heading = carbon_get_post_meta( $page_id, 'sub_heading');
$link_image = wp_get_attachment_image_url(carbon_get_post_meta( $page_id, 'link_image'), 'full');
$description = carbon_get_post_meta( $page_id, 'description');
$sub_description = carbon_get_post_meta( $page_id, 'description');
$sub_link1 = carbon_get_post_meta( $page_id, 'sub_link1');
$sub_link2 = carbon_get_post_meta( $page_id, 'sub_link2');


$cities_ids = wp_list_pluck($cities, 'id'); 
$cities_args = [
    'post_type' => 'city',
    'post_in' => $cities_ids,
];

$cities_query = new WP_Query($cities_args);
?>
    <main class="main">
      <div class="animated-bg"></div>
      <div class="content-box">
        <h1 class="main-heading"><? echo $heading; ?></h1>
        <p class="main-description">
          <?echo $sub_heading;?>
        </p>
        <div class="show-mobile">
          <a href="#map" class="map-heading__link">
            <h2 class="map-heading"><?echo $sub_link2?></h2>
            <div class="pattern-center"></div>
          </a>
          <a href="#desc" class="map-descripiton"><?echo $sub_link1?></a>
        </div>
        <div class="main-action">
          <a class="main-action__link" href="#map">
            <img class="main-action__img" src="<? echo $link_image ?>" alt="" />
          </a>
        </div>
      </div>
    </main>
    <div class="separator mt-20">
      <div class="dot-wrapper__left">
        <div class="dot"></div>
      </div>
      <div class="dot-wrapper__right">
        <div class="dot"></div>
      </div>
    </div>
    <div class="section">
      <div class="select">
        <div class="select-wrapper">
          <div class="select-input">
            <input
              type="text"
              class="select-input__item"
              value="Выберите город"
              readonly
            />
            <button class="select-input__button"></button>
          </div>
        </div>
        <div class="select-options d-none">
          <ul class="select-options__list">
          <?php if ( $cities_query->have_posts() ) : ?>
          <?php while ( $cities_query->have_posts() ) : $cities_query->the_post(); ?>
              <?php get_template_part('city-link')?>
          <?php endwhile; ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
    <section class="section map-section">
      <div class="map-block">
        <div id="map" class="map-wrapper">
          <div class="map-block__map-item">
            <img src="<? echo get_template_directory_uri(); ?>/assets/img/mapImage.png" alt="" />
      <?php if ( $cities_query->have_posts() ) : ?>
	        <?php while ( $cities_query->have_posts() ) : $cities_query->the_post(); ?>
                  <?php get_template_part('city-cart')?>
	        <?php endwhile; ?>
	    <?php wp_reset_postdata(); ?>
    <?php endif; ?>
          </div>
        </div>
      </div>
      <div class="input-top__pattern bottom-reverse"></div>
    </section>
    <section id="desc" class="section">
      <div class="row-box">
        <p class="info-block__item">
         <?echo $description?>
        </p>
        <p class="info-block__congratulations-item">
        <?echo $sub_description?>
        </p>
        <div class="video-caller">
          <div class="video-pattern__top"></div>
          <div class="video-pattern__top-line"></div>
          <div class="video-pattern__bottom-line"></div>
          <div class="video-pattern__left-line"></div>
          <div class="video-pattern__right-line"></div>
          <button class="play-btn"></button>
          <img
            class="video-preview"
            src="<? echo get_template_directory_uri(); ?>/assets/img/guber.jpg"
            alt="Поздравления губернатора"
          />
          <div class="video-pattern__bottom"></div>
        </div>
      </div>
    </section>
    <div class="separator">
      <div class="dot-wrapper__left">
        <div class="dot"></div>
      </div>
      <div class="separator__arrow-left"></div>
      <div class="separator-line"></div>
      <div class="dot"></div>
      <div class="separator-line"></div>
      <div class="separator__arrow-right"></div>
      <div class="dot-wrapper__right">
        <div class="dot"></div>
      </div>
    </div>
<? get_footer();?>
