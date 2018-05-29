<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 29/05/18
   * @time  : 17:45
   */

  namespace App\Entity\Subscriber;


  use App\Entity\Infos\InfoBirthday;
  use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

  class InfoBirthdaySubscriber extends BaseSubscriber
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties
    #endregion


    #region magic methods
    #endregion


    #region getters/setters
    #endregion


    #region public methods

    public function getSubscribedEvents()
    {
      return [
        self::EVENT_POST_LOAD,
        self::EVENT_PRE_PERSIST,
        self::EVENT_PRE_UPDATE
      ];
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function postLoad(LifecycleEventArgs $args)
    {
      /** @var InfoBirthday $entity */
      if(( $entity = $args->getObject() ) instanceof InfoBirthday)
      {
        $tab = unserialize($entity->getValue());
        $entity->setDate($tab['date'] ? new \DateTime($tab['date']) : null);
        $entity->setName($tab['name'] ?? null);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
      /** @var InfoBirthday $entity */
      if(( $entity = $args->getObject() ) instanceof InfoBirthday)
      {
        $this->serializeData($entity);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
      /** @var InfoBirthday $entity */
      if(( $entity = $args->getObject() ) instanceof InfoBirthday)
      {
        $this->serializeData($entity);
      }
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods

    /**
     * @param InfoBirthday $entity
     */
    private function serializeData(InfoBirthday $entity)
    {
      $entity->setValue(serialize([
                                    'date' => $entity->getDate()->format('Y-m-d'),
                                    'name' => $entity->getName()
                                  ]));
    }

    #endregion
  }