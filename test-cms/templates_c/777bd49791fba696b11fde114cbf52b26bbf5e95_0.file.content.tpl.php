<?php /* Smarty version 3.1.24, created on 2015-11-23 15:55:20
         compiled from "C:/wamp/www/test-cms/smarty/templates/content.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:14966565328d82fa104_64924201%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '777bd49791fba696b11fde114cbf52b26bbf5e95' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/content.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14966565328d82fa104_64924201',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565328d839a3a6_52883140',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565328d839a3a6_52883140')) {
function content_565328d839a3a6_52883140 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '14966565328d82fa104_64924201';
?>

    <div id="wrapper" ng-controller="wrapper">
        <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/navigation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        <div id="page-wrapper">
            <ul class="nav nav-tabs">
                <li class="control"><a data-toggle="tab" href="#source">Source</a></li>
                <li class="web-page-only-control"><a data-toggle="tab" href="#view">View</a></li>
                <li class="web-page-only-control"><a data-toggle="tab" href="#edit">Control</a></li>
                <li class="web-page-only-control"><a data-toggle="tab" href="#new-item">New</a></li>
                <li class="cms-page-only-control"><a data-toggle="tab" href="#translations">Translations</a></li>
                <li class="main-web-page-control"><a data-toggle="tab" href="#test-editor">Translations</a></li>
                <li class="main-web-page-control"><a data-toggle="tab" href="#menu-control">Menu control</a></li>
            </ul>
            <h2 id="fileName"></h2>
             <div class="tab-content">
                <div id="source" class="tab-pane fade in active">
                    <textarea class="plain-html-area" id="file-content">
                        
            
                    </textarea>
                </div>
                <div id="view" class="tab-pane fade">
                    
                </div>
                 <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/edit.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                 <?php echo $_smarty_tpl->getSubTemplate ('smarty/templates/new.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

                <div id="translations" class="tab-pane fade">
                    
                    <div id="translations-main">
                        <ul>
                            <li class="translations-list">
                               <div class="form-group col-xs-6">
                                <label class="form-group col-xs-3 text-center"><!-{translation langEn="Search"}--></label>
                                </div>
                                <div class="form-group col-xs-6">
                                    <input ng-model="query" type="text" class="form-control" id="searchfield" value="" placeholder="{translation langEn="Search"}">
                                </div>
                                <div>
                                    <label class="form-group col-xs-3">Lt</label>
                                    <label class="form-group col-xs-3">En</label>
                                    <label class="form-group col-xs-3">Ru</label>
                                    <label class="form-group col-xs-3">{translation langEn="Controls"}</label>
                                    
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control" id="new-lt" value="" placeholder="Naujas">
                                    </div>
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control" id="new-en" value="" placeholder="new">
                                    </div>
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control" id="new-ru" value="" placeholder="Новый">
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <div class="form-group row">
                                        <img alt="save" src="../images/save.png" id="new-translation" class="form-group translation-save col-xs-4" title="save">
                                        <img alt="success" src="../images/success.png" id="save-success" class="form-group ok-msg col-xs-4">
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="translations-list" ng-repeat="translation in translations | filter:query">
                                <div id="translation">
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control list" id="lt{{translation.translationid}}" value="{{translation.lt}}">
                                    </div>
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control list" id="en{{translation.translationid}}" value="{{translation.en}}">
                                    </div>
                                    <div class="form-group col-xs-3">
                                      <input type="text" class="form-control list" id="ru{{translation.translationid}}" value="{{translation.ru}}">
                                    </div>
                                    <div class="form-group col-xs-3">
                                        <div class="form-group row">
                                            <img alt="save" src="../images/save.png" id="{{translation.translationid}}" class="form-group translation-save col-xs-4 list" title="save">

                                            <img alt="delete" src="../images/delete.png" id="del{{translation.translationid}}" class="form-group translation-delete col-xs-4 list" title="delete">
                                            <img alt="success" src="../images/success.png" id="okimg{{translation.translationid}}" class="form-group ok-msg col-xs-4 ">
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                     
                </div>
                
                <div id="menu-control" class="tab-pane fade">
                    <div ng-controller="mainMenu">
                        <div class="row">
                            <div class="form-group col-xs-4">
                                <label>Section</label>
                            </div>
                            <div class="form-group col-xs-4">
                                <label>UsingTable</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Shown</label>
                            </div>
                            <div class="form-group col-xs-1">
                                <label>Order</label>
                            </div> 
                            <div class="form-group col-xs-2">
                                <label>Action</label>
                            </div>
                        </div>
                        <div ng-repeat="menuItem in menuItems">
                            
                            <div class="row">
                                <input id="secId{{menuItem.sectionid}}" type="hidden" class="form-control" value="{{menuItem.sectionid}}">
                                <div class="form-group col-xs-4">
                                    <input id="secName{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionname}}">
                                </div>
                                <div class="form-group col-xs-4">
                                    <input id="secTable{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.usingTable}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secShow{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.shown}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <input id="secOrder{{menuItem.sectionid}}" type="text" class="form-control" value="{{menuItem.sectionOrder}}">
                                </div>
                                <div class="form-group col-xs-1">
                                    <img id="secSave{{menuItem.sectionid}}" class="form-group meniu-control-save" ng-src="../images/save.png">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div id="test-editor" class="tab-pane fade">
                    
                    <form role="form" action='test.php' method="post">
                        <div ng-controller="metaTags">
<!--
                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Description</label>
                                <input class="form-control" name="description"  value="{{tag.description}}">
                            </div>
                            <div class="form-group" ng-repeat="tag in meta">
                                <label>Viewport</label>
                                <input class="form-control" name="viewport" value="{{tag.viewport}}">
                            </div>
-->
                        </div>
                        <div ng-controller="links">
                            <label>Meta</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.meta" type="text" class="form-control col-md-3" value="{{link.meta}}">
                            </div>
                            <label>Links</label>
                            <div ng-repeat="link in links" >
                                <input ng-if="link.item" type="text" class="form-control col-md-3" value="{{link.item}}">
                            </div>
<!--
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
-->
                        </div>
                        <button type="submit" class="btn btn-default">Submit Button</button>
                        <button type="reset" class="btn btn-default">Reset Button</button>
                    </form>
                          
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

<?php }
}
?>