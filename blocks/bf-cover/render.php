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
$image = get_field('cover_image') ? wp_get_attachment_image_src(get_field('cover_image'), 'full')[0] : get_theme_file_uri( '/assets/images/contact-hero.png' );
$text = get_field('cover_text') ?: '';
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
  <img src="<?php echo $image; ?>" alt="Contact Hero">
  <div class="inner-container">
    <h1><?php echo $text; ?></h1>
  </div>
</div>