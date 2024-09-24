<?php
namespace Civi\Api4\Event\Subscriber;

use Civi\API\Events;
use Civi\Api4\DataroActivityContact;
use Civi\Api4\SKEntity;
use Civi\Core\Event\GenericHookEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

/**
 * @service civi.api4.dataroEntity
 */
class DataroEntitySubscriber extends \Civi\Core\Service\AutoService implements EventSubscriberInterface {

  /**
   * Register SearchDisplays of type 'entity'
   *
   * @param \Civi\Core\Event\GenericHookEvent $event
   */
  public static function onApiEntityTypes(GenericHookEvent $event): void {
    $event->entities['DataroActivityContact'] = [
      'name' => 'DataroActivityContact',
      'title' => 'Dataro Activity Contact',
      'title_plural' => 'Dataro Activity Contacts',
      'description' => NULL,
      'primary_key' => ['id'],
      'type' => ['DAOEntity'],
      'label_field' => NULL,
      'searchable' => 'secondary',
      'class' => DataroActivityContact::class,
      'icon' => 'fa-search-plus',
    ];
  }

  /**
   * @return array
   */
  public static function getSubscribedEvents() {
    return [
      'civi.api4.entityTypes' => 'onApiEntityTypes',
      'civi.api.authorize' => [
        ['onApiAuthorize', 100],
      ],
    ];
  }

  /**
   * @param \Civi\API\Event\AuthorizeEvent $event
   *   API authorization event.
   */
  public function onApiAuthorize(\Civi\API\Event\AuthorizeEvent $event) {
    /** @var \Civi\Api4\Generic\AbstractAction $apiRequest */
    $apiRequest = $event->getApiRequest();
    if ($apiRequest['version'] == 4) {
      if (preg_match('/^(SK_Dataro.*|Entity)$/', $apiRequest->getEntityName()) && in_array($apiRequest->getActionName(), ['get', 'getActions'])) {
        if (\CRM_Core_Permission::check('access dataro entities')) {
          $event->authorize();
          $event->stopPropagation();
        }
      }
    }
  }

}
