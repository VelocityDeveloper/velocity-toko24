<div class="container-fluid header-top p-md-0">
    <div class="bg-white d-none d-md-block">
        <div class="container py-2 p-0">
            <div class="d-md-flex align-items-center justify-content-between m-0">
                <div class="kontak-seller text-end p-0">
                    <?php if ($jam = get_theme_mod('jam_operasional')) : ?>
                        <span class="jam-operasional text-nowrap">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16" aria-hidden="true">
                                <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71z" />
                                <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16m7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0" />
                            </svg> <?php echo esc_html($jam); ?>
                        </span>
                    <?php endif; ?>
                    <?php echo velocity_toko24_kontak('btn btn-sm btn-link'); ?>
                </div>
                <div class="p-0"><?php echo velocity_toko24_profil(); ?></div>
            </div>
        </div>
    </div>

    <div class="container mx-auto d-md-flex align-items-center justify-content-md-between m-0 py-2">
        <?php $sitelogo = get_theme_mod('custom_logo'); ?>
        <div class="logo-header text-md-start text-center">
            <?php if ($sitelogo) : ?>
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-fluid" src="<?php echo esc_url(wp_get_attachment_image_url($sitelogo, 'full')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" loading="lazy">
                </a>
            <?php endif;  ?>
        </div>
        <div class="d-flex justify-content-center">
            <div class="search-header bg-light p-1">
                <form action="<?php echo esc_url(get_post_type_archive_link('store_product') ?: home_url('/')); ?>" class="d-flex h-100" method="get" role="search">
                    <input class="form-control" type="text" name="s" placeholder="Cari produk..." aria-label="Cari produk" value="<?php echo esc_attr(get_search_query()); ?>">
                    <input type="hidden" name="post_type" value="store_product">
                    <button type="submit" class="btn bg-theme text-white" aria-label="Cari"><?php echo velocity_toko24_ikon('cari', 18); ?></button>
                </form>
            </div>
            <div class="profile-icons px-2 order-1">
                <div class="d-flex justify-content-center justify-content-md-end align-items-center">
                    <div class="p-2 bg-theme border border-3"><?php echo do_shortcode('[wp_store_cart size="16"]'); ?></div>
                </div>
            </div>
        </div>
    </div>
</div>
