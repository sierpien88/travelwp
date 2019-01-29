jQuery(document).ready(function() {
        jQuery(document).delegate('.open', 'click', function(event){
            jQuery(this).addClass('oppenned');
            event.stopPropagation();
        })
        jQuery(document).delegate('body', 'click', function(event) {
            jQuery('.open').removeClass('oppenned');
        })
        jQuery(document).delegate('.cls', 'click', function(event){
            jQuery('.open').removeClass('oppenned');
            event.stopPropagation();
        });

    });