<?php
namespace Civi\Api4;

/**
 * DataroScore entity.
 *
 * Provided by the Dataro Connector extension.
 *
 * @package Civi\Api4
 */
class DataroScore extends Generic\DAOEntity {
  public static function permissions(): array {
    return [
      'default' => ['access dataro scores'],
    ];
  }
}
