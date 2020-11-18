<?php

require_once 'contactreferencetoken.civix.php';
// phpcs:disable
use CRM_Contactreferencetoken_ExtensionUtil as E;
// phpcs:enable

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function contactreferencetoken_civicrm_config(&$config) {
  _contactreferencetoken_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_xmlMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_xmlMenu
 */
function contactreferencetoken_civicrm_xmlMenu(&$files) {
  _contactreferencetoken_civix_civicrm_xmlMenu($files);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function contactreferencetoken_civicrm_install() {
  _contactreferencetoken_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_postInstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_postInstall
 */
function contactreferencetoken_civicrm_postInstall() {
  _contactreferencetoken_civix_civicrm_postInstall();
}

/**
 * Implements hook_civicrm_uninstall().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_uninstall
 */
function contactreferencetoken_civicrm_uninstall() {
  _contactreferencetoken_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function contactreferencetoken_civicrm_enable() {
  _contactreferencetoken_civix_civicrm_enable();
}

/**
 * Implements hook_civicrm_disable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_disable
 */
function contactreferencetoken_civicrm_disable() {
  _contactreferencetoken_civix_civicrm_disable();
}

/**
 * Implements hook_civicrm_upgrade().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_upgrade
 */
function contactreferencetoken_civicrm_upgrade($op, CRM_Queue_Queue $queue = NULL) {
  return _contactreferencetoken_civix_civicrm_upgrade($op, $queue);
}

/**
 * Implements hook_civicrm_managed().
 *
 * Generate a list of entities to create/deactivate/delete when this module
 * is installed, disabled, uninstalled.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_managed
 */
function contactreferencetoken_civicrm_managed(&$entities) {
  _contactreferencetoken_civix_civicrm_managed($entities);
}

/**
 * Implements hook_civicrm_caseTypes().
 *
 * Generate a list of case-types.
 *
 * Note: This hook only runs in CiviCRM 4.4+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_caseTypes
 */
function contactreferencetoken_civicrm_caseTypes(&$caseTypes) {
  _contactreferencetoken_civix_civicrm_caseTypes($caseTypes);
}

/**
 * Implements hook_civicrm_angularModules().
 *
 * Generate a list of Angular modules.
 *
 * Note: This hook only runs in CiviCRM 4.5+. It may
 * use features only available in v4.6+.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_angularModules
 */
function contactreferencetoken_civicrm_angularModules(&$angularModules) {
  _contactreferencetoken_civix_civicrm_angularModules($angularModules);
}

/**
 * Implements hook_civicrm_alterSettingsFolders().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_alterSettingsFolders
 */
function contactreferencetoken_civicrm_alterSettingsFolders(&$metaDataFolders = NULL) {
  _contactreferencetoken_civix_civicrm_alterSettingsFolders($metaDataFolders);
}

/**
 * Implements hook_civicrm_entityTypes().
 *
 * Declare entity types provided by this module.
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_entityTypes
 */
function contactreferencetoken_civicrm_entityTypes(&$entityTypes) {
  _contactreferencetoken_civix_civicrm_entityTypes($entityTypes);
}

/**
 * Implements hook_civicrm_thems().
 */
function contactreferencetoken_civicrm_themes(&$themes) {
  _contactreferencetoken_civix_civicrm_themes($themes);
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function contactreferencetoken_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function contactreferencetoken_civicrm_navigationMenu(&$menu) {
//  _contactreferencetoken_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _contactreferencetoken_civix_navigationMenu($menu);
//}

/**
 * Implementation of hook_civicrm_tokens
 */

function contactreferencetoken_civicrm_tokens( &$tokens ) {
  $tokens['contactreference'] = array( 'contactreference.email' );
}


function contactreferencetoken_civicrm_tokenValues(&$values, $cids, $job = null, $tokens = [], $context = null) {
  $group = 'contactreference';
  if(isset($tokens[$group])) {
    $token = 'email';
    if (!customtokens_isTokenRequested($tokens, $group, $token)) {
      return;
    }

    foreach ($cids as $cid) {
      // get team (employer) id
      $result = civicrm_api3('Contact', 'getsingle', [
        'return' => ["custom_38"],
        'id' => 2,
      ]);

      // {
      //  "contact_id": "2",
      //  "civicrm_value_aecea_21_id": "1",
      //  "custom_38": "8",
      //  "id": "2",
      //  "is_error": 0
      // }

      // if there is a team (employer) id, get team number for the team (employer)
      if(!$result['is_error'] && isset($result['custom_38']) && strlen($result['custom_38'])){

        $resultEmail = civicrm_api3('Email', 'get', [
          'sequential' => 1,
          'return' => ["email"],
          'contact_id' => $result['custom_38'],
          'is_primary' => 1,
        ]);

        // if there is a team number, display it as the token
        if(!$resultEmail['is_error'] && isset($resultEmail['email'])) {
          $values[$cid]['contactreference.email'] = $resultEmail['email'];
        }
      }
    }
  }
}

/**
 * "Send an Email" and "CiviMail" send different parameters to the tokenValues hook (in CiviCRM 5.x).
 * This works around that.
 *
 * @param array $tokens
 * @param string $group
 * @param string $token
 *
 * @return bool
 */
function customtokens_isTokenRequested($tokens, $group, $token) {
  // CiviMail sets $tokens to the format:
  //   [ 'group' => [ 'token_name' => 1 ] ]
  // "Send an email" sets $tokens to the format:
  //  [ 'group' => [ 0 => 'token_name' ] ]
  if (array_key_exists($token, $tokens[$group]) || in_array($token, $tokens[$group])) {
    return TRUE;
  }
  return FALSE;
}

  // Example from Lobo: https://civicrm.org/node/480
  // if ( is_array( $contactIDs ) ) {
  //   $contactIDString = implode( ',', array_values( $contactIDs ) );
  //   $single = false;
  //  } else {
  //    $contactIDString = "( $contactIDs )";
  //    $single = true;
  //  }

  // require_once 'CRM/Core/BAO/CustomField.php';
  // $groupTitle = 'Contact Reference';
  // $fieldLabel = 'Contact Reference';
  // $customFieldID = CRM_Core_BAO_CustomField::getCustomFieldID( $fieldLabel, $groupTitle );

  // require_once 'CRM/Core/BAO/CustomValueTable.php';

  // $custom_id = 'custom_' . $customFieldID;
  // $params = array('entityID' => $contactID, $custom_id => 1);
  // $values = CRM_Core_BAO_CustomValueTable::getValues($params);
  // $contactreference[] = $values[$custom_id];

  // $email = 'karin@astridge.ca';

  // $value['contactreference.email'] = $email;

  // $home_email='';
  // $params = array('contact_id' => $dao->contact_id, 'location_type_id' => 1, 'version' => 3);
  // $result_homeemail = civicrm_api( 'email','get', $params );
  // if ( $result_homeemail['is_error'] == 0) {
  //   if (isset($result_homeemail['id'])) {
  //     $id = $result_homeemail['id'];
  //     $home_email= $result_homeemail['values'][$id]['email'];
  //  }
  // }
  // $value['contact.homeemail'] = $home_email;

  // KG
  // ran into issue with activity API - so my own MYSQL query
  // $contact_id = $dao->contact_id;
  // $sql = "SELECT subject FROM civicrm_activity act
  // INNER JOIN civicrm_activity_contact con ON act.id = con.activity_id
  // WHERE contact_id = $contact_id
  // AND (subject IN ('ORTHO','FPP','RFP','RPP'))";
  //
  //  $dao2 = CRM_Core_DAO::executeQuery($sql);
  //  while ( $dao2->fetch( ) ) {
  //    $result_activity_skills[] = $dao2->subject;
  //  }
  //
  //  $value['contact.activityskills'] =  implode(', ', $result_activity_skills);

