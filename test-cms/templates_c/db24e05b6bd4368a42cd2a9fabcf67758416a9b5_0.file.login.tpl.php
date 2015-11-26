<?php /* Smarty version 3.1.24, created on 2015-11-05 15:38:10
         compiled from "C:/wamp/www/portfolio/portfolio.lt/test-cms/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6866563b69d252faf8_32394071%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db24e05b6bd4368a42cd2a9fabcf67758416a9b5' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/test-cms/login.tpl',
      1 => 1446734287,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6866563b69d252faf8_32394071',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_563b69d2576007_78449989',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_563b69d2576007_78449989')) {
function content_563b69d2576007_78449989 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6866563b69d252faf8_32394071';
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Portfolio</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <link rel="stylesheet" href="css/bootstrap.css" media="screen">
        <link rel="stylesheet" href="css/styles.css">
        <link rel="stylesheet" href="slider/jquery.bxslider.css">
    </head>
    <body class="login-body">
        <div class="login">
            <div class="login-form jumbotron">
                <form class="form-horizontal" action="login.php" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Username</label>
                      <div class="col-lg-10">
                        <input type="text" class="form-control" name="username" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="" class="col-lg-2 control-label">Password</label>
                      <div class="col-lg-10">
                        <input type="password" class="form-control" name="password" id="" placeholder="">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="col-lg-10 col-lg-offset-2 right">
                        <button type="reset" class="btn btn-default">Atšaukti</button>
                        <button type="submit" class="btn btn-primary">Pateikti</button>
                      </div>
                    </div>
                </form>
            </div>
        </div>
    </body>

</html><?php }
}
?>