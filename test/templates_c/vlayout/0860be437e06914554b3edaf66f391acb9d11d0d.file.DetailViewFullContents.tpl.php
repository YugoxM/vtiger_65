<?php /* Smarty version Smarty-3.1.7, created on 2021-09-14 10:02:18
         compiled from "C:\xampp\htdocs\vtigercrm\includes\runtime/../../layouts/vlayout\modules\Vtiger\DetailViewFullContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14099553506140732a066ff9-60986556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0860be437e06914554b3edaf66f391acb9d11d0d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\vtigercrm\\includes\\runtime/../../layouts/vlayout\\modules\\Vtiger\\DetailViewFullContents.tpl',
      1 => 1468488064,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14099553506140732a066ff9-60986556',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
    'RECORD_STRUCTURE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_6140732a08954',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_6140732a08954')) {function content_6140732a08954($_smarty_tpl) {?>
<?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0);?>
<?php }} ?>