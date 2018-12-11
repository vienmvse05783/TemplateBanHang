
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

    <?php foreach ($carts as $row):?>
        <li class="lage-text"><?=$row['name']?></li>
    <?php endforeach?>

    <li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
    <?php foreach ($carts as $row):?>
        <li class="active"><?=$row['name']?></li>
    <?php endforeach?>
</ol>
</div></div></div></div></div></div></section>


<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
    </div>
<div class="jshop j-cart">

<?php if($total_items > 0) : ?>
<form action="<?php echo base_url('cart/update')?>" method="post">
<table class="jshop cart">
  <tbody><tr>
    <th width="20%">
      Hình ảnh    </th>
    <th>
      Sản phẩm    </th>    
    <th width="15%">
      Đơn giá    </th>
    <th width="15%">
      Số lượng    </th>
    <th width="15%">
      Thành tiền    </th>
    <th width="10%">
      Xóa    </th>
  </tr>
   <?php $total_amount = 0; ?>
        <?php foreach ($carts as $row):?>
            <?php $total_amount = $total_amount + $row['subtotal']?>
  <tr class="jshop_prod_cart odd">
    <td class="jshop_img_description_center">
        <img class="jshop_img" src="<?php echo base_url('/upload/product/'.$row['image_link'])?>" alt="<?=$row['name']?>" title="<?=$row['name']?>">
    </td>
    <td class="product_name">
        <?=$row['name']?>
                                    
    </td>
    <td>
        <?=number_format($row['price'])?>                        
    </td>
    <td>
      <input type="number" name="qty_<?php echo $row['id'] ?>" value="<?=$row['qty']?>" min="1" class="inputbox" style="width: 25px">
        <button type="submit" class="cart_reload">
            <img style="cursor:pointer" src="http://senvietweb.com/demo/senvietdeal/components/com_jshopping/images/reload.png" title="Cập nhật giỏ hàng" alt="Cập nhật giỏ hàng">
        </button>
    </td>
    <td>
        <b style="color: red"><?=number_format($row['subtotal'])?>đ </b>                   
    </td>
    <td>
      <a href="<?php echo base_url('cart/del/'.$row['id']) ?>"><img src="http://senvietweb.com/demo/senvietdeal/components/com_jshopping/images/remove.png" alt="Delete" title="Delete"></a>
    </td>
  </tr>
<?php endforeach ?>
  </tbody></table>
  
    
    
  <div class="cartdescr"></div>
  <br>
<table class="jshop jshop_subtotal">
    <tbody>
        <!-- <tr>
            <td class="name">
              Tạm tính    </td>
            <td class="value">
            <?php echo number_format($total_amount)?>đ     </td>
        </tr>
        <tr>
            <td class="name">
                  Thuế          </td>
            <td class="value">
                  <?php echo number_format($total_amount)?>đ    </td>
        </tr> -->
        <tr class="total">
            <td class="name">
                Thành tiền    </td>
            <td class="value">
                <b style="color: red;">    <?php echo number_format($total_amount)?>đ  </b>
            </td>
        </tr>
      
    </tbody>
</table>

<table class="jshop" style="margin-top:10px">
  <tbody>
    <tr id="checkout">
    <td width="50%" class="td_1">
       <a href="<?php echo base_url('san-pham') ?>">
         <img src="http://senvietweb.com/demo/senvietdeal/components/com_jshopping/images/arrow_left.gif" alt="Quay lại">
         Tiếp Tục Mua Hàng      </a>
    </td>
    <td width="50%" class="td_2">
           <a href="<?php echo site_url('order/checkout') ?>">
         Thanh Toán         <img src="http://senvietweb.com/demo/senvietdeal/components/com_jshopping/images/arrow_right.gif" alt="Tiếp theo">
       </a>
        </td>
  </tr>
</tbody>
</table>
</form>
<?php else : ?>
        <h2> Không có sản phẩm nào trong giỏ hàng </h2>
        <a href="<?php echo base_url('san-pham') ?>">
            <img src="http://senvietweb.com/demo/senvietdeal/components/com_jshopping/images/arrow_left.gif" alt="Quay lại">
             Quay lại       
        </a>
<?php endif?>

<br><br>

</div><span id="mxcpr"><a rel="nofollow" target="_blank" href="https://www.webdesigner-profi.de/">Webseite www.webdesigner-profi.de</a></span></div></div><div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">

<div class="custom">
    <ul style="background: white; padding: 15px; border: 1px solid white; height: 100%; width: 100%; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);">
<li>
<h4 style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng nhanh</span></h4>
<span style="font-size: 14pt; color: #ff0000;"><strong><span class="hotline" style="font-family: 'times new roman', times, serif;">0169.377.9225</span></strong></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Giao hàng và thu tiền tận nơi trên toàn quốc</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Miễn phí vận chuyển cho đơn hàng từ 2 sản phẩm</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng số lượng lớn xin liên hệ&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Khiếu nại sản phẩm&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Thời gian đổi hàng là 7 ngày</span></li>
<li style="text-align: left;"></li>
</ul>
<p style="text-align: left;">&nbsp;</p></div>
</div></div></div></div></div></div></section>