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

'use strict';

{    
  // ハンバーガーメニュー
  var hamburger = document.getElementById('hamburger');
  var spmenu = document.getElementById('close-menu');
  
  hamburger.addEventListener('click', function(){
    hamburger.classList.toggle('open')
    spmenu.classList.toggle('open')
  });

}

// お客様の声　アコーディオン
var qa1 = document.getElementById('qa1')
    var an1 = document.getElementById('an1')
    qa1.addEventListener('click', function(){
    this.classList.toggle('open')
    an1.classList.toggle('open')
    });

var qa2 = document.getElementById('qa2')
    var an2 = document.getElementById('an2')
    qa2.addEventListener('click', function(){
    this.classList.toggle('open')
    an2.classList.toggle('open')
    });

var qa3 = document.getElementById('qa3');
    var an3 = document.getElementById('an3');
    qa3.addEventListener('click', function(){
    this.classList.toggle('open')
    an3.classList.toggle('open')
    });

var qa4 = document.getElementById('qa4');
    var an4 = document.getElementById('an4');
    qa4.addEventListener('click', function(){
    this.classList.toggle('open')
    an4.classList.toggle('open')
    });

var qa5 = document.getElementById('qa5');
    var an5 = document.getElementById('an5');
    qa5.addEventListener('click', function(){
    this.classList.toggle('open')
    an5.classList.toggle('open')
    });
            
var qa6 = document.getElementById('qa6');
    var an6 = document.getElementById('an6');
    qa6.addEventListener('click', function(){
    this.classList.toggle('open')
    an6.classList.toggle('open')
    });

var qa7 = document.getElementById('qa7');
    var an7 = document.getElementById('an7');
    qa7.addEventListener('click', function(){
    this.classList.toggle('open')
    an7.classList.toggle('open')
    });

var qa8 = document.getElementById('qa8');
    var an8 = document.getElementById('an8');
    qa8.addEventListener('click', function(){
    this.classList.toggle('open')
    an8.classList.toggle('open')
    });

var qa9 = document.getElementById('qa9');
    var an9 = document.getElementById('an9');
    qa9.addEventListener('click', function(){
    this.classList.toggle('open')
    an9.classList.toggle('open')
    });

var qa10 = document.getElementById('qa10');
    var an10 = document.getElementById('an10');
    qa10.addEventListener('click', function(){
    this.classList.toggle('open')
    an10.classList.toggle('open')
    });  


