
<?php
 /**
  * Title: Latest News
  * Slug: gutenify-biz/latest-news
  * Categories: gutenify-biz
  */
?>
<!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"80px","right":"0px","bottom":"80px","left":"0px"},"blockGap":"0px"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignfull" style="padding-top:80px;padding-right:0px;padding-bottom:80px;padding-left:0px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"10px","padding":{"bottom":"30px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:30px"><!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"top"}} -->
<div class="wp-block-group alignwide" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:group {"style":{"spacing":{"blockGap":"0px","padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:paragraph {"align":"left","style":{"typography":{"letterSpacing":"4px"}},"textColor":"primary","className":" animated animated-fadeInUp"} -->
<p class="has-text-align-left animated animated-fadeInUp has-primary-color has-text-color" style="letter-spacing:4px"><?php echo esc_html__( 'NEWS', 'gutenify-biz' ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"textAlign":"left","style":{"spacing":{"margin":{"bottom":"0px"}}},"className":" animated animated-fadeInUp","fontSize":"large"} -->
<h2 class="wp-block-heading has-text-align-left animated animated-fadeInUp has-large-font-size" style="margin-bottom:0px"><?php echo esc_html__( 'From Our Blog Posts', 'gutenify-biz' ); ?></h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":" animated animated-fadeInUp","layout":{"type":"flex","justifyContent":"left"},"style":{"spacing":{"blockGap":"10px","margin":{"top":"20px","bottom":"20px"}}}} -->
<div class="wp-block-buttons animated animated-fadeInUp" style="margin-top:20px;margin-bottom:20px"><!-- wp:button {"style":{"spacing":{"padding":{"right":"35px","left":"35px"}}},"className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link wp-element-button" href="#" style="padding-right:35px;padding-left:35px"><?php echo esc_html__( 'View More', 'gutenify-biz' ); ?></a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"bottom":"60px"}}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group alignwide" style="padding-bottom:60px"><!-- wp:query {"queryId":1,"query":{"perPage":"3","pages":"","offset":"","postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"tagName":"main","displayLayout":{"type":"flex","columns":3},"align":"wide","layout":{"inherit":false}} -->
<main class="wp-block-query alignwide"><!-- wp:post-template {"align":"wide"} -->
<!-- wp:group {"style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"}}}} -->
<div class="wp-block-group" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px"><!-- wp:group {"style":{"spacing":{"padding":{"top":"0px","right":"0px","bottom":"0px","left":"0px"}}},"className":"has-shadow-dark  animated animated-fadeInUp","layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-shadow-dark animated animated-fadeInUp" style="padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"><!-- wp:post-featured-image {"isLink":true,"align":"wide","className":"no-padding grayscale image-zoom-hover"} /-->

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"40px","right":"40px","bottom":"40px","left":"40px"},"margin":{"top":"0px"},"blockGap":"10px"}},"backgroundColor":"background-secondary","className":"has-no-underline"} -->
<div class="wp-block-group alignwide has-no-underline has-background-secondary-background-color has-background" style="margin-top:0px;padding-top:40px;padding-right:40px;padding-bottom:40px;padding-left:40px"><!-- wp:post-title {"level":3,"isLink":true,"align":"wide","style":{"typography":{"fontStyle":"normal","fontWeight":"400","textTransform":"capitalize"}},"fontSize":"medium"} /-->

<!-- wp:post-date {"format":"F j, Y","isLink":true,"style":{"typography":{"fontStyle":"normal","fontWeight":"300"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"small"} /-->

<!-- wp:post-excerpt {"moreText":"Read More","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}}} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->