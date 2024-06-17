
// アコーディオン

$('.a').hide();

$('.q').on('click', function() {//タイトル要素をクリックしたら
  var findElm = $(this).next(".a");//直後のアコーディオンを行うエリアを取得し
  $(findElm).slideToggle();//アコーディオンの上下動作
    
  if($(this).hasClass('close')){//タイトル要素にクラス名closeがあれば
    $(this).removeClass('close');//クラス名を除去し
  }else{//それ以外は
    $(this).addClass('close');//クラス名closeを付与
  }
});



// classをフックにしたポップアップ

$(document).ready( function(){
  // ページ下部固定ボタン表示非表示
      $(window).on('load resize',function(){
          btnOffset = $('.btn-appear').offset().top;
          winH = $(window).height();
      });
      $(function() {
          var fixedbtn = $('.fixed__btn');
          fixedbtn.hide();
          $(window).scroll(function () {
              if ($(this).scrollTop() > btnOffset - winH) {
                  fixedbtn.fadeIn();
              } else {
                  fixedbtn.fadeOut();
              }
          });
      });
  });

