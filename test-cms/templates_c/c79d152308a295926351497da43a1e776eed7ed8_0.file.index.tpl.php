<?php /* Smarty version 3.1.24, created on 2015-11-11 16:12:05
         compiled from "C:/wamp/www/portfolio/portfolio.lt/test-cms/smarty/templates/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2140456435ac59c2ea8_56283049%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c79d152308a295926351497da43a1e776eed7ed8' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/test-cms/smarty/templates/index.tpl',
      1 => 1447254723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2140456435ac59c2ea8_56283049',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56435ac5a287b0_77112453',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56435ac5a287b0_77112453')) {
function content_56435ac5a287b0_77112453 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2140456435ac59c2ea8_56283049';
echo $_smarty_tpl->getSubTemplate ('smarty/templates/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/content.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>