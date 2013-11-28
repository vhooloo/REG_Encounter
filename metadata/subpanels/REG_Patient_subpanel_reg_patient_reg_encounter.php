<?php
// created: 2013-10-25 10:37:25
$subpanel_layout['list_fields'] = array (
  'date_modified' => 
  array (
    'type' => 'datetime',
    'vname' => 'LBL_DATE_MODIFIED',
    'width' => '10%',
    'default' => true,
  ),
  'summary' => 
  array (
    'type' => 'varchar',
    'vname' => 'LBL_SUMMARY',
    'width' => '10%',
    'default' => true,
  ),
  'edit_button' => 
  array (
    'vname' => 'LBL_EDIT_BUTTON',
    'widget_class' => 'SubPanelEditButton',
    'module' => 'REG_Encounter',
    'width' => '5%',
    'default' => true,
  ),
  'remove_button' => 
  array (
    'vname' => 'LBL_REMOVE',
    'widget_class' => 'SubPanelRemoveButton',
    'module' => 'REG_Encounter',
    'width' => '5%',
    'default' => true,
  ),
);