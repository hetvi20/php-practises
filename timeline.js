var item = jQuery('.extended-parallax')
    if (item.length !== 0 ) {
        item.each( function() {
            jQuery(this).paroller();
        })
    }