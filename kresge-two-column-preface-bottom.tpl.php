<?php
  $preface = (empty($content['preface']) ? 'preface-empty' : 'preface');
  $left = (empty($content['left']) ? 'left-empty' : 'left');
  $right = (empty($content['right']) ? 'right-empty' : 'right');
  $bottom = (empty($content['bottom']) ? 'bottom-empty' : 'bottom' );
  $classes = "$preface $left $right $bottom";
?>
<div class="panel-display kresge-listing kresge-twocol-preface-bottom clearfix" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
	<?php if (!empty($content['preface'])): ?>
    <div class="layout-preface">
      <?php print $content['preface']; ?>
    </div>
  <?php endif; ?>
	<div class="layout-constrain">
    <div class="panel-panel panel-col-first">
  		<div class="inside"><?php print $content['left']; ?></div>
  	</div>
WHAT IS UP with your mom?

  	<div class="panel-panel panel-col-last">
  		<div class="inside"><?php print $content['right']; ?></div>
  	</div>
  	<?php if (!empty($content['preface'])): ?>
      <div class="layout-bottom">
        <?php print $content['bottom']; ?>
      </div>
    	<?php endif; ?>
    </div>
</div>
