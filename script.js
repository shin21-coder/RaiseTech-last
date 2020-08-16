$(function () {
  let body = $(document.body);
  $('.slide-target').on('click', function () {
    // $('.side-menu').toggleClass('open');
    $(body).toggleClass('open');
    console.log('fooooooooo');
    $('.side-menu').addClass('is-open')

  });
  $('.side-menu__icon').on('click', function () {
    $('.side-menu').animate({ 'marginRight': '0' }, 300)
    // $('.side-menu').toggleClass('open');
    $(body).toggleClass('open');
    $('.side-menu').removeClass('is-open')
  })
 });