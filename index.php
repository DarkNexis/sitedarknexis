<!DOCTYPE html> <html>
<head>
   <title>TheDarkWarrior</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link href="assets/style/css/assets.css" rel="stylesheet" type="text/css">
    <link href="core/style/css/bootstrap.min.css" rel="stylesheet">
    <link href="core/style/css/fontawesome.css" rel="stylesheet">
    <link href="core/style/css/animate.min.css" rel="stylesheet">
    <link href="core/style/css/style.css" rel="stylesheet">
	<link href="core/style/css/sweetalert2.css" rel="stylesheet">
	<link href="core/style/css/fullPage.css" rel="stylesheet">
    <script type="text/javascript" src="core/js/sweetalert2.min.js"></script>
	<script type="text/javascript" src="core/js/Masonry.js"></script>
    <script type="text/javascript" src="core/js/jquery-2.1.0.min.js"></script>
	<script src="core/js/fullPage.js"></script>
	<script type="text/javascript" src="core/js/rv.js"></script>

</head>
<body>
	

	<div class="Container HeaderMobil hidden" id="Header">
        <div class="Inner" id="">
			<a class="HeaderPage" href="#Main">Main</a>
			<a class="HeaderPage" href="#mypc">info</a>
			<a class="HeaderPage" href="#about">Link</a>
			<a class="HeaderPage" href="#ripsite">BB</a>
        	<div style="clear: both;"></div>
        </div>
    </div>
<ul class="slideshow">
 

<?php
$bg = array('1.mp4','2.mp4','3.mp4'); // видосы

$i = rand(0, count($bg)-1); // генерим
$selectedBg = "$bg[$i]"; // выводим
?>
<video class="video" loop autoplay><source type="video/mp4" src="<?php echo $selectedBg; ?>"></video> <!-- тут каро ничо не трогай -->
 

 <!-- <video id="video" preload="auto" autoplay="autoplay" loop="loop">
<source src="videos/video.mp4" type="video/mp4"/>
</video> -->
</ul>
<div id="fullpage" class="fullpage-wrapper">
	    <div class="section" id="section0" data-anchor="Main">
	        <div class="pattern">
	            <div class="container center-container">
				
	                <h1 class="site-title">
                        TheDarkWarrior
					</h1>

	                <h1 class="site-style">
	                    Welcome to my site!            </h3>
    					<br>
	                <h1 class="animated infinite bounce">
					<a href="#ripsite" class="default-button bt-transparent go-slide onstart animated fadeInUp visible" data-animation="fadeInUp" data-animation-delay="1200" data-slide="1">
					<i class="fa fa-angle-down"></i></a></h1>
               		</div>
	        </div>
	    </div>
        <div class="section" id="slide1" data-anchor="mypc">
			<div class="slide">
                <div class="pattern">
            		<div class="container center_contact">
            			
                        <h1 class="site-title">
                           My PC
						</h1>

<p id="textStyles">
	<span>Processor:</span> Intel (R) Core (TM) i5-650 CPU @ 3.2 GHz (2 CPUs)</br>
	<span>RAM:</span> 8 GB DDR3 Corsair</br>
	<span>Video:</span> NVIDIA GeForce GTX1050 ti</br>
	<span>System board:</span> Intel DH55PJ</br>
	<span>Hdd:</span>Toshiba 1tb (Veteran)</br>
	<span>SSd:</span> SSD GOODRAM IRDM Pro 480Gb</br>
	<span>Monitor:</span> DELL S2340L (1920x1080 @ 63Hz(xD)</br>
	<span>Keyboard:</span> Motospeed CK108</br>
	<span>Mouse:</span>Logitech G102</br>

</p>


            			<div class="Container BoxLink">
                            <div class="InnerBox BoxAssets">
                                <div class="pattern">
                                    </a>
                                </div>
                            </div>
                        </div>
    			    </div>
                </div>
			</div>
			<div class="slide">
                <div class="pattern">
                    <div class="container center_contact">
													<h1 class="site-title">
                                     					Info for me
             										</h1>
                                                      <p id="textStyles">
		<span>Phone:</span>Xiaomi Redmi Note 5 4/64 (From above it is written that for ME information) :D</br>
		<span>Name:</span>Artem</br>
		<span>Birthday:</span>February 20</br>
		<span>Favorite games:</span>Can't count on fingers :D</br>
		</br>
		<span>And what else can you write? I do not know how to communicate with pEoPlE?</span></br>
</p>


                        <div class="Container BoxLink">
                            <div class="InnerBox BoxCS">
                                <div class="pattern">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>   
        </div>
        <div class="section" id="slide1" data-anchor="about">
			<div class="slide">
                <div class="pattern">
                    <div class="container center_contact" style="">
                        <h1 class="site-title">
    						My link & My secondary acc 
    					</h1>

                        <div class="team-container" style="margin-top: 100px;">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="team-member">
                                        <figure>
                                            <img src="core/style/images/team/5.jpg" style="text-align: center;text-transform: uppercase;width: 100%;border: 1px solid #fff;margin: 0;" alt="" width="100%">
                                            <figcaption>
                                                <p class="member-name">TheDarkWarrior</p>
                                                <p class="designation">
                                                    it's me                                                </p>
                                            </figcaption>
                                        </figure>
                                           <div class="social-btn-container">
                                            <div class="team-socail-btn">
                                                <span class="social-btn-box linkedin-btn-container">
    												<a href="https://vk.com/thedarkwarrioryt" target="_blank" class="linkedin-btn">
    													<i class="fa fa-vk"></i>
    												</a>
    											</span>                         
                                                <span class="social-btn-box github-btn-container">
    												<a href="http://steamcommunity.com/id/TheDarkWarriorSteam/" class="github-btn">
    													<i class="fa fa-steam"></i>
    												</a>
    											</span>											
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="team-member">
                                        <figure>
                                            <img src="core/style/images/team/1.jpg" style="text-align: center;text-transform: uppercase;width: 100%;border: 1px solid #fff;margin: 0;" alt="" width="100%">
                                            <figcaption>
                                                <p class="member-name">Nexis</p>
                                                <p class="designation">Also me</p>
                                            </figcaption>
                                        </figure>
										         <div class="social-btn-container">
                                            <div class="team-socail-btn">
                                                <span class="social-btn-box linkedin-btn-container">
    												<a href="http://steamcommunity.com/id/thenexistwd/" target="_blank" class="linkedin-btn">
    													<i class="fa fa-steam"></i>
    												</a>
    											</span>                         
                                                <span class="social-btn-box github-btn-container">
    												<a href="https://steamcommunity.com/profiles/76561197960560959" class="github-btn">
    													<i class="fa fa-steam-square"></i>
    												</a>

    											</span>	
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
			<div class="slide">
                <div class="pattern">
                    <div class="container center_contact">
                        <h1 class="site-title">
                            Nickname my friends
                        </h1>
					<p id="textStyles"><span> 
						SilentBoy1337</br>
						San4ick1337 </br>
						RasT8</br>
						Horemaru</br>
						Gred</br>
						Saventiy28</br>
						[unassigned]</br>
								
					</span></p>
       <div class="Container BoxLink">
                            <div class="InnerBox BoxCS">
                                <div class="pattern">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
			</div>   
        </div>

        <div class="section" id="slide1" data-anchor="ripsite">
			<div class="slide">
            	<div class="pattern">
	                <div class="container center_contact">
	                	<h1 class="site-title">
                           Get up
						</h1>
						<h1 class="textStyles2">
                           Well, really, do it.
						</h1>
	                	
						<div class="team-container" style="margin-top: 50px;">
                            <div class="row">
                              
								<div class="team-container" style="margin-top: 50px;">
								<div class="col-sm-6">
									
							</div>
						</div>
	                </div>
	            </div>
            </div>
		</div>
    </div>
	<script type="text/javascript" src="core/js/modernizr-2.8.0.min.js"></script>
	<script type="text/javascript" src="core/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="core/js/jquery.ajaxchimp.min.js"></script>
	<script type="text/javascript" src="core/js/circle-progress.min.js"></script>
	<script type="text/javascript" src="core/js/functions.js"></script>
    <div class="dialog">
<div class="dialog">
	     <script>
      (function () {
        "use strict";
        var videosSection = document.getElementById("backgroundsection");
        var videosSectionClone = videosSection.cloneNode();
        var videos = videosSection.getElementsByTagName("video");
        var randomVideo = videos.item(Math.floor(Math.random() * videos.length)).cloneNode(true);
        randomVideo.removeAttribute("controls");
        randomVideo.setAttribute("preload", "auto");
        videosSectionClone.appendChild(randomVideo);
        videosSection.parentNode.replaceChild(videosSectionClone, videosSection);
        randomVideo.play();
      })();
</script>
    

<script type="text/javascript">
document.onkeydown = function(e) {
e = e || window.event;
if(e.keyCode == 85 | e.keyCode == 83) {
return false;
}
return true;
}
    </script>
    <script type="text/javascript">
window.onkeydown = function(evt) {
if(evt.keyCode == 123) return false;
};

window.onkeypress = function(evt) {
if(evt.keyCode == 123) return false;
};
    </script>
	<script>
    document.onkeydown = function(e) {
        if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {
        }
        return false;
    };
    function click() {
        if (event.button == 2||event.button==3) {
            oncontextmenu='return false';
        }
    }
    document.onmousedown=click;
    document.oncontextmenu = new Function("return false;")
</script>
		<script type="text/javascript">
var isCtrl = false;
document.onkeyup=function(e)
{
if(e.which == 17)
isCtrl=false;
}
document.onkeydown=function(e)
{
if(e.which == 17)
isCtrl=true;
if((e.which == 85) || (e.which == 67) && isCtrl == true)
{
	window.open("https://vk.com/thedarkwarrioryt","_self");
// alert(&#8216;Keyboard shortcuts are cool!&#8217;);
return false;
}
}
var isNS = (navigator.appName == "Netscape") ? 1 : 0;
if(navigator.appName == "Netscape") document.captureEvents(Event.MOUSEDOWN||Event.MOUSEUP);
function mischandler(){
return false;
}
function mousehandler(e){
var myevent = (isNS) ? e : event;
var eventbutton = (isNS) ? myevent.which : myevent.button;
if((eventbutton==2)||(eventbutton==3)) return false;
}
document.oncontextmenu = mischandler;
document.onmousedown = mousehandler;
document.onmouseup = mousehandler;
</script>
	<script type="text/javascript">
	function kill_ctrl_key_combo(e) {
    var forbiddenKeys = new Array('a', 'c', 'x', 's', 'u');
    var key;
    var isCtrl;
    if (window.event) {
        key = window.event.keyCode;
        if (window.event.ctrlKey) isCtrl = true;
        else isCtrl = false;
    } else {
        key = e.which;
        if (e.ctrlKey) isCtrl = true;
        else isCtrl = false;
    }
    //if ctrl is pressed check if other key is in forbidenKeys array
    if (isCtrl) {
        for (i = 0; i < forbiddenKeys.length; i++) { //case-insensitive comparation
            if (forbiddenKeys[i].toLowerCase() == String.fromCharCode(key).toLowerCase()) {
window.open("https://vk.com/thedarkwarrioryt","_self");
                return false;
            }
        }
    }
    return true;
}

function disable_selection(target) {
    if (typeof target.style.MozUserSelect != "undefined") {
        target.style.MozUserSelect = "none";
    }
    target.style.cursor = "default";
}

function double_mouse(e) {
    if (e.which == 2 || e.which == 3) {
        return false;
    }
    return true;
}

function enable_protection() {
    disable_selection(document.body); //These will disable selection on the page
    document.captureEvents(Event.MOUSEDOWN);
    document.onmousedown = double_mouse; //These will disable double mouse on the page
    document.oncontextmenu = function() {
        return false;
    }; //These will disable right click on the page
    document.onkeydown = kill_ctrl_key_combo;
}

window.onload = function() { //These will enable protection on the page
    enable_protection();
};
											 </script>
	<script type="text/javascript">
  document.ondragstart = noselect;
  document.onselectstart = noselect;
  document.oncontextmenu = noselect;
  function noselect() {return false;}
</script>
	<script type="text/javascript">
var message="";
function clickIE() {if (document.all) {(message);return false;}}
function clickNS(e) {if
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2) {
(message);
return false;}}}
if (document.layers) {
document.captureEvents(Event.MOUSEDOWN);
document.onmousedown=clickNS;
}else{
document.onmouseup=clickNS;
document.oncontextmenu=clickIE;
}
document.oncontextmenu=new Function("return false")
</script>
 <script>
    /*function check(e)
    {
    alert(e.keyCode);
    }*/
    document.onkeydown = function(e) {
            if (e.ctrlKey && (e.keyCode === 67 || e.keyCode === 86 || e.keyCode === 85 || e.keyCode === 117)) {//Alt+c, Alt+v will also be disabled sadly.
                window.open("https://vk.com/thedarkwarrioryt","_self");
            }
            return false;
    };
    </script>
	<script>
	$(document).keydown(function(event){
    if(event.keyCode==123){
         window.open("https://vk.com/thedarkwarrioryt","_self");
		return false;
		
    }
    else if (event.ctrlKey && event.shiftKey && event.keyCode==73){        
              window.open("https://vk.com/thedarkwarrioryt","_self");
			 return false;
			 
    }
});

$(document).on("contextmenu",function(e){        
   e.preventDefault();
});
</script>


<script language="JavaScript">
var message="Do not do that";
document.ondragstart = test;
document.onselectstart = test;
function test() {
document.oncontextmenu=new Function("alert(message);return false")
return false
}
</script>
<script type="text/javascript">
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 70)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 74)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 17)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 16)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 83)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 114 || (e.ctrlKey && e.keyCode === 85)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 123 || (e.ctrlKey && e.keyCode === 123)) { 
        e.preventDefault();
    }
})
window.addEventListener("keydown",function (e) {
    if (e.keyCode === 123 || (e.ctrlKey && e.keyCode === 73)) { 
        e.preventDefault();
    }
})
</script>

<script type="text/javascript">
var message="Do not do that";
 document.onkeydown = function(e) {
	 	 document.oncontextmenu=new Function("alert(message);return false")
   e = e || window.event;
 if(e.keyCode == 85 || e.keyCode == 83 || e.keyCode == 123 || e.keyCode == 74 || e.keyCode == 17 || e.keyCode == 16){
     return false;
   }
   return true;
 }
				</script>
			</div>
		</div>
<!--<script>
	$(document).ready(function(){
		$('#fullpage').fullpage();
	});
</script>-->
	</body>
</html>