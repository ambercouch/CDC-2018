<?php
/**
 * The template for displaying search forms in ac inuk
 *
 * @package ac inuk
 */
?>
<div class="c-search-form">
<svg class="c-search-form__control icon icon-search icon--header" data-state="off" data-control="search"><use xlink:href="#icon-search"></use></svg>
<form data-state="off" class="searchform c-search-form__form" method="get" id="searchform"  data-container="search" action="<?php echo esc_url(home_url('/')); ?>" role="search">
  <input type="search" class="searchform__search c-search-form__input--query" name="s" value="<?php echo esc_attr(get_search_query()); ?>" id="s" placeholder="<?php echo esc_attr_x('Search &hellip;', 'placeholder', 'ac_inuk'); ?>" />
</form>
</div>
