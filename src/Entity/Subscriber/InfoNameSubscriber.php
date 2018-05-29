<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 28/05/18
   * @time  : 19:55
   */

  namespace App\Entity\Subscriber;


  use App\Entity\Infos\InfoName;
  use Doctrine\Common\EventSubscriber;
  use Doctrine\Common\Persistence\Event\LifecycleEventArgs;
  use Symfony\Component\DependencyInjection\ContainerInterface;

  class InfoNameSubscriber implements EventSubscriber
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /** @var ContainerInterface */
    private $container;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters
    #endregion


    #region public methods

    public function getSubscribedEvents()
    {
      return [
        'postLoad',
        'prePersist'
      ];
    }

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

    public function prePersist(LifecycleEventArgs $args)
    {
      /** @var InfoName $entity */
      if(( $entity = $args->getObject() ) instanceof InfoName)
      {
        $entity->setValue(serialize([
                                      'gender'    => $entity->getGender(),
                                      'firstname' => $entity->getFirstname(),
                                      'lastname'  => $entity->getLastname()
                                    ]));
      }
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }