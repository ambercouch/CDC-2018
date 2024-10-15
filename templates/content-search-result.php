<?php
/**
 * @package ac inuk
 */
?>
<article <?php post_class('c-search-result'); ?> id="post-<?php the_ID(); ?>" >
    <header class="post__header">
        <div class="header--article">
            <h3 class="header__title">
                <a class="title--article" href="<?php the_permalink() ?>" ><?php the_title(); ?></a>
            </h3>
        </div>
    </header><!-- /.post__header -->
    <div class="page__content">
        <div class="post__summary">
            <?php the_excerpt(); ?>
            <div class="c-btn--read-more">
                <a href="<?php the_permalink() ?>" class="c-btn__link"><span class="c-btn__link-label">Read More</span></a>
            </div>
        </div><!-- /.post__summary -->

    <footer class="post__meta--footer">
<!--        <div class="meta--footer" >-->
<!--            --><?php //edit_post_link(__('Edit', 'ac_inuk'), '  <span class="meta--footer__edit-link">', '</span>'); ?>
<!--        </div>-->
    </footer><!-- .post__meta--footer -->
</article><!-- #post-## -->
