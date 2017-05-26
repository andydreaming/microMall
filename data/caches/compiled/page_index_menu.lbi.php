<ul>
	<li class="fl index-footer-list"><a href="<?php echo url('index/index');?>"><div class="m-home"></div><br><span class="m-home"><?php echo $this->_var['lang']['home']; ?></span></a></li>
	<li class="fl index-footer-list"><a href="<?php echo url('category/top_all');?>"><div class="m-type"></div><br><span><?php echo $this->_var['lang']['category']; ?></span></a></li>
	<li class="fl index-footer-list"><a href="javascript:openSearch();"><div class="m-search"></div><br><span><?php echo $this->_var['lang']['search']; ?></span></a></li>
	<li class="fl index-footer-list"><a href="<?php echo url('flow/cart');?>"><div class="m-car"></div><br><span><?php echo $this->_var['lang']['shopping_cart']; ?></span></a></li>
	<?php if ($this->_var['is_drp']): ?>
	<li class="fl index-footer-list"><a href="<?php echo url('sale/index');?>"><div class="m-home"></div><br><span>店铺管理</span></a></li>
	<?php else: ?>
	<li class="fl index-footer-list"><a href="<?php echo url('user/index');?>"><div class="m-user"></div><br><span><?php echo $this->_var['lang']['user_center']; ?></span></a></li>
	<?php endif; ?>	
</ul>