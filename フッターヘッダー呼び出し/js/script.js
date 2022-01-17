$(function(){
  console.log('read jQuery File!');
});

/*クリックしたら上にゆっくり移動する*/
$(function(){
  $('.mozi').
  eq(-1)./*後ろから1番目の要素を指定*/
  click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 800);
    return false;
  });
});

/*スライドショー*/
$(function(){
  $('.slide').bxSlider({
    auto: true,
    minSlides: 2
  });
});

/*スライドショーをフェードイン*/
$('#toppicture').fadeIn(3000);/*３秒かけてフェードイン*/

/*menuコンテンツ*/
$('.menuicon').click(function(){
  $(this).toggleClass('is-open');
  $(this).siblings('.menucontent').toggleClass('is-open');
});

/*スクロールしたらフェードイン*/
$(function () {
  $(window).scroll(function () {
    const windowHeight = $(window).height();
    const scroll = $(window).scrollTop();

    $('#detail').each(function () {
      const targetPosition = $(this).offset().top;
      if (scroll > targetPosition - windowHeight + 100) {
        $(this).addClass("is-fadein");
      }
    });
  });
});


