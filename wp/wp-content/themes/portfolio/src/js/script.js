//ローダー

var loader = document.getElementById('js-loader');
window.addEventListener('load', function(){
    setTimeout(function(){ 
        loader.style.display = "none"; 
      }, 4000);
  });

//mouse-cursorの形状
$(function(){
  var ua = navigator.userAgent;
    if (ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0 && ua.indexOf('Mobile') > 0) {
      $(".c-cursor").hide();
      $(".c-cursor--follower").hide();
    } else {
    var
    cursor = $(".c-cursor"),
    follower = $(".c-cursor--follower"),
    cWidth = 24, //カーソルの大きさ
    fWidth = 80, //フォロワーの大きさ
    delay = 10, //数字を大きくするとフォロワーがより遅れて来る
    mouseX = 0, //マウスのX座標
    mouseY = 0, //マウスのY座標
    posX = 0, //フォロワーのX座標
    posY = 0; //フォロワーのX座標
    
    TweenMax.to({}, .001, {
      repeat: -1,
      onRepeat: function() {
        posX += (mouseX - posX) / delay;
        posY += (mouseY - posY) / delay;
        
        TweenMax.set(follower, {
            css: {    
              left: posX - (fWidth / 2),
              top: posY - (fWidth / 2)
            }
        });
        TweenMax.set(cursor, {
            css: {    
              left: mouseX - (cWidth / 2),
              top: mouseY - (cWidth / 2)
            }
        });
      }
    });
    
    $(document).on("mousemove", function(e) {
        mouseX = e.clientX;
        mouseY = e.clientY;
    });
    
    $(".js-hover").on({
      "mouseenter": function() {
        cursor.addClass("c-cursor_hover");
        follower.addClass("c-cursor_hover--follower");
      },
      "mouseleave": function() {
        cursor.removeClass("c-cursor_hover");
        follower.removeClass("c-cursor_hover--follower");
      }
    });
    
    $("#js-contact").on({
        "mouseenter": function() {
          cursor.addClass("c-cursor_hover--contact");
          follower.addClass("c-cursor_hover--follower");
        },
        "mouseleave": function() {
          cursor.removeClass("c-cursor_hover--contact");
          follower.removeClass("c-cursor_hover--follower");
        }
      });    
    }
});




//header高さ自動調整

var sidenav = function(){
    var header = document.getElementById('l-header');
    var wHight = window.innerHeight;
    header.style.height = wHight + "px";
}
var windowWidth = window.innerWidth;
var windowMin = 768;
if(windowWidth >= windowMin){
    document.addEventListener('DOMContentLoaded',function(){
      sidenav();
    });
    window.addEventListener( 'resize', function () {
      sidenav();
    });
}
$(function(){
  var timer = false;
  var prewidth = $(window).width();
  $(window).resize(function() {
      if (timer !== false) {
          clearTimeout(timer);
      }
      timer = setTimeout(function() {
          var nowWidth = $(window).width();
          if(prewidth !== nowWidth){
              location.reload();
          }
          prewidth = nowWidth;
      }, 200);
  });
});

//MV高さ自動調整

$(function(){
  var wH = $(window).height();
  var hH = wH;
  $('#p-full_screen').css('height', hH + 'px');
});

//ハンバーガーメニュー
var wrapper = document.getElementById('l-nav');
var navBtn = document.getElementById('c-humberger');

navBtn.addEventListener('click', navToggle = function() {
    wrapper.classList.toggle('l-header--open');
});

//可視範囲アニメーション
var target = document.querySelectorAll('.js-slidein');
var option = {
    root: null,
    rootMargin: "0px 0px",
    threshold: [0]
};
var callback = function (entries, observer) {
    entries.forEach(function (entry) {
        if (entry.isIntersecting) {
            entry.target.classList.add('c-title_slidein');
        }
    });
};
var observer = new IntersectionObserver(callback,option);
// observer.observe(target);
target.forEach(function(img) {
    observer.observe(img);
});

// 可視範囲アニメーション2

$(function(){
  $(window).scroll(function (){
      $('.js-fadein_continuous').each(function(){
          var targetElement = $(this).offset().top;
          var scroll = $(window).scrollTop();
          var windowHeight = $(window).height();
          if(navigator.userAgent.match(/(iPhone|iPad|iPod|Android)/)){
              if (scroll > targetElement - windowHeight + 200){
                  $(this).addClass('c-fadein');
              }
          } else{
              if (scroll > targetElement - windowHeight + 300){
                  $(this).addClass('c-fadein');
              }
          }
      });
  });
});


//slick

$('.p-top_work__slider').slick({
  autoplay: true, //自動再生
  infinite: true, //スライドのループ有効化
  slidesToShow: 1, //表示するスライドの数
  slidesToScroll: 1, //スクロールで切り替わるスライドの数
  arrows: false,
  responsive: [{
    breakpoint: 768, //ブレークポイントが768px
    settings: {
      arrows: true,
    }
  }]
});


// match-height

$(function() {
	$('.p-top_work__slider__txt').matchHeight();
});














