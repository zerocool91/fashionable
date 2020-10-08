$(document).ready(function(){
    $('.header-slider').slick({
        'prevArrow' : '<span class="prev-arrow"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
            '\t viewBox="0 0 443.52 443.52" style="fill: #fff; width: 25px; height: 30px" xml:space="preserve">\n' +
            '\t\t<path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8\n' +
            '\t\t\tc-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712\n' +
            '\t\t\tL143.492,221.863z"/>\t\n' +
            '</svg>\n</span>',
        'nextArrow' : '<span class="next-arrow"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"\n' +
            '\t viewBox="0 0 443.52 443.52" style="fill: #fff; width: 25px; height: 30px" xml:space="preserve">\n' +
            '\t\t<path d="M336.226,209.591l-204.8-204.8c-6.78-6.548-17.584-6.36-24.132,0.42c-6.388,6.614-6.388,17.099,0,23.712l192.734,192.734\n' +
            '\t\t\tL107.294,414.391c-6.663,6.664-6.663,17.468,0,24.132c6.665,6.663,17.468,6.663,24.132,0l204.8-204.8\n' +
            '\t\t\tC342.889,227.058,342.889,216.255,336.226,209.591z"/>\n' +
            '\n' +
            '</svg></span>',
        'appendArrows' : $('.slider-nav')
    });

    $('.gallery_item').fancybox({});

    $('#menu-main-menu').slicknav({
        'label' : '',
        'prependTo' : $('.header-nav-menu')
    });
});