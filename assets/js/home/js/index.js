// Sticky navbar
// =========================
$(window).scroll(function() {
  if ($('.navbar').offset().top > 50) {
    $('.navbar-fixed-top').addClass('top-nav-collapse');
  } else {
    $('.navbar-fixed-top').removeClass('top-nav-collapse');
  }
})

$(function() {
  $('.page-scroll a').bind('click', function() {
    var $anchor = $(this);
    $('html, body').stop().animate({
      scrollTop: $($anchor.attr('href')).offset().top
    }, 1500, 'easeInOutExpo');
    event.preventDefault();
  })
})


// Select2
// =========================

$(document).ready(function domReady() {
  $('.js-select2-asal').select2({
    placeholder:"Pilih kota asal..",
    allowClear:true,
    dropdownParent: $('.search')
  });
  $('.js-select2-tujuan').select2({
    placeholder:"Pilih kota tujuan..",
    allowClear:true,
    dropdownParent: $('.search')
  });

});
