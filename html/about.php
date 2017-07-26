<?php
/**
 * ABOUT
 * 
 * @author      Samet Tarim
 * @copyright   (c) 2016, Samet Tarim
 * @link        http://samet-tarim.de/wordpress/melibu-plugins/sharing-social-safe
 * @package     Melibu
 * @subpackage  Sharing Social Safe
 * @since       1.0
 */
if (!defined('ABSPATH')) {
    exit;
}
$datas = get_plugin_data(MELIBU_PLUGIN_PATH_02 . 'sharing-social-safe.php', $markup = true, $translate = true);
?>
<div class="melibu-sss-about wrap about-wrap">
    <h1>
        <?php _e('Welcome to', 'sharing-social-safe'); ?> 
        <span style="color:#FF7F01;"><?php echo $datas['Name']; ?></span>&nbsp;v.<?php echo $datas['Version']; ?>
    </h1>
    <div class="about-text"><?php echo $datas['Description']; ?></div>
    <div class="wp-badge"><?php _e('Version', 'sharing-social-safe'); ?> <?php echo $datas['Version']; ?></div>
    <div class="st-melibuPlugin-area">
        <div class="st_melibuPlugin_list st_melibuPlugin_list_flip">
            <input name="st_melibuPlugin_list_item"
                   id="st_melibuPlugin_list_item_1" 
                   class="st_melibuPlugin_list_item_1" 
                   type="radio" 
                   value="1" checked="checked">
            <label for="st_melibuPlugin_list_item_1">
                <span><span class="dashicons dashicons-admin-home"></span> 
                    <?php _e('Welcome', 'sharing-social-safe'); ?></span>
            </label>
            <input name="st_melibuPlugin_list_item" 
                   id="st_melibuPlugin_list_item_2" 
                   class="st_melibuPlugin_list_item_2" 
                   type="radio" 
                   value="2">
            <label for="st_melibuPlugin_list_item_2">
                <span><span class="dashicons dashicons-editor-code"></span> 
                    <?php _e('Functions', 'sharing-social-safe'); ?></span>
            </label>
            <input name="st_melibuPlugin_list_item" 
                   id="st_melibuPlugin_list_item_3" 
                   class="st_melibuPlugin_list_item_3" 
                   type="radio" 
                   value="3">
            <label for="st_melibuPlugin_list_item_3">
                <span><span class="dashicons dashicons-sos"></span> 
                    <?php _e('Support', 'sharing-social-safe'); ?> </span>
            </label>
            <input name="st_melibuPlugin_list_item" 
                   id="st_melibuPlugin_list_item_4" 
                   class="st_melibuPlugin_list_item_4" 
                   type="radio" 
                   value="4">
            <label for="st_melibuPlugin_list_item_4">
                <span><span class="dashicons dashicons-hammer"></span> 
                    <?php _e('Development', 'sharing-social-safe'); ?> </span>
            </label>
            <input name="st_melibuPlugin_list_item" 
                   id="st_melibuPlugin_list_item_5" 
                   class="st_melibuPlugin_list_item_5" 
                   type="radio" 
                   value="5">
            <label for="st_melibuPlugin_list_item_5">
                <span><span class="dashicons dashicons-translation"></span> 
                    <?php _e('Translation', 'sharing-social-safe'); ?> </span>
            </label>
            <input name="st_melibuPlugin_list_item" 
                   id="st_melibuPlugin_list_item_6" 
                   class="st_melibuPlugin_list_item_6" 
                   type="radio" 
                   value="6">
            <label for="st_melibuPlugin_list_item_6">
                <span><span class="dashicons dashicons-carrot"></span> 
                    <?php _e('Donate', 'sharing-social-safe'); ?> </span>
            </label>
            <ul>
                <li class="st_melibuPlugin_list_item_1">
                    <div class="st_melibuPlugin_list_content">
                        <h3>MeliBu &copy;</h3>
                        <hr />
                        <?php
                        if ($datas) {
                            foreach ($datas as $key => $data) {
                                echo '<strong>' . $key . '</strong>: ' . $data . '<br />';
                            }
                        }
                        ?>
                        <hr />
                        <p><?php _e('More Professional', 'sharing-social-safe'); ?> <a href="http://samet-tarim.de/wordpress/melibu-themes" target="_blank"><?php _e('Themes', 'sharing-social-safe'); ?></a> <?php _e('and ', 'sharing-social-safe'); ?> <a href="http://samet-tarim.de/wordpress/melibu-plugins" target="_blank"><?php _e('Plugins', 'sharing-social-safe'); ?></a></p>
                        <hr />
                        <div class="headline-feature feature-video" style="background-color:#191E23;">
                            <img src="<?php echo plugins_url("screenshot-1.png", dirname(__FILE__)); ?>" alt="screenshot-1" width="650" class="st-img"/>
                        </div>
                    </div>
                </li>
                <li class="st_melibuPlugin_list_item_2">
                    <div class="st_melibuPlugin_list_content">
                        <div class="under-the-hood three-col">
                            <h3><?php _e('Functions', 'sharing-social-safe'); ?></h3>
                            <hr />
                            <div class="col">
                                <h3><?php _e('Functionality', 'sharing-social-safe'); ?></h3>
                                <ul class='st-list'>
                                    <li><?php _e('Requires no 2 click buttons', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Eliminates "unauthorized" data transfer to Social Networks', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Secure sharing of their customer', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('No special scripts or external applications are loaded', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Less loading time, does your page faster', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Supports bitly short links', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Share widget', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Follow widget', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Automatically detects the title and describe', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Automatically detect for Pinterest', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Automatically detect for WhatsApp', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('A lot of selection on social networks', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Shortcode on pages, posts and text widgets', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Twenty Awesome Designs, choose your style', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Fully responsive', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Share button with modal', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Share away on the EMail', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Print page / post', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Privacy Infobox', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Twitter Card', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Facebook Card', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Pinterest Rich Pin', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Content before / after short share link', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Statistics overview', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Show total clicks', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Show share clicks', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Show follow clicks', 'sharing-social-safe'); ?></li>
                                </ul>
                            </div>
                            <div class="col"> 
                                <h3><?php _e('Options', 'sharing-social-safe'); ?></h3>
                                <ul class='st-list'>
                                    <li><?php _e('Choose your layout (One-Click)', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Shortcode to share on the simplest way all (with shortcode in WP Rich Text Editor)', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Widgets (to share on the very simplest way all)', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional inform the customer about your privacy policy', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional parameters that are available to him', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional Content before / after short share link', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional activate bitly interface', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional show/hide Copyright', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional show/hide Privacy Box', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional show/hide Share Counts', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Optional show/hide additional FontAwesome', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Delete click from Statistics', 'sharing-social-safe'); ?></li>
                                </ul>
                            </div>
                            <div class="col"> 
                                <h3><?php _e('Extras', 'sharing-social-safe'); ?></h3>
                                <ul class='st-list'>
                                    <li>bitly <?php _e('Supports', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Share away on the EMail', 'sharing-social-safe'); ?></li>
                                    <li><?php _e('Print and share', 'sharing-social-safe'); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="st_melibuPlugin_list_item_3">
                    <div class="st_melibuPlugin_list_content">
                        <h3><?php _e('Support', 'sharing-social-safe'); ?></h3>
                        <hr />
                        <div class="feature-section two-col">
                            <div class="col">
                                <h3><?php _e('In like please give', 'sharing-social-safe'); ?> <?php echo $datas['Name']; ?></h3>
                                <ul>
                                    <li><span class="dashicons dashicons-thumbs-up"></span>
                                        <a href="https://wordpress.org/support/view/plugin-reviews/<?php echo $datas['TextDomain']; ?>" target="_blank"><?php _e('WordPress Rate', 'sharing-social-safe'); ?></a>
                                    </li>
                                    <li><span class="dashicons dashicons-thumbs-up"></span>
                                        <a href="https://plus.google.com/u/0/b/112736162951079313360/112736162951079313360" target="_blank">Google+</a>
                                    </li>
                                    <li><span class="dashicons dashicons-thumbs-up"></span>
                                        <a href="https://www.facebook.com/wordpress.melibu/" target="_blank">Facebook Like</a>
                                    </li>
                                    <li><span class="dashicons dashicons-thumbs-up"></span>
                                        <a href="https://github.com/Samettarim/sharing-social-safe" target="_blank">Github Star</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col">
                                <h3><?php _e('Feel free and post your question, suggestion, idea or criticism. We love it!', 'sharing-social-safe'); ?></h3>
                                <ul>
                                    <li><span class="dashicons dashicons-sos"></span> <?php _e('For Plugin English Support', 'sharing-social-safe'); ?>
                                        <a href="https://wordpress.org/support/plugin/<?php echo $datas['TextDomain']; ?>" target="_blank"><?php _e('Support EN', 'sharing-social-safe'); ?></a>
                                    </li>
                                    <li><span class="dashicons dashicons-sos"></span> <?php _e('For Plugin German Support', 'sharing-social-safe'); ?>
                                        <a href="https://plus.google.com/u/0/communities/106070505484298900786" target="_blank"><?php _e('Support DE', 'sharing-social-safe'); ?></a>
                                    </li>
                                    <li><span class="dashicons dashicons-sos"></span> <?php _e('For Plugin Turkey Support', 'sharing-social-safe'); ?>
                                        <a href="https://plus.google.com/u/0/communities/111364399553479782817" target="_blank"><?php _e('Support TR', 'sharing-social-safe'); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="st_melibuPlugin_list_item_4">
                    <div class="st_melibuPlugin_list_content">
                        <h3><?php _e('Development ', 'sharing-social-safe'); ?></h3>
                        <hr />
                        <ul>
                            <li>
                                <h3><?php _e('Author', 'sharing-social-safe'); ?></h3>
                                <a href="https://profiles.wordpress.org/prodeveloper/">
                                    <img src="//secure.gravatar.com/avatar/d15ce54d18adb5cf02bd9676be830485?s=150&d=mm&r=g" class="avatar user-14722029-avatar avatar-150 photo" alt="Profile picture of Samet Tarim" height="150" width="150">
                                </a>
                                <p>
                                    <?php _e('Founder and Project Manager', 'sharing-social-safe'); ?><br />
                                    <span class="dashicons dashicons-welcome-learn-more"></span>
                                    <a href="http://samet-tarim.de/" target="_blank">Dipl. Web Engineer, Samet Tarim</a>
                                </p>
                            </li>
                            <li>
                                <h3><?php _e('Contributors', 'sharing-social-safe'); ?></h3>
                                <a href="https://profiles.wordpress.org/projectmate/">
                                    <img src="//www.gravatar.com/avatar/403021844ef89f1ced9663c5708eb3ab?s=150&amp;r=g&amp;d=mm" class="avatar user-14822683-avatar avatar-150 photo" alt="Profile picture of Volkan Tarim" height="150" width="150">
                                </a>
                                <p>
                                    <?php _e('Economic Computer Science', 'sharing-social-safe'); ?><br />
                                    <a href="http://volkan-tarim.de/" target="_blank">Volkan Tarim</a>
                                </p>
                            </li>

                            <li class="wp-person"><h3><?php _e('Marketing', 'sharing-social-safe'); ?></h3> 
                                <p>
                                    <a href="http://samet-tarim.de/" target="_blank">Samet Tarim</a>, 
                                    <a href="http://volkan-tarim.de/" target="_blank">Volkan Tarim</a>
                                </p>
                            </li>
                            <li class="wp-person"><h3><?php _e('Developer', 'sharing-social-safe'); ?></h3>
                                <p>
                                    <a href="http://samet-tarim.de/" target="_blank">Samet Tarim</a>, 
                                    <a href="http://volkan-tarim.de/" target="_blank">Volkan Tarim</a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="st_melibuPlugin_list_item_5">
                    <div class="st_melibuPlugin_list_content">
                        <h3><?php _e('Thanks all Translaters', 'sharing-social-safe'); ?></h3>
                        <p>
                            <span class="dashicons dashicons-translation"></span> <?php _e('Translate this Plugin', 'sharing-social-safe'); ?>: <a href="https://translate.wordpress.org/projects/wp-plugins/<?php echo $datas['TextDomain']; ?>" target="_blank"><?php _e('Translate', 'sharing-social-safe'); ?></a>
                        </p>
                        <hr />
                    </div>
                </li>
                <li class="st_melibuPlugin_list_item_6">
                    <div class="st_melibuPlugin_list_content">
                        <h3><?php _e('Donate', 'sharing-social-safe'); ?></h3>
                        <p>
                            <?php _e('Development is fueled by your praise and feedback', 'sharing-social-safe'); ?>
                        </p>
                        <hr />
                        <p>
                            <?php _e('In how you can support us so that we can further develop this plugin regularly, it may not always be financially, so you will give us feedback or recommend us, please give us a review, Liken our Facebook page or sponsor us, so that we further useful free plugins can develop.', 'sharing-social-safe'); ?>
                        </p>    
                        <p>
                            <?php _e('You see, it is much more possible if you want to support something, thanks to all the Support Us.', 'sharing-social-safe'); ?>
                        </p>
                        <img src="<?php echo plugins_url('img/paypal-logo.jpg', dirname(__FILE__)); ?>" alt="" width="130" height="35"/>
                        <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="BN988PMGBEB2S">
                            <input type="image" src="https://www.paypalobjects.com/de_DE/DE/i/btn/btn_donateCC_LG.gif" border="0" name="submit" alt="<?php _e('Now simply, quickly and safely pay online - with PayPal.', 'sharing-social-safe'); ?>">
                            <img alt="" border="0" src="https://www.paypalobjects.com/de_DE/i/scr/pixel.gif" width="1" height="1">
                        </form>
                        <p><?php _e('LOOK FOR SPONSOR !!!', 'sharing-social-safe'); ?></p>
                        <p><em><?php _e('Your Melibu Team', 'sharing-social-safe'); ?></em></p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>