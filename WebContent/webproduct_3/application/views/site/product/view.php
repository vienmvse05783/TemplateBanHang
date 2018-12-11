
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
	
	<li class="lage-text"><?php echo $product->name ?></li>
	<li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
	<li class="active"><?php echo $product->name ?></li>
</ol>
</div></div></div></div></div></div></section>

<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
	</div>

<div class="productfull">
<form class="product-form" >
    
    
            
    
        
    <div class="block-main row">
		<div class="product-image col-xs-12 col-sm-6 col-md-5">
			<div class="image_middle large-image">
				<div class="product_label">
						New					
				</div>
				<span id='list_product_image_middle'>
					<div class="image_full" id="main_image_full_651" >
						<img src="<?php echo base_url('upload/product/'.$product->image_link)?>" alt="<?=$product->name?>" title="<?=$product->name?>" />				
					</div>
						
				</span>
								
			</div>
			<div class="additional-images yt-carousel">
				<div id="thumb-slider"  class="jCarouselLite">
					<?php if(is_array($image_list)) : ?>
					    <?php foreach($image_list as $img): ?>
							<div>
								<a class="img" data-index='1' data-image="<?php echo base_url('upload/product/'.$img)?>" alt="<?=$product->name?>" title="<?=$product->name?>" >
									<img class="jshop_img_thumb" src="<?php echo base_url('upload/product/'.$img)?>" alt="<?=$product->name?>" title="<?=$product->name?>" /> 
								</a>
							</div>
						<?php endforeach?>
					<?php endif?>
				 	</div>
		
				<div class="clear"></div>
			</div> 
		</div>
    



		<div class="product-info col-xs-12 col-sm-6 col-md-7">
				<h1 class="title"><?=$product->name?><span class="jshop_code_prod"><span id="product_code"></span></span></h1>
				
<div class="rating">
        
        
       
    <span>
    <div class='stars_no_active' style='width:80px'><div class='stars_active' style='width:0px'></div></div>                    
    </span>
    </div>
		<div class="price">
			<div class="prod_price">
				<strong>Giá:</strong>
					<?php if($product->discount > 0) :?>
              		<?php $price_new = $product->price - $product->discount; ?>
						<span id="block_price"><?php echo number_format($price_new) ?> đ</span>
						<span class="old_price" id="old_price"><?php echo number_format($product->price) ?>đ</span>
					<?php else : ?>
						<span id="block_price"><?php echo number_format($product->price) ?> đ</span>
					<?php endif ?>
			</div>
		</div>
							
		<div class="jshop_prod_description"></div>        
			<div class="jshop_prod_attributes">
				<div class="attributes_title">
					<span class="attributes_name">Chọn size</span><span class="attributes_description"></span>
				</div>
				<div class="attributes_value">
					<label class="select-mask" id='block_attr_sel_1'>
					<span class="input_type_radio"><input type="radio" name="jshop_attr_id[1]" id="jshop_attr_id11" value="1" checked="checked" onclick="setAttrValue('1', this.value);"> <label for="jshop_attr_id11"><span class='radio_attr_label'>XL</span></label></span><span class="input_type_radio"><input type="radio" name="jshop_attr_id[1]" id="jshop_attr_id12" value="2" onclick="setAttrValue('1', this.value);"> <label for="jshop_attr_id12"><span class='radio_attr_label'>M</span></label></span><span class="input_type_radio"><input type="radio" name="jshop_attr_id[1]" id="jshop_attr_id13" value="3" onclick="setAttrValue('1', this.value);"> <label for="jshop_attr_id13"><span class='radio_attr_label'>S</span></label></span>					</label>
				</div>
							<div class="attributes_title">
					<span class="attributes_name">Chọn màu yêu thích</span><span class="attributes_description"></span>
				</div>
				<div class="attributes_value">
					<label class="select-mask" id='block_attr_sel_2'>
					<span class="input_type_radio"><input type="radio" name="jshop_attr_id[2]" id="jshop_attr_id24" value="4" checked="checked" onclick="setAttrValue('2', this.value);"> <label for="jshop_attr_id24"><span class='radio_attr_label'>Đỏ</span></label></span><span class="input_type_radio"><input type="radio" name="jshop_attr_id[2]" id="jshop_attr_id25" value="5" onclick="setAttrValue('2', this.value);"> <label for="jshop_attr_id25"><span class='radio_attr_label'>Đen</span></label></span><span class="input_type_radio"><input type="radio" name="jshop_attr_id[2]" id="jshop_attr_id26" value="6" onclick="setAttrValue('2', this.value);"> <label for="jshop_attr_id26"><span class='radio_attr_label'>Xanh</span></label></span><span class="input_type_radio"><input type="radio" name="jshop_attr_id[2]" id="jshop_attr_id27" value="7" onclick="setAttrValue('2', this.value);"> <label for="jshop_attr_id27"><span class='radio_attr_label'>Trắng</span></label></span>					</label>
				</div>
					</div>
				
				
				
				
										
				
					<div class="extra_fields">
							
							<div><span class="extra_fields_name">Bảo hành</span>: <span class="extra_fields_value"><?=$product->warranty?></span></div>
							<div><span class="extra_fields_name">Quà Tặng</span>: <span class="extra_fields_value"><?=$product->gifts?></span></div>
						</div>
				
				
					<div class = "not_available" id="not_available"></div>
				
		
		
				                         
			<table class="prod_buttons" style="">
			<tr>
				<td class="prod_qty">
					Số lượng:&nbsp;
				</td>
				<td class="prod_qty_input">
					<input type="number" name="quantity" min="1" id="quantity" onkeyup="reloadPrices();" class="inputbox" value="1" />				</td>        
				<td class="buttons">            
					<a class="button" href="<?php echo site_url('cart/add/'.$product->id)?>" style="padding: 10px 15px;">Mua ngay</a>
			
									</td>
				<td id="jshop_image_loading" style="display:none"></td>
			</tr>
			</table>
						
		</div>
	</div>
    
<input type="hidden" name="to" id='to' value="cart" />
<input type="hidden" name="product_id" id="product_id" value="118" />
<input type="hidden" name="category_id" id="category_id" value="2" />
</form>
	<div class="pro-more-info ">
	
			
		<div class="block-tab">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" role="tablist">
				  <li role="presentation" class="active">
						<a href="#description" aria-controls="home" role="tab" data-toggle="tab">
								Nội dung						</a>
				  </li>
				  
				  <li role="presentation">
						<a href="#other" aria-controls="messages" role="tab" data-toggle="tab">
								Khác						</a>
				  </li>
				  
				  				
				  
				</ul>
			  
				<!-- Tab panes -->
				<div class="tab-content">
				  <div role="tabpanel" class="tab-pane active" id="description">
						<div class="jshop_prod_description">
							<p>
								<?= $product->content ?>
							</p>						
						</div>
				  </div>
				  
				  <div role="tabpanel" class="tab-pane" id="other">
						<div class="pro-other-info">						
							<div class="jshop-manuafacture">
								<div class="manuafacture_head">Thông Tin Sản Phẩm</div>
							</div>				
							<div class="extra_fields">
								<div><span class="extra_fields_name">Tên Sản Phẩm</span>: <span class="extra_fields_value"><?=$product->name?></span></div>
								<div><span class="extra_fields_name">Số Lượt xem</span>: <span class="extra_fields_value"><?=$product->view?></span></div>
								<div><span class="extra_fields_name">Bảo hành</span>: <span class="extra_fields_value"><?=$product->warranty?></span></div>
								<div><span class="extra_fields_name">Quà Tặng</span>: <span class="extra_fields_value"><?=$product->gifts?></span></div>
							</div>
							<div id="list_product_demofiles"></div>
						</div>
				  </div>
				</div>
		</div>
	</div><!--End product more info-->
	

<div id="list_product_demofiles"></div>
    
    
    <div class="jshop_list_product_related">
		<div class="related_header"><span>Sản Phẩm Khác</span></div>
		<div class="list_related">

			<?php foreach($product_newest as $row) :?>
			<div class="jshop_related">
				<div class="product productitem_119">
					<div class="item-wrap">
						<div class="item-image">
							<a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
								<img  src="<?php echo base_url('/upload/product/'.$row->image_link)?>" alt="<?=$row->name?>" title="<?=$row->name?>">
							</a>
							<a class="addtocart" title="Add to Cart" href="<?php echo site_url('cart/add/'.$row->id)?>">Mua ngay</a> 
							<span class="product_label New">New</span>
						</div>
								
						<div class="item-info">
							<h3 class="item-title">
								 <a class="img" href="<?php echo base_url('product/view/'.$row->id)?>" title="<?=$row->name?>">
									<b><?=$row->name?></b>
								</a>
							</h3>
							
							<div class="extra_fields"></div>
								<div class="main-price">
									<div class = "item-price">
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
										<span class="num">Luợt Xem</span>
										<span class="text"><b><?=$row->view?></b></span>
									</div>
								</div>
						</div>
					</div>
				</div>
			</div>	

			<?php endforeach?>	
		</div>
    </div> 
<script type="text/javascript">

	jQuery(document).ready(function($) {

		jQuery(".list_related").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 1,
		//Pagination
		pagination : false,
		paginationNumbers: false,
		nav: true,
		loop: false,
		margin: 30,
		responsive:{
			767:{
				items: 2,
			},
			992:{
				items: 3,
			},
			1200:{
				items: 4,
			},
		}
		});
	});

</script>
</div>

<script type="text/javascript" src="http://senvietweb.com/demo/senvietdeal/templates/sj_topdeal/js/elevatezoom.js"></script>

<script type="text/javascript">

	jQuery(document).ready(function($) {
		
		//$('a.cloud-zoom-gallery').bind('click', function(){
		//	$('a.cloud-zoom-gallery').removeClass('active');
		//	$(this).addClass('active');
		//	$('a#yt_popup').attr('href', $(this).attr('href'));
		//});
		
		jQuery(".jCarouselLite").owlCarousel({
		autoPlay: 3000, //Set AutoPlay to 3 seconds
		items : 4,
		//Pagination
		pagination : false,
		paginationNumbers: false,
		nav: true,
		loop: false,
		margin: 10,
		responsive:{
			768:{
				items: 3,
			},
			992:{
				items: 3,
			},
			1200:{
				items: 4,
			},
		}
		});
		$('img.jshop_img_thumb').bind('click', function(){
			$('img.jshop_img_thumb').removeClass('active');	
			$(this).addClass('active');		
		});
		
		$('img.jshop_video_thumb').bind('click', function(){
			$('img.jshop_video_thumb').removeClass('active');	
			$(this).addClass('active');		
		});
		
		
		var zoomCollection = '.large-image img';
		$( zoomCollection ).elevateZoom({
			scrollZoom: true,
			lensSize    :"400",
			easing:true,
			gallery:'thumb-slider',
			cursor: 'pointer',
			galleryActiveClass: "active"
		});
		
		$("#thumb-slider .owl-item").each(function() {
				$(this).find("[data-index='1']").addClass('active');
			});
	
	});
</script>


</div></div>

<div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">

<div class="custom"  >
	<ul style="background: white; padding: 15px; border: 1px solid white; height: 100%; width: 100%; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);">
<li>
<h4 style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng nhanh</span></h4>
<span style="font-size: 14pt; color: #ff0000;"><strong><span class="hotline" style="font-family: 'times new roman', times, serif;">0169.377.9225</span></strong></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Giao hàng và thu tiền tận nơi trên toàn quốc</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Miễn phí vận chuyển cho đơn hàng từ 2 sản phẩm</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng số lượng lớn xin liên hệ <span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Khiếu nại sản phẩm <span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Thời gian đổi hàng là 7 ngày</span></li>
<li style="text-align: left;"></li>
</ul>
<p style="text-align: left;"> </p></div>
</div></div></div></div></div>
</div>
</section>
