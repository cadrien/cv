<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 28/05/18
   * @time  : 19:55
   */

  namespace App\Entity\Subscriber;


  use App\Entity\Infos\InfoName;
  use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

  class InfoNameSubscriber extends BaseSubscriber
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

    /**
     * @return array
     */
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
      /** @var InfoName $entity */
      if(( $entity = $args->getObject() ) instanceof InfoName)
      {
        $tab = unserialize($entity->getValue());
        $entity->setGender($tab['gender'] ?? null);
        $entity->setFirstname($tab['firstname'] ?? null);
        $entity->setLastname($tab['lastname'] ?? null);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
      /** @var InfoName $entity */
      if(( $entity = $args->getObject() ) instanceof InfoName)
      {
        $this->serializeData($entity);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
      /** @var InfoName $entity */
      if(( $entity = $args->getObject() ) instanceof InfoName)
      {
        $this->serializeData($entity);
      }
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods

    /**
     * @param InfoName $entity
     */
    private function serializeData(InfoName $entity)
    {
      $entity->setValue(serialize([
                                    'gender'    => $entity->getGender(),
                                    'firstname' => $entity->getFirstname(),
                                    'lastname'  => $entity->getLastname()
                                  ]));
    }
    #endregion
  }