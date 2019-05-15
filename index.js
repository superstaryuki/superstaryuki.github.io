//★HTMLを開いているブラウザを判定
//参考
//http://etc9.hatenablog.com/entry/20110927/1317140891
var userAgent = navigator.userAgent.toLowerCase();
//デバッグ用
//alert(userAgent.indexOf);
//index に、"chrome"の有無による判定
//chrome の仕様により、特定のバージョンからaudio要素で自動再生ができない
//自動再生の詳細 https://qiita.com/ktknest/items/e81b3a4caac540098fc8
//バージョンについて(Chrome M66から) https://support.skyway.io/hc/ja/community/posts/360002623047-Chrome-%E8%87%AA%E5%8B%95%E5%86%8D%E7%94%9F%E3%83%9D%E3%83%AA%E3%82%B7%E3%83%BC%E5%A4%89%E6%9B%B4-Autoplay-Policy-Changes
if (userAgent.indexOf('chrome') != -1){
    //alert("chrome");
    //Uncaught TypeError: $ is not a function の解決方法(jQueryの書き方)
    //https://command-f.tech/jquery/44
    jQuery(function($){
      //参考 iframe(chromeで自動再生させるための対処)
      //https://stackoverflow.com/questions/50490304/how-to-make-audio-autoplay-on-chrome
      //参考jQueryによる要素の挿入方法(append()の使用方法)
      //https://www.sejuku.net/blog/37847#append
    $('p').append('<iframe id="silence" src="audio\\250-milliseconds-of-silence.mp3" allow="autoplay"  style="display:none"></iframe>');
    });
}

window.onload = function(){
  myAudio = new Audio('');
  myAudio.src="audio\\Neyuki.mp3";
  myAudio.play();
  return myAudio.src;
}

var stop = 0;
var end = 0;

$(function(){
  $("li.sound").click(function() {
  var name = $(this).text();
  myAudio.src= 'audio\\' + name +'.mp3' ;
  myAudio.play();
  a_target.style.display="block";
  n_target.style.display="none";
  stop = 0;
  end = 0;
  return myAudio.src;
  });
});

function music_end(){
    if(end==0){
      myAudio.pause();
      myAudio.currentTime = 0;
      end = 1;
      a_target.style.display="none";
      n_target.style.display="block";
    }
}

function start_music(){
    if(end==1){
      end = 0;
      myAudio.play();
      a_target.style.display="block";
      n_target.style.display="none";
    }else if(stop==0){
      stop = 1;
      myAudio.pause();
      a_target.style.display="none";
      n_target.style.display="block";
    }else{
      stop = 0;
 　　 myAudio.play();
      a_target.style.display="block";
      n_target.style.display="none";
   }
}
