<?php
/* Smarty version 3.1.39, created on 2021-08-17 23:28:21
  from '/Applications/MAMP/htdocs/prestashop/modules/ybc_productimagehover/views/templates/hook/admin-config.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c8c65533f93_44087303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1a6a7810010dd629d345bb5437e1a45196e3c942' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/ybc_productimagehover/views/templates/hook/admin-config.tpl',
      1 => 1628872883,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c8c65533f93_44087303 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['setting_updated']->value) {?>
    <div class="alert alert-success"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting updated','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</div>
<?php }?>
<form class="defaultForm form-horizontal" enctype="multipart/form-data" method="post" action="<?php echo $_smarty_tpl->tpl_vars['postUrl']->value;?>
">
    <div class="panel">
        <div class="panel-heading"><i class="icon-cogs"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Setting','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</div>
        <div class="form-wrapper">
            <div class="form-group">
                <label class="control-label col-lg-3" for="transition-effect"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Transition effect','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-9">
                    <select id="transition-effect" class="fixed-width-xl" name="YBC_PI_TRANSITION_EFFECT">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['effects']->value, 'effect');
$_smarty_tpl->tpl_vars['effect']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['effect']->value) {
$_smarty_tpl->tpl_vars['effect']->do_else = false;
?>
                            <option <?php if ($_smarty_tpl->tpl_vars['effect']->value['id'] == $_smarty_tpl->tpl_vars['YBC_PI_TRANSITION_EFFECT']->value) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['effect']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['effect']->value['name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label col-lg-3" for="those-pages"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Apply transition effect on those pages','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>
</label>
                <div class="col-lg-9">
                    <select id="those-pages" class="fixed-width-xl" name="YBC_PI_THOSE_PAGES[]" multiple size="6">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['those_pages']->value, 'page');
$_smarty_tpl->tpl_vars['page']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
$_smarty_tpl->tpl_vars['page']->do_else = false;
?>
                            <option <?php if (in_array('allpage',$_smarty_tpl->tpl_vars['YBC_PI_THOSE_PAGES']->value) || in_array($_smarty_tpl->tpl_vars['page']->value['id'],$_smarty_tpl->tpl_vars['YBC_PI_THOSE_PAGES']->value)) {?>selected="selected"<?php }?> value="<?php echo $_smarty_tpl->tpl_vars['page']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['page']->value['name'];?>
</option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </div>
            </div>
        </div>
        <div class="panel-footer">
            <button class="btn btn-default pull-right" name="submitUpdate" id="module_form_submit_btn" value="1" type="submit">
    		  <i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','mod'=>'ybc_productimagehover'),$_smarty_tpl ) );?>

    	    </button>																								
        </div>
    </div>
</form><?php }
}
