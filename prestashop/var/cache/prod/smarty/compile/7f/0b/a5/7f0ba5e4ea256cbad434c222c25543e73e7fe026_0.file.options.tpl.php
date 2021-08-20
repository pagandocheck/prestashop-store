<?php
/* Smarty version 3.1.39, created on 2021-08-17 23:29:25
  from '/Applications/MAMP/htdocs/prestashop/modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611c8ca5790fd8_21167414',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7f0ba5e4ea256cbad434c222c25543e73e7fe026' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/ps_faviconnotificationbo/views/templates/admin/configure_favicon_bo/helpers/options/options.tpl',
      1 => 1591690134,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611c8ca5790fd8_21167414 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_599161716611c8ca575e403_20779928', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1159961328611c8ca578e168_49071940', "after");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/options/options.tpl");
}
/* {block "input"} */
class Block_599161716611c8ca575e403_20779928 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_599161716611c8ca575e403_20779928',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'color') {?>
    <div class="col-lg-2">
      <div class="input-group">
        <input
                type="color"
                data-hex="true"
                class="<?php if ((isset($_smarty_tpl->tpl_vars['input']->value['class']))) {
echo $_smarty_tpl->tpl_vars['field']->value['class'];
} else { ?>color mColorPickerInput<?php }?>"
                name="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"
                value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['field']->value['value'],'html','UTF-8' ));?>
"
        />
      </div>
    </div>
  <?php } else { ?>
    <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php }
}
}
/* {/block "input"} */
/* {block "after"} */
class Block_1159961328611c8ca578e168_49071940 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'after' => 
  array (
    0 => 'Block_1159961328611c8ca578e168_49071940',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

  <?php echo '<script'; ?>
 type="text/javascript">
    // https://github.com/PrestaShop/PrestaShop/pull/18757
    $.fn.mColorPicker.defaults.imageFolder = baseDir + 'img/admin/';
  <?php echo '</script'; ?>
>
<?php
}
}
/* {/block "after"} */
}
