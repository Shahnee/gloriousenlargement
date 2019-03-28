var cm_once=1;
window.onfocus=function() {
    var iframe=document.getElementById('mc_25x5_ifid');
    iframe.src=iframe.src;
}

;
var eventMethod=window.addEventListener ? "addEventListener": "attachEvent";
var eventer=window[eventMethod];
var messageEvent=eventMethod=="attachEvent" ? "onmessage": "message";
eventer(messageEvent, function (e) {
        if (e.data.substring(0, 1)=='1') {
            window.onbeforeunload=null;
            window.onUnload=null;
            cm_once=cm_once+1;
            if(cm_once==2) {
//                window.location.assign(e.data.substring(1));
            }
        }
    }

    , false);
document.write('  <center>  <div style="width:260px; height:55px; overflow:hidden"><iframe id="mc_25x5_ifid" style="max-width:none; -ms-zoom: .5; -ms-transform-origin: 0 0; -moz-transform: scale(.5); -moz-transform-origin: 0px 0px; -o-transform: scale(.5); -o-transform-origin: 0px 0px; -webkit-transform: scale(.5); -webkit-transform-origin: 0 0; width: 510px; height: 100px; overflow: hidden;" id="mc_25x5_ifid" frameborder="0" marginheight="0" marginwidth="0" scrolling="no" seamless="seamless" src="'+document.location.protocol+'//countdownmonkey.com/counter/2142/11870.php"></iframe></div>  </center>  ' +
    '<!--[if IE 8]><script type="text/javascript">document.getElementById("mc_25x5_ifid").style.width = "1040px";document.getElementById("mc_25x5_ifid").style.height = "200px";</script><![endif]-->');