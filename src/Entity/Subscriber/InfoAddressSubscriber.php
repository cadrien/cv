<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 29/05/18
   * @time  : 08:13
   */

  namespace App\Entity\Subscriber;


  use App\Entity\Infos\InfoAddress;
  use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

  class InfoAddressSubscriber extends BaseSubscriber
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
      /** @var InfoAddress $entity */
      if(( $entity = $args->getObject() ) instanceof InfoAddress)
      {
        $tab = unserialize($entity->getValue());
        $entity->setUrl($tab['url'] ?? null);
        $entity->setName($tab['name'] ?? null);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
      /** @var InfoAddress $entity */
      if(( $entity = $args->getObject() ) instanceof InfoAddress)
      {
        $this->serializeData($entity);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
      /** @var InfoAddress $entity */
      if(( $entity = $args->getObject() ) instanceof InfoAddress)
      {
        $this->serializeData($entity);
      }
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods

    /**
     * @param InfoAddress $entity
     */
    private function serializeData(InfoAddress $entity)
    {
      $entity->setValue(serialize([
                                    'url'  => $entity->getUrl(),
                                    'name' => $entity->getName()
                                  ]));
    }

    #endregion
  }