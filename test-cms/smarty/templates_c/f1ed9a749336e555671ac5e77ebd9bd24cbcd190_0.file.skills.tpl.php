<?php /* Smarty version 3.1.24, created on 2015-10-14 19:21:36
         compiled from "smarty/templates/sections/skills/skills.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1924561e8110b47df1_67416007%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f1ed9a749336e555671ac5e77ebd9bd24cbcd190' => 
    array (
      0 => 'smarty/templates/sections/skills/skills.tpl',
      1 => 1442335312,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1924561e8110b47df1_67416007',
  'variables' => 
  array (
    'is_admin' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_561e8110bb9295_76794407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_561e8110bb9295_76794407')) {
function content_561e8110bb9295_76794407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1924561e8110b47df1_67416007';
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