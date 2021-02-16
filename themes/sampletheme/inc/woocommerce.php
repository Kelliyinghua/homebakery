<?php

add_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 0 );


function smapletheme_woocommerce_single_product_summary_subtitle(){
    echo '<b style="color:red;> Look at this amazing price!! </b>';
}

