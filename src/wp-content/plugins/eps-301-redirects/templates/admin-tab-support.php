<?php
/**
 *
 * The Support Tab.
 *
 * The main admin area for the 404 tab.
 *
 * @package    EPS 301 Redirects
 * @author     WebFactory Ltd
 */

// include only file
if (!defined('ABSPATH')) {
  die('Do not open this file directly.');
}
?>

<div class="wrap">
    <?php do_action('eps_redirects_admin_head'); ?>

    <div class="eps-panel eps-margin-top group">
        <h1>Support</h1><br>
        <ul class="plain-list">
            <li>Support is available through plugin's <a href="https://wordpress.org/support/plugin/eps-301-redirects/" target="_blank">WP.org forum</a> - <b>our average response time is just a few hours</b></li>
            <li>Please send comments, questions, bugs and feature requests on the <a href="https://wordpress.org/support/plugin/eps-301-redirects/" target="_blank">forum</a> too</li>
            <li>You can always catch us on Twitter <a href="https://twitter.com/webfactoryltd/" target="_blank">@webfactoryltd</a></li>
        </ul>
    </div>

    <div class="right">
        <?php  ?>
    </div>
    <div class="left">
        <?php
    // do_action('eps_redirects_panels_left');
        ?>
    </div>
</div>
