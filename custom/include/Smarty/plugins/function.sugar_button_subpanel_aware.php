<?php

// Based on sugar_button function: include/Smarty/plugins/function.sugar_button.php
// Only difference this expects extra subpanel parameter it then uses to build 

require_once 'include/Smarty/plugins/function.sugar_button.php';
function smarty_function_sugar_button_subpanel_aware($params, &$smarty)
{
   $js_form = (empty($params['form_id'])) ? "var _form = (this.form) ? this.form : document.forms[0];" : "var _form = document.getElementById('{$params['form_id']}');";

   $type = $params['id'];
   $location = (empty($params['location'])) ? "" : "_".$params['location'];

   if(!is_array($type)) {
   	  $module = $params['module'];
   	  $view = $params['view'];
          $subpanelName = $params['subpanel'];

          if (strtoupper($type) !== 'SUBPANELSAVE') {
              return smarty_function_sugar_button($params, $smarty);
          }
   	  if(strtoupper($type) === 'SUBPANELSAVE') {
                if($view == 'QuickCreate' || (isset($_REQUEST['target_action']) && strtolower($_REQUEST['target_action']) == 'quickcreate')) {
                    if ($params['form_id']) {
                        $view = $params['form_id'];
                    }
                }

                $output = '{if $bean->aclAccess("save")}<input title="{$APP.LBL_SAVE_BUTTON_TITLE}"  class="button" onclick="'.$js_form.' disableOnUnloadEditView(); _form.action.value=\'Save\';if(check_form(\''.$view.'\'))return SUGAR.subpanelUtils.inlineSave(_form.id, \'' . $params['module'] . '_subpanel_save_button\');return false;" type="submit" name="' . $params['module'] . '_subpanel_save_button" id="' . $params['module'] . '_subpanel_save_button" value="{$APP.LBL_SAVE_BUTTON_LABEL}">{/if} ';

   	  }
      if(isset($params['appendTo'])) {
          $smarty->append($params['appendTo'], $output);
          return;
      }
      return $output;
   }

   return smarty_function_sugar_button($params, $smarty);
}

