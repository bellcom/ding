<?php

/**
 * Implementation of hook_user_default_roles().
 */
function ding_default_permissions_user_default_roles() {
  $roles = array();

  // Exported role: author
  $roles['author'] = array(
    'name' => 'author',
  );

  // Exported role: editor
  $roles['editor'] = array(
    'name' => 'editor',
  );

  return $roles;
}
