<?php

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'bf-leader-card';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$leader = get_field('leader') ?: false;

?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
  <?php if($is_preview && !$leader): ?>
    <div>
      <h1>Leader Spot</h1>
    </div>
  <?php else: ?>
    <div>
      <?php echo get_the_post_thumbnail($leader->ID, 'medium'); ?>
    </div>
    
    <h4><?php echo $leader->post_title; ?></h4>

    <p><?php echo get_field('role', $leader->ID) ?></p>
    
    <a href="<?php echo get_the_permalink($leader->ID); ?>">Learn More</a>
  <?php endif; ?>
</div>