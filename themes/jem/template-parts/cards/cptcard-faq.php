<?php
/**
 * Single FAQ output
 *
 * @package Understrap
 * 
 * 
 * 
 * This built from the Bootstrap Offcanvas Navbar:https://getbootstrap.com/docs/5.2/components/accordion/
 * 
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
        


$acc_id = $args['acc_id'];

// faq vars
$q  = get_the_title();
$a  = get_field('answer');
$ri = get_the_ID();

?>
<div class="accordion-item">
    <h2 class="accordion-header" id="faq-head<?php echo $acc_id.$ri; ?>">
        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?php echo $id.$ri ?>" aria-expanded="false" aria-controls="collapse<?php echo $id.$ri ?>">
            <?php echo $q  ?>
        </button>
    </h2>
    <div id="collapse<?php echo $id.$ri ?>" class="accordion-collapse collapse" aria-labelledby="faq-head<?php echo $id.$ri; ?>" data-bs-parent="#faqAccordion<?php echo $acc_id; ?>">
        <div class="accordion-body">
            <div class="a"><?php echo $a; ?></div>
        </div>
    </div>
</div>