<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 29/05/18
   * @time  : 08:18
   */

  namespace App\Entity\Subscriber;


  use Doctrine\Common\EventSubscriber;

  abstract class BaseSubscriber implements EventSubscriber
  {
    #region const

    const EVENT_POST_LOAD   = 'postLoad';
    const EVENT_PRE_PERSIST = 'prePersist';
    const EVENT_PRE_UPDATE  = 'preUpdate';

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
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }