<?php /* Smarty version 3.1.24, created on 2015-11-23 16:24:52
         compiled from "C:/wamp/www/smarty/templates/sections/projects.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2431756532fc4c85b10_37273781%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a8e0827967063bce79acd4707e785caaaa73e79e' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/sections/projects.tpl',
      1 => 1448292166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2431756532fc4c85b10_37273781',
  'variables' => 
  array (
    'projects' => 0,
    'item' => 0,
    'lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56532fc4e4ec01_08962761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56532fc4e4ec01_08962761')) {
function content_56532fc4e4ec01_08962761 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2431756532fc4c85b10_37273781';
?>
        <section class="jumbotron" id="projects">
            <div class="experience-content">
                <h2><?php echo smarty_function_translation(array('langEn'=>"Projects"),$_smarty_tpl);?>

                </h2>
                <hr>
                <ul class="bxslider">
                    <?php
$_from = $_smarty_tpl->tpl_vars['projects']->value;
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
                    <li>
                        <h3> <?php echo $_smarty_tpl->tpl_vars['item']->value['projectname'];?>
</h3>
                        <ul id="proj-inner-slider" class="bxslider inner">
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
'>
                                   <source srcset='low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
'>
                                   <img src='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image1'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
'>
                                   <source srcset='/images/projects/low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
'>
                                   <img src='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image2'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                            <li>
                                <a><picture>
                                   <source media="(min-width: 64em)" srcset='/images/projects/high-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
'>
                                   <source media="(min-width: 37.5em)" srcset='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
'>
                                   <source srcset='/images/projects/low-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
'>
                                   <img src='/images/projects/med-<?php echo $_smarty_tpl->tpl_vars['item']->value['image3'];?>
' alt="This picture loads on non-supporting browsers.">
                                </picture></a>
                            </li>
                        </ul>
                        <article class="experience-desc">
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'en') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionEn'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'lt') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionLt'];?>

                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['lang']->value == 'ru') {?> 
                            <?php echo $_smarty_tpl->tpl_vars['item']->value['descriptionRu'];?>

                            <?php }?>
                        </article>
                    </li>
                    <?php
$_smarty_tpl->tpl_vars['item'] = $foreach_item_Sav;
}
?>
                </ul>
            </div>   
        </section><?php }
}
?>