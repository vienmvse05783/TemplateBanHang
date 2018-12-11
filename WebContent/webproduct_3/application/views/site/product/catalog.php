	
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
  
  <li class="lage-text">Danh mục sản phẩm</li><li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li><li class="active">Danh mục sản phẩm</li></ol>
</div></div></div></div></div></div></section>



<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
  </div>
<h2 class="heading"><?=$catalog->name?>(có <?php echo $total_rows ?> sản phẩm )</h2>

</div>
<div class="jshop_list_product">    
<form action="" method="post" name="sort_count" id="sort_count">
<input type="hidden" name="orderby" id="orderby" value="0">
<input type="hidden" name="limitstart" value="0">
</form>
<div class="list_product columns-3">
    <div class="row">
        <?php foreach($list as $row) : ?>
        <div class="col-md-4">
          <div class="product productitem_117">
            <div class="item-wrap">
                <div class="item-image">
                    <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                        <img src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
                    </a>
                    <a class="addtocart" title="Add to Cart" href="<?php echo site_url('cart/add/'.$row->id) ?>" title="Mua ngay">Mua ngay</a> 
                        <span class="product_label New">New</span>
                </div>
                  
                <div class="item-info">
                  <h3 class="item-title">
                     <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
                            <?=$row->name?> 
                     </a>
                  </h3>
                  <div class="extra_fields"></div>
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
                        <span class="text"><b><?=$row->view?></b></span>
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

</div></div><div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">


</div></div></div></div></div></section>
<div class="pagination">
    <?php echo $this->pagination->create_links() ?>
</div>

<style type="text/css">
.pagination {
    display: block;
    padding: 5px 10px;
    
}
.pagination a {
    background: #f3f3f3;
    border: 1px solid #c4c4c4;
    border-radius: 2px;
    box-shadow: 0 1px 0 #eaeaea, 0 1px 0 #ffffff inset;
    color: #717171;
    display: inline-block;
    float: left;
    font-weight: 700;
    line-height: 25px;
    margin-right: 4px;
    min-height: 25px;
    padding: 0 10px;
    text-decoration: none;
}
.pagination strong{
    background: #f3f3f3;
    border: 1px solid #c4c4c4;
    border-radius: 2px;
    box-shadow: 0 1px 0 #eaeaea, 0 1px 0 #ffffff inset;
    color: maroon;
    display: inline-block;
    float: left;
    font-weight: 700;
    line-height: 25px;
    margin-right: 4px;
    min-height: 25px;
    padding: 0 10px;
    text-decoration: none;
}
</style>
