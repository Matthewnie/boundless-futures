<?php 

// Support custom "anchor" values.
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Block classes
$class_name = 'bf-cards-container';
if( !empty($block['class_name']) ) {
    $class_name .= ' ' . $block['class_name'];
}

// Block alignment
if( !empty($block['align']) ) {
    $class_name .= ' align' . $block['align'];
}
?>

<div <?php echo $anchor;?> class="<?php echo $class_name; ?>">
  <div class="bf-card">
    <div class="header">
      <h2>Empower</h2>
    </div>
    <div class="body">
      <p>Empower young women to chase their entrepreneurial dreams</p>
    </div>
  </div>
  <div class="bf-card">
    <div class="header">
      <h2>Embrace</h2>
    </div>
    <div class="body">
      <p>Embrace our entrepreneurs by ensuring they are never alone on their journey</p>
    </div>
  </div>
  <div class="bf-card">
    <div class="header">
      <h2>Elevate</h2>
    </div>
    <div class="body">
      <p>Elevate nonprofits that pave the way for female business owners</p>
    </div>
  </div>
</div>