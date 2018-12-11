
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
  <li class="lage-text">Tin tức &amp; sự kiện</li>
  <li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
  <li class="active">Tin tức &amp; sự kiện</li>
</ol>
</div></div></div></div></div></div></section>

<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-12 col-md-12"><div class="sp-column "><div id="system-message-container">
  </div>
<div class="blog padding-page" itemscope="" itemtype="http://schema.org/Blog">


    <?php foreach($news_list as $new) : ?>
    <div class="items-row row-0 row clearfix">
        <div class="col-sm-12">
          <article class="item column-1" itemprop="blogPost" itemscope="" itemtype="http://schema.org/BlogPosting">
            <div class="entry-image intro-image">
              <a href="<?php echo base_url('news/view/'.$new->id)?>">
                <img width="100%" src="<?php echo base_url('/upload/news/'.$new->image_link)?>" alt="<?=$new->title?>" title="<?=$new->title?>" itemprop="thumbnailUrl">
              </a>
            </div>
            <div class="entry-header">
            <!-- <dl class="article-info">
              <dt class="article-info-term"></dt> 
                <dd class="category-name">
                    Danh mục sản phẩm       
                      <a href="/demo/senvietdeal/index.php/tin-tuc-su-kien.html" itemprop="genre" title="Article Category">Blog</a> 
                </dd>                   
                <dd class="createdby" itemprop="author" itemscope="" itemtype="http://schema.org/Person">
                  Author:         <span itemprop="name" title="Written by ">Super User</span> </dd> 
                <dd class="hits">
                  <meta itemprop="interactionCount" content="UserPageVisits:251">
                  Hits: 251</dd>          
            </dl> -->
    
      
              <h2 itemprop="name">
                <a href="<?php echo base_url('news/view/'.$new->id)?>" itemprop="url">
                    <?= $new->title ?>
                </a>
              </h2>
            </div>
            <p><?php echo mb_substr($new->intro,0,500,'utf8').'...';?></p>
        </article>
        <!-- end item -->
    </div><!-- end col-sm-* -->
    </div><!-- end row -->
<?php endforeach ?>                 
                                  
        
</div></div></div></div></section>