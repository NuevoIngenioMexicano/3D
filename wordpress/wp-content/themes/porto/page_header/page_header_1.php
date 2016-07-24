<?php
global $porto_settings;

$page_header_type = isset($porto_settings['breadcrumbs-type']) ? $porto_settings['breadcrumbs-type'] : '1';
$breadcrumbs = $porto_settings['show-breadcrumbs'] ? porto_get_meta_value('breadcrumbs', true) : false;
$page_title = $porto_settings['show-pagetitle'] ? porto_get_meta_value('page_title', true) : false;

if (( is_front_page() && is_home()) || is_front_page() ) {
    $breadcrumbs = false;
    $page_title = false;
}

$title = porto_page_title();
$hide_title = !$title || !$page_title;
?>
<div class="container<?php if ($hide_title) : ?> hide-title<?php endif; ?>">
    <div class="row">
        <div class="col-md-12">
            <?php if ($breadcrumbs) : ?>
                <div class="breadcrumbs-wrap">
                    <?php echo porto_breadcrumbs(); ?>
                </div>
            <?php endif; ?>
            <div class="<?php if ($hide_title) : ?> hide<?php endif; ?>">
                <?php if (function_exists('is_product') && is_product()) : ?>
                    <div class="page-title"><?php echo $title; ?></div>
                <?php else: ?>
                    <h1 class="page-title"><?php echo $title; ?></h1>
                <?php endif; ?>
            </div>
            <?php
            porto_woocommerce_product_nav();
            porto_breadcrumbs_filter();
            ?>
        </div>
    </div>
</div>