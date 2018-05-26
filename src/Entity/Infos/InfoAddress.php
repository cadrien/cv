<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 11:27
   */

  namespace App\Entity\Infos;


  use App\Entity\Info;

  /**
   * Class InfoAddress
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class InfoAddress extends Info
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

    public function getAddress()
    {
      return $this->getValue();
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }