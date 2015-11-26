<?php /* Smarty version 3.1.24, created on 2015-11-23 15:55:20
         compiled from "C:/wamp/www/test-cms/smarty/templates/navigation.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2167565328d8403b30_90405953%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b335ddf67ab50cdc316ba855b0681072145ae3ab' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/navigation.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2167565328d8403b30_90405953',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565328d842ac44_08377833',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565328d842ac44_08377833')) {
function content_565328d842ac44_08377833 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2167565328d8403b30_90405953';
?>
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
           <div class="navbar-default sidebar" role="navigation">
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
                                        <li ng-if='folder.docs && folder.folderName == "main"' ng-repeat="file in folder.docs">
                                            <a ng-click='' class="main-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                        </li>
                                        <li ng-if='folder.dir && folder.folderName == "main"' ng-repeat="file in folder.dir">
                                            <a ng-click='' class="main-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                        </li>

                                        <li ng-if='folder.docs && folder.folderName != "main"' ng-repeat="file in folder.docs">
                                            <a ng-click='go(file.doc, 0)' class="section-controll" ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.doc}}</a>
                                        </li>
                                        <li ng-if='folder.dir && folder.folderName != "main"' ng-repeat="file in folder.dir">
                                            <a ng-click='go(file.docs, 0)' class="section-controll"  ref="{{file.href}}"><i class="fa fa-file fa-fw"></i>{{file.docs}}</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                            
                        </li>
                        <li>
                            <a href="#"><i class="fa  fa-cog fa-fw"></i>Settings<span class="fa arrow"></span></a> 
                            <ul class="nav nav-second-level">
                                <li ng-repeat="setting in settings.docs">
                                    <a ng-click='translation()' class="cms" ref="{{setting.href}}"><i class="fa fa-file fa-fw"></i>{{setting.doc}}</a>
                                </li>

                                <li ng-repeat="sfolder in settings.dir">
                                    <a href="#"><i class="fa fa-folder fa-fw"></i>{{sfolder.folderName}}<span class="fa arrow"></span></a>
                                    <ul class="nav nav-third-level">
                                        <li ng-if='sfolder.docs' ng-repeat="sfile in sfolder.docs">
                                            <a ng-click='translation()' class="cms" ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.doc}}</a>
                                        </li>
                                        <li ng-if='sfolder.dir' ng-repeat="sfile in settings.dir">
                                            <a ng-click='translation()' class="cms"  ref="{{sfile.href}}"><i class="fa fa-file fa-fw"></i>{{sfile.docs}}</a>
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
        </nav><?php }
}
?>