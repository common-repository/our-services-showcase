<?php include_once 'setting.php';
extract(get_option('smartcat_services_options'));
?>
<?php if( ! $this->strap_pl() ) : exit( 'Please activate your license <a class="button-primary" href="' . admin_url( 'edit.php?post_type=service&page=smartcat_services_license' ) . '">Activate</a>' ); endif; ?>

<div class="width70 left">
    <p>To display the Services, copy and paste this shortcode into the page or widget where you want to show it. 
        <input type="text" readonly="readonly" value="[our-services]" style="width: 100px" onfocus="this.select()"/>
    </p>
    <p><iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FSmartcatDesign&amp;width&amp;layout=standard&amp;action=like&amp;show_faces=false&amp;share=false&amp;height=35&amp;appId=233286813420319" scrolling="no" frameborder="0" style="border:none; overflow:hidden; height:35px;" allowTransparency="true"></iframe></p>

    <form name="sc_our_services_post_form" method="post" action="" enctype="multipart/form-data">
        <table class="widefat">
            <thead>
                <tr>
                    <th colspan="2"><b><?php _e('Services Settings', 'smartcat-services'); ?></b></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php _e('Template', 'smartcat-services'); ?></td>
                    <td>
                        <select name="smartcat_services_options[template]" id="sc_our_services_template">
                            <option><?php _e('Select Template', 'smartcat-services'); ?></option>

                            <option value="columns" <?php echo 'columns' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 1 - Icons', 'smartcat-services'); ?></option>                            
                            <option value="icons" <?php echo 'icons' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 2 - Icons', 'smartcat-services'); ?></option>
                            <option value="images" <?php echo 'images' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 3 - Image Grid', 'smartcat-services'); ?></option>
<!--                            <option value="zoomOut" <?php echo 'zoomOut' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 4 - Images Zoom Out', 'smartcat-services'); ?></option>
                            <option value="slide" <?php echo 'slide' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 5 - Images Slide In', 'smartcat-services'); ?></option>-->
                            <option value="quad" <?php echo 'quad' == esc_attr($template) ? 'selected=selected' : ''; ?>><?php _e('Template 4 - Image Grid 2', 'smartcat-services'); ?></option>
                            <option disabled="disabled"><?php _e('Template 5 - Carousel ( pro version )', 'smartcat-services'); ?></option>
                            <option disabled="disabled"><?php _e('Template 6 - Enhanced Image Grid ( pro version )', 'smartcat-services'); ?></option>
                            <option disabled="disabled"><?php _e('Template 7 - Accordion ( pro version )', 'smartcat-services'); ?></option>
                            
                            
                        </select>
                    </td>
                </tr>

                <tr id="columns-row">
                    <td>Grid Columns</td>
                    <td>
                        <select name="smartcat_services_options[columns]">
                            <option value="6" <?php echo '6' == esc_attr($columns) ? 'selected=selected' : ''; ?>>2</option>
                            <option value="4" <?php echo '4' == esc_attr($columns) ? 'selected=selected' : ''; ?>>3</option>
                            <option value="3" <?php echo '3' == esc_attr($columns) ? 'selected=selected' : ''; ?>>4</option>
                        </select>
                    </td>
                </tr>                   
                  

                <tr id="font-size-row">
                    <td><?php _e('Title Font Size', 'smartcat-services'); ?></td>
                    <td>
                        <input type="text" name="smartcat_services_options[title_size]" value="<?php echo esc_attr($title_size); ?>" class="width25"/>px
                    </td>
                </tr>       
                <tr>
                    <td><?php _e('Main Color', 'smartcat-services'); ?></td>
                    <td>
                        <input class="wp_popup_color width25" type="text" value="<?php echo esc_attr($main_color); ?>" name="smartcat_services_options[main_color]"/>
                    </td>
                </tr>
                <tr>
                    <td><?php _e('Link Color', 'smartcat-services'); ?></td>
                    <td>
                        <input class="wp_popup_color width25" type="text" value="<?php echo esc_attr($accent_color); ?>" name="smartcat_services_options[accent_color]"/>
                    </td>
                </tr>


                <tr id="height-row">
                    <td><?php echo _e('Word Count', 'smartcat-services'); ?></td>
                    <td>
                        <input type="text" name="smartcat_services_options[word_count]" value="<?php echo esc_attr($word_count); ?>" class="width25"/><br>
                    </td>
                </tr>   

                <tr id="height-row">
                    <td><?php echo _e('Link Text', 'smartcat-services'); ?></td>
                    <td>
                        <input type="text" name="smartcat_services_options[link_text]" value="<?php echo esc_attr($link_text); ?>" class="width25"/><br>
                        <em><?php _e('Leave this field empty to hide the link button'); ?></em>
                    </td>
                </tr>   

                <tr>
                    <td><?php _e('Number of Services to display', 'smartcat-services'); ?></td>
                    <td>
                        <input type="text" value="<?php echo esc_attr($member_count); ?>" name="smartcat_services_options[member_count]" placeholder="number of members to show"/><br>
                        <em><?php _e('Set to -1 to display all', 'smartcat-services'); ?></em>
                    </td>
                </tr>

            </tbody>
        </table>

        <table class="widefat">
            <thead>
                <tr>
                    <th colspan="2"><b>Single Service View Settings</b></th>
                </tr>
            </thead>
                <tr>
                    <td>Template</td>
                    <td>
                        <select name="smartcat_services_options[single_template]">
                            <option>Select Template</option>
                            <option value="standard" <?php echo 'standard' == esc_attr( $single_template ) ? 'selected=selected' : ''; ?>>Theme Default (single post)</option>
                            <option disabled="disabled">Card (pop-up) - pro version</option>
                            <option disabled="disabled">Side Panel - pro version</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Card Popup/Panel Margin From Top <span class="proversion">Pro version</span></td>
                    <td>
                        <input class="width25" type="text" value="" disabled="disabled"/> px
                    </td>
                </tr>
                
                <tr id="">
                    <td>Display Social Icons <span class="proversion">Pro version</span></td>
                    <td>
                        <select disabled="disabled">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>
                </tr>
                
                <tr id="">
                    <td>Display Attributes <span class="proversion">Pro version</span></td>
                    <td>
                        <select disabled="disabled">
                            <option>Yes</option>
                            <option>No</option>
                        </select>
                    </td>
                </tr>
                
                <tr>
                    <td>Skills Title <span class="proversion">Pro version</span></td>
                    <td>
                        <input class="" type="text" disabled="disabled" value="Attributes"/>
                    </td>
                </tr>
                
                <tr id="social_links_row">
                    <td><?php _e('Social Icon Links') ?> <span class="proversion">Pro version</span></td>
                    <td>
                        <select disabled="disabled">
                            <option >Same Page</option>
                            <option >New Page</option>
                        </select>
                    </td>
                </tr>
                            
                <tr id="social_links_style_row">
                    <td><?php _e('Social Icons Style') ?> <span class="proversion">Pro version</span></td>
                    <td>
                        <select disabled="disabled">
                            <option >Round</option>
                            <option >Flat</option>
                        </select>
                    </td>
                </tr>
                
                
                <tr>
                    <td>Image Style <span class="proversion">Pro version</span></td>
                    <td>
                        <select disabled="disabled">
                            <option>Select Style</option>
                            <option >Square</option>
                            <option >Circle</option>
                        </select>
                    </td>
                </tr>

            
        </table>

        <input type="hidden" name="smartcat_services_options[redirect]" value=""/>
        <div style="text-align: right">
            <input type="submit" name="sc_our_services_save" value="Update" class="button button-primary" />
        </div>

    </form>

    <div class="clear"></div>
    <br>



</div>


</div>
