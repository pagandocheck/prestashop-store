<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:29:00
  from '/Applications/MAMP/htdocs/prestashop/admin651ib9qe0/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c706c2406e9_10496214',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8d821b19f356767a28cab03679a6eb6164c1e3d0' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/admin651ib9qe0/themes/default/template/controllers/shop/helpers/tree/shop_tree_node_folder.tpl',
      1 => 1628071972,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c706c2406e9_10496214 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url_shop_group']->value,'html','UTF-8' ));?>
&amp;id_shop_group=<?php echo $_smarty_tpl->tpl_vars['node']->value['id'];?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['node']->value['name'],'html','UTF-8' ));?>
</a></label>
	</span>
	<ul class="tree">
		<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['children']->value,'UTF-8' ));?>

	</ul>
</li>
<?php }
}
