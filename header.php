<?$logo = wp_get_attachment_image_url(carbon_get_post_meta( $page_id, 'site_logo'));?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="<? echo $logo;?>" />
    <title>Самарская Губерния</title>
    <? wp_head(); ?>
  </head>
<body>
<div class="pattern-wrapper">
      <div class="pattern pattern-left">
        <div class="pattern-img__left pattern-img"></div>
        <div class="pattern-line">
          <div class="arrow-left"></div>
          <div class="arrow-right"></div>
        </div>
        <div class="pattern-img__right pattern-img"></div>
      </div>
      <div class="pattern pattern-right">
        <div class="pattern-img__left pattern-img"></div>
        <div class="pattern-line">
          <div class="arrow-left"></div>
          <div class="arrow-right"></div>
        </div>
        <div class="pattern-img__right pattern-img"></div>
      </div>
    </div>
<header class="header">
      <div class="header-logo">
        <a class="header-logo__link" href="/">
          <img
            class="header-logo__img"
            src="<? echo $logo?>"
            alt="Логотип"
          />
        </a>
      </div>
</header>
