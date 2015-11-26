<?php /* Smarty version 3.1.24, created on 2015-11-23 15:55:20
         compiled from "C:/wamp/www/test-cms/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:21816565328d8252154_09180256%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '961576ff12a3773c19088a656c71fbf74cea1a59' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/index.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21816565328d8252154_09180256',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565328d82c7472_26069227',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565328d82c7472_26069227')) {
function content_565328d82c7472_26069227 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '21816565328d8252154_09180256';
echo $_smarty_tpl->getSubTemplate ('smarty/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>