<?php
/* Smarty version 4.2.1, created on 2024-03-29 15:27:35
  from 'W:\domains\nixminsk.os\core\tpl\user\nano\index__head.tpl.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6606b3b73a6e08_33786815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9557f9e06e076492cb40eedf3ed80276b2c4b615' => 
    array (
      0 => 'W:\\domains\\nixminsk.os\\core\\tpl\\user\\nano\\index__head.tpl.html',
      1 => 1711370890,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6606b3b73a6e08_33786815 (Smarty_Internal_Template $_smarty_tpl) {
?><meta charset="utf-8">
<!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <![endif]-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no" />
<meta name="apple-mobile-web-app-capable" content="yes">
<base href= />
<?php echo '<script'; ?>
 src="/core/tpl/user/nano/js/head.js"><?php echo '</script'; ?>
>
<meta name="title" content="Минск продажа компьютер комплектующие принтер монитор" />
<?php if ($_smarty_tpl->tpl_vars['page_meta_tags']->value == '') {?>
<meta name="description" content="<?php echo (defined('CONF_HOMEPAGE_META_DESCRIPTION') ? constant('CONF_HOMEPAGE_META_DESCRIPTION') : null);?>
">
<meta name="keywords" content="<?php echo (defined('CONF_HOMEPAGE_META_KEYWORDS') ? constant('CONF_HOMEPAGE_META_KEYWORDS') : null);?>
">
<?php } else {
echo $_smarty_tpl->tpl_vars['page_meta_tags']->value;
}?>
<link rel="icon" sizes=16x16 href="/media/nano/favicon.ico">
<title><?php echo $_smarty_tpl->tpl_vars['page_title']->value;?>
</title>
<link rel="stylesheet" type="text/css" href="lib/bootstrap-icons-1.11.1/font/bootstrap-icons.css">
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="lib/toastr/toastr.css" rel="stylesheet">
<?php if ($_smarty_tpl->tpl_vars['main_content_template']->value == "shopping_cart.tpl.html") {
if ($_smarty_tpl->tpl_vars['cart_content']->value) {?>
<link rel="stylesheet" type="text/css" href="lib/bootstrap-select-1.14.0-beta3/bootstrap-select.min.css">
<?php }
}
if ($_smarty_tpl->tpl_vars['main_content_template']->value == "category.tpl.html" || $_smarty_tpl->tpl_vars['main_content_template']->value == "search_simple.tpl.html") {?>
<link type="text/css" rel="stylesheet" href="lib/DataTables/datatables.min.css">
<?php }
if ($_smarty_tpl->tpl_vars['main_content_template']->value == "product_detailed.tpl.html") {?>
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lightgallery.css" />
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lg-transitions.css" />
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lg-zoom.css" />
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lg-thumbnail.css" />
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lg-fullscreen.css" />
<link type="text/css" rel="stylesheet" href="lib/lightgallery/css/lg-rotate.css" />
<?php }?>
 <link rel="stylesheet" type="text/css" href="lib/jquery-ui-1.13.1.custom/jquery-ui.min.css">
<link href="/core/tpl/user/nano/css/nano.css" rel="stylesheet">
<?php }
}
