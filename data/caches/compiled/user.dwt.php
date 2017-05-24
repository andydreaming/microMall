<!DOCTYPE html>
<html lang="zh-CN">
	<head>
<meta name="Generator" content="ECTouch 2.2.25" />
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<title>会员中心</title>
		<meta name="keywords" content="" />
		<meta name="description" content="" />
		<link rel="stylesheet" href="__TPL__/css/member.css">
		<link rel="stylesheet" type="text/css" href="__TPL__/css/search_index.css"/>
		<link rel="stylesheet" href="__PUBLIC__/bootstrap/css/font-awesome.min.css">
	</head>
	<body>
	    <div class="con" style="margin-bottom: 4rem;">
		<div class="member-main">
			<div class="member-photo">
				<div class="member-photo-left fl" onclick="window.location = '<?php echo url('user/collection_list');?>'">
					<i class="iconfont">&#xe62e;</i>
					<p><?php if ($this->_var['list']['goods_nums'] != ''): ?> <?php echo $this->_var['list']['goods_nums']; ?><?php else: ?>0<?php endif; ?></p><span>收藏</span>
				</div>
				<div class="member-photo-right fr" onclick="window.location = '<?php echo url('user/msg_list');?>'">
					<i class="iconfont">&#xe62d;</i>
					<p><?php if ($this->_var['list']['msg_list'] != ''): ?> <?php echo $this->_var['list']['msg_list']; ?><?php else: ?>0<?php endif; ?></p><span>消息</span>
				</div>
				<div class="member-photo-img">
					<a href="<?php echo url('user/profile');?>">
						<?php if ($this->_var['info']['avatar']): ?>
						<img src="<?php echo $this->_var['info']['avatar']; ?>" />
						<?php else: ?>
						<img src="__TPL__/images/member-photo-img2.jpeg" />
						<?php endif; ?>
					</a>
				</div>
				<div class="member-photo-name">
					<p><?php echo $this->_var['info']['name']; ?></p><span><?php echo $this->_var['rank_name']; ?></span>
				</div>
				<?php if (! $this->_var['isbind']): ?>
				<div class="member-photo-address" style="left:1rem;">
					<a href="<?php echo url('user/bind');?>"><span>电脑端账号绑定</span></a>
				</div>
				<?php endif; ?>
				<div class="member-photo-address">
					<a href="<?php echo url('user/profile');?>"><span>账户管理、收货地址 </span><i class="iconfont">&#xe60c;</i></a>
				</div>
			</div>
			<div class="member-order">
				<div class="member-order-title" onclick="window.location = '<?php echo url('user/order_list');?>'">
					<i class="iconfont fl member-order-title-i">&#xe61b; </i><span>我的订单</span><i class="iconfont fr member-order-i">&#xe60c;</i><span class="tip">全部订单</span>
				</div>
				<ul class="member-order-list">
					<li class="fl" id="payment">
						<span class="member-order-list-num"><?php if ($this->_var['list']['not_pays'] != ''): ?> <?php echo $this->_var['list']['not_pays']; ?><?php else: ?>0<?php endif; ?></span>
						<a href="<?php echo url('user/not_pay_order_list');?>"><i class="iconfont">&#xe61d; </i><span>待付款</span></a>
					</li>
					<li class="fl" id="goods">
						<span class="member-order-list-num"><?php if ($this->_var['list']['not_shouhuos'] != ''): ?> <?php echo $this->_var['list']['not_shouhuos']; ?><?php else: ?>0<?php endif; ?></span>
						<a href="<?php echo url('user/not_shoushuo');?>"><i class="iconfont">&#xe61c; </i><span>待收货</span></a>
					</li>
					<li class="fl" id="comment">
						<span class="member-order-list-num"><?php if ($this->_var['list']['not_comment'] != ''): ?> <?php echo $this->_var['list']['not_comment']; ?><?php else: ?>0<?php endif; ?></span>
						<a href="<?php echo url('user/order_comment');?>"><i class="iconfont">&#xe619; </i><span>待评价</span></a>
					</li>
					<!-- <li class="fl" id="repick">
						<span class="member-order-list-num">0</span>
						<a href="member-serve1.htm"><i class="iconfont">&#xe61f; </i><span>返修/退货</span></a>
					</li> -->
				</ul>
			</div>
			<div class="member-purse">
				<div class="member-purse-title" onclick="window.location = '<?php echo url('user/account_detail');?>';">
					<i class="iconfont fl member-purse-title-i">&#xe61b; </i><span>我的钱包</span><i class="iconfont fr member-order-i">&#xe60c;</i><span class="tip">资金管理</span>
				</div>
				<ul class="member-purse-list">
					<li class="fl"><span><?php if ($this->_var['list']['user_money'] != ''): ?> <?php echo $this->_var['list']['user_money']; ?><?php else: ?>0<?php endif; ?></span>
						<p>余额</p>
					</li>
					<a href="<?php echo url('user/bonus');?>">
					<li class="fl"><span><?php if ($this->_var['list']['bonus'] != ''): ?> <?php echo $this->_var['list']['bonus']; ?><?php else: ?>0<?php endif; ?></span>
						<p>红包</p>
					</li>
					</a>
					<li class="fl"><span><?php if ($this->_var['list']['user_points'] != ''): ?> <?php echo $this->_var['list']['user_points']; ?><?php else: ?>0<?php endif; ?></span>
						<p>积分</p>
					</li>
				</ul>
			</div>
			<div class="clearfix">
			</div>
			<div class="member-serve">
				<ul>
					<li onclick="window.location = '<?php echo url('user/service');?>';"><i class="iconfont fl member-serve-li-oi">&#xe61a;</i><p class="fl">客户服务</p><i class="iconfont fr member-order-i">&#xe60c;</i></li>
					<li onclick="window.location = '<?php echo url('user/share');?>'"><i class="iconfont fl member-serve-li-ti">&#xe61e;</i><p class="fl">我的分享</p><i class="iconfont fr member-order-i">&#xe60c;</i></li>
					
				</ul>
			</div>
			<?php if ($this->_var['history']): ?>
			<div class="member-record">
				<div class="member-record-title">
					<i class="iconfont fl member-record-title-i">&#xe624;</i>
					<p class="fl"><?php echo $this->_var['lang']['user_history']; ?></p><i class="iconfont fr member-order-i" style="display:none">&#xe60c;</i>
				</div>
				<div class="member-record-silde">
					<div class="member-record-silde-div">
						<ul class="fl">
							<?php $_from = $this->_var['history']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');if (count($_from)):
    foreach ($_from AS $this->_var['val']):
?>
							<li class="fl">
								<a href="<?php echo url('goods/index', array('id'=>$this->_var[val]['goods_id']));?>"><img src="<?php echo $this->_var['val']['goods_thumb']; ?>" /></a>
								<p><?php echo $this->_var['val']['goods_name']; ?></p>
								<span style="font-size: 0.9375rem;"><?php echo $this->_var['lang']['sort_price']; ?>：<?php echo $this->_var['val']['shop_price']; ?></span>
							</li>
							<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
						</ul>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
		<footer class="member-footer">
			<?php echo $this->fetch('library/page_user_menu.lbi'); ?>
		</footer>
		</div>
		<?php echo $this->fetch('library/search_index.lbi'); ?>
        <?php echo $this->fetch('library/page_footer.lbi'); ?>
	</body>
</html>