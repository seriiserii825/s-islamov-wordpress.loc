<?php 

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
function crb_attach_theme_options() {
    Container::make( 'theme_options', __( 'Theme Options', 'crb' ) )
        ->add_fields( array(
            Field::make( 'text', 'crb_text', 'Text Field' ),
        ) );
}

add_action( 'carbon_fields_register_fields', 'crb_attach_post_meta' );
function crb_attach_post_meta() {
    Container::make( 'post_meta', __( 'Post Options', 'crb' ) )
        ->where( 'post_type', '=', 'portfolio' )
        ->add_fields( array(
            Field::make( 'date_time', 'crb_portfolio-date', 'Дата создания проекта' )
            ->set_required(true)
            ->set_attribute( 'placeholder', 'Выберите дату, нажав на кнопку "Выберите дату"' )
            ->set_input_format( 'F Y', 'M Y' ),
            Field::make( 'text', 'crb_portfolio-client', 'Клиенты' )
            ->set_required(true),
            Field::make( 'text', 'crb_portfolio-skills', 'Навыки' )
            ->set_attribute( 'placeholder', 'Вставьте навыки через запятую' )
            ->set_required(true)
        ) );
}