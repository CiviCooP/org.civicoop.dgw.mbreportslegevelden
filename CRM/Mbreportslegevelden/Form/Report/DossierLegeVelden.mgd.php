<?php
// This file declares a managed database record of type "ReportTemplate".
// The record will be automatically inserted, updated, or deleted from the
// database as appropriate. For more details, see "hook_civicrm_managed" at:
// http://wiki.civicrm.org/confluence/display/CRMDOC42/Hook+Reference
return array (
  0 => 
  array (
    'name' => 'CRM_Mbreportslegevelden_Form_Report_DossierLegeVelden',
    'entity' => 'ReportTemplate',
    'params' => 
    array (
      'version' => 3,
      'label' => 'DossierLegeVelden',
      'description' => 'DossierLegeVelden (org.civicoop.dgw.mbreportslegevelden)',
      'class_name' => 'CRM_Mbreportslegevelden_Form_Report_DossierLegeVelden',
      'report_url' => 'org.civicoop.dgw.mbreportslegevelden/dossierlegevelden',
      'component' => 'CiviCase',
    ),
  ),
);