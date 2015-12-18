<?php

/**
 *	微信公众号
 * 
 * @author 张立冰 <roast@php.net>
 * 
 * $Id: weixin.php 91 2013-07-12 08:13:57Z libing $
 */

require_once('./common.inc.php');

class product extends Action
{
	public function doDefault()
    {
		$bid = $_GET['bid'];
		$bcid = $_GET['cid'];
		
		$db = $this->app->orm()->query();
		$p = $db->getArray("select * from product where `BrandCate_CateId`='".$bcid."' and `Brand_BrandId`='".$bid."' order by `BrandCate_Brand_BrandId` desc");
		
		
		$page = $this->app->page();
		$page->value('prod',$p);

        $page->output();
    }
}

$app->run();

?>
