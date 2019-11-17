jQuery(document).ready(function($){
    const $notice = $('.notice');
    if($notice){
        $('.notice .timer').animate({width: '0px'}, 3000, () => {
            $notice.fadeOut();
        })

    }
});

