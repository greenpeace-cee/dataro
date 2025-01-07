<?php
namespace Civi\Api4;

/**
 * DataroProperty entity.
 *
 * Provided by the Dataro Connector extension.
 *
 * @package Civi\Api4
 */
class DataroProperty extends Generic\DAOEntity {
  public static function permissions(): array {
    return [
      'default' => ['access dataro scores'],
    ];
  }

}
