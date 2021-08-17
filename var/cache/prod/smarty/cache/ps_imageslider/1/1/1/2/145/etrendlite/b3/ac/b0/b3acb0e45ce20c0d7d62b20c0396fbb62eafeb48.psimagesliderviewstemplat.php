<?php
/* Smarty version 3.1.39, created on 2021-08-13 14:52:27
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6116cd7b543b39_85240852',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1628884313,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6116cd7b543b39_85240852 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
));
?>
    <div class="image-slider-block">
        <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover">
            <ul class="carousel-inner" role="listbox">
                                    <li class="carousel-item active" role="option" aria-hidden="false">
                        <a href="http://#">
                            <figure>
                                <img src="http://localhost:8888/prestashop/modules/ps_imageslider/images/7680ab0f68969e435effb681adddb79c5ef2ce46_home-white-slider-2.jpeg" alt="sample-1">
                                                            </figure>
                        </a>
                    </li>
                                    <li class="carousel-item " role="option" aria-hidden="true">
                        <a href="http://#">
                            <figure>
                                <img src="http://localhost:8888/prestashop/modules/ps_imageslider/images/07994807087150b2bb81e200e55935d5df615579_home-white-slider-1.jpeg" alt="sample-2">
                                                            </figure>
                        </a>
                    </li>
                            </ul>
            <div class="direction" aria-label="Carousel buttons">
                <a class="left carousel-control" href="#carousel" role="button" data-slide="prev">
                    <span class="icon-prev hidden-xs" aria-hidden="true">
                        <i class="material-icons">&#xE5CB;</i>
                    </span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel" role="button" data-slide="next">
                    <span class="icon-next" aria-hidden="true">
                        <i class="material-icons">&#xE5CC;</i>
                    </span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
<?php }
}
