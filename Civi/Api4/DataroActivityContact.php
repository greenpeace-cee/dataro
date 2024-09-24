<?php

namespace Civi\Api4;

use Civi\Api4\Generic\AbstractEntity;

/**
 * DataroActivityContact is essentially a wrapper for ActivityContact. This
 * is needed as a workaround because SearchKit won't let us use bridge entities
 * as the base entity for a search.
 */
class DataroActivityContact extends AbstractEntity {

  public static function getFields($checkPermissions = TRUE): Generic\DAOGetFieldsAction {
    return (new Generic\DAOGetFieldsAction('ActivityContact', __FUNCTION__))
      ->setCheckPermissions($checkPermissions);
  }

  public static function get($checkPermissions = TRUE): Generic\DAOGetAction {
    return (new Generic\DAOGetAction('ActivityContact', __FUNCTION__))
      ->setCheckPermissions($checkPermissions);
  }

  public static function getActions($checkPermissions = TRUE): Action\GetActions {
    return (new Action\GetActions('ActivityContact', __FUNCTION__))
      ->setCheckPermissions(FALSE);
  }

  public static function checkAccess(): Generic\CheckAccessAction {
    return new Generic\CheckAccessAction('ActivityContact', __FUNCTION__);
  }

  public static function permissions(): array {
    return [
      'meta' => ['administer CiviCRM'],
      'default' => ['administer CiviCRM'],
    ];
  }

}
