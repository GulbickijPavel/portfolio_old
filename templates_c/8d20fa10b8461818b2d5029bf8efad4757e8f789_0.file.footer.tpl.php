<?php /* Smarty version 3.1.24, created on 2015-11-23 17:15:56
         compiled from "C:/wamp/www/smarty/templates/main/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:494456532dac5d4171_50046931%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d20fa10b8461818b2d5029bf8efad4757e8f789' => 
    array (
      0 => 'C:/wamp/www/smarty/templates/main/footer.tpl',
      1 => 1448291753,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '494456532dac5d4171_50046931',
  'variables' => 
  array (
    'cms' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56532dac639a86_53434828',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56532dac639a86_53434828')) {
function content_56532dac639a86_53434828 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '494456532dac5d4171_50046931';
?>
            </div>
        </div>
        <footer><div class="fixed-contacts"></div> &copy PGulbickij.lt 2015</footer>
        <?php echo '<script'; ?>
 type="text/javascript" src=" http://code.jquery.com/jquery-latest.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="build/combined.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="build/script.min.js"><?php echo '</script'; ?>
>
        <?php if ($_smarty_tpl->tpl_vars['cms']->value == 'true') {?>
        <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.3/standard/ckeditor.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="/portfolio/portfolio.lt/js/ckeditor/sample.js">     <?php echo '</script'; ?>
>
        
    
        <?php }?>

<?php }
}
?>