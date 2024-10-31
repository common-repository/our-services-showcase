<?php
/*
 * Short description
 * @author bilal hassan <info@smartcatdesign.net>
 * 
 */
$args = $this->sc_get_args( $group );
$members = new WP_Query( $args );
?>
<div id="sc_our_services" class="smartcat_<?php echo $template == '' ? $this->options[ 'template' ] : $template; ?>">
    <div class="clear"></div>
    <?php
    if ( $members->have_posts() ) {
        while ( $members->have_posts() ) {
            $members->the_post();
            ?>
            <div class="sc_service sc-col-sm-<?php echo $this->options[ 'columns' ]; ?> sc_images_grid">
                <div class="sc_service_inner">
                    
                    <?php
                    if ( has_post_thumbnail() )
                        echo the_post_thumbnail( 'large' );
                    else {
                        echo '<img src="' . SC_SERVICES_URL . 'inc/img/noprofile.jpg" class="attachment-medium wp-post-image"/>';
                    }
                    ?>
                    
                    <div class="sc_services_more">
                        <a href="<?php the_permalink() ?>" rel="bookmark" class="<?php echo $this->check_clicker( $single_template ); ?>">
                            <img src="<?php echo SC_SERVICES_URL . 'inc/img/more.png' ?>" class=""/> 
                        </a>
                    </div>
                        
                    <span class="sc-overlay"></span>
                    

                    <div itemprop="name" class="sc_service_name">
                        <a href="<?php the_permalink() ?>" rel="bookmark" class="<?php echo $this->check_clicker( $single_template ); ?>">                            
                            <?php the_title() ?>
                        </a>
                    </div>

                    <div class="sc_personal_quote">
                        <?php if( get_post_meta(get_the_ID(), 'service_qoute', true ) ) : ?>
                            <span class="fa fa-quote-left"></span>
                            <span class="sc_personal_quote_content"><?php echo get_post_meta(get_the_ID(), 'service_qoute', true ); ?></span>
                        <?php endif; ?>
                    </div>                      

                    <div class="sc_team_content">
                        <?php the_content(); ?>
                    </div>
                    
                    <div class="icons hidden">

                        <?php $this->set_social( get_the_ID() ); ?>

                    </div>
                   

                </div>
                
            </div>
            <?php
        }
    } else {
        echo 'There are no services to display';
    }
    wp_reset_postdata();
    ?>
    <div class="clear"></div>
</div>
