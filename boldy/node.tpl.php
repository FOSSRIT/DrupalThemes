<?php
?>
<div id="node-<?php print $node->nid; ?>" class="node<?php if ($sticky) { print ' sticky'; } ?><?php if (!$status) { print ' node-unpublished'; } ?>">

<?php print $picture; ?>

<?php if ($page == 0): ?>
  <h2 class="title"><a href="<?php print $node_url; ?>" title="<?php print $title; ?>"><?php print $title; ?></a></h2>
<?php endif; ?>

  <div class="clear-block">
    <div class="meta">
    <?php if ($submitted): ?>
      <?php print $submitted; ?>
    <?php endif; ?>
    </div>

  <div class="content clear-block">
    <?php print $content; ?>
  </div>

    <?php if ($page != 0): ?>
      <?php if ($taxonomy): ?>
        <div class="postTags"><?php print $terms; ?></div>
      <?php endif;?>
    <?php endif; ?>

    <?php if ($links): ?>
      <div class="more-link"><?php print $links; ?></div>
    <?php endif; ?>
  </div>

</div>
