<link type="text/css" href="<?php echo public_url()?>/js/jquery/autocomplete/css/smoothness/jquery-ui-1.8.16.custom.css" rel="stylesheet" />  
<script type="text/javascript" src="<?php echo public_url()?>/js/jquery/autocomplete/jquery-ui-1.8.16.custom.min.js"></script>

<script type="text/javascript">
$(function() {
    $( "#text-search" ).autocomplete({
        source: "<?php echo site_url('product/search/1') ?>",
    });
});
</script>

<section id="sp-header-top"><div class="container"><div class="row"><div id="sp-logo" class="col-xs-6 col-sm-12 col-md-3"><div class="sp-column "><h1 class="logo">
    <a href="<?php echo base_url() ?>">
        <img width="150px" height="50px" class="sp-default-logo" src="<?php echo public_url('site/images/logo.jpg') ?>" alt="Mua Hàng OnLine | Shop đa thời trang cao cấp | Giảm ngay 30% khi mua sản phẩm">
    </a>
  </h1></div></div><div id="sp-top1" class="col-xs-12 col-sm-9 col-md-7 hidden-xs"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">

<div class="custom">
  <ul class="list-serviser">
<li class="item">
<div class="icon"><img src="<?php echo public_url('site/images/s1.png')?>" alt=""></div>
<div class="content">
<ul>
<li>GIAO HÀNG TOÀN QUỐC<br>Miễn phí từ 2 sản phẩm</li>
</ul>
</div>
</li>
<li class="item">
<div class="icon"><img src="<?php echo public_url('site/images/s2.png')?>" alt=""></div>
<div class="content">
<ul>
<li>THANH TOÁN NHẬN HÀNG<br>Trả tiền khi nhận hàng</li>
</ul>
</div>
</li>
<li class="item">
<div class="icon"><img src="<?php echo public_url('site/images/s3.png')?>" alt=""></div>
<div class="content">
<ul>
<li>7 NGÀY ĐỔI HÀNG<br>Có thể đổi sản phẩm khác</li>
</ul>
</div>
</li>
</ul></div>
</div></div></div></div><div id="sp-cart" class="col-xs-6 col-sm-3 col-md-2"><div class="sp-column "><div class="sp-module my-cart"><div class="sp-module-content"><div id="jshop_module_cart">
    <a href="<?php echo base_url('cart')?>">
        <strong class="title-my-cart">Giỏ hàng</strong>
        <span class="count-item">
        <b><?php echo $total_items ?> SP</b></span>
        <span class="price">
            <?php echo number_format($total) ?>đ        </span>
    </a>
</div></div></div></div></div></div></div>
</section>


<section id="sp-header-bottom"><div class="container"><div class="row"><div id="sp-main-menu" class="col-xs-3 col-sm-1 col-md-8"><div class="sp-column "><div class="sp-module horizontal-menu-dev"><div class="sp-module-content">
<!--[if lt IE 9]><div id="container_menu_13700365671522916855" class="sambar msie lt-ie9 layout1" data-sam="13700365671522916855"><![endif]-->
<!--[if IE 9]><div id="container_menu_13700365671522916855" class="sambar msie  layout1" data-sam="13700365671522916855"><![endif]-->
<!--[if gt IE 9]><!--><div id="container_menu_13700365671522916855" class="sambar layout1" data-sam="13700365671522916855"><!--<![endif]-->
  <div class="sambar-inner menu_horizontal">
    <a class="btn-sambar" id="container_menu_13700365671522916855trigger" data-sapi="collapse" href="javascript:void(0)">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </a>
    <div style="background-color: #444444" class="sj-megamenu  fullpage horizontal-menu-dev sj-megamenu-hover" data-jsapi="on">

      <ul class="sj-megamenu-parent menu-fade sj-megamenu-horizontal hidden-sm hidden-xs">
            <li class="sj-menu-item item-554 level-1 mega-left">
                <a href="<?php echo base_url() ?>">Trang chủ</a>
            </li>

            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('gioi-thieu') ?>">Giới Thiệu</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('san-pham') ?>">Sản Phẩm</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('tin-tuc') ?>">Tin Tức</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('lien-he') ?>">Liên Hệ</a></li>

            <!-- <li class="sj-menu-item sj-has-child item-278 level-1 mega-left">
                <a href="/luat/senvietdeal/index.php/tin-tuc-su-kien.html">Tin tức &amp; sự kiện</a>
                <div class="sj-dropdown sj-dropdown-main sj-menu-right" style="width: 240px; background-color: rgb(255, 255, 255); opacity: 0; display: none; height: 156px;">
                  <div class="sj-dropdown-inner">
                    <ul class="sj-dropdown-items hidden-sm hidden-xs">
                        <li class="sj-menu-item item-492 level-2 mega-left">
                          <a href="/luat/senvietdeal/index.php/tin-tuc-su-kien/blog-with-right-sidebar.html">Blog With Right Sidebar</a>
                        </li>
                        <li class="sj-menu-item item-493 level-2 mega-left ">
                            <a href="/luat/senvietdeal/index.php/tin-tuc-su-kien/blog-with-left-sidebar.html">Blog With Left Sidebar</a>
                        </li>
                        <li class="sj-menu-item item-504 level-2 mega-left ">
                          <a href="/luat/senvietdeal/index.php/tin-tuc-su-kien/article-category-blog-2.html">Article Category Blog</a>
                        </li>
                    </ul>
                  </div>
                </div>
            </li> -->
          <!-- <li class="sj-menu-item sj-has-child item-279 level-1 mega-left "><a href="#">Hướng dẫn thanh toán</a><div class="sj-dropdown sj-dropdown-main sj-menu-right" style="width: 240px; background-color: #ffffff;"><div class="sj-dropdown-inner"><ul class="sj-dropdown-items hidden-sm hidden-xs"><li class="sj-menu-item item-488 level-2 mega-left "><a href="/luat/senvietdeal/index.php/joomla/content-component/article-category-list/24-joomla.html">404 Page</a></li><li class="sj-menu-item sj-has-child item-503 level-2 mega-left "><a href="#">Post Formats</a><div class="sj-dropdown sj-dropdown-sub sj-menu-left" style="width: 240px; background-color: #ffffff;; left: -240px;"><div class="sj-dropdown-inner"><ul class="sj-dropdown-items hidden-sm hidden-xs"><li class="sj-menu-item item-494 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/standard-post-format.html">Standard Post Format</a></li><li class="sj-menu-item item-495 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/video-post-format.html">Video Post Format</a></li><li class="sj-menu-item item-497 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/audio-post-format.html">Audio Post Format</a></li><li class="sj-menu-item item-499 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/link-post-format.html">Link Post Format</a></li><li class="sj-menu-item item-501 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/quote-post-format.html">Quote Post Format</a></li><li class="sj-menu-item item-500 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/status-post-format.html">Status Post Format</a></li><li class="sj-menu-item item-498 level-3 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/image-post-format.html">Image Post Format</a></li></ul></div></div></li><li class="sj-menu-item item-546 level-2 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/faqs.html">FAQs</a></li><li class="sj-menu-item item-553 level-2 mega-left "><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/extensions.html">Extensions</a></li></ul></div></div></li><li class="sj-menu-item item-534 level-1 mega-left "><a href="/luat/senvietdeal/index.php/danh-muc-san-pham.html">Danh mục sản phẩm</a></li><li class="sj-menu-item item-596 level-1 mega-left"><a href="/luat/senvietdeal/index.php/lien-he.html">Liên hệ</a></li> -->
        </ul>    
    </div>





    <div class="offcanvas-overlay"></div><div class="offcanvas-overlay"></div><div class="offcanvas-menu menu_fullpage" id="container_menu_13700365671522916855sj-pusher">
      <a href="#" class="close-offcanvas"><i class="fa fa-remove"></i></a>
      <div class="offcanvas-inner">
        <ul class="nav menu">
            <li class="sj-menu-item item-554 level-1 mega-left">
                <a href="<?php echo base_url() ?>">Trang chủ</a>
            </li>

            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('gioi-thieu') ?>">Giới Thiệu</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('san-pham') ?>">Sản Phẩm</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('tin-tuc') ?>">Tin Tức</a></li>
            <li class="sj-menu-item item-596 level-1 mega-left"><a href="<?php echo base_url('lien-he') ?>">Liên Hệ</a></li>
            <!-- <li class="item-279 deeper parent"><a href="#" rel="">Hướng dẫn thanh toán</a><ul class="nav-child unstyled small"><li class="item-488"><a href="/luat/senvietdeal/index.php/joomla/content-component/article-category-list/24-joomla.html" rel="">404 Page</a></li><li class="item-503 deeper parent"><a href="#" rel="">Post Formats</a><ul class="nav-child unstyled small"><li class="item-494"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/standard-post-format.html" rel="">Standard Post Format</a></li><li class="item-495"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/video-post-format.html" rel="">Video Post Format</a></li><li class="item-497"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/audio-post-format.html" rel="">Audio Post Format</a></li><li class="item-499"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/link-post-format.html" rel="">Link Post Format</a></li><li class="item-501"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/quote-post-format.html" rel="">Quote Post Format</a></li><li class="item-500"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/status-post-format.html" rel="">Status Post Format</a></li><li class="item-498"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/post-formats/image-post-format.html" rel="">Image Post Format</a></li></ul></li><li class="item-546"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/faqs.html" rel="">FAQs</a></li><li class="item-553"><a href="/luat/senvietdeal/index.php/huong-dan-thanh-toan/extensions.html" rel="">Extensions</a></li></ul></li><li class="item-534"><a href="/luat/senvietdeal/index.php/danh-muc-san-pham.html" rel="">Danh mục sản phẩm</a></li><li class="item-596"><a href="/luat/senvietdeal/index.php/lien-he.html" rel="">Liên hệ</a></li> -->
        </ul>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  jQuery(document).ready(function($) {
    
  })
</script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
            $('<div class="offcanvas-overlay"></div>').insertBefore('#container_menu_13700365671522916855 .offcanvas-menu');
          $(document).on('click', '#container_menu_13700365671522916855 a.btn-sambar', function (event) {
      if ($(this).parent('.sambar-inner').hasClass('offcanvas')) {
        $(this).parent('.sambar-inner').removeClass('offcanvas');
      }
      else {
        $(this).parent('.sambar-inner').removeClass('offcanvas').addClass('offcanvas');
      }

      if ($('body').hasClass('js-close-any')) {
        $('body').removeClass('js-close-any')
        $(this).parent('.sambar-inner').find('.offcanvas-overlay').removeClass('opened');
      }
      else {
        $('body').removeClass('js-close-any').addClass('js-close-any');
        $(this).parent('.sambar-inner').find('.offcanvas-overlay').removeClass('opened').addClass('opened');
      }
      });

    $(document).on('click', '.close-offcanvas, .offcanvas-overlay', function(event) {
            event.preventDefault();
            $('.sambar-inner').removeClass('offcanvas');
            $('body').removeClass('offcanvas');
            $('.offcanvas-overlay').removeClass('opened');            
        });

    // Close any
    $( document ).on( 'click', '.js-close-any', function ( event ) {
      $('.btn-sambar').removeClass('open');
      $('body').removeClass('js-close-any');
      $('body').removeClass('offcanvas');
      $('.sambar-inner').removeClass('offcanvas');
      $('.offcanvas-overlay').removeClass('opened');      
    })

    
          });
</script>

  <script type="text/javascript">
    jQuery(document).ready(function($) {
      var window_w = $(window).width();
      $('#container_menu_13700365671522916855 .sj-megamenu').each(function() {
        var $menu = $(this);
        var clearMenus = function( el ){
          var parents = $(el).parents();
          $menu.find('.actived').not(parents).not(el).each( function(){
            $(this).removeClass('actived');
            $(this).children('.sj-dropdown').slideUp(0);
          });
        };
                  if(window_w <= 980) {
            $('.sj-menu-item > a', $menu).click( function(e){
              e.preventDefault();
              $parent = $(this).parent();           
              $sub = $(this).next();            
              clearMenus($parent);
              $parent.toggleClass('actived');
              
              if($parent.hasClass('actived')){
                $sub.stop().animate( { height: "show", "opacity" : "1" }, 150, 'easeInOutCirc' );
              }else{
                $sub.stop().animate( { height: "hide", "opacity" : "0" }, 150, 'easeInOutCirc' );
              }
            
              return false;
            });
          }
          else {
            $( '.sj-menu-item', $menu ).hover(function(){
              $parent = $(this);
              $sub = $(this).children('.sj-dropdown');
              $parent.removeClass('actived').addClass('actived');
              if( $parent.hasClass('actived') && !$(this).hasClass('mega-pinned') ){
                $sub.stop().animate( { height: "show", "opacity" : "1" }, 150, 'easeInOutCirc' );
              }
            }).mouseleave(function(){
              $parent = $(this);
              $sub = $(this).children('.sj-dropdown');
              $(this).removeClass('actived');
              if( !$(this).hasClass('mega-pinned') ){
                $sub.stop().animate( { height: "hide", "opacity" : "0" }, 150, 'easeInOutCirc' );
              }
            });
            return false;
          }
              })
    })
  </script>
</div></div></div></div><div id="sp-top2" class="col-xs-9 col-sm-11 col-md-4"><div class="sp-column "><div class="sp-module jshopping-search"><div class="sp-module-content"><script type="text/javascript">
function isEmptyValue(value){
    var pattern = /\S/;
    return ret = (pattern.test(value)) ? (true) : (false);
}
</script>

<form class="form-inline mod-shop-search" name="searchForm" method="get" action="<?php echo base_url('product/search') ?>">
    <input style="width: 250px;" type="text" placeholder="Nhập tên sản phẩm cần tìm" id="text-search" name="key-search" value="<?php echo isset($key) ? $key : "" ?>">
    <input class="button btn" type="submit" value="Go">
</form>

</div></div><ul class="sp-contact-info"></ul></div></div></div></div>
</section>

