<?php
/* Smarty version 3.1.39, created on 2021-08-17 21:48:49
  from 'module:psfeaturedproductsviewste' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c7511bcbad9_57302323',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fa6cc378d2942c8857b89d6bca728048c0caeedd' => 
    array (
      0 => 'module:psfeaturedproductsviewste',
      1 => 1628884313,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_611c7511bcbad9_57302323 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '291062764611c7511bc3b41_32743352';
?>
<!-- begin /Applications/MAMP/htdocs/prestashop/themes/etrendlite/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl -->
<section class="featured-products clearfix top-margin bottom-margin">
    <div class="container">
        <div class="section-title">
            <span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Featured','d'=>'Modules.Featuredproducts.Shop'),$_smarty_tpl ) );?>
 
                <i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Collection','d'=>'Modules.Featuredproducts.Shop'),$_smarty_tpl ) );?>
</i>
            </span>
        </div>
        <div class="products-grid">
            <div class="row">
                <div class="products owl-theme owl-carousel product-slider">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value), 0, true);
?>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end /Applications/MAMP/htdocs/prestashop/themes/etrendlite/modules/ps_featuredproducts/views/templates/hook/ps_featuredproducts.tpl --><?php }
}
