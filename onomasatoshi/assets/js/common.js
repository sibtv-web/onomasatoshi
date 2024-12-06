//***********************************************
// common.js
// revision-date:
//***********************************************

//headkube news ループ
var loop = setInterval(function() {
    //li先頭要素のクローンを作成
    var clone = $("#news-slide li:first").clone(true);
    //li先頭要素のマージントップにマイナスを指定しアニメーションさせる
    $("#news-slide li:first").animate({
      "left":"-840px",
      "opacity":0
    },{
    duration : 500,
    complete : function() {
        //処理完了時に先頭要素を削除
        $("#news-slide li:first").remove();
        //クローンをliの最後に追加
        clone.clone(true).insertAfter($("#news-slide li:last"));
    }
    });
}, 3000);


/* fixed header */
$(function($) {
	var nav = $('nav'),
	offset = nav.offset();
	$(window).scroll(function () {
	  if($(window).scrollTop() > offset.top) {
	    nav.addClass('fixed');
	  } else {
	    nav.removeClass('fixed');
	  }
	});
});

//スマートフォン用メニューボタン
$(function(){
  $("#menu-btn-o").on("click",function(){
  $(this).removeClass("on");
  $("#menu-btn-c").addClass("on");
  $("#menu").stop(false,false).slideToggle();
});

$("#menu-btn-c").on("click",function(){
  $(this).removeClass("on");
  $("#menu-btn-o").addClass("on");
  $("#menu").stop(false,false).slideToggle();
});
});

//スムーススクロール
$(function(){
        // #で始まるリンクをクリックしたら実行されます
        $('a[href^="#"]').click(function() {
          // スクロールの速度
          var speed = 800; // ミリ秒で記述
          var href= $(this).attr("href");
          var target = $(href == "#" || href == "" ? 'html' : href);
          var position = target.offset().top;
          $('body,html').animate({scrollTop:position}, speed, 'swing');
          return false;
        });
      });
