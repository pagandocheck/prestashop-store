<?php
/* Smarty version 3.1.39, created on 2021-10-10 00:25:03
  from '/Applications/MAMP/htdocs/prestashop/themes/etrendlite/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6162792fe32dc3_15290646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69063638a035ca8ff42a28f71f8f081dfe47ae97' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/themes/etrendlite/templates/_partials/header.tpl',
      1 => 1633841733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6162792fe32dc3_15290646 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4907319936162792fe1e4f3_94310019', 'header_banner');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_314872056162792fe22a01_61762209', 'header_nav');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13166344206162792fe284d7_47350202', 'header_top');
}
/* {block 'header_banner'} */
class Block_4907319936162792fe1e4f3_94310019 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_4907319936162792fe1e4f3_94310019',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-banner">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_314872056162792fe22a01_61762209 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_314872056162792fe22a01_61762209',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <nav class="header-nav">
        <div class="container">
            <div class="row">
                <div class="hidden-sm-down">
                    <div class="col-md-6 col-xs-12 payment-currency-block">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

                    </div>
                    <div class="col-md-6 right-nav">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

                    </div>
                </div>
                <div class="hidden-md-up text-sm-center mobile">
                    <div class="float-xs-left" id="menu-icon">
                        <i class="material-icons d-inline">&#xE5D2;</i>
                    </div>
                    <div class="float-xs-right" id="_mobile_cart"></div>
                    <div class="float-xs-right" id="_mobile_user_info"></div>
                    <div class="top-logo" id="_mobile_logo"></div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </nav>
<?php
}
}
/* {/block 'header_nav'} */
/* {block 'header_top'} */
class Block_13166344206162792fe284d7_47350202 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_top' => 
  array (
    0 => 'Block_13166344206162792fe284d7_47350202',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4  hidden-sm-down" id="_desktop_logo">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
">
                        <img class="logo img-responsive" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                    </a>
                </div>
                <div class="col-md-8 col-sm-12 position-static">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayTop'),$_smarty_tpl ) );?>

                    <div class="clearfix"></div>
                </div>
            </div>
            <div id="mobile_top_menu_wrapper" class="row hidden-md-up" style="display:none;">
                <div class="js-top-menu mobile" id="_mobile_top_menu"></div>
                <div class="js-top-menu-bottom">
                    <div id="_mobile_currency_selector"></div>
                    <div id="_mobile_language_selector"></div>
                    <div id="_mobile_contact_link"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-navfullwidth">
        <div class="container">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavFullWidth'),$_smarty_tpl ) );?>

        </div>
    </div>
<?php
}
}
/* {/block 'header_top'} */
}
