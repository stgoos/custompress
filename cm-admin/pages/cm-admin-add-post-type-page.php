<?php

function cm_admin_add_post_type_page() { ?>

    <div class="wrap cm-wrap">
        <h2><?php _e('Add Post Type', 'custommanager'); ?></h2>
        <form action="" method="post" class="cm-post-type">
            <?php wp_nonce_field( 'cm_submit_post_type_verify', 'cm_submit_post_type_secret' ); ?>
            <input type="hidden" name="cm-admin-add-post-type-page" value="" />
            <div class="cm-wrap-left">
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Post Type', 'custommanager') ?></h3>
                    <table class="form-table <?php do_action('cm_invalid_field_post_type'); ?>">
                        <tr>
                            <th>
                                <label for="post_type"><?php _e('Post Type', 'custommanager') ?> <span class="cm-required">( <?php _e('required', 'custommanager'); ?> )</span></label>
                            </th>
                            <td>
                                <input type="text" name="post_type" value="<?php echo( $_POST['post_type'] ); ?>">
                                <span class="description"><?php _e('The new post type system name ( max. 20 characters ). Alphanumeric characters and underscores only. Min 2 letters. Once added the post type system name cannot be changed.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Supports', 'custommanager') ?></h3>
                    <table class="form-table supports">
                        <tr>
                            <th>
                                <label for="supports"><?php _e('Supports', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('An alias for calling add_post_type_support() directly.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="checkbox" name="supports[title]" value="title" <?php if ( $_POST['supports']['title'] == 'title') { echo( 'checked="checked"' ); } elseif ( $_POST['supports']['title'] === null && !isset( $_POST['cm-admin-add-post-type-page'] )) { echo( 'checked="checked"' ); } ?>>
                                <span class="description"><strong><?php _e('Title', 'custommanager') ?></strong></span>
                                <br />
                                <input type="checkbox" name="supports[editor]" value="editor" <?php if ( $_POST['supports']['editor'] == 'editor') echo( 'checked="checked"' ); elseif ( $_POST['supports']['editor'] === null && !isset( $_POST['cm-admin-add-post-type-page'] )) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Editor', 'custommanager') ?></strong> - <?php _e('Content', 'custommanager') ?></span>
                                <br />
                                <input type="checkbox" name="supports[author]" value="author" <?php if ( $_POST['supports']['author'] == 'author') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Author', 'custommanager') ?></strong></span>
                                <br />
                                <input type="checkbox" name="supports[thumbnail]" value="thumbnail" <?php if ( $_POST['supports']['thumbnail'] == 'thumbnail') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Thumbnail', 'custommanager') ?></strong> - <?php _e('Featured Image - current theme must also support post-thumbnails.', 'custommanager') ?></span>
                                <br />
                                <input type="checkbox" name="supports[excerpt]" value="excerpt" <?php if ( $_POST['supports']['excerpt'] == 'excerpt') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Excerpt', 'custommanager') ?></strong></span>
                                <br />
                                <input type="checkbox" name="supports[trackbacks]" value="trackbacks" <?php if ( $_POST['supports']['trackbacks'] == 'trackbacks') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Trackbacks', 'custommanager') ?></strong></span>
                                <br />
                                <input type="checkbox" name="supports[custom_fields]" value="custom_fields" <?php if ( $_POST['supports']['custom_fields'] == 'custom_fields') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Custom Fields', 'custommanager') ?></strong></span>
                                <br />
                                <input type="checkbox" name="supports[comments]" value="comments" <?php if ( $_POST['supports']['comments'] == 'comments') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Comments', 'custommanager') ?></strong> - <?php _e('Also will see comment count balloon on edit screen.', 'custommanager') ?></span>
                                <br />
                                <input type="checkbox" name="supports[revisions]" value="revisions" <?php if ( $_POST['supports']['revisions'] == 'revisions') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Revisions', 'custommanager') ?></strong> - <?php _e('Will store revisions.', 'custommanager') ?></span>
                                <br />
                                <input type="checkbox" name="supports[page_attributes]" value="page_attributes" <?php if ( $_POST['supports']['page_attributes'] == 'page_attributes') echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('Page Attributes', 'custommanager') ?></strong> - <?php _e('Template and menu order - Hierarchical must be true!', 'custommanager') ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Capability Type', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="capability_type"><?php _e('Capability Type', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="capability_type" value="post">
                                <input type="checkbox" name="capability_type_edit" value="1" />
                                <span class="description cm_ct_edit"><strong><?php _e('EDIT' , 'custommanager'); ?></strong> (<?php _e('advanced' , 'custommanager'); ?>)</span>
                                <span class="description"><?php _e('The post type to use for checking read, edit, and delete capabilities. Default: "post".' , 'custommanager'); ?></span>
                                
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Labels', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="name"><?php _e('Name', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[name]" value="<?php echo( $_POST['labels']['name'] ); ?>">
                                <span class="description"><?php _e('General name for the post type, usually plural.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="singular_name"><?php _e('Singular Name', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[singular_name]" value="<?php echo( $_POST['labels']['singular_name'] ); ?>">
                                <span class="description"><?php _e('Name for one object of this post type. Defaults to value of name.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="add_new"><?php _e('Add New', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[add_new]" value="<?php echo( $_POST['labels']['add_new'] ); ?>">
                                <span class="description"><?php _e('The add new text. The default is Add New for both hierarchical and non-hierarchical types.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="add_new_item"><?php _e('Add New Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[add_new_item]" value="<?php echo( $_POST['labels']['add_new_item'] ); ?>">
                                <span class="description"><?php _e('The add new item text. Default is Add New Post/Add New Page.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="edit_item"><?php _e('Edit Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[edit_item]" value="<?php echo( $_POST['labels']['edit_item'] ); ?>">
                                <span class="description"><?php _e('The edit item text. Default is Edit Post/Edit Page.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="new_item"><?php _e('New Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[new_item]" value="<?php echo( $_POST['labels']['new_item'] ); ?>">
                                <span class="description"><?php _e('The new item text. Default is New Post/New Page.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="view_item"><?php _e('View Item', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[view_item]" value="<?php echo( $_POST['labels']['view_item'] ); ?>">
                                <span class="description"><?php _e('The view item text. Default is View Post/View Page.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="search_items"><?php _e('Search Items', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[search_items]" value="<?php echo( $_POST['labels']['search_items'] ); ?>">
                                <span class="description"><?php _e('The search items text. Default is Search Posts/Search Pages.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="not_found"><?php _e('Not Found', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[not_found]" value="<?php echo( $_POST['labels']['not_found'] ); ?>">
                                <span class="description"><?php _e('The not found text. Default is No posts found/No pages found.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="not_found_in_trash"><?php _e('Not Found In Trash', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[not_found_in_trash]" value="<?php echo( $_POST['labels']['not_found_in_trash'] ); ?>">
                                <span class="description"><?php _e('The not found in trash text. Default is No posts found in Trash/No pages found in Trash.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="parent_item_colon"><?php _e('Parent Item Colon', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="labels[parent_item_colon]" value="<?php echo( $_POST['labels']['parent_item_colon'] ); ?>">
                                <span class="description"><?php _e('The parent text. This string isn\'t used on non-hierarchical types. In hierarchical ones the default is Parent Page', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Description', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="description"><?php _e('Description', 'custommanager') ?></label>
                            </th>
                            <td>
                                <textarea name="description" cols="52" rows="3"><?php echo( $_POST['description'] ); ?></textarea>
                                <span class="description"><?php _e('A short descriptive summary of what the post type is.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Menu Position', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="menu_position"><?php _e('Menu Position', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="menu_position" value="<?php if ( $_POST['menu_position'] ) echo( $_POST['menu_position'] ); elseif ( $_POST['menu_position'] === null ) echo( '50' ); ?>">
                                <span class="description"><?php _e('5 - below Posts; 10 - below Media; 20 - below Pages; 60 - below first separator; 100 - below second separator', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Menu Icon', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="menu_icon"><?php _e('Menu Icon', 'custommanager') ?></label>
                            </th>
                            <td>
                                <input type="text" name="menu_icon" value="<?php echo( $_POST['menu_icon'] ); ?>">
                                <span class="description"><?php _e('The url to the icon to be used for this menu.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="cm-wrap-right">                
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Public', 'custommanager') ?></h3>
                    <table class="form-table publica">
                        <tr>
                            <th>
                                <label for="public"><?php _e('Public', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Meta argument used to define default values for publicly_queriable, show_ui, show_in_nav_menus and exclude_from_search.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="public" value="1"  <?php if ( $_POST['public'] === '1' ) echo( 'checked="checked"' ); elseif ( $_POST['public'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong><br />
                                <?php _e('Display a user-interface for this "post_type"', 'custommanager');?><br />( show_ui = TRUE )<br /><br />
                                <?php _e('Show "post_type" for selection in navigation menus', 'custommanager'); ?><br />( show_in_nav_menus = TRUE )<br /><br />
                                <?php _e('"post_type" queries can be performed from the front-end', 'custommanager'); ?><br />( publicly_queryable = TRUE )<br /><br />
                                <?php _e('Exclude posts with this post type from search results', 'custommanager'); ?><br /> ( exclude_from_search = FALSE )</span>
                                <br /><br />
                                <input type="radio" name="public" value="0" <?php if ( $_POST['public'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong><br />
                                <?php _e('Don not display a user-interface for this "post_type"', 'custommanager');?><br />( show_ui = FALSE )<br /><br />
                                <?php _e('Hide "post_type" for selection in navigation menus', 'custommanager'); ?><br />( show_in_nav_menus = FALSE )<br /><br />
                                <?php _e('"post_type" queries cannot be performed from the front-end', 'custommanager'); ?><br />( publicly_queryable = FALSE )<br /><br />
                                <?php _e('Exclude posts with this post type from search results', 'custommanager'); ?><br /> ( exclude_from_search = TRUE )</span>
                                <br /><br />
                                <input type="radio" name="public" value="advanced" <?php if ( $_POST['public'] == 'advanced' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('ADVANCED', 'custommanager'); ?></strong> - <?php _e('You can set each component manualy.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Show UI', 'custommanager') ?></h3>
                    <table class="form-table show-ui">
                        <tr>
                            <th>
                                <label for="show_ui"><?php _e('Show UI', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether to generate a default UI for managing this post type. Note that built-in post types, such as post and page, are intentionally set to false.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="show_ui" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_ui'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong> - <?php _e('Display a user-interface (admin panel) for this post type.', 'custommanager'); ?></span>
                                <br />
                                <input type="radio" name="show_ui" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_ui'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong> - <?php _e('Do not display a user-interface for this post type.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Show In Nav Menus ', 'custommanager') ?></h3>
                    <table class="form-table show-in-nav-menus">
                        <tr>
                            <th>
                                <label for="show_in_nav_menus"><?php _e('Show In Nav Menus', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether post_type is available for selection in navigation menus.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="show_in_nav_menus" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_in_nav_menus'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="show_in_nav_menus" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['show_in_nav_menus'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Publicly Queryable', 'custommanager') ?></h3>
                    <table class="form-table public-queryable">
                        <tr>
                            <th>
                                <label for="publicly_queryable"><?php _e('Publicly Queryable', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether post_type queries can be performed from the front end.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="publicly_queryable" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['publicly_queryable'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="publicly_queryable" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['publicly_queryable'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Exclude From Search', 'custommanager') ?></h3>
                    <table class="form-table exclude-from-search">
                        <tr>
                            <th>
                                <label for="exclude_from_search"><?php _e('Exclude From Search', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether to exclude posts with this post type from search results.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="exclude_from_search" value="1" <?php if ( $_POST['public'] == 'advanced' && $_POST['exclude_from_search'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="exclude_from_search" value="0" <?php if ( $_POST['public'] == 'advanced' && $_POST['exclude_from_search'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Hierarchical', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="hierarchical"><?php _e('Hierarchical', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Whether the post type is hierarchical. Allows Parent to be specified.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="hierarchical" value="1" <?php if ( $_POST['hierarchical'] === '1' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="hierarchical" value="0" checked="checked" <?php if ( $_POST['hierarchical'] === '0' ) echo( 'checked="checked"' ); elseif ( $_POST['hierarchical'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Rewrite', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="rewrite"><?php _e('Rewrite', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Rewrite permalinks with this format. If TRUE, the post type system name will be used for the rewrite slug. ', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="rewrite" value="1" <?php if ( $_POST['rewrite'] === '1' ) echo( 'checked="checked"' ); elseif ( $_POST['rewrite'] === null ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="rewrite" value="0" <?php if ( $_POST['rewrite'] === '0' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="rewrite" value="advanced" <?php if ( $_POST['rewrite'] === 'advanced' ) echo( 'checked="checked"' ); ?>>
                                <span class="description"><strong><?php _e('CUSTOM SLUG', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="text" name="rewrite_slug" value="<?php echo( $_POST['rewrite_slug'] ); ?>" />
                                <br />
                                <span class="description"><?php _e('Prepend posts with this slug.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Query var', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="query_var"><?php _e('Query var', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Can queries be performed on this post_type.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="query_var" value="1" checked="checked">
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="query_var" value="0">
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="cm-table-wrap">
                    <div class="cm-arrow"><br></div>
                    <h3 class="cm-toggle"><?php _e('Can Export', 'custommanager') ?></h3>
                    <table class="form-table">
                        <tr>
                            <th>
                                <label for="hierarchical"><?php _e('Can Export', 'custommanager') ?></label>
                            </th>
                            <td>
                                <span class="description"><?php _e('Can this post_type be exported.', 'custommanager'); ?></span>
                            </td>
                        </tr>
                       <tr>
                            <th></th>
                            <td>
                                <input type="radio" name="can_export" value="1" checked="checked">
                                <span class="description"><strong><?php _e('TRUE', 'custommanager'); ?></strong></span>
                                <br />
                                <input type="radio" name="can_export" value="0">
                                <span class="description"><strong><?php _e('FALSE', 'custommanager'); ?></strong></span>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <br style="clear: left" />
            <input type="submit" class="button-primary" name="cm_submit_add_post_type" value="Add Post Type">
            <br /><br /><br /><br />
        </form>
    </div> <?php
}
?>