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
            $members->the_post(); ?>
    
            <div class="sc_service sc_icons_grid center sc-col-sm-<?php echo $this->options[ 'columns' ]; ?>">

                <div class="sc_service_inner">
                
                    <a href="<?php the_permalink() ?>" rel="bookmark" class="<?php echo $this->check_clicker( $single_template ); ?>"> 
                        <?php echo '<i class="' . get_post_meta( get_the_ID(), 'service_icon', TRUE ) . '"></i>'; ?> 
                    </a>

                    <div itemprop="name" class="sc_service_name">
                        <a href="<?php the_permalink() ?>" rel="bookmark" class="<?php echo $this->check_clicker( $single_template ); ?>">                            
                            <?php the_title() ?>
                        </a>
                    </div>

                    <div class="sc_services_content_short">
                        <?php echo wp_trim_words( get_the_content(), $this->options['word_count'] ); ?>
                    </div>

                    <?php if ( count( $this->options['link_text'] ) ) : ?>
                        <div class="sc_services_read_more">
                            <a href="<?php echo the_permalink(); ?>" class="<?php echo $this->check_clicker( $single_template ); ?>"><?php echo $this->options['link_text']; ?></a>
                        </div>
                    <?php endif; ?>
                
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
