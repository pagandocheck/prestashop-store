<?php
/* Smarty version 3.1.39, created on 2021-10-10 00:25:06
  from '/Applications/MAMP/htdocs/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_616279321a16d4_18468049',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c12c8412b3ad57ef1d827ec76af0998190089140' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_footerAfter.tpl',
      1 => 1633841727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_616279321a16d4_18468049 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '196632761361627932189624_58713595';
?>

<!-- Static Block module -->
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['block_list']->value, 'block');
$_smarty_tpl->tpl_vars['block']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['block']->value) {
$_smarty_tpl->tpl_vars['block']->do_else = false;
?>
	<?php if ((isset($_smarty_tpl->tpl_vars['block']->value['content']))) {?>
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['block']->value['content'],'quotes','UTF-8' ));?>

	<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
<!-- /Static block module --><?php }
}
