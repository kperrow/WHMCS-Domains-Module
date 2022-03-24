<?php

$additionaldomainfields[".au"][] = array("Name" => "Registrant Name", "LangVar" => "autldregname", "Type" => "text", "Size" => "20", "Default" => "", "Required" => true,);
$additionaldomainfields[".au"][] = array("Name" => "Registrant ID", "LangVar" => "autldregid", "Type" => "text", "Size" => "20", "Default" => "", "Required" => true,);
$additionaldomainfields[".au"][] = array("Name" => "Registrant ID Type", "LangVar" => "autldregidtype", "Type" => "dropdown", "Options" => "ABN,ACN,Business Registration Number,Other", "Default" => "ABN",);
$additionaldomainfields[".au"][] = array("Name" => "Eligibility Name", "LangVar" => "autldeligname", "Type" => "text", "Size" => "20", "Default" => "", "Required" => false,);
$additionaldomainfields[".au"][] = array("Name" => "Eligibility ID", "LangVar" => "autldeligid", "Type" => "text", "Size" => "20", "Default" => "", "Required" => false,);
$additionaldomainfields[".au"][] = array("Name" => "Eligibility ID Type", "LangVar" => "autldeligidtype", "Type" => "dropdown", "Options" => ",Australian Company Number (ACN),ACT Business Number,NSW Business Number,NT Business Number,QLD Business Number,SA Business Number,TAS Business Number,VIC Business Number,WA Business Number,Trademark (TM),Other - Used to record an Incorporated Association number,Australian Business Number (ABN)", "Default" => "",);
$additionaldomainfields[".au"][] = array("Name" => "Eligibility Type", "LangVar" => "autldeligtype", "Type" => "dropdown", "Options" => "Charity,Citizen/Resident,Club,Commercial Statutory Body,Company,Incorporated Association,Industry Body,Non-profit Organisation,Other,Partnership,Pending TM Owner  ,Political Party,Registered Business,Religious/Church Group,Sole Trader,Trade Union,Trademark Owner,Child Care Centre,Government School,Higher Education Institution,National Body,Non-Government School,Pre-school,Research Organisation,Training Organisation", "Default" => "Company",);
$additionaldomainfields[".au"][] = array("Name" => "Eligibility Reason", "LangVar" => "autldeligreason", "Type" => "radio", "Options" => "Domain name is an Exact Match Abbreviation or Acronym of your Entity or Trading Name.,Close and substantial connection between the domain name and the operations of your Entity.", "Default" => "Domain name is an Exact Match Abbreviation or Acronym of your Entity or Trading Name.",);

// .AU Direct Priority application fields
$additionaldomainfields[".au"][] = array("Name" => ".AU Priority Registration", "LangVar" => "au_registration", "Type" => "display", "Default" =>"The priority token fields below are only required if you are applying to register a contested domain.<br><ul> <li><a href=\"https://www.auda.org.au/au-domain-names/au-direct/priority-allocation-process\" target=\"_blank\">Learn more about contested domains and the Priority Allocation Process</a></li> <li><a href=\"https://priority.auda.org.au/\" target=\"_blank\">Retrieve your priority tokens</a></li> </ul>");
$additionaldomainfields[".au"][] = array("Name" => "Priority contact ID", "LangVar" => "auprioritytoken", "Type" => "text", "Size" => "20", "Default" => "", "Required" => false,);
$additionaldomainfields[".au"][] = array("Name" => "Priority authInfo", "LangVar" => "auprioritytokenpassword", "Type" => "text", "Size" => "20", "Default" => "", "Required" => false,);