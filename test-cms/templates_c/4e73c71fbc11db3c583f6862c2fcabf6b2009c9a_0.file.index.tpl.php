<?php /* Smarty version 3.1.24, created on 2015-10-29 17:48:49
         compiled from "C:/wamp/www/portfolio/portfolio.lt/test-cms/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1792656324df126d7c1_25245428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e73c71fbc11db3c583f6862c2fcabf6b2009c9a' => 
    array (
      0 => 'C:/wamp/www/portfolio/portfolio.lt/test-cms/index.tpl',
      1 => 1446137325,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1792656324df126d7c1_25245428',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56324df130da60_17207234',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56324df130da60_17207234')) {
function content_56324df130da60_17207234 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1792656324df126d7c1_25245428';
?>
<!DOCTYPE html>
<html lang="en" ng-app="CMS">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>CMS</title>
     <!-- Bootstrap Core CSS -->
    <link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- MetisMenu CSS -->
    <link href="bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">
    <!-- Timeline CSS -->
    <link href="dist/css/timeline.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">
    <!-- Morris Charts CSS -->
    <link type="text/css" rel="stylesheet" href="../css/styles.css">
    <link href="bower_components/morrisjs/morris.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="http://code.angularjs.org/1.2.9/angular-sanitize.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="js/controllers.js"><?php echo '</script'; ?>
>
</head>
<body>
    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">CMS For www.pgulbickij.lt</a>
                <button type="button" class="navbar-toggle">test</button>
            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-envelope fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                    <li><a href="#"><i class="fa fa-user fa-fw"></i> Test</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
           <div class="navbar-default sidebar" role="navigation" ng-controller="fileStructure">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                         <li>
                            <a href="#"><i class="fa fa-folder fa-fw"></i>Page tree<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li ng-repeat="file in fileList.docs">
                                    <a class="divlink" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                </li>
                                <li ng-repeat="folder in fileList.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{folder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='folder.docs' ng-repeat="file in folder.docs">
                                            <a class="divlink" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                        </li>
                                        <li ng-if='folder.dir' ng-repeat="file in folder.dir">
                                            <a class="divlink"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-cog fa-fw"></i>Settings<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li ng-repeat="setting in settings.docs">
                                    <a class="divlink" ref="{{setting.href}}"><i class="fa fa-file fa-fw"></i>{{setting.doc}}</a>
                                </li>

                                <li ng-repeat="sfolder in settings.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{sfolder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='sfolder.docs' ng-repeat="sfile in sfolder.docs">
                                            <a class="divlink" ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.doc}}</a>
                                        </li>
                                        <li ng-if='sfolder.dir' ng-repeat="sfile in settings.dir">
                                            <a class="divlink"  ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.docs}}</a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                            
                        </li>
                    </ul>
                </div>
<!--
                <li>
                    <a href="#"><i class="fa fa-sitemap fa-fw"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Second Level Item</a>
                        </li>
                        <li>
                            <a href="#">Third Level <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                                <li>
                                    <a href="#">Third Level Item</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
-->
            </div>
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#source">Source</a></li>
                <li><a data-toggle="tab" href="#view">View</a></li>
                <li><a data-toggle="tab" href="#edit">Control</a></li>
                <li><a data-toggle="tab" href="#page-translations">Translations</a></li>
             
            </ul>
            <h2 id="fileName"></h2>
             <div class="tab-content">
                <div id="source" class="tab-pane fade in active">
                    <textarea class="plain-html-area" id="file-content">
            
            
                    </textarea>
                </div>
                <div id="view" class="tab-pane fade">
                    
                </div>
                <div id="edit" class="tab-pane fade">
                    <div ng-controller="itemsToEditList">
                        <ul>
                            <li ng-repeat="item in itemsToEdit.items">
                                {{item.id}}
                            </li>
                        </ul>
                    </div>
                </div>
                <div id="page-translations" class="tab-pane fade">
                    <h3>Dropdown 1</h3>
                    <p>WInteger convallis, nulla in sollicitudin placerat, ligula enim auctor lectus, in mollis diam dolor at lorem. Sed bibendum nibh sit amet dictum feugiat. Vivamus arcu sem, cursus a feugiat ut, iaculis at erat. Donec vehicula at ligula vitae venenatis. Sed nunc nulla, vehicula non porttitor in, pharetra et dolor. Fusce nec velit velit. Pellentesque consectetur eros.</p>
                </div>
            </div>
            
<!--
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Header</h1>
                </div>
            </div>
            <div class="row">
                <div id="loaded-page"class="panel panel-default pages" >
                <form role="form" action='test.php' method="post">
                    <div ng-controller="metaTags">
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Description</label>
                            <input class="form-control" name="description"  value="{{tag.description}}">
                        </div>
                        <div class="form-group" ng-repeat="tag in meta">
                            <label>Viewport</label>
                            <input class="form-control" name="viewport" value="{{tag.viewport}}">
                        </div>
                    </div>
                    <div ng-controller="links">
                        <label>Links</label>
                        <div ng-repeat="link in links" > 
                            <div class="form-group col-xs-3">
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[1]}}">
                            </div>
                            <div class="form-group col-xs-3">  
                                <input class="input-to-cut" type="text" class="form-control col-md-3" value="{{link.info[2]}}">
                            </div>
                            <div class="form-group col-xs-6">
                                <input class="input-to-cut" type="text" class="form-control col-md-6" value="{{link.info[3]}}">
                            </div>
                            <input type="text" name="link{{link.id}}" value="{{link.info[0]}} {{link.info[1]}}{{link.info[2]}} {{link.info[3]}}">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-default">Submit Button</button>
                    <button type="reset" class="btn btn-default">Reset Button</button>
                </form>
                </div>
            </div>
-->
            
        </div>
    </div>
    <!-- jQuery -->
    <?php echo '<script'; ?>
 src="bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Bootstrap Core JavaScript -->
    <?php echo '<script'; ?>
 src="bower_components/bootstrap/dist/js/bootstrap.min.js"><?php echo '</script'; ?>
>
    <!-- Metis Menu Plugin JavaScript -->
    <?php echo '<script'; ?>
 src="bower_components/metisMenu/dist/metisMenu.min.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme JavaScript -->
    <?php echo '<script'; ?>
 src="dist/js/sb-admin-2.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
       $(document).ready(function(){
            $(document).on("click", ".divlink", function(){
                ref = $(this).attr("ref").slice(3);
                page = (ref.split("/").pop()).slice(0, ref.length - 4);
                console.log(page);
                $("#fileName").text($(this).attr("ref"));
                console.log(ref);
                $.get(ref, function (data) {
                    $('#file-content').text(data);
                });
                request = $.ajax({
                    url: "php/showDocumentView.php",
                    type: "post",
                    data: { page: page, link: $(this).attr("ref") }
                });
                request.success(function(data) {
             //       console.log(data);
                    $("#view").empty();
                    $("#view").append(data);
                    $.getScript( "../build/combined.min.js", function( data, textStatus, jqxhr ) {
                    }); 
                    $.getScript( "../build/script.min.js", function( data, textStatus, jqxhr )                     {
                         
                    });
                });
            });
        });
    <?php echo '</script'; ?>
>
</body>
</html>
<?php }
}
?>