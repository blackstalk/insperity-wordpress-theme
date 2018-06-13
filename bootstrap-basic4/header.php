<?php
/**
 * The theme header.
 *
 * @package bootstrap-basic4
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

        <!--wordpress head-->
        <?php wp_head(); ?>
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>

    <header class="page-header page-header-sitebrand-topbar">
      <div class="container">
        <div class="row row-with-vspace site-branding">
            <div class="col-xl-9 col-lg-8 col-md-7 col-sm-6 site-title">
                <h1 class="site-title-heading">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><img alt="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/insperity-logo.png" /></a>
                </h1>
            </div>
            <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 d-none d-sm-block page-header-top-right text-center">
                <div class="cta-top">Speak to a specialist now</div>
                <div class="cta-number">
                  <img alt="Speak to a specialist now" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/phone-icon.png" /> 855.677.7813
                </div>
            </div>
        </div><!--.site-branding-->
      </div> <!--.container-->
    </header><!--.page-header-->
