<?php

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'testimonial-block';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$text = get_field('quote') ?: 'The only limit to our realization of tomorrow will be our doubts of today.';
$source = get_field('source') ?: false;
?>

<div class="bf-quote-container">
  <figure>
    <blockquote>
      <p><?php echo $text; ?></p>
    </blockquote>
    <?php if($source): ?>
    <figcaption>- <?php echo $source; ?></figcaption>
    <?php endif; ?>
  </figure>
</div>