<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div class="wrap container-fluid" role="document">
      <div class="content row">
        <?php if (Config\display_sidebar()) : ?>
          <aside class="sidebar" role="complementary">
            <i class="menu-icon close-menu visible-xs flaticon-cancel29"></i>
            <div class="row">
              <div class="col-xs-12">
                <?php include Wrapper\sidebar_path(); ?>
              </div>
            </div>
          </aside><!-- /.sidebar -->
        <?php endif; ?>
        <main class="main" role="main">
          <i class="menu-icon visible-xs flaticon-list100"></i>
          <div class="row">
            <div class="col-xs-12">
              <?php include Wrapper\template_path(); ?>
            </div>
          </div>
        </main><!-- /.main -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
