<?
    $city_id = get_the_ID();
    $city_top = carbon_get_post_meta($city_id, 'top');
    $city_left = carbon_get_post_meta($city_id, 'left');
    $city_image = wp_get_attachment_image_url(carbon_get_post_meta($city_id, 'image'), 'full');
    $city_text = carbon_get_post_meta($city_id, 'text');
    $city_heading = carbon_get_post_meta($city_id, 'heading');
    $city_points = carbon_get_post_meta($city_id, 'points');
?>
<div id="<? echo $city_id?>" class="map-cart__wrapper d-none" style="top: <?echo $city_top?>px; left:<? echo $city_left?>px;" data-points="<? echo $city_points; ?>">
        <div class="map-block__cart-item">
          <h2 class="cart-heading"><? the_title() ?></h2>
          <img
            src=" <? echo $city_image; ?>"
            alt=""
            class="cart-img"
          />
          <h3 class="cart-info__heading"><? echo $city_heading; ?></h3>
          <p class="cart-label">
                <? echo $city_text; ?>
          </p>
          <button class="remind-icon"></button>
        </div>
</div>