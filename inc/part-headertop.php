<div class="container-fluid header-top p-md-0">
    <div class="bg-white d-none d-md-block">
        <div class="container py-2 p-0">
            <div class="d-md-flex align-items-center justify-content-between m-0">
                <div class="kontak-seller text-end p-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                    <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z"/>
                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0"/>
                </svg> <?php echo velocitytheme_option('jam_operasional');?>
                    <?php echo do_shortcode('[kontak style="false"]'); ?>
                </div>
                <div class="p-0"><?php echo do_shortcode('[profile]'); ?></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto d-md-flex align-items-center justify-content-md-between m-0 py-2">
        <?php $sitelogo = velocitytheme_option('custom_logo'); ?>
        <div class="logo-header text-md-start text-center">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo get_home_url(); ?>">
                    <img src="<?php echo wp_get_attachment_image_url($sitelogo, 'full'); ?>" alt="Site Logo" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="d-flex">
            <div class="search-header bg-light p-1">
                <?php echo do_shortcode('[vtoko-search-product layout="inline" category="false" buttontext=""]');?>
            </div>
            <div class="profile-icons px-2 order-1">
                <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                    <div class="p-2 bg-theme border border-3"><?php echo do_shortcode('[cart]'); ?></div>
                </div>
            </div>
        </div>
        
    </div>
</div>