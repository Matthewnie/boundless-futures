<?php 

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Block classes
$class_name = 'bf-sticky-cover-container';
$inner_class_name = 'bf-sticky-cover-content is-layout-constrained';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

// Block alignment
if( !empty($block['align']) ) {
    $class_name .= ' align' . $block['align'];
}
if( !empty($block['alignContent']) ) {
    $inner_class_name .= ' is-vertically-aligned-' . $block['alignContent'];
}
?>

<div <?php echo $anchor;?> class="<?php echo $class_name; ?>">
  <InnerBlocks class="<?php echo $inner_class_name; ?>"/>
</div>