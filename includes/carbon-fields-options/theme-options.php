<?php

if(!defined('ABSPATH')) {
    exit;
}

    
use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );

Container::make( 'post_meta', 'Показать на главной' )
  ->show_on_page(35)

    ->add_tab( 'Список городов', [
      Field::make( 'text', 'catalog_title', 'Заголовок' ),
      Field::make( 'association', 'catalog_city', 'Города' )
      ->set_types( [
          [
              'type'      => 'post',
              'post_type' => 'city',
          ]
          ])
      ])

    ->add_tab( 'Настройки главной страницы', [
        Field::make( 'image', 'site_logo', 'Герб (Логотип)' ),
        Field::make( 'text', 'main_heading', 'Заголовок' ),
        Field::make( 'text', 'sub_heading', 'Подзаголовок' ),
        Field::make( 'image', 'link_image', 'Картинка для блока мэйн ( скроллит к карте)' ),
        Field::make( 'text', 'description', 'Описание проекта' ),
        Field::make( 'text', 'sub_description', 'Описание для контента внутри popup' ),
        Field::make( 'text', 'sub_link1', 'Текст ссылки на описание проекта' ),
        Field::make( 'text', 'sub_link2', 'Текст ссылки на интерактивную карту' )
    ]);



Container::make('post_meta' ,'city_info')
    ->show_on_post_type('city')

    ->add_tab('Информация города', [
        Field::make( 'text', 'points', 'Координаты полигона' ),
        Field::make('text', 'top', 'Положение на карте (отступ сверху в px)' ),
        Field::make( 'text', 'left', 'Положение на карте (отступ cлева в px)' ),
        Field::make( 'text', 'heading', 'Заголовок карточки' ),
        Field::make( 'text', 'text', 'Краткое описание' ),
        Field::make( 'image', 'image', 'Изображение на карточке' ),
    ]);