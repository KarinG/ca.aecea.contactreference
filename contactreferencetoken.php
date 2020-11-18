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

    drupal_set_message(print_r('here one', TRUE));

    foreach ($cids as $cid) {
      // get team (employer) id
      $result = civicrm_api3('Contact', 'getsingle', [
        'return' => ["custom_49"],
        'id' => 2,
      ]);

      // {
      //  "contact_id": "2",
      //  "civicrm_value_aecea_21_id": "1",
      //  "custom_38": "8",
      //  "id": "2",
      //  "is_error": 0
      // }

      drupal_set_message(print_r($result['custom_49'], TRUE)); // 188 -> which is Justin's contact ID - ok this looks good.

      if(!$result['is_error'] && isset($result['custom_49']) && strlen($result['custom_49'])){

        drupal_set_message(print_r('here two', TRUE));

        $resultEmail = civicrm_api3('Email', 'getsingle', [
          'return' => ["email"],
          'contact_id' => $result['custom_49'],
          'is_primary' => 1,
        ]);
 	
        drupal_set_message(print_r($resultEmail, TRUE));     
        drupal_set_message(print_r($resultEmail['email'], TRUE));

        drupal_set_message(print_r('here three - xyz', TRUE));

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
