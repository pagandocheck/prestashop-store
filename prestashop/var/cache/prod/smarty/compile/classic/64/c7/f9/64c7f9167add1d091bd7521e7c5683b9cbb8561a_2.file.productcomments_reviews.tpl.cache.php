<?php
/* Smarty version 3.1.39, created on 2021-08-17 17:45:50
  from '/Applications/MAMP/htdocs/prestashop/modules/productcomments/productcomments_reviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c3c1e713501_28324618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64c7f9167add1d091bd7521e7c5683b9cbb8561a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/productcomments/productcomments_reviews.tpl',
      1 => 1628872883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c3c1e713501_28324618 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '1176990826611c3c1e6e58e7_18004268';
?>
 <div class="comments_note">	
	<div class="star_content clearfix">
	<?php
$_smarty_tpl->tpl_vars['__smarty_section_i'] = new Smarty_Variable(array());
if (true) {
for ($__section_i_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] = 0; $__section_i_0_iteration <= 5; $__section_i_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']++){
?>
		<?php if ($_smarty_tpl->tpl_vars['averageTotal']->value <= (isset($_smarty_tpl->tpl_vars['__smarty_section_i']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_i']->value['index'] : null)) {?>
			<div class="star"></div>
		<?php } else { ?>
			<div class="star star_on"></div>
		<?php }?>
	<?php
}
}
?>
	</div>
	<span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>sprintf('%s Review(s)',$_smarty_tpl->tpl_vars['averageTotal']->value),'mod'=>'productcomments'),$_smarty_tpl ) );?>
&nbsp</span>
</div><?php }
}
