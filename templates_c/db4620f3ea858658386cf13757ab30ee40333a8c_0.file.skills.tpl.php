<?php /* Smarty version 3.1.24, created on 2015-11-23 16:50:56
         compiled from "C:/wamp/www/smarty/templates/sections/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:76565327d0e47657_78803448%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db4620f3ea858658386cf13757ab30ee40333a8c' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/skills.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76565327d0e47657_78803448',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565327d0ecc377_50036470',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565327d0ecc377_50036470')) {
function content_565327d0ecc377_50036470 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '76565327d0e47657_78803448';
?>
 
        <section class="jumbotron" id="skills"> 
            <h2><?php echo smarty_function_translation(array('langEn'=>"Skills"),$_smarty_tpl);?>

                <?php if (($_smarty_tpl->tpl_vars['is_admin']->value)) {?>
                <a class="btn btn-primary right control" id="skil-button"><?php echo smarty_function_translation(array('langEn'=>"Control"),$_smarty_tpl);?>
</a>
                <?php }?>
            </h2>
            <hr>
            <div class="content">
                <h3><?php echo smarty_function_translation(array('langEn'=>"Main"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>1),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Secondary"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>2),$_smarty_tpl);?>

                <h3><?php echo smarty_function_translation(array('langEn'=>"Other"),$_smarty_tpl);?>
</h3>
                <?php echo smarty_function_skills(array('cat'=>3),$_smarty_tpl);?>

            </div> 
        </section><?php }
}
?>