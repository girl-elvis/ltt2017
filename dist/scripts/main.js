!function(i){var n={common:{init:function(){i(".owl-carousel").owlCarousel({items:1,loop:!0,autoplay:!0,nav:!0,navText:["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],autoplayHoverPause:!0,autoplayTimeout:3e3})},finalize:function(){}},home:{init:function(){},finalize:function(){}},about_us:{init:function(){}}},o={fire:function(i,o,e){var a,t=n;o=void 0===o?"init":o,a=""!==i,a=a&&t[i],a=a&&"function"==typeof t[i][o],a&&t[i][o](e)},loadEvents:function(){o.fire("common"),i.each(document.body.className.replace(/-/g,"_").split(/\s+/),function(i,n){o.fire(n),o.fire(n,"finalize")}),o.fire("common","finalize")}};i(document).ready(o.loadEvents)}(jQuery);
//# sourceMappingURL=main.js.map
