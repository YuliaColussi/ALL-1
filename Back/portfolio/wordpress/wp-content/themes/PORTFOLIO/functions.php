<?php
add_action('widgets_init', 'portfolio_init_sidebar'); // on crée un 'hook', c'est à dire que on accroche une fonction de wordpress pour pouvoir s'eb servir
// widgets_init -> fonction wordpress


add_action('init', 'portfolio_init_menu'); // permet de récupérer les fonctionnalités de menu wordpress dans le backOffice

// fonction permettant de créer des régions, on les retrouvent dans le backoffice de wordpress dans apparences -> widgets
function portfolio_init_sidebar()
{

    // register_sidebar() fonction wp qui permet de créer une région que l'on retrouve dans le widgets
    register_sidebar(array(
        'name' => __('HAUT gauche', 'Portfolio'),
        'id' =>  'HAUT-gauche',
        'description' => __('région en haut à gauche', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('HAUT center', 'Portfolio'),
        'id' =>  'HAUT-center',
        'description' => __('région en haut à millieu', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('HAUT droit', 'Portfolio'),
        'id' =>  'HAUT-droit',
        'description' => __('région en haut à droit', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('entetes', 'Portfolio'),
        'id' =>  'entetes',
        'description' => __('région entetes', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('BAS gauche', 'Portfolio'),
        'id' =>  'BAS-gauche',
        'description' => __('région en bas à gauche', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('BAS center', 'Portfolio'),
        'id' =>  'BAS-center',
        'description' => __('région en bas à millieu', 'Portfolio')
    ));
    register_sidebar(array(
        'name' => __('BAS droit', 'Portfolio'),
        'id' =>  'BAS-droit',
        'description' => __('région en bas à droit', 'Portfolio')
    ));
}


// fonction qui permet de créer le menu principal du thème 'portfolio' que nous allons positionner dans le code
function portfolio_init_menu ()
{
    register_nav_menu('primary', __('Primary Menu', 'Portfolio'));
}