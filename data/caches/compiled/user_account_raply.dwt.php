<?php echo $this->fetch('library/user_header.lbi'); ?>
<ul class="nav nav-tabs account" role="tablist">
    <li><a href="<?php echo url('User/account_detail');?>" ><?php echo $this->_var['lang']['add_surplus_log']; ?></a></li>
    <li><a href="<?php echo url('User/account_log');?>" ><?php echo $this->_var['lang']['view_application']; ?></a></li>
	<li><a href="<?php echo url('User/account_deposit');?>" ><?php echo $this->_var['lang']['surplus_type_0']; ?></a></li>
	<li class="active"><a href="<?php echo url('User/account_raply');?>" ><?php echo $this->_var['lang']['surplus_type_1']; ?></a></li>
  </ul>
<form action="<?php echo url('user/act_account');?>" method="post" name="theForm" >
  <div class="ect-bg-colorf flow-consignee">
    <ul class="o-info">
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['repay_money']; ?>：</b><span>
          <input name="amount" placeholder="<?php echo $this->_var['lang']['repay_money']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['order']['amount']); ?>" />
          </span></div>
      </li>
      <li>
        <div class="input-text"><b class="pull-left"><?php echo $this->_var['lang']['process_notic']; ?>：</b><span>
          <input name="user_note" placeholder="<?php echo $this->_var['lang']['process_notic']; ?>" type="text" class="inputBg_touch" value="<?php echo htmlspecialchars($this->_var['order']['user_note']); ?>" />
          </span></div>
      </li>
    </ul>
  </div>
  <div class="two-btn ect-padding-tb ect-padding-lr ect-margin-tb text-center">
  <input type="hidden" name="surplus_type" value="1" />
    <input type="submit" name="submit"  class="btn btn-info ect-bg-colory"  value="<?php echo $this->_var['lang']['submit_request']; ?>"/>
  </div>
</form>
</div>
<?php echo $this->fetch('library/search.lbi'); ?> <?php echo $this->fetch('library/page_footer.lbi'); ?> 
<script type="text/javascript" src="__PUBLIC__/js/region.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/shopping_flow.js"></script> 
<script type="text/javascript">
	region.isAdmin = false;
	<?php $_from = $this->_var['lang']['flow_js']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('key', 'item');if (count($_from)):
    foreach ($_from AS $this->_var['key'] => $this->_var['item']):
?>
	var <?php echo $this->_var['key']; ?> = "<?php echo $this->_var['item']; ?>";
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	
	onload = function() {
	      if (!document.all)
	      {
	        document.forms['theForm'].reset();
	      }
	}
	
</script>
</body></html>