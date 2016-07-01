<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*--- Sidebar Widget ---*/
    register_sidebar( array(
        'name'          => ('First Widget'),
        'id'            => 'first-widget',
        'description'   => 'Widget for our sidebar on pages',
        'before_widget' => '<div class="widget-sidebar">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

        /*--- First Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('First Footer Widget'),
        'id'            => 'footer-one',
        'description'   => 'First footer in the widget',
        'before_widget' => '<div class="widget-footer widget-one">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
        /*--- Second Footer Widget ---*/
    register_sidebar( array(
        'name'          => ('Second Footer Widget'),
        'id'            => 'footer-two',
        'description'   => 'Second footer in the widget',
        'before_widget' => '<div class="widget-footer widget-two">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));
        /*--- Third Footer Widget ---*/

    register_sidebar( array(
        'name'          => ('Third Footer Widget'),
        'id'            => 'footer-three',
        'description'   => 'Third footer in the widget',
        'before_widget' => '<div class="widget-footer widget-three">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    register_sidebar( array(
        'name'          => ('Fourth Footer Widget'),
        'id'            => 'footer-four',
        'description'   => 'Fourth footer in the widget',
        'before_widget' => '<div class="widget-footer widget-four">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));



    }


add_action('widgets_init', 'blank_widgets_init');


/*-------------- Enable Menu --------------- */

add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

/* Tagcloud, change the font size */
function custom_tag_cloud_widget($args) {
$args['largest'] = 11; //largest tag
$args['smallest'] = 11; //smallest tag
$args['unit'] = 'px'; //tag font unit
return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );

?>
