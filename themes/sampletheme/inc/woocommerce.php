<?php

// Shop archive page 

// woocommerce_breadcrumb($args);
add_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );


// add_action( 'woocommerce_after_shop_loop_item_title', 'woocommerce_template_single_excerpt', 5 );


// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 1 );

// add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_rating', 10 );   

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 2 );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20 );

// function sampletheme_woocommerce_single_product_summary_subtitle() {
//     echo '<b style="color:red;">Look at the amazing price!</b>';
// }
// add_action( 'woocommerce_before_add_to_cart_form', 'sampletheme_woocommerce_single_product_summary_subtitle', 2 );

// add_action( 'woocommerce_single_product_summary', 'sampletheme_woocommerce_single_product_summary_subtitle', 3 );add_shortcode( 'product_reviews', 'bbloomer_product_reviews_shortcode' );
 
function bbloomer_product_reviews_shortcode( $atts ) {
    
   if ( empty( $atts ) ) return '';
 
   if ( ! isset( $atts['id'] ) ) return '';
       
   $comments = get_comments( 'post_id=' . $atts['id'] );
    
   if ( ! $comments ) return '';
    
   $html .= '<div class="woocommerce-tabs"><div id="reviews"><ol class="commentlist">';
    
   foreach ( $comments as $comment ) {   
      $rating = intval( get_comment_meta( $comment->comment_ID, 'rating', true ) );
      $html .= '<li class="review">';
      $html .= get_avatar( $comment, '60' );
      $html .= '<div class="comment-text">';
      if ( $rating ) $html .= wc_get_rating_html( $rating );
      $html .= '<p class="meta"><strong class="woocommerce-review__author">';
      $html .= get_comment_author( $comment );
      $html .= '</strong></p>';
      $html .= '<div class="description">';
      $html .= $comment->comment_content;
      $html .= '</div></div>';
      $html .= '</li>';
   }
    
   $html .= '</ol></div></div>';
    
   return $html;
}

