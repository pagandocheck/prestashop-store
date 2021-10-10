<?php
/* Smarty version 3.1.39, created on 2021-10-10 00:25:06
  from '/Applications/MAMP/htdocs/prestashop/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61627932157956_31119383',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91ea00104ff15d51008999c3cbad12fce69d0878' => 
    array (
      0 => '/Applications/MAMP/htdocs/prestashop/modules/ht_googleanalytics/views/templates/hook/ht_googleanalytics.tpl',
      1 => 1633841727,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61627932157956_31119383 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['ga_enable']->value)) && $_smarty_tpl->tpl_vars['ga_enable']->value == 'ga_yes') {?>
    <?php echo '<script'; ?>
>
        
            (function(i, s, o, g, r, a, m) {
                i['GoogleAnalyticsObject'] = r;
                i[r] = i[r] || function() {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
                a = s.createElement(o),
                        m = s.getElementsByTagName(o)[0];
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m)
            })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        
            ga('create', '<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['ga_google_tracking_id']->value, ENT_QUOTES, 'UTF-8');?>
', 'auto');
            ga('send', 'pageview');
    <?php echo '</script'; ?>
>
<?php }
}
}
