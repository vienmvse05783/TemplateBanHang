<?php 
	$this->load->view('admin/slide/head', $this->data);
?>
<div class="line"></div>

<div class="wrapper">
    
	   	<!-- Form -->
		<form class="form" id="form" action="" method="post" enctype="multipart/form-data">
			<fieldset>
				<div class="widget">
				    <div class="title">
						<img src="<?php echo public_url('admin')?>/images/icons/dark/add.png" class="titleIcon">
						<h6>Chỉnh Sửa Slide</h6>
					</div>
					
				    <ul class="tabs">
		                <li><a href="#tab1">Thông tin chung</a></li>
		                
					</ul>
					
					<div class="tab_container">
					     <div id="tab1" class="tab_content pd0">
					         <div class="formRow">
								<label class="formLeft" for="param_name">Tên Slide:<span class="req">*</span></label>
								<div class="formRight">
									<span class="oneTwo"><input name="name" id="param_name" _autocheck="true" type="text" value="<?php echo $slide->name ?>"></span>
									<span name="name_autocheck" class="autocheck"></span>
									<div name="name_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label class="formLeft">Hình ảnh:<span class="req">*</span></label>
								<div class="formRight">
									<div class="left">
										<input type="file" id="image" name="image">
										<img width="100px" height="70px;" src="<?php echo base_url('upload/slide/'.$slide->image_link) ?>" >
									</div>

									<div name="image_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
							</div>	
							<div class="formRow">
								<label class="formLeft" for="param_name">Mô Tả:</label>
								<div class="formRight">
									<span class="oneTwo"><input value="<?php echo $slide->info ?>" name="info" id="param_info" _autocheck="true" type="text"></span>
									<span name="name_autocheck" class="autocheck"></span>
									<div name="name_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label class="formLeft" for="param_name">Link:</label>
								<div class="formRight">
									<span class="oneTwo"><input value="<?php echo $slide->link ?>" name="link" id="param_link" _autocheck="true" type="text"></span>
									<span name="name_autocheck" class="autocheck"></span>
									<div name="name_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow">
								<label class="formLeft" for="param_name">Thứ Tự Hiển Thự:</label>
								<div class="formRight">
									<span class="oneTwo"><input value="<?php echo $slide->sort_order ?>" name="sort_order" id="param_sort_order" _autocheck="true" type="text"></span>
									<span name="name_autocheck" class="autocheck"></span>
									<div name="name_error" class="clear error"></div>
								</div>
								<div class="clear"></div>
							</div>

							<div class="formRow hide"></div>
						</div>
													
					</div><!-- End tab_container-->
								        		
	        		<div class="formSubmit">
	           			<input type="submit" value="Cập Nhật" class="redB">
	           			<input type="reset" value="Hủy bỏ" class="basic">
	           		</div>
	        		<div class="clear"></div>
				</div>
			</fieldset>
		</form>
</div>