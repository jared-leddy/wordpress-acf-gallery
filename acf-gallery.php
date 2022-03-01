<div class="rv-listing-floorplan-div">
<?php

$images = get_field('media_floorplans');

if( $images ): ?>
    <div class="rv-listing-floorplan-item">
        <?php foreach( $images as $image ): ?>
          <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
        <?php endforeach; ?>
    </div>
<?php endif; ?>
</div>
