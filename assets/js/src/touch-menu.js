var $ = require('jquery');

if ($('html').hasClass('touchevents')) {

    var startx = 0;
    var w = window.innerWidth;
    var min = w * 0.5;
    var max = w * 0.8;
    var flag = false;
    var $menu = $('.menu__mobile');
    var menuw = $menu.width();
    var btnClose = $('.button__menu-close');
    var btnOpen = $('.button__menu-open');
    var isOpen = false;

    if ($('body').hasClass('menu-mobile--active')) {
        isOpen = true;
    }

    document.addEventListener('touchstart', function(e){
        var touchobj = e.changedTouches[0];
        startx = parseInt(touchobj.clientX);
        $menu.addClass('notransition');
        if (e.target.localName === 'button') {
            return false;
        }
        if (!isOpen) {
            if (startx >= 0 && startx <= 10) {
                console.log('yo');
                flag = true;
            }
        } else {
            if (startx >= (max - 30) && startx <= (max + 30)) {
               flag = true;
            }
        }
        
    }, false);
    
    document.addEventListener('touchmove', function(e){
        var touchobj = e.changedTouches[0];
        var dist = parseInt(touchobj.clientX) - startx;
        if (!isOpen) {
            if (flag && dist < max) {
                var left = - menuw + dist;
                $menu.css('left', left);
            }
        } else {
            if (flag && dist < 0) {
                $menu.css('left', dist);
            }
        } 
       
     }, false);
    
    document.addEventListener('touchend', function(e){
        var touchobj = e.changedTouches[0];
        var endx = touchobj.clientX;
        $menu.removeClass('notransition');
        if (e.target.localName === 'button') {
            return false;
        }
        if (flag) {
            if (endx > min) {
                $('body').addClass('menu-mobile--active');
                $menu.css('left', 0);
                isOpen = true;
            } else {
                $menu.removeAttr('style');
                $('body').removeClass('menu-mobile--active');
                isOpen = false;
            }
        }
        flag = false;
    }, false);
}