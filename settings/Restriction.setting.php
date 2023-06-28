<?php

return [
  'restrict_email_recipient_groups' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'restrict_email_recipient_groups',
    'type' => 'Array',
    'is_domain' => 1,
    'is_contact' => 0,
    'default' => [],
    'title' => ts('Restrict email recipients to groups'),
    'description' => ts('Limit which contacts will receive a CiviCRM activity notification email when an activity is assigned to them. You can select any group or smart group. Leave blank for no restriction. Note that you may still assign an activity to a contact who is not in the group, but they will not receive an email.'),
    'html_type' => 'select',
    'html_attributes' => [
      'multiple' => 1,
      'class' => 'huge crm-select2',
    ],
    'pseudoconstant' => [
      'table' => 'civicrm_group',
      'keyColumn' => 'id',
      'labelColumn' => 'title',
    ],
    'quick_form_type' => 'Select',
    'settings_pages' => ['display' => ['weight' => -1]],
  ],
  'restrict_email_recipient_website_users' => [
    'group_name' => 'CiviCRM Preferences',
    'group' => 'core',
    'name' => 'restrict_email_recipient_website_users',
    'type' => 'Boolean',
    'html_type' => 'checkbox',
    'default' => TRUE,
    'title' => ts('Restrict email recipients to Website Users'),
    'description' => ts('Limit which contacts will receive a CiviCRM activity notification email to only be those who have a CMS user when an activity is assigned to them. Note that you may still assign an activity to a contact who does not have a CMS user, but they will not receive an email.'),
    'is_domain' => 1,
    'is_contact' => 0,
    'settings_pages' => ['display' => ['weight' => -1]],
  ],
];
