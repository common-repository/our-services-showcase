<style>
    #gopro{
        width: 100%;
        display: block;
        clear: both;
        padding: 10px;
        margin: 10px 8px 15px 5px;
        border: 1px solid #e1e1e1;
        background: #464646;
        color: #ffffff;
        overflow: hidden;
    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    #wrapper{
        border: 1px solid #f0f0f0;
        width: 95%;

    }
    table.widefat{
        margin-bottom: 15px;
    }
    table.widefat tr{
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    table.widefat tr:hover{
        /*background: #E6E6E6;*/
    }

    #wrapper input[type='text']{
        width: 80%;
        transition: 0.3s all ease-in-out;
        -moz-transition: 0.3s all ease-in-out;
        -webkit-transition: 0.3s all ease-in-out;
    }
    #wrapper input[type='text']:focus{
        border: 1px solid #1784c9;
        box-shadow: 0 0 7px #1784c9;
        -moz-box-shadow: 0 0 5px #1784c9;
        -webkit-box-shadow: 0 0 5px #1784c9;
    }
    #wrapper input[type='text'].small-text{
        width: 20%;
    }
    .proversion{
        color: red;
        font-style: italic;
        font-size: 11px;
    }
    .choose-progress{
        display: none;
    }
    .sc_popup_mode{
        display: inline-block;
        width: 15px;
        height: 15px;
        border-radius: 100%;
        position: relative;
        top: 2px;
        box-shadow: 0 0 3px #333;
        -moz-box-shadow: 0 0 3px #333;
        -webkit-box-shadow: 0 0 3px #333;
    }

    .sc_popup_mode_off{
        background: #F54412;
    }
    .sc_popup_mode_live{
        background: #84E11F;
    }
    .sc_popup_mode_test{
        background: #FF9717;
    }
    .left{ float: left;}
    .right {float: right;}
    .center{text-align: center;}
    .width70{ width: 70%;}
    .width25{ width: 25% !important;}
    .width50{ width: 50%;}
    .larger{ font-size: larger;}
    .bold{ font-weight: bold;}
    .editcursor{ cursor: text}
    .red{ color: #CC0000; font-size: 12px;}
</style>
<?php $license = get_option('smartcat_services_key'); $status = get_option('smartcat_services_status'); ?>
<div id="wrapper">
    <div id="gopro">
        <div class="left">
            <h1><b><?php _e('Our Services Showcase Settings', 'smartcat-services'); ?></b></h1>
        </div>
        <div class="right">
            <a href="https://smartcatdesign.net/downloads/our-services-showcase-pro/" target="_blank" class="button-primary" style="padding: 40px;line-height: 0;font-size: 20px">GO PRO NOW</a>
            <a href="http://smartcatdesign.net/preview/ares/services/" target="_blank" class="button-secondary" style="padding: 40px;line-height: 0;font-size: 20px">View Demo</a>
        </div>
    </div>
    <div class="width25 right">
       
        
        <table class="widefat">
            <thead>
            <tr>
                <th><b><?php _e('Read Me', 'smartcat-services');?></b> </th>
            </tr>
            <tr>
                <td>
                    <ul>
                        
                        <li>To display services from a specific category, add the category name in the shortcode like this</li>
                        <li>[our-services group="" template="columns"]</li>
                        <li>The ideal size for featured images is 400x400 or 300x300. Please ensure all images are the same size for ideal results</li>
                    </ul>
                    
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Template Options:</strong>
                    <ul>
                        <li>columns</li>
                        <li>icons</li>
                        <li>images</li>
                        <li>quad</li>
                    </ul>
                </td>
            </tr>

            </thead>
        </table>
        
        <table class="widefat">
            <thead>
                <tr>
                    <th><b>Pro Version</b></th>
                </tr>
                <tr>
                    <td>
                        Additional Templates
                        <img src="<?php echo SC_SERVICES_URL; ?>screenshot-1.jpg" style="width: 100%"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Card popup Single View
                        <img src="<?php echo SC_SERVICES_URL; ?>screenshot-4.jpg" style="width: 100%"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        Side Panel Single View
                        <img src="<?php echo SC_SERVICES_URL; ?>screenshot-5.jpg" style="width: 100%"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="http://smartcatdesign.net/preview/ares/services/" class="button-primary">View Demo</a>
                        
                    </td>
                </tr>
            </thead>
        </table>

    </div>