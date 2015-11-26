<?php /* Smarty version 3.1.24, created on 2015-11-13 17:25:28
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23720564600e8668732_28913906%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8611e3de54289acfcef1c611d2c544b3ba1f8405' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/main/index.tpl',
      1 => 1446133619,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23720564600e8668732_28913906',
  'variables' => 
  array (
    'sections' => 0,
    'item' => 0,
    'section' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564600e89102d5_10636206',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564600e89102d5_10636206')) {
function content_564600e89102d5_10636206 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23720564600e8668732_28913906';
?>

    <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/main/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    <?php
$_from = $_smarty_tpl->tpl_vars['sections']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['item'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['item']->_loop = false;
$_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
$foreach_item_Sav = $_smarty_tpl->tpl_vars['item'];
?>
        <?php if ($_smarty_tpl->tpl_vars['item']->value['shown'] == 1) {?>
            <?php $_smarty_tpl->tpl_vars["section"] = new Smarty_Variable($_smarty_tpl->tpl_vars['item']->value['sectionname'], null, 0);?>
            <?php ob_start();
echo mb_strtolower($_smarty_tpl->tpl_vars['section']->value, 'UTF-8');
$_tmp1=ob_get_clean();
echo $_smarty_tpl->getSubTemplate ("smarty/templates/sections/".$_tmp1.".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <?php }?>
    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
    <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/main/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

    </body>
</html><?php }
}
?>