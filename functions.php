<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' ); function my_theme_enqueue_styles() { wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' ); } 


//[escp][/escp] のショートコードで囲ったエリアが自動整形無効
//参考:　https://kinocolog.com/wpautop_escape/
function exec_shortcode_escape_wpautop($content){
    global $post;
    if(!$post -> post_content){
        return $content;
    }
    $before_content = $post -> post_content;
    
    preg_match_all('/\[escp\](.*?)\[\/escp\]/s', $before_content, $aryMatchBefore);
    
    if(isset($aryMatchBefore[0]) && $aryMatchBefore[0]){
        preg_match_all('/\[escp\](.*?)\[\/escp\]/s', $content, $aryMatchAfter);
        foreach($aryMatchBefore[1] as $key => $value){
            $content = str_replace($aryMatchAfter[0][$key], $value, $content);
        }
    }

    return $content;
}
add_filter('the_content', 'exec_shortcode_escape_wpautop');

?>


