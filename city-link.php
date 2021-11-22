<?
    $city_id = get_the_ID();
    $city_top = carbon_get_post_meta($city_id, 'top');
    $city_left = carbon_get_post_meta($city_id, 'left');
    $city_image = wp_get_attachment_image_url(carbon_get_post_meta($city_id, 'image'), 'full');
    $city_text = carbon_get_post_meta($city_id, 'text');
    $city_heading = carbon_get_post_meta($city_id, 'heading');
    $city_points = carbon_get_post_meta($city_id, 'points');
?>
<li class="select-options__item">
              <a href="#<?echo $city_id?>" class="select-options__link">
                <svg
                  class="select-options__icon"
                  width="18"
                  height="6"
                  viewBox="0 0 18 6"
                  fill="none"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    d="M6.33333 3C6.33333 4.10457 6.17428 5 4.33333 5C2.49238 5 1 4.10457 1 3C1 1.89543 2.49238 1 4.33333 1C5.42388 1 6.39211 1.31422 7.00024 1.8L11.3333 4.42829C11.9346 4.78194 12.7582 5 13.6667 5C15.5076 5 17 4.10457 17 3C17 1.89543 15.5076 1 13.6667 1C11.8257 1 11.6667 1.89543 11.6667 3"
                    stroke="#3E3E3E"
                    stroke-linecap="round"
                  />
                </svg>
            <?the_title();?>
    </a>
</li>