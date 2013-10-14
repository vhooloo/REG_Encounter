<?php
require_once('data/SugarBean.php');
//require_once('modules/Cases/case.php');
require_once('include/utils.php');
Class after{
function after (&$bean, $event, $arguments)
{

$id=$bean->reg_patient_reg_encounterreg_patient_ida;

	
$reg_patient = new reg_patient();
$reg_patient->retrieve($bean->reg_patient_reg_encounterreg_patient_ida);	

if($bean->uts_not_collected_c != "NotApplicableInPrescription")
	{
	//header("Location: index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DREG_Patient%26action%3DPatientEncounter%26record%3D".$bean->reg_patient_reg_encounterreg_patient_ida); 
	
	$id="E".$id;	
	}
	else{
	
	$id="P".$id;	
	}	

if(isset($_SESSION[$id.'indication'])){

 //in your case .... new aCase(); 
// if you don't know the id - search to find
if($reg_patient->assistant != $_SESSION[$id.'indication'])
{
$reg_patient->assistant = $_SESSION[$id.'indication'];

}


unset($_SESSION[$id.'indication']);
} 


$reg_patient->risk_patient_c = $bean->risklvl_c;
$reg_patient->next_rx_refill_due_patient_c = $bean->next_rx_refill_due_c;
$reg_patient->save();
	
	
	
	//header("Location: index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DREG_Patient%26action%3DPatientEncounter%26record%3D".$bean->reg_patient_reg_encounterreg_patient_ida); 
header("Location: index.php?action=ajaxui#ajaxUILoc=index.php%3Fmodule%3DREG_Patient%26action%3Dindex%26parentTab%3DRegistry");
	

	
if(isset($_SESSION[$id.'summary'])){unset($_SESSION[$id.'summary']);} 
if(isset($_SESSION[$id.'sf12_c'])){unset($_SESSION[$id.'sf12_c']);} 
if(isset($_SESSION[$id.'peg_c'])){unset($_SESSION[$id.'peg_c']);} 
if(isset($_SESSION[$id.'uts_not_collected_c'])){unset($_SESSION[$id.'uts_not_collected_c']);} 
if(isset($_SESSION[$id.'pillcount_c'])){unset($_SESSION[$id.'pillcount_c']);} 
if(isset($_SESSION[$id.'urinetoxscreen_c'])){unset($_SESSION[$id.'urinetoxscreen_c']);} 

exit;
}

}

?>