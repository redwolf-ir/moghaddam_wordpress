<?php
    function Red_Wolf() {
        wp_enqueue_style('css-Style', get_template_directory_uri() . '/assets/css/style.css');
        wp_enqueue_style('fullpage-Style', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.1.0/fullpage.min.css');
        wp_enqueue_style('fotorama-Style', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.css');


        wp_enqueue_script( 'jQuery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js', null, null, true );
        wp_enqueue_script( 'Fullpage', 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.9.7/jquery.fullpage.min.js', null, null, true );
        wp_enqueue_script( 'Fotorama', 'https://cdnjs.cloudflare.com/ajax/libs/fotorama/4.6.4/fotorama.js', null, null, true );
        wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/javascript.js', array(), '1.0.0', true );        
    }
    add_action('wp_enqueue_scripts', 'Red_Wolf');

    add_filter( 'comment_post_redirect', 'redirect_after_comment', 10, 2 );
    function redirect_after_comment($location, $comment )
    {
        return "/#memories";
    }
    

    remove_filter('the_content', 'wpautop');
    add_filter('wpcf7_form_elements', function($content) {
      $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);
      $content = str_replace('<br />', '', $content);
      return $content;
    });

    function comments_custom_settings($fields) { 
        unset($fields['url']);
        unset($fields['email']);
        return $fields;
    }
    add_filter('comment_form_default_fields','comments_custom_settings');
?>