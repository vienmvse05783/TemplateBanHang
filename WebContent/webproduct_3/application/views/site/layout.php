<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en-gb" lang="en-gb" dir="ltr">
	<head>
		<?php $this->load->view('site/head.php');?>
	</head>
	<body class="site com-sppagebuilder layout1 homepage view-page  no-layout no-task itemid-555 en-gb ltr  sticky-header layout-fluid off-canvas-menu-init">
		
	  	<!-- the wraper -->
      	<!-- <div class="body-wrapper" style="width: 89%;float:right;"> -->
        <div class="body-wrapper" style="width: 95%;float:right;">
			<div class="body-innerwrapper">
		      	<?php $this->load->view('site/header.php');?>
		    
		      	
		      		<?php if(isset($message)) : ?>
		      			<p style="color:red;"><?php echo $message; ?></p>
		      		<?php endif?>
		      		<?php $this->load->view($temp, $this->data);?>
		      	
		   		<?php $this->load->view('site/footer.php');?>
		   	</div>
	   	</div>
	   	<div class="offcanvas-overlay"></div>
	   	<div class="offcanvas-menu">
			<a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
			<div class="offcanvas-inner">
								  <div class="sp-module "><h3 class="sp-module-title">Search</h3><div class="sp-module-content"><div class="search mod_search35">
	<form action="/demo/senvietdeal/index.php" method="post" class="form-inline">
		<label for="mod-search-searchword" class="element-invisible"></label> <input name="searchword" id="mod-search-searchword" maxlength="200" class="inputbox search-query" type="search" size="20" placeholder="Search ...">		<input type="hidden" name="task" value="search">
		<input type="hidden" name="option" value="com_search">
		<input type="hidden" name="Itemid" value="555">
	</form>
</div>
</div></div>
<div class="sp-module "><div class="sp-module-content"><ul class="nav menu">
<li class="item-554"><a href="/demo/senvietdeal/index.php"> Trang chủ</a></li><li class="item-278  deeper parent"><a href="/demo/senvietdeal/index.php/tin-tuc-su-kien.html"> Tin tức &amp; sự kiện</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-278"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-278"><li class="item-492"><a href="/demo/senvietdeal/index.php/tin-tuc-su-kien/blog-with-right-sidebar.html"> Blog With Right Sidebar</a></li><li class="item-493"><a href="/demo/senvietdeal/index.php/tin-tuc-su-kien/blog-with-left-sidebar.html"> Blog With Left Sidebar</a></li><li class="item-504"><a href="/demo/senvietdeal/index.php/tin-tuc-su-kien/article-category-blog-2.html"> Article Category Blog</a></li></ul></li><li class="item-279  deeper parent"><a href="#"> Hướng dẫn thanh toán</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-279"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-279"><li class="item-488"><a href="/demo/senvietdeal/index.php/joomla/content-component/article-category-list/24-joomla.html"> 404 Page</a></li><li class="item-503  deeper parent"><a href="#"> Post Formats</a><span class="offcanvas-menu-toggler collapsed" data-toggle="collapse" data-target="#collapse-menu-503"><i class="open-icon fa fa-angle-down"></i><i class="close-icon fa fa-angle-up"></i></span><ul class="collapse" id="collapse-menu-503"><li class="item-494"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/standard-post-format.html"> Standard Post Format</a></li><li class="item-495"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/video-post-format.html"> Video Post Format</a></li><li class="item-497"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/audio-post-format.html"> Audio Post Format</a></li><li class="item-499"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/link-post-format.html"> Link Post Format</a></li><li class="item-501"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/quote-post-format.html"> Quote Post Format</a></li><li class="item-500"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/status-post-format.html"> Status Post Format</a></li><li class="item-498"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/image-post-format.html"> Image Post Format</a></li></ul></li><li class="item-546"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/faqs.html"> FAQs</a></li><li class="item-553"><a href="/demo/senvietdeal/index.php/huong-dan-thanh-toan/extensions.html"> Extensions</a></li></ul></li><li class="item-534"><a href="/demo/senvietdeal/index.php/danh-muc-san-pham.html"> Danh mục sản phẩm</a></li><li class="item-596"><a href="/demo/senvietdeal/index.php/lien-he.html"> Liên hệ</a></li></ul>
</div></div>
							</div> <!-- /.offcanvas-inner -->
		</div>


		<a href="javascript:void(0)" class="scrollup">&nbsp;</a>

		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-96625544-1', 'auto');
  ga('send', 'pageview');

</script>
<style>
.phonering-alo-phone.phonering-alo-static {opacity:.6}
.phonering-alo-phone.phonering-alo-hover,.phonering-alo-phone:hover {opacity:1}
.phonering-alo-ph-circle {width:160px;height:160px;top:20px;left:20px;position:absolute;background-color:transparent;border-radius:100% !important;border:2px solid rgba(30,30,30,0.4);
border:2px solid #bfebfc 9;opacity:.1;-webkit-animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;animation:phonering-alo-circle-anim 1.2s infinite ease-in-out;
transition:all .5s;-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%}
.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle {-webkit-animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important;
animation:phonering-alo-circle-anim 1.1s infinite ease-in-out!important}
.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle {-webkit-animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important;animation:phonering-alo-circle-anim 2.2s infinite ease-in-out!important}
.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone:hover .phonering-alo-ph-circle {border-color:#00aff2;opacity:.5}
.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle {
border-color:#75eb50 ;border-color:#baf5a7;opacity:.5}
.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle {border-color:#00aff2 ;border-color:#bfebfc;opacity:.5}
.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle {border-color:#ccc;opacity:.5}
.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle {border-color:#75eb50 ;opacity:.5}
.phonering-alo-ph-circle-fill {width:100px;height:100px;top:50px;left:50px;position:absolute;background-color: #000;border-radius:100% !important;
border:2px solid transparent;-webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out;
transition:all .5s;-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%}
.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-circle-fill {-webkit-animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important;
animation:phonering-alo-circle-fill-anim 1.7s infinite ease-in-out!important}
.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-circle-fill {-webkit-animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;
animation:phonering-alo-circle-fill-anim 2.3s infinite ease-in-out!important;opacity:0!important}
.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone:hover .phonering-alo-ph-circle-fill {
background-color:rgba(0,175,242,0.5);background-color:#00aff2 9;opacity:.75!important}
.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-circle-fill {
background-color:rgba(117,235,80,0.5);background-color:#baf5a7 9;opacity:.75!important}
.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-circle-fill {background-color:rgba(0,175,242,0.5);background-color:#a6e3fa 9}
.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-circle-fill,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-circle-fill {background-color:rgba(204,204,204,0.5);
background-color:#ccc 9;opacity:.75!important}
.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-circle-fill {background-color:rgba(117,235,80,0.5);opacity:.75!important}
.phonering-alo-ph-img-circle {width:60px;height:60px;top:70px;left:70px;position:absolute;
background:rgba(30,30,30,0.1) url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAyCAYAAAAeP4ixAAAACXBIWXMAAAsTAAALEwEAmpwYAAABNmlDQ1BQaG90b3Nob3AgSUNDIHByb2ZpbGUAAHjarY6xSsNQFEDPi6LiUCsEcXB4kygotupgxqQtRRCs1SHJ1qShSmkSXl7VfoSjWwcXd7/AyVFwUPwC/0Bx6uAQIYODCJ7p3MPlcsGo2HWnYZRhEGvVbjrS9Xw5+8QMUwDQCbPUbrUOAOIkjvjB5ysC4HnTrjsN/sZ8mCoNTIDtbpSFICpA/0KnGsQYMIN+qkHcAaY6addAPAClXu4vQCnI/Q0oKdfzQXwAZs/1fDDmADPIfQUwdXSpAWpJOlJnvVMtq5ZlSbubBJE8HmU6GmRyPw4TlSaqo6MukP8HwGK+2G46cq1qWXvr/DOu58vc3o8QgFh6LFpBOFTn3yqMnd/n4sZ4GQ5vYXpStN0ruNmAheuirVahvAX34y/Axk/96FpPYgAAACBjSFJNAAB6JQAAgIMAAPn/AACA6AAAUggAARVYAAA6lwAAF2/XWh+QAAAB/ElEQVR42uya7W3CMBCG31QM4A1aNggTlG6QbpBMkHYC1AloJ4BOABuEDcgGtBOETnD9c1ERCH/lwxeaV8oPFGP86Hy+DxMREW5Bd7gRjSDSNGn4/RiAOvm8C0ZCRD5PSkQVXSr1nK/xE3mcWimA1ZV3JYBZCIO4giQANoYxMwYS6+xKY4lT5dJPreWZY+uspqSCKPYN27GJVBDXheVSQe494ksiEWTuMXcu1dld9SARxDX1OAJ4lgjy4zDnFsC076A4adEiRwAZg4hOUSpNoCsBPDGM+HqkNGynYBCuILuWj+dgWysGsNe8nwL4GsrW0m2fxZBq9rW0rNcX5MOQ9eZD8JFahcG5g/iKT671alGAYQggpYWvpEPYWrU/HDTOfeRIX0q2SL3QN4tGhZJukVobQyXYWw7WtLDKDIuM+ZSzscyCE9PCy5IttCvnZNaeiGLNHKuz8ZVh/MXTVu/1xQKmIqLEAuJ0fNo3iG5B51oSkeKnsBi/4bG9gYB/lCytU5G9DryFW+3Gm+JLwU7ehbJrwTjq4DJU8bHcVbEV9dXXqqP6uqO5e2/QZRYJpqu2IUAA4B3tXvx8hgKp05QZW6dJqrLTNkB6vrRURLRwPHqtYgkC3cLWQAcDQGGKH13FER/NATzi786+BPDNjm1dMkfjn2pGkBHkf4D8DgBJDuDHx9BN+gAAAABJRU5ErkJggg==) no-repeat center center;
border-radius:100% !important;border:2px solid transparent;-webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;
animation:phonering-alo-circle-img-anim 1s infinite ease-in-out;-webkit-transform-origin:50% 50%;-ms-transform-origin:50% 50%;transform-origin:50% 50%}
.phonering-alo-phone.phonering-alo-active .phonering-alo-ph-img-circle {
-webkit-animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important;animation:phonering-alo-circle-img-anim 1s infinite ease-in-out!important}
.phonering-alo-phone.phonering-alo-static .phonering-alo-ph-img-circle {
-webkit-animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important;animation:phonering-alo-circle-img-anim 0 infinite ease-in-out!important}
.phonering-alo-phone.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone:hover .phonering-alo-ph-img-circle {
background-color:#00aff2}
.phonering-alo-phone.phonering-alo-green.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-green:hover .phonering-alo-ph-img-circle {
background-color:#75eb50;background-color:#75eb50 9
}.phonering-alo-phone.phonering-alo-green .phonering-alo-ph-img-circle {background-color:#00aff2;background-color:#00aff2 9
}.phonering-alo-phone.phonering-alo-gray.phonering-alo-hover .phonering-alo-ph-img-circle,.phonering-alo-phone.phonering-alo-gray:hover .phonering-alo-ph-img-circle {background-color:#ccc
}.phonering-alo-phone.phonering-alo-gray .phonering-alo-ph-img-circle {background-color:#75eb50
}@-webkit-keyframes phonering-alo-circle-anim {0% {-webkit-transform:rotate(0) scale(.5) skew(1deg);-webkit-opacity:.1
    }30% {-webkit-transform:rotate(0) scale(.7) skew(1deg);-webkit-opacity:.5
    }100% {-webkit-transform:rotate(0) scale(1) skew(1deg);-webkit-opacity:.1}}
@-webkit-keyframes phonering-alo-circle-fill-anim {0% {-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.2
    }50% {-webkit-transform:rotate(0) scale(1) skew(1deg);opacity:.2
    }100% {-webkit-transform:rotate(0) scale(.7) skew(1deg);opacity:.2
    }}@-webkit-keyframes phonering-alo-circle-img-anim {0% {-webkit-transform:rotate(0) scale(1) skew(1deg)
    }10% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg)
    }20% {-webkit-transform:rotate(25deg) scale(1) skew(1deg)
    }30% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg)
    }40% {-webkit-transform:rotate(25deg) scale(1) skew(1deg)
    }50% {-webkit-transform:rotate(0) scale(1) skew(1deg)
    }100% {-webkit-transform:rotate(0) scale(1) skew(1deg)}}
@-webkit-keyframes fadeInRight {0% {opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)
    }100% {opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}
@keyframes fadeInRight {0% {opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0); transform:translate3d(100%,0,0)}
    100% {opacity:1;-webkit-transform:none;-ms-transform:none;transform:none}}
@-webkit-keyframes fadeOutRight {0% {opacity:1}
    100% {opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}
@keyframes fadeOutRight {0% { opacity:1}
    100% {opacity:0;-webkit-transform:translate3d(100%,0,0);-ms-transform:translate3d(100%,0,0);transform:translate3d(100%,0,0)}}
@-webkit-keyframes phonering-alo-circle-anim {
    0% {-webkit-transform:rotate(0) scale(.5) skew(1deg);transform:rotate(0) scale(.5) skew(1deg);opacity:.1}
    30% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg); opacity:.5}
    100% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg);opacity:.1}}
@keyframes phonering-alo-circle-anim {
    0% {-webkit-transform:rotate(0) scale(.5) skew(1deg);transform:rotate(0) scale(.5) skew(1deg);opacity:.1}
30% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg);opacity:.5}
100% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg);opacity:.1 }}
@-webkit-keyframes phonering-alo-circle-fill-anim {
    0% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg);opacity:.2
    }50% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg);opacity:.2
    }100% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg);opacity:.2}}
@keyframes phonering-alo-circle-fill-anim {
    0% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg);opacity:.2}50% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg);opacity:.2
    }100% {-webkit-transform:rotate(0) scale(.7) skew(1deg);transform:rotate(0) scale(.7) skew(1deg);opacity:.2}
}@-webkit-keyframes phonering-alo-circle-img-anim {0% { -webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg)
    }10% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg); transform:rotate(-25deg) scale(1) skew(1deg)
    }20% {-webkit-transform:rotate(25deg) scale(1) skew(1deg);transform:rotate(25deg) scale(1) skew(1deg)
    }30% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg); transform:rotate(-25deg) scale(1) skew(1deg)
    } 40% {-webkit-transform:rotate(25deg) scale(1) skew(1deg); transform:rotate(25deg) scale(1) skew(1deg)
    }50% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg)
    }100% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg) }}
@keyframes phonering-alo-circle-img-anim { 0% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg)}10% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg);transform:rotate(-25deg) scale(1) skew(1deg)
    }20% {-webkit-transform:rotate(25deg) scale(1) skew(1deg);transform:rotate(25deg) scale(1) skew(1deg)
    }30% {-webkit-transform:rotate(-25deg) scale(1) skew(1deg);transform:rotate(-25deg) scale(1) skew(1deg)
    }40% {-webkit-transform:rotate(25deg) scale(1) skew(1deg);transform:rotate(25deg) scale(1) skew(1deg)
    }50% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg)
    }100% {-webkit-transform:rotate(0) scale(1) skew(1deg);transform:rotate(0) scale(1) skew(1deg)}}
</style>
<div class="phonering-alo-phone phonering-alo-green phonering-alo-show
 hidden-xs visible-sm visible-md visible-lg" id="phonering-alo-phoneIcon" 
style="display: block; position: fixed;left: 0; top:420px; z-index: 9">
 <div class="phonering-alo-ph-circle"></div>
 <div class="phonering-alo-ph-circle-fill"></div>
 <a href="tel:01693779225"></a>
 <div class="phonering-alo-ph-img-circle" >
 <a href="tel:01693779225"></a>
 <a href="tel:01693779225" class="pps-btn-img " title="Camera Touchgo">
 <img src="https://i.imgur.com/v8TniL3.png" alt="Liên hệ" width="50" onmouseover="this.src='https://i.imgur.com/v8TniL3.png';" onmouseout="this.src='https://i.imgur.com/v8TniL3.png';">
 </a>
 </div>
</div>
          
          
          
<div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.5";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<style>
#cfacebook{position:fixed;bottom:1px;right:40px;z-index:99;width:260px;height:auto;box-shadow:6px 6px 6px 10px rgba(0,0,0,0.2);border-top-left-radius:5px;border-top-right-radius:5px;overflow:hidden;}
#cfacebook .fchat{float:left;width:100%;height:270px;overflow:hidden;display:none;background-color:#fff;}
#cfacebook .fchat .fb-page{margin-top:-5px;float:left;}
#cfacebook a.chat_fb{float:left;padding:0 25px;width:260px;color:#fff;text-decoration:none;height:40px;line-height:40px;text-shadow:0 1px 0 rgba(0,0,0,0.1);background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAAqCAMAAABFoMFOAAAAWlBMV…8/UxBxQDQuFwlpqgBZBq6+P+unVY1GnDgwqbD2zGz5e1lBdwvGGPE6OgAAAABJRU5ErkJggg==);background-repeat:repeat-x;background-size:auto;background-position:0 0;background-color:#3a5795;border:0;border-bottom:1px solid #133783;z-index:9999999;margin-right:12px;font-size:18px;}
#cfacebook a.chat_fb:hover{color:yellow;text-decoration:none;}
.fchat span{ width:260px!important;}
</style>
<script>
jQuery(document).ready(function () {
jQuery(".chat_fb").click(function() {
jQuery('.fchat').toggle('slow');
});
});
</script>



<div id="cfacebook">
    <a href="javascript:;" class="chat_fb" onClick="return:false;"><i class="fa fa-facebook-square"></i> CHÁT VỚI SHOP</a>
    <div class="fchat">
    <div style="width:250px;" class="fb-page"
    data-href="/https://www.facebook.com/Unofficial-abc-414435902287344"
    data-tabs="messages"
    data-width="260"
    data-height="280"
    data-small-header="true">
    <div class="fb-xfbml-parse-ignore">
    <blockquote></blockquote>
    </div>
    </div> 
    </div>
</div>



  </div>
	<script  type="text/javascript">
						function jSelectShortcode(text) {
							jQuery("#yt_shorcodes").removeClass("open");
							text = text.replace(/'/g, '"');
							//1.Editor Content
							if(document.getElementById('jform_articletext') != null) {
								jInsertEditorText(text, 'jform_articletext');
							}
							if(document.getElementById('jform_description') != null) {
								jInsertEditorText(text, 'jform_description');
							}

							//2.Editor K2
							if(document.getElementById('description') != null) {
								jInsertEditorText(text, 'description');
							}
							if(document.getElementById('text') != null) {
								jInsertEditorText(text, 'text');
							}
							//3.Editor VirtueMart
							if(document.getElementById('category_description') != null) {
								jInsertEditorText(text, 'category_description');
							}
							if(document.getElementById('product_desc') != null) {
								jInsertEditorText(text, 'product_desc');
							}
							//4.Editor Contact
							if(document.getElementById('jform_misc') != null) {
								jInsertEditorText(text, 'jform_misc');
							}
							//5.Editor Easyblog
							if(document.getElementById('write_content') != null) {
								jInsertEditorText(text, 'write_content');
							}
							//6.Editor Joomshoping
							if(document.getElementById('description1') != null) {
								jInsertEditorText(text, 'description1');
							}
							//6.Editor HTML
							if(document.getElementById('jform_content') != null) {
								jInsertEditorText(text, 'jform_content');
							}
							SqueezeBox.close();
						}
				   </script>
	</body>
</html>