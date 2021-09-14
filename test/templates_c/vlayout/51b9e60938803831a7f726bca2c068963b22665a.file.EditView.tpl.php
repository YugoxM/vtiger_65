<?php /* Smarty version Smarty-3.1.7, created on 2021-09-14 09:20:16
         compiled from "C:\xampp\htdocs\vtigercrm\includes\runtime/../../layouts/vlayout\modules\HelpDesk\EditView.tpl" */ ?>
<?php /*%%SmartyHeaderCode:105330062061405fb2a48243-73213731%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '51b9e60938803831a7f726bca2c068963b22665a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\HelpDesk\\EditView.tpl',
      1 => 1631611209,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '105330062061405fb2a48243-73213731',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_61405fb2a7d8c',
  'variables' => 
  array (
    'MODULE' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_61405fb2a7d8c')) {function content_61405fb2a7d8c($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewBlocks.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("Action.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path("EditViewActions.tpl",$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>