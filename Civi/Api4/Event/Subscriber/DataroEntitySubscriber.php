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
   * @return array
   */
  public static function getSubscribedEvents() {
    return [
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
