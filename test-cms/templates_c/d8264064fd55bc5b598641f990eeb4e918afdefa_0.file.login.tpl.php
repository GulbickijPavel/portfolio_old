<?php /* Smarty version 3.1.24, created on 2015-11-23 16:59:24
         compiled from "C:/wamp/www/test-cms/login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30994565337dcde35e6_59871484%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8264064fd55bc5b598641f990eeb4e918afdefa' => 
    array (
      0 => 'C:/wamp/www/test-cms/login.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30994565337dcde35e6_59871484',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565337dce64481_54646618',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565337dce64481_54646618')) {
function content_565337dce64481_54646618 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30994565337dcde35e6_59871484';
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