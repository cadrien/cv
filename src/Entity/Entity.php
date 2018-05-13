<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 09/04/18
   * @time  : 08:21
   */

  namespace App\Entity;

  abstract class Entity
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

    /**
     * @return string
     * @throws \Exception
     */
    public function __toString()
    {
      if (!method_exists($this, 'getName'))
        throw new \Exception('__toString method does not exist for ' . get_class($this) . ' object');
      return $this->getName();
    }

    #endregion


    #region getters/setters

    abstract public function getId();

    public final function setId() { }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }