<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 11:28
   */

  namespace App\Entity\Infos;


  use Doctrine\ORM\Mapping as ORM;
  use App\Entity\Info;

  /**
   * Class InfoSocialNetwork
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class InfoSocialNetwork extends Info
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /** @var string */
    private $logo;

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

    /**
     * @return string
     */
    public function getLogo()
    : string
    {
      return $this->logo;
    }

    /**
     * @param string $logo
     * @return InfoSocialNetwork
     */
    public function setLogo(string $logo)
    : InfoSocialNetwork
    {
      $this->logo = $logo;
      return $this;
    }

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
     * @return InfoSocialNetwork
     */
    public function setUrl(string $url)
    : InfoSocialNetwork
    {
      $this->url = $url;
      return $this;
    }

    /**
     * @return string
     */
    public function getName()
    : string
    {
      return $this->name;
    }

    /**
     * @param string $name
     * @return InfoSocialNetwork
     */
    public function setName(string $name)
    : InfoSocialNetwork
    {
      $this->name = $name;
      return $this;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }