<?php
// policy.drush.inc
/**
 * Implementation of drush_hook_COMMAND_validate().
 */
function drush_policy_sql_sync_validate($source = NULL, $destination = NULL) {
  // Never overwrite the production database
  if($destination == '@gpiiprod' || $destination == '@devspaceprod' || $destination == '@saaprod') {
   return drush_set_error(dt('Per policy.drush.inc, you almost overwrote the production database! Careful!'));
  }
  // Only allow production to override the staging database.
  if(($destination == '@gpiistaging' && $source != '@gpiiprod') || ($destination == '@devspacestaging' && $source != '@devspaceprod') || ($destination == '@saastaging' && $source != '@saaprod')) {
   return drush_set_error(dt('Per policy.drush.inc, you can only update staging from production.'));
  }
}

// @TODO : rsync policy
// @TODO : site-sync policy - local only
