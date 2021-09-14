<?php /* Smarty version Smarty-3.1.7, created on 2021-09-14 10:56:01
         compiled from "C:\xampp\htdocs\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Inventory\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29288231361407509d693a7-70337030%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd94869d5d7c67880e96c706ef4dc2273e7572397' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Inventory\\EditView.tpl',
      1 => 1631616843,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29288231361407509d693a7-70337030',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61407509dd7da',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61407509dd7da')) {function content_61407509dd7da($_smarty_tpl) {?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("LineItemsEdit.tpl",'Inventory'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",'Vtiger'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>