<?php /* Smarty version 3.1.24, created on 2015-11-23 16:50:56
         compiled from "C:/wamp/www/smarty/templates/main/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25120565327d06b9b03_51431899%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c32e5e7173a5ebeea68a6389fe218c30e0409b52' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/main/header.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25120565327d06b9b03_51431899',
  'variables' => 
  array (
    'desc' => 0,
    'lang' => 0,
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565327d07908c8_40144677',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565327d07908c8_40144677')) {
function content_565327d07908c8_40144677 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25120565327d06b9b03_51431899';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php ob_start();
echo smarty_function_translation(array('langEn'=>"Junior full stack web developer personal portfolio"),$_smarty_tpl);
$_tmp2=ob_get_clean();
$_smarty_tpl->tpl_vars["desc"] = new Smarty_Variable($_tmp2, null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['desc']->value;?>

    <?php echo smarty_function_translation(array('langEn'=>"Junior full stack web developer"),$_smarty_tpl);?>
 
    <meta name="description" content="<?php echo smarty_function_translation(array('langEn'=>"Junior full stack web developer"),$_smarty_tpl);?>
,<?php echo smarty_function_translation(array('langEn'=>"personal portfolio website"),$_smarty_tpl);?>
">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/bootstrap.css" media="screen">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/magicsuggest-min.css">
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/slider/jquery.bxslider.css">
  </head>
    <body>
        <div class="cooke-notification"><p><?php echo smarty_function_translation(array('langId'=>"75"),$_smarty_tpl);?>
<a id="cooke-btn" href="#" class="btn btn-warning"><?php echo smarty_function_translation(array('langId'=>"74"),$_smarty_tpl);?>
</a><br><a href="http://www.google.com/intl/<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
/policies/privacy/partners/" target="_blank"><?php echo smarty_function_translation(array('langId'=>"76"),$_smarty_tpl);?>
</a></p></div>
        <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?> 
            <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/main/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

            <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/sections/contacts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
        <div class="container">
            
            <?php if ($_smarty_tpl->tpl_vars['showMenu']->value == 'true') {?>
            <div id="floating" class="floating-contacts">
            </div>
            <?php }?>
            <div class="main" id="main">
                <span class="cms"><?php echo $_smarty_tpl->tpl_vars['cms']->value;?>
</span>
               <?php }
}
?>