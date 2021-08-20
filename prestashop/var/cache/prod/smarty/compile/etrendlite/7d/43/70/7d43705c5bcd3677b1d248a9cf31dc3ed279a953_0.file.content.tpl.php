<?php
/* Smarty version 3.1.39, created on 2021-08-17 23:02:59
  from '/Applications/MAMP/htdocs/prestashop/modules/blockreassurance/views/templates/admin/tabs/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c8673d531b0_32253124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d43705c5bcd3677b1d248a9cf31dc3ed279a953' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/blockreassurance/views/templates/admin/tabs/content.tpl',
      1 => 1594995166,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:./content/listing.tpl' => 1,
    'file:./content/config.tpl' => 1,
  ),
),false)) {
function content_611c8673d531b0_32253124 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:./content/listing.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php $_smarty_tpl->_subTemplateRender("file:./content/config.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
