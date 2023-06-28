<?php 

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Block classes
$class_name = 'bf-cover';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

// Block alignment
if( !empty($block['align']) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
  <img src="<?php echo get_theme_file_uri( '/assets/images/contact-hero.png' ); ?>" alt="Contact Hero">
</div>