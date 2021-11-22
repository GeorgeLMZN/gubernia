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
            <div class="select-options__pattern">
            <svg class="line-arrow__top" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
            </svg>
            <svg class="scroll_icon" width="12" height="47" viewBox="0 0 12 47" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M5.99077 18.1087C-0.217152 18.1087 0.61057 8 5.99077 8C11.371 8 13.8541 20.1304 5.99077 23.5C-1.87257 26.8696 0.653468 39 6.03366 39C11.4139 39 12.2416 28.8913 6.03366 28.8913M8 44C8 45.1046 7.10457 46 6 46C4.89543 46 4 45.1046 4 44C4 42.8954 4.89543 42 6 42C7.10457 42 8 42.8954 8 44ZM8 3C8 4.10457 7.10457 5 6 5C4.89543 5 4 4.10457 4 3C4 1.89543 4.89543 1 6 1C7.10457 1 8 1.89543 8 3ZM9 36C9 37.6569 7.65685 39 6 39C4.34315 39 3 37.6569 3 36C3 34.3431 4.34315 33 6 33C7.65685 33 9 34.3431 9 36ZM9 11C9 12.6569 7.65685 14 6 14C4.34315 14 3 12.6569 3 11C3 9.34315 4.34315 8 6 8C7.65685 8 9 9.34315 9 11Z" stroke="#C09068" stroke-linecap="round"/>
            </svg>
            <svg class="line-arrow__bottom" width="12" height="24" viewBox="0 0 12 24" fill="#C09068" xmlns="http://www.w3.org/2000/svg">
                <path d="M6.19672 1.77073C5.72772 2.69765 4.83786 4.01426 3.17733 5.84619C3.1672 5.85737 3.15656 5.86808 3.14546 5.8783C2.58733 6.39195 2.16476 7.04017 1.91728 7.76381C1.66978 8.48749 1.60548 9.26292 1.73045 10.0186C1.85541 10.7743 2.16551 11.4855 2.63165 12.0869C2.85084 12.3697 2.99634 12.4743 3.15259 12.5641C3.19387 12.5878 3.24539 12.6148 3.30531 12.6463C3.4734 12.7346 3.70767 12.8577 3.9681 13.0391C4.19473 13.1968 4.25053 13.5085 4.09274 13.7351C3.93496 13.9617 3.62333 14.0175 3.39671 13.8597C2.93259 13.5366 2.36718 13.4018 1.81145 13.4806C1.79345 13.4832 1.77551 13.486 1.75761 13.4889C2.83317 13.7515 3.78966 14.4101 4.52177 15.0559C5.10539 15.5708 5.5832 16.1094 5.9143 16.5175C5.9474 16.5583 5.97909 16.5978 6.00932 16.636C6.63935 15.7978 7.42745 15.0908 8.33067 14.5578C9.07764 14.117 9.88824 13.8041 10.7298 13.629C10.5573 13.5573 10.3756 13.5072 10.1885 13.4806C9.73052 13.4157 9.2645 13.5187 8.8068 13.7497C8.72983 13.7951 8.66683 13.8301 8.62138 13.8546C8.59725 13.8677 8.57804 13.8777 8.56427 13.8849L8.54775 13.8933L8.54267 13.8959L8.54094 13.8967L8.54029 13.8971L8.54001 13.8972L8.53989 13.8973L8.53983 13.8973L8.3176 13.4494L8.53977 13.8973C8.29949 14.0165 8.00798 13.9249 7.8791 13.6896C7.75023 13.4544 7.82989 13.1594 8.05965 13.0211C8.14608 12.969 8.23425 12.9196 8.32407 12.8734C8.84441 12.563 9.9773 11.7755 10.5109 10.6001C10.7731 10.0225 10.8919 9.3492 10.7187 8.57231C10.5441 7.78884 10.064 6.862 9.06156 5.80167L9.06154 5.80169L9.05825 5.79813C7.48769 4.10423 6.64673 2.74678 6.19672 1.77073ZM5.87124 18.9113C4.63224 18.9113 3.61588 19.9319 3.61588 21.2056C3.61588 22.4794 4.63224 23.5 5.87124 23.5C7.11025 23.5 8.12661 22.4794 8.12661 21.2056C8.12661 19.9319 7.11025 18.9113 5.87124 18.9113Z" stroke="#C09068" stroke-linejoin="round"></path>
            </svg>
            </div>
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
