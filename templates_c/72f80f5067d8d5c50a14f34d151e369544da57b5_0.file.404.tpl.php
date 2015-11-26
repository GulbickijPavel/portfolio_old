<?php /* Smarty version 3.1.24, created on 2015-11-23 15:50:58
         compiled from "C:/wamp/www/smarty/templates/main/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:7418565327d2802483_39157258%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f80f5067d8d5c50a14f34d151e369544da57b5' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/main/404.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7418565327d2802483_39157258',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565327d28b2125_71046672',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565327d28b2125_71046672')) {
function content_565327d28b2125_71046672 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '7418565327d2802483_39157258';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>40fff4</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link type="text/css" rel="stylesheet" href="/portfolio/portfolio.lt/css/styles.css">
  </head>
    <body class="not-found-main">
        <img class="not-found-image-container" src="images/404.png" alt="404">
        <span class="main-text"><strong><?php echo smarty_function_translation(array('langId'=>"71"),$_smarty_tpl);?>
</strong></span>
        <span class="explanation"><?php echo smarty_function_translation(array('langId'=>"72"),$_smarty_tpl);?>
</span>
        <a href="<?php echo $_smarty_tpl->tpl_vars['lang']->value;?>
"><?php echo smarty_function_translation(array('langId'=>"73"),$_smarty_tpl);?>
</a>
    </body>
</html><?php }
}
?>