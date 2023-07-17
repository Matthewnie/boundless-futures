<?php 

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Block classes
$class_name = 'bf-video-cover-parallax-container';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

// Block alignment
if( !empty($block['align']) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<!-- <div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
  <video autoplay="" loop="" muted="" preload="auto" src="http://boundless-futures.local/wp-content/uploads/2023/07/AdobeStock_523183345.mov" playsinline=""></video>
</div> -->

<div <?php echo $anchor;?> class="<?php echo $class_name; ?>">
  <div class="bf-video-cover-background">
    <video autoplay="" loop="" muted="" preload="auto" src="http://boundless-futures.local/wp-content/uploads/2023/07/AdobeStock_523183345.mov"></video>
  </div> 
</div>