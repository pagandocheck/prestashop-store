<?php
/* Smarty version 3.1.39, created on 2021-08-13 14:52:27
  from '/Applications/MAMP/htdocs/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_homebottom1.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6116cd7b5c8231_40905810',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b9dd743e95a6a3b29f1a5334e7462ad346dd47e2' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/ht_staticblocks/views/templates/hook/ht_staticblocks_homebottom1.tpl',
      1 => 1628884313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6116cd7b5c8231_40905810 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3643881056116cd7b5bf238_50725893';
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
