<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 11:27
   */

  namespace App\Entity\Infos;


  use Doctrine\ORM\Mapping as ORM;
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

    /** @var string */
    private $url;

    /** @var string */
    private $name;

    #endregion


    #region magic methods

    public function __toString()
    {
      return $this->getName();
    }

    #endregion


    #region getters/setters
    #endregion


    #region public methods

    /**
     * @return string
     */
    public function getUrl()
    : string
    {
      return $this->url;
    }

    /**
     * @param string $url
     * @return InfoAddress
     */
    public function setUrl(string $url)
    : InfoAddress
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return InfoAddress
     */
    public function setName(string $name)
    : InfoAddress
    {
      $this->name = $name;
      return $this;
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }