/**
 * 
 * @author Smartcat Jan 21, 2015
 */
jQuery( document ).ready(function($){



    do_resize();
    
    $( window ).resize(function() {
        do_resize();
        
    });

    function do_resize() {
       
        var member_height = $('#sc_our_services.smartcat_images .sc_service').width();
        $('#sc_our_services.smartcat_images .sc_service .sc_service_inner').each(function(){
            $(this).css({
                height: member_height
            });
        });
       
        var member_height = $('#sc_our_services.smartcat_quad .sc_service').width();
        $('#sc_our_services.smartcat_quad .sc_service .sc_service_inner').each(function(){
            $(this).css({
                height: member_height
            });
        });
       
        match_col_height( $('#sc_our_services.smartcat_icons .sc_service') );
        match_col_height( $('#sc_our_services.smartcat_columns .sc_service') );

    }
    
    function match_col_height(selector) {
        var maxHeight = 0;
        $(selector).each(function() {
            var height = $(this).height();
            if (height > maxHeight) {
                maxHeight = height;
            }
        });
        $(selector).height(maxHeight);
    }


    $( ".smartcat_accordion" ).accordion({
        collapsible : true,
        active: false
    });

    $( ".sc-social" ).tooltip({

    });

//    $('.sc_services_single_popup').click( function(e){
//        
//        var item = null;
//        
//        if( $(this).hasClass('sc_team_member') ){
//            item = $(this);
//        }else{
//            item = $(this).parents('.sc_team_member');
//        }
//        
//        build_popup( item );
//        e.stopPropagation();
//        e.preventDefault();
//        
//    });

    smartcat_resize_grid();
    $( window ).resize(function() {
        smartcat_resize_grid();
    });

    
    function smartcat_resize_grid(){
        var member_height = $('#sc_our_services.smartcat_zoomOut .sc_service').width();
        $('#sc_our_services.smartcat_zoomOut .sc_service').each(function(){
            $(this).css({
                height: member_height
            });
        });         
        var member_height = $('#sc_our_services.smartcat_slide .sc_service').width();
        $('#sc_our_services.smartcat_slide .sc_service').each(function(){
            $(this).css({
                height: member_height
            });
        });         
    }


    $('#sc_our_services.smartcat_images .sc_service').hover( function () {
        $('.sc-overlay', $(this)).stop( true, false ).animate({
            height      :   '50%'
        }, 400 );
        $('.sc_service_name', $(this)).stop( true, false ).animate({
            bottom      :   '50px'
        }, 400 );
    }, function() {
        $('.sc-overlay', $(this)).stop( true, false ).animate({
            height      :   '40px'
        }, 400 );
        $('.sc_service_name', $(this)).stop( true, false ).animate({
            bottom      :   '0'
        }, 400 );
    });

    $('#sc_our_services.smartcat_zoomOut .sc_service').hover( function () {
        
        $('.sc_service_name', $(this) ).removeClass('bounceOutDown').delay(100).queue( function ( next ) {
            $( this ).addClass( 'animated bounceInUp show' );
            next();
        });
        $('.sc_services_read_more', $(this) ).removeClass('bounceOutRight').delay(400).queue( function ( next ) {
            $( this ).addClass('animated bounceInRight show');
            next();
        });

    }, function () {
        
        $('.sc_services_read_more', $(this) ).addClass( 'bounceOutRight' ).delay(600).queue( function ( next ) {
            $( this ).removeClass( 'show animated' );
            next();
        });
        $('.sc_service_name', $(this) ).addClass( 'bounceOutDown' ).delay(600).queue( function ( next ) {
            $( this ).removeClass('show animated');
            next();
        });
        
    });


    $('#sc_our_services.smartcat_slide .sc_service').hover( function () {
        
        $('.sc_service_name', $(this) ).removeClass('bounceOutDown').delay(100).queue( function ( next ) {
            $( this ).addClass( 'animated bounceInUp show' );
            next();
        });
        $('.sc_services_content', $(this) ).removeClass('fadeOutRight').delay(400).queue( function ( next ) {
            $( this ).addClass('animated fadeInRight show');
            next();
        });

    }, function () {
        
        $('.sc_services_content', $(this) ).addClass( 'fadeOutRight' ).delay(600).queue( function ( next ) {
            $( this ).removeClass( 'show animated fadeInRight' );
            next();
        });
        $('.sc_service_name', $(this) ).addClass( 'bounceOutDown' ).delay(600).queue( function ( next ) {
            $( this ).removeClass('show animated');
            next();
        });
        
    });


    $('#sc_our_services.smartcat_quad .sc_service').hover( function () {
        
        var item = $(this);
        
        $('.sc-overlay', $(this) ).stop( true, false ).animate({
            height  :   '100%'
        }, 300, function() {
            $('.sc_services_read_more', item ).show().removeClass('flipOutY').addClass('animated flip');
            $('.sc_service_name', item ).addClass('animated pulse');
        });

    }, function () {
        
        var item = $(this);
        
        $('.sc_services_read_more', item ).addClass('flipOutY').removeClass('flip').delay(600).queue( function (next) {
            
            $(this).hide();
            
            $('.sc_service_name', item ).removeClass('animated pulse');
            $('.sc-overlay', item ).stop( true, false ).animate({
                height  :   '20%'
            }, 200, function() {

            });                  
            
            next();
            
        });
        
    });
    
    
    function matchColHeights(selector) {
        var maxHeight = 0;
        $(selector).each(function() {
            
            var height = $(this).height();
            
            console.log( height );

            
            if (height > maxHeight) {
                maxHeight = height;
            }
            
            console.log( maxHeight );
            
        });
        $(selector).css({
            height : maxHeight
        });
    }
    
    
    

    
    $('#sc_our_services_lightbox .fa-close').click( function( event ) {
        
        if( $('#sc_our_services_lightbox').hasClass('show') ){
            
            $('.sc_our_services_lightbox').slideUp(300, function(){
                
                $('#sc_our_services_lightbox').fadeOut(300);
                
            });
            $('#sc_our_services_lightbox').removeClass('show');
            
        }	
        
    });
                
    $('.sc_our_services_panel .sc-right-panel .fa-close').click( function () {

        if( $('#sc_our_services_panel').hasClass('show') ){

            $('.sc_our_services_panel').removeClass('slidein');

            $('#sc_our_services_panel').delay(450).fadeOut(300);

            $('#sc_our_services_panel').removeClass('show');
        }            
    });
        
    
    
    $('.sc_services_single_popup').click( function(e){
        
        var item = null;
        
        if( $(this).hasClass('sc_service') ){
            item = $(this);
        }else{
            item = $(this).parents('.sc_service');
        }
        
        build_popup( item );
        e.stopPropagation();
        e.preventDefault();
        
    });
    
    function build_popup( item ){
        
        $('.sc_our_services_lightbox .name').html($('.sc_service_name a', item).html());
        $('.sc_our_services_lightbox .skills').html($('.sc_team_skills', item).html());
        $('.sc_our_services_lightbox .sc-content').html($('.sc_team_content', item).html());
        $('.sc_our_services_lightbox .sc_personal_quote').html($('.sc_personal_quote', item).html());
        $('.sc_our_services_lightbox .social').html($('.icons', item).html());
        $('.sc_our_services_lightbox .title').html($('.sc_team_member_jobtitle', item).html());
        $('.sc_our_services_lightbox .image').attr('src', $('.wp-post-image', item).attr('src'));

        if( item.hasClass('sc_icons_grid') ) {
            $('.sc_our_services_lightbox .sc-icon').html( '<span class="' + $('.fa', item).attr('class') + '"></span>' );
            $('.sc_our_services_lightbox .image').hide();
        }else{
            $('.sc_our_services_lightbox .image').show();
        }

        $('#sc_our_services_lightbox').fadeIn(350, function () {
            
            $('.sc_our_services_lightbox')
                    .css('opacity', 0)
                    .slideDown('slow')
                    .animate({ opacity : 1 }, { queue : false, duration: 'slow' });
                    
            
            $('#sc_our_services_lightbox').addClass('show');
            
        });
        
    }
    
    
    $('.sc_services_single_panel').click( function(e){
        
        var item = null;
        
        if( $(this).hasClass('sc_service') ){
            item = $(this);
        }else{
            item = $(this).parents('.sc_service');
        }
        
        build_panel( item );
        e.stopPropagation();
        e.preventDefault();
        
    });    
    function build_panel( item ){
        
        $('.sc_our_services_panel .sc-name').html($('.sc_service_name a', item).html());
        $('.sc_our_services_panel .sc-skills').html($('.sc_team_skills', item).html());
        $('.sc_our_services_panel .sc_personal_quote').html($('.sc_personal_quote', item).html());
        $('.sc_our_services_panel .sc-content').html($('.sc_team_content', item).html());
        $('.sc_our_services_panel .sc-social').html($('.icons', item).html());
        $('.sc_our_services_panel .sc-title').html($('.sc_team_member_jobtitle', item).html());
        $('.sc_our_services_panel .sc-image').attr('src', $('.wp-post-image', item).attr('src'));

        if( item.hasClass('sc_icons_grid') ) {
            
            $('.sc_our_services_panel .sc-icon').html( '<span class="' + $('.fa', item).attr('class') + '"></span>' );
            $('.sc_our_services_panel .sc-image').hide();
        }else{
            $('.sc_our_services_panel .sc-image').show();
            $('.sc_our_services_panel .sc-icon').hide();
        }

        $('#sc_our_services_panel').fadeIn(350, function () {


            $('.sc_our_services_panel').addClass('slidein');
            $('#sc_our_services_panel').addClass('show');

        });
        
    }    
    
    
    $('#sc_our_team .sc_team_member').hover(function(){
        $('.sc_team_member_overlay',this).stop(true,false).fadeIn(440);
        $('.wp-post-image',this).addClass('zoomIn');
        $('.sc_team_more',this).addClass('show');
        
    },function(){
       $('.sc_team_member_overlay',this).stop(true,false).fadeOut(440)       
       $('.wp-post-image',this).removeClass('zoomIn');
       $('.sc_team_more',this).removeClass('show');
       
    });


});
