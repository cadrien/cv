<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 29/05/18
   * @time  : 17:53
   */

  namespace App\Entity\Subscriber;


  use App\Entity\Infos\InfoSocialNetwork;
  use Doctrine\Common\Persistence\Event\LifecycleEventArgs;

  class InfoSocialNetworkSubscriber extends BaseSubscriber
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
      /** @var InfoSocialNetwork $entity */
      if(( $entity = $args->getObject() ) instanceof InfoSocialNetwork)
      {
        $tab = unserialize($entity->getValue());
        $entity->setLogo($tab['logo'] ?? null);
        $entity->setUrl($tab['url'] ?? null);
        $entity->setName($tab['name'] ?? null);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function prePersist(LifecycleEventArgs $args)
    {
      /** @var InfoSocialNetwork $entity */
      if(( $entity = $args->getObject() ) instanceof InfoSocialNetwork)
      {
        $this->serializeData($entity);
      }
    }

    /**
     * @param LifecycleEventArgs $args
     */
    public function preUpdate(LifecycleEventArgs $args)
    {
      /** @var InfoSocialNetwork $entity */
      if(( $entity = $args->getObject() ) instanceof InfoSocialNetwork)
      {
        $this->serializeData($entity);
      }
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods

    /**
     * @param InfoSocialNetwork $entity
     */
    private function serializeData(InfoSocialNetwork $entity)
    {
      $entity->setValue(serialize([
                                    'logo' => $entity->getLogo(),
                                    'url'  => $entity->getUrl(),
                                    'name' => $entity->getName()
                                  ]));
    }

    #endregion
  }