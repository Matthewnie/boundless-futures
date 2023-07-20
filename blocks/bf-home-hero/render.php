<?php
// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'bf-home-parallax-container';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?php echo $anchor;?> class="<?php echo $class_name; ?>">
  <div class="bf-home-background"></div>  
  <div class="bf-home-hero">
    <img src="<?php echo get_theme_file_uri( '/blocks/bf-home-hero/assets/home-hero-photo-2.png' ); ?>" alt="Women">
  </div>
</div>