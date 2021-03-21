<?php
/**
 *
 * Admin Panel Cache
 *
 * The cache panel widget.
 *
 * @package    EPS 301 Redirects
 * @author     WebFactory Ltd
 */

// include only file
if (!defined('ABSPATH')) {
  die('Do not open this file directly.');
}
?>

<div class="eps-panel eps-margin-top rating-box">
    <form method="post" action="">
        <?php wp_nonce_field('eps_redirect_nonce', 'eps_redirect_nonce_submit');   ?>
        <input type="submit" name="eps_redirect_refresh" id="submit" class="button button-secondary" value="Refresh Cache" />
         <small style="vertical-align: sub; margin-left: 10px;" class="eps-grey-text">Refresh the cache if the dropdowns are out of date.</small>
    </form>

    <p><br>Please <a href="https://wordpress.org/support/plugin/eps-301-redirects/reviews/?filter=5#new-post" target="_blank">rate the plugin ★★★★★</a> to <b>keep it free &amp; maintained</b>. It only takes a minute to rate. Thank you! 👋</p>
</div>
