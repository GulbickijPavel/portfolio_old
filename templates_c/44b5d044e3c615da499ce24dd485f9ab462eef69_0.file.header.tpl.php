<?php /* Smarty version 3.1.24, created on 2015-11-13 17:25:28
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/header.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21441564600e89373d6_45276855%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44b5d044e3c615da499ce24dd485f9ab462eef69' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/header.tpl',
      1 => 1446637138,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21441564600e89373d6_45276855',
  'variables' => 
  array (
    'desc' => 0,
    'lang' => 0,
    'showMenu' => 0,
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564600e8a40e15_86781802',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564600e8a40e15_86781802')) {
function content_564600e8a40e15_86781802 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21441564600e89373d6_45276855';
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