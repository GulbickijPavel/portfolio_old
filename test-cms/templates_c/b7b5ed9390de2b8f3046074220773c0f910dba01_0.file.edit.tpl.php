<?php /* Smarty version 3.1.24, created on 2015-11-23 16:59:27
         compiled from "C:/wamp/www/test-cms/smarty/templates/edit.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23816565337df894968_26550565%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b7b5ed9390de2b8f3046074220773c0f910dba01' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/edit.tpl',
      1 => 1448294186,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23816565337df894968_26550565',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565337df8ea871_83093874',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565337df8ea871_83093874')) {
function content_565337df8ea871_83093874 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23816565337df894968_26550565';
?>
                <div id="edit" class="tab-pane fade">
                    <button class="ckeditor-rr">Reload ckeditor</button>
                      
<!--                    action="testSave.php" method="post"-->
                    <form class="form-horizontal" id="control-form" enctype="multipart/form-data">
                        <div class="input-group">
<!--                            ng-change='ckeditorUpate(item.Field, foo[item.Field])'-->
                                <span class="input-group-addon">Select:</span>
                                <select id="item-id" class="form-control" ng-options="option[1] for option in combo track by option[0]"
      ng-model="foo"></select>
                            <div class="input-group-btn">
                               <a href="#" id="item-del-button" class="btn btn-danger">Delete</a>
                            </div>
                        </div>
                      <input id="table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}" id="selected-item">
                            </div>
                            <div ng-if='item.Type == "int(15)"' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}" value="{{foo[item.Field]}}">
                            </div>
                            <div ng-if='item.Type == "text"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <textarea id="b225{{item.Field}}" class="ckeditor editor-test" class="form-control col-xs-9" name="{{item.Field}}">
                                    {{foo[item.Field]}}
                                </textarea>
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <img ng-src='{{foo[item.Field]}}' class="image">
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="{{item.Field}}">
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" id="{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)"' class="input-group" >
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="{{foo[item.Field]}}" >
                            </div>

                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
<!--                            <button type="reset" class="btn btn-default">Cancel</button>                            <button ng-click="go('skills.tpl')">skills.tpl</button>-->
                            <button action="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        
                    </form>
                </div><?php }
}
?>