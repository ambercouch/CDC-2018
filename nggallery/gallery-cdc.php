<?php
/**
Template Page for the gallery overview

Follow variables are useable :

$gallery     : Contain all about the gallery
$images      : Contain all images, path, title
$pagination  : Contain the pagination content

You can check the content when you insert the tag <?php var_dump($variable) ?>
If you would like to show the timestamp of the image ,you can use <?php echo $exif['created_timestamp'] ?>
 **/
?>
<?php if (!defined ('ABSPATH')) die ('No direct access allowed'); ?><?php if (!empty ($gallery)) : ?>

    <div class="ngg-galleryoverview c-gallery" id="<?php echo $gallery->anchor ?>">

        <?php if ($gallery->show_slideshow) { ?>
            <!-- Slideshow link -->
            <div class="slideshowlink">
                <a class="slideshowlink" href="<?php echo nextgen_esc_url($gallery->slideshow_link) ?>">
                    <?php echo $gallery->slideshow_link_text ?>
                </a>
            </div>
        <?php } ?>

        <!-- Thumbnails -->
        <?php $i = 0; ?>
        <?php foreach ( $images as $image ) : ?>

            <div id="ngg-image-<?php echo $image->pid ?>" class="ngg-gallery-thumbnail-box c-gallery__thumb-wrapper" <?php echo $image->style ?> >
                <div class="ngg-gallery-thumbnail c-gallery__thumb" >
                    <a href="<?php echo nextgen_esc_url($image->imageURL) ?>"
                       title=""
                        <?php echo $image->thumbcode ?> >
                        <?php if ( !$image->hidden ) { ?>
                            <img title="Click to enlarge image" alt="<?php echo esc_attr($image->alttext) ?>" src="<?php echo nextgen_esc_url($image->thumbnailURL) ?>" <?php echo $image->size ?> />
                        <?php } ?>
                    </a>
                  <div class="c-gallery__description">
                      <?php echo $image->description ?>
                  </div>
                </div>
            </div>

            <?php if ( $image->hidden ) continue; ?>
            <?php if ($gallery->columns > 0): ?>
                <?php if ((($i + 1) % $gallery->columns) == 0 ): ?>
                    <br style="clear: both" />
                <?php endif; ?>
            <?php endif; ?>
            <?php $i++; ?>

        <?php endforeach; ?>

        <!-- Pagination -->
        <?php echo $pagination ?>

    </div>

<?php endif; ?>
