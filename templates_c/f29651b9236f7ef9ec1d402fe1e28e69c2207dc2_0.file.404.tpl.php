<?php /* Smarty version 3.1.24, created on 2015-11-13 16:25:31
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/404.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14841564600ebaaeee9_78578749%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f29651b9236f7ef9ec1d402fe1e28e69c2207dc2' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/404.tpl',
      1 => 1447263277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14841564600ebaaeee9_78578749',
  'variables' => 
  array (
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564600ebb3b909_87333555',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564600ebb3b909_87333555')) {
function content_564600ebb3b909_87333555 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14841564600ebaaeee9_78578749';
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