<div id="leftSide" style="padding-top:30px;">
<!-- Account panel -->
	<div class="sideProfile">
		<a href="#" title="" class="profileFace"><img width="40" src="<?php echo public_url()?>/admin/images/user.png"></a>
		<?php if(isset($admin_info)) : ?>
			<span>Xin chào: <strong>admin!</strong></span>
			<span><?php echo ($admin_info->name)?></span>
		<?php endif?>
		<div class="clear"></div>
	</div>
	<div class="sidebarSep"></div>		    
	<!-- Left navigation -->
	<ul id="menu" class="nav">
		<li class="home">
			<a href="<?php echo admin_url()?>" class="active" id="current">
				<span>Bảng điều khiển</span>
				<strong></strong>
			</a>			
		</li>
		<li class="tran">
			<a href="" class="exp inactive">
				<span>Quản lý bán hàng</span>
				<strong>1</strong>
			</a>
			<ul class="sub" style="display: none;">
				<li>
					<a href="<?php echo admin_url('transaction') ?>">
							Danh Sách Đơn Hàng						
					</a>
				</li>
			</ul>
						
		</li>
		<li class="product">
			<a href="" class="exp inactive">
				<span>Danh Mục & Sản phẩm</span>
				<strong>2</strong>
			</a>
			<ul class="sub" style="display: none;">
				<li>
					<a href="<?php echo admin_url('product') ?>">
						Sản phẩm							
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url('catalog') ?>">
						Danh mục							
					</a>
				</li>
			</ul>
		</li>
		<li class="account">
			<a href="" class="exp inactive">
				<span>Quản Lý Tài khoản</span>
				<strong>2</strong>
			</a>
			
			<ul class="sub" style="display: none;">
				<li>
					<a href="<?php echo admin_url('admin')?>">
						Ban quản trị							
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url('user')?>">
						Thành viên							
					</a>
				</li>
			</ul>
						
		</li>
		<li class="content">
	
			<a href="" class="exp inactive">
				<span>Nội dung</span>
				<strong>2</strong>
			</a>
			
			<ul class="sub" style="display: none;">
				<li>
					<a href="<?php echo admin_url('slide') ?>">
						Slide							
					</a>
				</li>
				<li>
					<a href="<?php echo admin_url('news') ?>">
						Tin tức							
					</a>
				</li>
				
			</ul>
					
		</li>
	
	</ul>
			
</div>
<div class="clear"></div>