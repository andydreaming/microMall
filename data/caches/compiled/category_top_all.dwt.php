<?php echo $this->fetch('library/new_page_header.lbi'); ?>
<div class="con">
	<?php echo $this->fetch('library/new_search_small.lbi'); ?>
	<aside>
		<div class="menu-left scrollbar-none" id="sidebar">
			<ul>
				<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');$this->_foreach['vo'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['vo']['total'] > 0):
    foreach ($_from AS $this->_var['vo']):
        $this->_foreach['vo']['iteration']++;
?>
				<li <?php if (($this->_foreach['vo']['iteration'] - 1) == 0): ?> class="active"<?php endif; ?>><?php echo $this->_var['vo']['name']; ?></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
			</ul>
		</div>
	</aside>
	<?php $_from = $this->_var['category']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'val');$this->_foreach['val'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['val']['total'] > 0):
    foreach ($_from AS $this->_var['val']):
        $this->_foreach['val']['iteration']++;
?>
	<section class="menu-right padding-all j-content"<?php if (($this->_foreach['val']['iteration'] - 1) != 0): ?> style="display:none"<?php endif; ?>>
		<?php $_from = $this->_var['val']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'vo');$this->_foreach['category'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['category']['total'] > 0):
    foreach ($_from AS $this->_var['vo']):
        $this->_foreach['category']['iteration']++;
?>
			<?php if (count ( $this->_var['vo']['cat_id'] ) > 0): ?>
				<h5><?php echo $this->_var['vo']['name']; ?></h5>
				<ul>
				<?php $_from = $this->_var['vo']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['v']):
?>
					<li class="w-3"><a href="<?php echo url('category/index',array('id'=>$this->_var['v']['id']));?>"></a>
					<img src="<?php echo $this->_var['v']['img']; ?>" /><span><?php echo $this->_var['v']['name']; ?></span></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
			<?php else: ?>
				<?php if ($this->_foreach['category']['iteration'] == 1): ?>
				<h5><?php echo $this->_var['val']['name']; ?></h5>
				<ul>
				<?php $_from = $this->_var['val']['cat_id']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }; $this->push_vars('', 'v');if (count($_from)):
    foreach ($_from AS $this->_var['v']):
?>
					<li class="w-3"><a href="<?php echo url('category/index',array('id'=>$this->_var['v']['id']));?>"></a>
					<img src="<?php echo $this->_var['v']['img']; ?>" /><span><?php echo $this->_var['v']['name']; ?></span></li>
				<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
				</ul>
				<?php endif; ?>
			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
	</section>
	<?php endforeach; endif; unset($_from); ?><?php $this->pop_vars();; ?>
</div>
<?php echo $this->fetch('library/new_search.lbi'); ?>
<?php echo $this->fetch('library/new_page_footer.lbi'); ?>
<script type="text/javascript">
	$(function($){
		$('#sidebar ul li').click(function(){
			$(this).addClass('active').siblings('li').removeClass('active');
			var index = $(this).index();
			$('.j-content').eq(index).show().siblings('.j-content').hide();
		})
	})
</script>
</body>
</html>