<?php /* Smarty version 3.1.24, created on 2015-11-13 19:38:47
         compiled from "C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:28321564620277c23c4_20388028%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ea6e6984b015c4a76b4132e849ec1862c9a4bf3' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/smarty/templates/sections/home.tpl',
      1 => 1442827977,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28321564620277c23c4_20388028',
  'variables' => 
  array (
    'is_admin' => 0,
    'startpage' => 0,
    'item' => 0,
    'list' => 0,
    'key' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_564620278e7397_50787182',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_564620278e7397_50787182')) {
function content_564620278e7397_50787182 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '28321564620277c23c4_20388028';
?>
        <section class="jumbotron " id="home">
            <div class="home-content" id="home-content">
            <h2><?php echo smarty_function_translation(array('langEn'=>"Home"),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                    <a class="btn btn-primary right control" id="home-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
            </h2>
                <hr>
                <div class="some-home-text">
                <?php
$_from = $_smarty_tpl->tpl_vars['startpage']->value;
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
                    <?php echo $_smarty_tpl->tpl_vars['item']->value['startinfo'];?>
 
                <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </div>
                <div id="test">
                    <div id="vortex">
                    <?php
$_from = $_smarty_tpl->tpl_vars['list']->value;
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
                        <?php if ($_smarty_tpl->tpl_vars['key']->value <= 8) {?>
                        <img id="<?php echo $_smarty_tpl->tpl_vars['item']->value['skillid'];?>
" class="vortex-image" src="<?php echo $_smarty_tpl->tpl_vars['item']->value['skillimage'];?>
" alt="image">
                        <?php }?>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                    </div>
                </div>
            </div>
        </section> <?php }
}
?>