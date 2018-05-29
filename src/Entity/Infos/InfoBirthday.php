<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 11:21
   */

  namespace App\Entity\Infos;


  use Doctrine\ORM\Mapping as ORM;
  use App\Entity\Info;

  /**
   * Class InfoBirthday
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class InfoBirthday extends Info
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /** @var \DateTime */
    private $date;

    /** @var string */
    private $name;

    #endregion


    #region magic methods

    /**
     * @return string
     */
    public function __toString()
    {
      return $this->getName();
    }

    #endregion


    #region getters/setters

    /**
     * @return \DateTime
     */
    public function getDate()
    {
      return $this->date;
    }

    /**
     * @param \DateTime $date
     * @return InfoBirthday
     */
    public function setDate(\DateTime $date)
    : InfoBirthday
    {
      $this->date = $date;
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
     * @return InfoBirthday
     */
    public function setName($name)
    : InfoBirthday
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