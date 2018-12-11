

<style type="text/css">
  body{font-family:Roboto, sans-serif; font-weight:normal; }
  h1{font-family:Roboto, sans-serif; font-weight:100; }
  #sp-header-top{ background-color:#ffffff; }
  #sp-breadcrumb-block{ background-image:url("/demo/senvietdeal/images/bg-bredum.png");background-color:#f6f6f6; }
  #sp-block-acymailling{ background-color:#ffffff; }
  #sp-block-bottom-2{ background-color:#ffffff; }
  #sp-footer{ background-color:#060d11; }
  div.mod_search35 input[type="search"]{ width:auto; }
</style>

<section id="sp-breadcrumb-block"><div class="container"><div class="row"><div id="sp-breadcrumb" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<ol class="breadcrumb">
  
  <li class="lage-text">Search</li>
  <li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
  <li class="active">Search</li></ol>
</div></div></div></div></div></div></section>



<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
  </div>
<div class="jshop-listing-product">
<h1>Kết Quả Tìm Kiếm Với Từ Khóa <b style="color: red;"> <?= $key ?></b></h1>
    
<div class="jshop_list_product">
  <div class="list_product columns-3">
    <div class="row">

      <?php foreach($list as $row) : ?>
      <div class="col-md-4">
        <div class="product productitem_113">
          <div class="item-wrap">
              <div class="item-image">
                 <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                      <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                </a>
                <a class="addtocart" title="Add to Cart" href="<?php echo site_url('cart/add/'.$row->id) ?>">Mua ngay</a> 
                <span class="product_label New">New</span>
              </div>
                
              <div class="item-info">
                <h3 class="item-title">
                   <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                    Áo khoác nư thu đông thời trang hàng nhập cao cấp - QT30        </a>
                </h3>
                <div class="extra_fields">
              </div>
              <div class="main-price">
                <div class="item-price">
                  <span class="price">
                    <?php if($row->discount > 0) :?>
                      <?php $price_new = $row->price - $row->discount; ?>
                      <?php echo number_format($price_new) ?>đ <span class="old-price"><?php echo number_format($row->price) ?> đ</span>
                    <?php else : ?>
                      <?php echo number_format($row->price) ?>đ
                    <?php endif ?>
                  </span>
                  
                </div>
              
                <div class="price-sale">
                  <span class="num">Lượt Xem</span>
                  <span class="text"><b><?=$row->view?></span>
                </div>  
              </div>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach?>
                            
                <div class="clear space"></div>
            
    </div>
</div>

</div>
    </div><span id="mxcpr"><a rel="nofollow" target="_blank" href="https://www.webdesigner-profi.de/">Webseite www.webdesigner-profi.de</a></span></div></div><div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">

<div class="custom">
  <ul style="background: white; padding: 15px; border: 1px solid white; height: 100%; width: 100%; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);">
<li>
<h4 style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng nhanh</span></h4>
<span style="font-size: 14pt; color: #ff0000;"><strong><span class="hotline" style="font-family: 'times new roman', times, serif;">0169.3779.225</span></strong></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Giao hàng và thu tiền tận nơi trên toàn quốc</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Miễn phí vận chuyển cho đơn hàng từ 2 sản phẩm</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng số lượng lớn xin liên hệ&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Khiếu nại sản phẩm&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Thời gian đổi hàng là 7 ngày</span></li>
<li style="text-align: left;"></li>
</ul>
<p style="text-align: left;">&nbsp;</p></div>
</div></div></div></div></div></div></section>