var $ = jQuery;

$(document).ready(function($){
      
    var tag = document.createElement('script');
    tag.src = "https://www.youtube.com/iframe_api";
    var firstScriptTag = document.getElementsByTagName('script')[0];
    firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
    

         // 3. This function creates an <iframe> (and YouTube player)
      //    after the API code downloads.
      var mainVid;
      window.onYouTubeIframeAPIReady = function() {
        
        player = new YT.Player('mainVid', {
          height: '100%',
          width: '100%',
          videoId: 'S0DSvJwLe8s',
          playerVars: {'controls':0, 'Loop':1, 'origin': 'http://www.rothkopfwebworks.com', 'enablejsapi': 1 },
          events: {
            'onReady': onPlayerReady,
            'onStateChange': onPlayerStateChange
          }
        });

        ytLoaded = true;

      }

      // 4. The API will call this function when the video player is ready.
      function onPlayerReady(event) {
        event.target.mute();
        event.target.playVideo();
      }

      // 5. The API calls this function when the player's state changes.
      //    The function indicates that when playing a video (state=1),
      //    the player should play for six seconds and then stop.
      var done = false;
      function onPlayerStateChange(event) {
        if (event.data == YT.PlayerState.PLAYING && !done) {
            playingNow();
          done = true;
        }
      }


      function playingNow() {
      
        var elem = document.querySelector('.dummy');
        fadeEffect;
          var fadeEffect = setInterval(function () {
            if (!elem.style.opacity) {
                elem.style.opacity = 1;
            }
            if (elem.style.opacity > 0) {
                elem.style.opacity -= 0.1;
            } else {
                clearInterval(fadeEffect);
            }
        }, 200);
        //elem.parentNode.removeChild(elem);

      }
    
    });