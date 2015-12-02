// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
jQuery(document).foundation();

jQuery(document).ready(function(){
    jQuery('#cities_slideshow').slippry(
        {
            'captions' : false,
            'pager' : false,
        } 
        );
    jQuery('.pane--kresge-header').addClass('pane-kresge-header');
    jQuery('.pane--kresge-footer').addClass('pane-kresge-footer');
    jQuery('.site-tagline .pane__content').addClass('pane-content');
});
