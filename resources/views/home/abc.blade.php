<!--{{$video[0]['video_path']}}-->
<!DOCTYPE HTML>
<html>
<body>


<video width="658" height="444" poster="http://www.youname.com/images/first.png" autoplay="autoplay" preload="none" controls="controls">
 <source src="http://www.youname.com/images/first.ogv"/>
 <source src="http://www.youname.com/images/first.ogg"/>
 </video>



</body>
</html>


            
<!--<!DOCTYPE HTML>
<html>
<head>
  	<script type="text/javascript" src="{{ URL::asset('js/jquery-1.8.2.min.js') }}"></script>
  	<script type="text/javascript" src="{{ URL::asset('js/jquery.jplayer.min.js') }}"></script>
	<link type="text/css" href="{{ URL::asset('css/jplayer.pink.flag.css') }}" rel="stylesheet" />
	<script type="text/javascript">
    $(document).ready(function(){
      $("#jquery_jplayer_1").jPlayer({
        ready: function () {
          $(this).jPlayer("setMedia", {
            title: "Big Buck Bunny Trailer",
            // m4v: '{{ URL::asset("'".$video[0]['video_path']."'") }}',
            ogv: "http://www.jplayer.org/video/ogv/Big_Buck_Bunny_Trailer.ogv",
            poster: "http://www.jplayer.org/video/poster/Big_Buck_Bunny_Trailer_480x270.png"
          });
        },
        cssSelectorAncestor: "#jp_container_1",
        swfPath: "/js",
        supplied: "ogv",
        useStateClassSkin: true,
        autoBlur: false,
        smoothPlayBar: true,
        keyEnabled: true,
        remainingDuration: true,
        toggleDuration: true
      });
    });
  	</script>
</head>
<body>
    <div id="jp_container_1" class="jp-video " role="application" aria-label="media player">
      <div class="jp-type-single">
        <div id="jquery_jplayer_1" class="jp-jplayer"></div>
        <div class="jp-gui">
          <div class="jp-video-play">
            <button class="jp-video-play-icon" role="button" tabindex="0">play</button>
          </div>
          <div class="jp-interface">
            <div class="jp-progress">
              <div class="jp-seek-bar">
                <div class="jp-play-bar"></div>
              </div>
            </div>
            <div class="jp-current-time" role="timer" aria-label="time">&nbsp;</div>
            <div class="jp-duration" role="timer" aria-label="duration">&nbsp;</div>
            <div class="jp-details">
              <div class="jp-title" aria-label="title">&nbsp;</div>
            </div>
            <div class="jp-controls-holder">
              <div class="jp-volume-controls">
                <button class="jp-mute" role="button" tabindex="0">mute</button>
                <button class="jp-volume-max" role="button" tabindex="0">max volume</button>
                <div class="jp-volume-bar">
                  <div class="jp-volume-bar-value"></div>
                </div>
              </div>
              <div class="jp-controls">
                <button class="jp-play" role="button" tabindex="0">play</button>
                <button class="jp-stop" role="button" tabindex="0">stop</button>
              </div>
              <div class="jp-toggles">
                <button class="jp-repeat" role="button" tabindex="0">repeat</button>
                <button class="jp-full-screen" role="button" tabindex="0">full screen</button>
              </div>
            </div>
          </div>
        </div>
        <div class="jp-no-solution">
          <span>Update Required</span>
          To play the media you will need to either update your browser to a recent version or update your <a href="http://get.adobe.com/flashplayer/" target="_blank">Flash plugin</a>.
        </div>
      </div>
    </div>

</body>
</html>-->