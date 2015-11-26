<?php /* Smarty version 3.1.24, created on 2015-11-23 15:55:20
         compiled from "C:/wamp/www/test-cms/smarty/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2050565328d8488852_48791580%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '16a7d1d01a8b59f83a37027ea2cc4c934e95b7a7' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/footer.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2050565328d8488852_48791580',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565328d8490565_46839969',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565328d8490565_46839969')) {
function content_565328d8490565_46839969 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2050565328d8488852_48791580';
?>
    <!-- jQuery -->
   
    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="//cdn.ckeditor.com/4.5.4/standard/ckeditor.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../build/combined.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="../build/script.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/script.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/bootstrap.min.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
}
?>