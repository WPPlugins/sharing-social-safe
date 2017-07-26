<?php
/**
 * MAIN
 * 
 * @author      Samet Tarim
 * @copyright   (c) 2016, Samet Tarim
 * @link        http://samet-tarim.de/wordpress/melibu-plugins/sharing-social-safe
 * @package     Melibu
 * @subpackage  Sharing Social Safe
 * @since       1.0
 */
// GLOBALS
global $MELIBU_PLUGIN_SHARE, $MELIBU_PLUGIN_SHARE_CLICKS, $MELIBU_PLUGIN_OPTIONS_02, $melibuPluginSSSBitly, $wpdb;
$mbPluginSSSbitlySettings = $MELIBU_PLUGIN_OPTIONS_02->bitly();
$mbPluginSSSoptions = $MELIBU_PLUGIN_OPTIONS_02->options();
$mb_plugin_get_social = get_option('melibu_plugin_get_social');
$melibu_plugin_get_social_share = get_option('melibu_plugin_get_social_share');
$melibu_plugin_get_social_count = get_option('melibu_plugin_get_social_count');
$melibu_plugin_get_social_privacy_opt = get_option('melibu_plugin_get_social_privacy_opt');
// Default
$melibu_plugin_get_social_share_onoff = 'off';
if (isset($melibu_plugin_get_social_share['onoff']) && !empty($melibu_plugin_get_social_share['onoff'])) {
    $melibu_plugin_get_social_share_onoff = $melibu_plugin_get_social_share['onoff'];
}
// PLUGIN DATAS
$datas = get_plugin_data(MELIBU_PLUGIN_PATH_02 . 'sharing-social-safe.php', $markup = true, $translate = true);
?>
<div class="wrap">
    <div class="mb-social-admin-panel st-clear-after">

        <div class="mb-social-admin-panel--nav mb-st-grid-2">
            <div class="mb-social-admin-panel--nav-logo">
                <a href="#"></a>
            </div>
            <ul class="mb-social-admin-panel--nav-list">
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-dashboard" data-mb-id="mb-l-dashboard"><?php _e('Dashboard', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-display" data-mb-id="mb-l-display"><?php _e('Display', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-appearance" data-mb-id="mb-l-appearance"><?php _e('Appearance', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-tabs" data-mb-id="mb-l-tabs"><?php _e('Optional', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-social" data-mb-id="mb-l-social"><?php _e('Social', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-widget" data-mb-id="mb-l-widget"><?php _e('Modal', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-permission" data-mb-id="mb-l-permission"><?php _e('Privacy', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-cards" data-mb-id="mb-l-cards"><?php _e('Cards', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-customcss" data-mb-id="mb-l-customcss"><?php _e('Custom CSS', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-settings" data-mb-id="mb-l-settings"><?php _e('Settings', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-includes" data-mb-id="mb-l-includes"><?php _e('Includes', 'sharing-social-safe'); ?></a>
                </li>
                <li class="mb-social-admin-panel--nav-list-item">
                    <a href="#" class="mb-social-admin-panel--nav-list-item-link-optionsobj" data-mb-id="mb-l-optionsobj"><?php _e('Options OBJ', 'sharing-social-safe'); ?></a>
                </li>
            </ul>
        </div>

        <div class="mb-social-admin-panel--main mb-st-grid-10">

            <ul class="mb-social-admin-panel--main-topbar st-clear-after">
                <li>
                    <a href="https://wordpress.org/plugins/<?php echo $datas['TextDomain']; ?>" title="<?php _e('Information', 'sharing-social-safe'); ?>" target="_blank">
                        <span class="dashicons dashicons-info"></span> 
                        <?php _e('Info', 'sharing-social-safe'); ?>
                    </a>
                </li>
                <li>
                    <a href="https://wordpress.org/plugins/<?php echo $datas['TextDomain']; ?>/changelog/" title="<?php _e('Changelog', 'sharing-social-safe'); ?>" target="_blank">
                        <span class="dashicons dashicons-backup"></span> 
                        <?php _e('Log', 'sharing-social-safe'); ?>
                    </a>
                </li>
                <li>
                    <a href="https://wordpress.org/plugins/<?php echo $datas['TextDomain']; ?>/stats/" title="<?php _e('Statistics', 'sharing-social-safe'); ?>" target="_blank">
                        <span class="dashicons dashicons-chart-bar"></span> 
                        <?php _e('Statistics', 'sharing-social-safe'); ?>
                    </a>
                </li>
                <li>
                    <a href="https://wordpress.org/support/plugin/<?php echo $datas['TextDomain']; ?>/reviews/" title="<?php _e('Statistics', 'sharing-social-safe'); ?>" target="_blank">
                        <span class="dashicons dashicons-star-filled"></span> 
                        <?php _e('Rate', 'sharing-social-safe'); ?>
                    </a>
                </li>
                <li>
                    <a href="https://wordpress.org/support/plugin/<?php echo $datas['TextDomain']; ?>" title="<?php _e('Support', 'sharing-social-safe'); ?>" target="_blank">
                        <span class="dashicons dashicons-sos"></span> 
                        <?php _e('Support', 'sharing-social-safe'); ?>
                    </a>
                </li>
            </ul>

            <div class="mb-social-admin-panel--main-content st-clear-after">

                <div class="mb-l-boardstart">

                    <h2><?php _e('Welcome to Melibu Sharing Social Safe', 'sharing-social-safe'); ?></h2>
                    <P><?php _e('Check this powerfull plugins to', 'sharing-social-safe'); ?>.</P>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Download Counter Button</span></h2>
                            <p><?php _e('Do you know, the MeliBu WP Download Counter Button. Turn your downloads into a highlight in seconds and get statistics about your download', 'sharing-social-safe'); ?>.</p>
                            <img src="<?php echo plugins_url("img/other/dcb.jpg", dirname(__FILE__)); ?>" alt="MeliBu WP Download Counter Button" width="650" class="st-img"/>
                            <p><a href='https://wordpress.org/plugins/download-counter-button/' target="_blank" class='button button-primary'><?php _e('More', 'sharing-social-safe'); ?>...</a>
                                <a href='plugin-install.php?s=MeliBu+WP+Download+Counter+Button&amp;tab=search&amp;type=term' class='button button-primary'><?php _e('Install', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Syntax High Lighter</span></h2>
                            <p><?php _e('Do you know, the MeliBu WP Syntax High Lighter. Turn your code into a highlight in seconds with short codes in WP Texteditor', 'sharing-social-safe'); ?>.</p>
                            <img src="<?php echo plugins_url("img/other/shl.png", dirname(__FILE__)); ?>" alt="MeliBu WP Syntax High Lighter" width="650" class="st-img"/>
                            <p><a href='https://wordpress.org/plugins/syntax-high-lighter/' target="_blank" class='button button-primary'><?php _e('More', 'sharing-social-safe'); ?>...</a>
                                <a href='plugin-install.php?s=MeliBu+WP+Syntax+High+Lighter+&amp;tab=search&amp;type=term' class='button button-primary'><?php _e('Install', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Latest Posts Slides</span></h2>
                            <p><?php _e('Do you know, the MeliBu WP Latest Posts Slides. Powerfull slider with many settings, touch friendly and mouse friendly.', 'sharing-social-safe'); ?>.</p>
                            <img src="<?php echo plugins_url("img/other/lps.png", dirname(__FILE__)); ?>" alt="MeliBu WP Latest Posts Slides" width="650" class="st-img"/>
                            <p><a href='https://wordpress.org/plugins/latest-posts-slides/' target="_blank" class='button button-primary'><?php _e('More', 'sharing-social-safe'); ?>...</a>
                                <a href='plugin-install.php?s=MeliBu+WP+Latest+Posts+Slides+&amp;tab=search&amp;type=term' class='button button-primary'><?php _e('Install', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="st-clear"></div>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Author Box</span></h2>
                            <p><?php _e("Induviduell Tabs for more flexibility. An interface to the MeliBu WP Sharing Social Safe. And much more...", 'sharing-social-safe'); ?>.</p>
                            <img src="<?php echo plugins_url("img/other/author-box.png", dirname(__FILE__)); ?>" alt="MeliBu WP Feedback Generate" width="650" class="st-img"/>
                            <p><a href='#' class='button button-primary'><?php _e('Coming soon', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Hits</span></h2>
                            <p><?php _e('Get more statistics, with Melibu WP hits. Learn which share button is clicked the most and many more', 'sharing-social-safe'); ?>...</p>
                            <img src="<?php echo plugins_url("img/other/hits.jpg", dirname(__FILE__)); ?>" alt="MeliBu WP Hits" width="650" class="st-img"/>
                            <p><a href='#' class='button button-primary'><?php _e('Coming soon', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="mb-st-grid-4">
                        <div class="melibu-postbox postbox st-margin-top-45">
                            <h2><span>MeliBu WP Feedback Generate</span></h2>
                            <p><?php _e("Our feedback Generate's position all possible forms to create in seconds. Thanks to the sophisticated Melibus Drag N Drop system with live preview you can also see immediately what you are doing. And much more...", 'sharing-social-safe'); ?>.</p>
                            <img src="<?php echo plugins_url("img/other/fg.png", dirname(__FILE__)); ?>" alt="MeliBu WP Feedback Generate" width="650" class="st-img"/>
                            <p><a href='#' class='button button-primary'><?php _e('Coming soon', 'sharing-social-safe'); ?></a></p>
                        </div>
                    </div>

                    <div class="st-clear"></div>

                </div>

                <?php require_once 'panel/dashboard.php'; ?>
                <?php require_once 'panel/appearance.php'; ?>
                <?php require_once 'panel/optional.php'; ?>
                <?php require_once 'panel/privacy.php'; ?>
                <?php require_once 'panel/includes.php'; ?>

                <?php require_once 'panel/display.php'; ?>
                <?php require_once 'panel/social.php'; ?>
                <?php require_once 'panel/modal.php'; ?>
                <?php require_once 'panel/cards.php'; ?>
                <?php require_once 'panel/customcss.php'; ?>

                <?php require_once 'panel/settings.php'; ?>
                <?php require_once 'panel/optionsobj.php'; ?>

            </div>

            <ul class="mb-social-admin-panel--main-footbar st-clear-after">
                <li><?php _e('Powerd by', 'sharing-social-safe'); ?> <strong>MeliBu</strong></li>
                <li>
                </li>
            </ul>

        </div>
        <div class="st-melibu-copy">
            <p class="left">
                <em><?php _e('Thank you for your confidence in', 'sharing-social-safe'); ?></em>
                <a href="http://samet-tarim.de/wordpress/melibu-plugins/"><?php echo $datas['Name']; ?></a> &copy; <?php echo date('Y'); ?>
            </p>
            <p class="right">
                <?php _e('Version', 'sharing-social-safe'); ?> <?php echo $datas['Version']; ?>
            </p>
        </div>
    </div>
</div>