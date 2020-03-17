<?php 

function load_scripts() {
    //Colocando na fila uma folha de estilo, prieiro parametro é um identificador, o segundo é o local
    wp_enqueue_style('bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('fancybox', get_template_directory_uri() . 'css/jquery.fancybox.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/css/main.css');
    wp_enqueue_style('responsive', get_template_directory_uri() . '/css/responsive.css');
    wp_enqueue_style('animate-min', get_template_directory_uri() . '/css/animate.min.css');
    wp_enqueue_style('fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css');
}


//para que a função load_scripts seja enfileirada, o primeiro parametro é chamado de gancho
add_action('wp_enqueue_scripts', 'load_scripts' );
