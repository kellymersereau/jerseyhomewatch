require('./bootstrap');

$(document).ready(function(){
    // MOBILE NAV FUNCTIONALITY
    $('.mobile-menu-btn').on('click', function(e){
        e.preventDefault();
        
        if ($('body').hasClass('mobile-nav-showing')){
            $('body').removeClass('mobile-nav-showing');
        } else {
            $('body').addClass('mobile-nav-showing');
        }
    });
});
