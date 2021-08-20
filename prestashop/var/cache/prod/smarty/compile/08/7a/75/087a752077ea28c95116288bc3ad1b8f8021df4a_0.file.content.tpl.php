<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:29:00
  from '/Applications/MAMP/htdocs/prestashop/admin651ib9qe0/themes/default/template/controllers/shop/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c706c2cb899_78132031',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '087a752077ea28c95116288bc3ad1b8f8021df4a' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin651ib9qe0/themes/default/template/controllers/shop/content.tpl',
      1 => 1628071972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c706c2cb899_78132031 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div>
<?php }
}
