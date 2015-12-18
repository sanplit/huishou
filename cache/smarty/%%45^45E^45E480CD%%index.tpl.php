<?php /* Smarty version 2.6.10, created on 2015-12-17 19:15:50
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'default', 'index.tpl', 60, false),)), $this); ?>
<!DOCTYPE html>
<html>
    <head>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cfg']['url']['css']; ?>
Common/common.min.css" />
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cfg']['url']['css']; ?>
Common/common.min.css"/>
		<link rel="stylesheet" href="<?php echo $this->_tpl_vars['cfg']['url']['css']; ?>
Home/Index.min.css"/>
        <title><?php echo $this->_tpl_vars['url']['site']['title']; ?>
 手机版 - 手机回收 | 平板回收,最方便可靠的二手手机回收平台</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
		<meta http-equiv="Pragma" content="no-cache" />
		<meta http-equiv="Expires" content="0" />
        <meta content="width=device-width, initial-scale=1.0, user-scalable=no" name="viewport" />
    </head>
<body>

	<header>
    <h1>
		<a href="index.php" class="global_back_home">
			<img class="logo" src="<?php echo $this->_tpl_vars['cfg']['url']['images']; ?>
logo.png" alt="爱回收" />
		</a>
    </h1>
    <ul>
        <li><a class="cart" href="Cart.php">回收车</a></li>
        <li>|</li>
        <li><a class="order" href="user/login.php">订单</a></li>
    </ul>
</header>
<div id="body">
    <div id="topbanner" class="slidershow-wrap">
        <div class="slidershow-content clearfix">
            <a href="Home/Intro.php" class="slidershow-item">
                <img src="<?php echo $this->_tpl_vars['cfg']['url']['images']; ?>
Home/banner/banner.jpg" alt="" />
            </a>
        </div>
        <ul class="slidershow-nav">
            <li></li>
        </ul>
    </div>
    <div class="search-wrap">		
        <div class="search">
				<input type="text" name="searchji" placeholder="搜索您要卖的机器型号" />
				<span class="search-submit">
				</span>	
        </div>
				
    </div>
	<div id="search_auto"></div>

    <div id="categories-brands">
        <ul class="categories clearfix">
            <li class="item0" data-cate="1"><span>手机</span></li>
            <li class="item1" data-cate="6"><span>平板电脑</span></li>
            <li class="item2" data-cate="5"><span>笔记本</span></li>
        </ul>
        <div class="brands-wrap">
    <div class="brands">
                <div class="item" data-cate="1">
                    <div class="title">
                        <div class="title-left">手机</div>
                        <div class="title-right">共有<span><?php echo ((is_array($_tmp=@$this->_tpl_vars['mcnt'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span>个品牌</div>
                    </div>
                    <ul class="brands-list clearfix">
					<?php $_from = $this->_tpl_vars['brand'][1]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
						<li class="swiper-slide">
						<?php $_from = $this->_tpl_vars['m']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
                            <a href="product.php?bid=<?php echo $this->_tpl_vars['itm']['Brand_BrandId']; ?>
&cid=<?php echo $this->_tpl_vars['itm']['CateId']; ?>
"><?php echo $this->_tpl_vars['itm']['Name']; ?>
</a>
						<?php endforeach; endif; unset($_from); ?>
                        </li>
					<?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>						
                <div class="item" data-cate="5">
                    <div class="title">
                        <div class="title-left">笔记本</div>
                        <div class="title-right">共有<span><?php echo ((is_array($_tmp=@$this->_tpl_vars['bcnt'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span>个品牌</div>
                    </div>
                    <ul class="brands-list clearfix">
					<?php $_from = $this->_tpl_vars['brand'][2]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
						<li class="swiper-slide">
						<?php $_from = $this->_tpl_vars['m']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
                            <a href="product.php?bid=<?php echo $this->_tpl_vars['itm']['Brand_BrandId']; ?>
&cid=<?php echo $this->_tpl_vars['itm']['CateId']; ?>
"><?php echo $this->_tpl_vars['itm']['Name']; ?>
</a>
						<?php endforeach; endif; unset($_from); ?>
                        </li>
					<?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>
                <div class="item" data-cate="6">
                    <div class="title">
                        <div class="title-left">平板电脑</div>
                        <div class="title-right">共有<span><?php echo ((is_array($_tmp=@$this->_tpl_vars['pcnt'])) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
</span>个品牌</div>
                    </div>
                    <ul class="brands-list clearfix">
					<?php $_from = $this->_tpl_vars['brand'][3]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['m']):
?>
						<li class="swiper-slide">
						<?php $_from = $this->_tpl_vars['m']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['itm']):
?>
                            <a href="product.php?bid=<?php echo $this->_tpl_vars['itm']['Brand_BrandId']; ?>
&cid=<?php echo $this->_tpl_vars['itm']['CateId']; ?>
"><?php echo $this->_tpl_vars['itm']['Name']; ?>
</a>
						<?php endforeach; endif; unset($_from); ?>
                        </li>
					<?php endforeach; endif; unset($_from); ?>
                    </ul>
                </div>               
    </div>
</div> 
    </div>

    <div class="service">
        <h3>服务特色</h3>
        <ul>
            <li>
                <strong>价格最公道</strong>
                <p>我们组织最有实力的价格回收商竞价，价格卖旧机价格节节升高</p>
            </li>
            <li>
                <strong>在家回收最方便</strong>
                <p>爱回收小哥上门回收，节约用户成本</p>
            </li>
            <li>
                <strong>隐私保护最安全</strong>
                <p>回收成功所有机器，专业人员专业清理，保障隐私不泄露</p>
            </li>
        </ul>
    </div>
</div>	
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['cfg']['url']['js']; ?>
Common/jquery-1.11.1.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['cfg']['url']['js']; ?>
Common/common.min.js"></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['cfg']['url']['js']; ?>
Common/jquery-autocomplete.min.js" ></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['cfg']['url']['js']; ?>
Home/Index.min.js" ></script>
		<script type="text/javascript" src="<?php echo $this->_tpl_vars['cfg']['url']['js']; ?>
Common/ga.min.js"></script>
</body>
</html>