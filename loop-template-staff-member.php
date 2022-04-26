<?php
/**
 * Created by PhpStorm.
 * User: Richard
 * Date: 07/10/2018
 * Time: 13:46
 */

$member_role = get_field('staff_member_role');
$member_qualifications = get_field('staff_member_qualifications');
$member_name = (get_field('staff_member_name')) ? get_field('staff_member_name') : get_the_title();
$member_bio = get_field('staff_member_bio');

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('c-post-list__post-thumb--expander'); ?>>
  <div class="c-post-thumb--expander c-post-thumb--staff">
    <div class="c-post-thumb__header--expander">
      <div class="c-header--expander">
         <header  class="entry-header c-header__header--staff" data-state="off" <?php if($member_bio) :?>data-control="staff-<?php the_ID() ?>" <?php endif ?>>
           <div class="c-header__pre-heading--staff" ><span><?php echo $member_role ?></span></div>
           <h3 class="entry-title c-header__heading--staff" >
              <span class="c-header__title--staff"><?php echo $member_name ?></span>
           </h3>
           <div class="c-header__post-heading--staff"><span><?php echo $member_qualifications ?></span></div>
           <div class="c-header__control--staff " >
               <?php if ($member_bio) : ?>
             <div class="c-btn--expand" >
             <span class="u-faux-icon--angle"></span>
             </div>
               <?php endif; ?>
           </div>
         </header>
  </div>
    </div>
    <?php if ($member_bio) : ?>
      <div class="c-post-thumb__body--expander" data-state="off" data-container="staff-<?php the_ID() ?>">
        <?php echo $member_bio ?>
      </div>
    <?php endif; ?>
  </div>
</article>
