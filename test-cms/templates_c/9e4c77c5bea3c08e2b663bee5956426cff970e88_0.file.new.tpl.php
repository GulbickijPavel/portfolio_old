<?php /* Smarty version 3.1.24, created on 2015-11-23 15:55:20
         compiled from "C:/wamp/www/test-cms/smarty/templates/new.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:9549565328d8461754_80762122%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9e4c77c5bea3c08e2b663bee5956426cff970e88' => 
    array (
      0 => 'C:/wamp/www/test-cms/smarty/templates/new.tpl',
      1 => 1447429834,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9549565328d8461754_80762122',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565328d8471157_28179956',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565328d8471157_28179956')) {
function content_565328d8471157_28179956 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '9549565328d8461754_80762122';
?>
                <div id="new-item" class="tab-pane fade">
                     
<!--                    action="testSave.php" method="post"-->
                    <form class="form-horizontal" id="new-tem-form" enctype="multipart/form-data">
<!--
                        <div class="input-group">
                                <span class="input-group-addon">Select:</span>
                                <select class="form-control" ng-options="option[1] for option in combo track by option[0]"
      ng-model="default"></select>
                        </div>
-->
                      <input id="new-item-table-field" class="form-control col-xs-9" type="hidden" name="table" value="">
                        <div ng-repeat="item in ToEdit">
                            <div ng-if='item.Type == "varchar(50)"' class="input-group">
                                    <span class="input-group-addon">{{item.Field}}</span>
                                    <input  class="form-control col-xs-9" type="text" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "int(8)" || item.Type == "int(10)" ' class="row">
                                <input class="form-control" type="hidden" name="{{item.Field}}">
                            </div>
                            <div ng-if='item.Type == "text"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <textarea class="ckeditor" id="new-{{item.Field}}" rows="4" cols="50"  class="form-control col-xs-9" name="{{item.Field}}" >
                                    
                                </textarea>
                            </div>
                            <div ng-if='item.Type == "varchar(255)"' class="input-group">
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="file" name="fileToUpload[]" class="form-control col-xs-9 image-path" id="new-{{item.Field}}">
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" value="" id="new-{{item.Field}}-image">
                                <img ng-src="" width="200" style="display:none;" id="example-new-{{item.Field}}" class="image-example"/>
                            </div>
                            <div ng-if='item.Type == "varchar(10)"' class="input-group" >
                                <span class="input-group-addon">{{item.Field}}</span>
                                <input  type="text" name="{{item.Field}}" class="form-control col-xs-9" >
                            </div>

                        </div>
                        <div class="form-group">
                          <div class="col-lg-10 col-lg-offset-2 right">
<!--                            <button type="reset" class="btn btn-default">Cancel</button>                            <button ng-click="go('skills.tpl')">skills.tpl</button>-->
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                        </div>
                        
                    </form>
                </div><?php }
}
?>