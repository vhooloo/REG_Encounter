<?php 
 //WARNING: The contents of this file are auto-generated


// created: 2013-09-14 15:48:43
$dictionary["REG_Encounter"]["fields"]["reg_patient_reg_encounter"] = array (
  'name' => 'reg_patient_reg_encounter',
  'type' => 'link',
  'relationship' => 'reg_patient_reg_encounter',
  'source' => 'non-db',
  'vname' => 'LBL_REG_PATIENT_REG_ENCOUNTER_FROM_REG_PATIENT_TITLE',
  'id_name' => 'reg_patient_reg_encounterreg_patient_ida',
);
$dictionary["REG_Encounter"]["fields"]["reg_patient_reg_encounter_name"] = array (
  'name' => 'reg_patient_reg_encounter_name',
  'type' => 'relate',
  'source' => 'non-db',
  'vname' => 'LBL_REG_PATIENT_REG_ENCOUNTER_FROM_REG_PATIENT_TITLE',
  'save' => true,
  'id_name' => 'reg_patient_reg_encounterreg_patient_ida',
  'link' => 'reg_patient_reg_encounter',
  'table' => 'reg_patient',
  'module' => 'REG_Patient',
  'rname' => 'name',
  'db_concat_fields' => 
  array (
    0 => 'first_name',
    1 => 'last_name',
  ),
);
$dictionary["REG_Encounter"]["fields"]["reg_patient_reg_encounterreg_patient_ida"] = array (
  'name' => 'reg_patient_reg_encounterreg_patient_ida',
  'type' => 'link',
  'relationship' => 'reg_patient_reg_encounter',
  'source' => 'non-db',
  'reportable' => false,
  'side' => 'right',
  'vname' => 'LBL_REG_PATIENT_REG_ENCOUNTER_FROM_REG_ENCOUNTER_TITLE',
);


 // created: 2014-02-25 12:10:57

 

 // created: 2013-11-27 10:21:56

 

 // created: 2014-02-25 12:23:42

 

 // created: 2014-02-25 11:25:39

 

 // created: 2014-03-31 12:44:44

 

 // created: 2013-10-12 05:55:35

 

 // created: 2013-11-27 10:22:44

 
?>