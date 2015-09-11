<?php if (!empty($title)): ?>
  <h3 class="article-title"><?php print $title; ?></h3>
<?php endif; ?>

<?php foreach ($rows as $id => $row): ?>
  <div<?php if ($classes_array[$id]) { print ' class="' . $classes_array[$id] .'"';  } ?>>
  <div class="article-row">
    <?php print $row; ?>
  </div>
</div>
<?php endforeach; ?>