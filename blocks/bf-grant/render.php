<?php

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Create class attribute allowing for custom "className" and "align" values.
$class_name = 'bf-grant-container';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
    $class_name .= ' align' . $block['align'];
}

$title = get_field('title') ?: 'Grant Title';
$type = get_field('grants_type') ?: 'Grants For Individuals';
$eligible_applicants = get_field('eligible_applicants') ?: '';
$grants = get_field('grants') ?: '';
$details = get_field('details') ?: '';
$requirements = get_field('requirements') ?: false;
?>

<div <?php echo $anchor; ?> class="<?php echo $class_name; ?>">
  <div class="column">
    <h2><?php echo $title; ?></h2>
    <p><b>Eligible Applicants:</b> <?php echo $eligible_applicants; ?></p>
    <p><b>Grants:</b> <?php echo $grants; ?></p>
    <?php if($requirements): ?>
      <p class="requirements"><?php echo $requirements; ?></p>
    <?php endif; ?>
  </div>
  <div class="column">
    <h5><?php echo $type; ?></h5>
    <p><b>Details:</b> <?php echo $details; ?></p>
  </div>
</div>