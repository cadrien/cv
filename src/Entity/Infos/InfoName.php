<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 11:19
   */

  namespace App\Entity\Infos;


  use Doctrine\ORM\Mapping as ORM;
  use App\Entity\Info;

  /**
   * Class InfoName
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class InfoName extends Info
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /** @var string */
    private $gender;

    /** @var string */
    private $firstname;

    /** @var string */
    private $lastname;

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
    public function getGender()
    : string
    {
      return $this->gender;
    }

    /**
     * @param string $gender
     */
    public function setGender(string $gender)
    : void
    {
      $this->gender = $gender;
    }

    /**
     * @return string
     */
    public function getFirstname()
    : string
    {
      return $this->firstname;
    }

    /**
     * @param string $firstname
     */
    public function setFirstname(string $firstname)
    : void
    {
      $this->firstname = $firstname;
    }

    /**
     * @return string
     */
    public function getLastname()
    : string
    {
      return $this->lastname;
    }

    /**
     * @param string $lastname
     */
    public function setLastname(string $lastname)
    : void
    {
      $this->lastname = $lastname;
    }

    #endregion


    #region public methods

    /**
     * @return string
     */
    public function getName()
    {
      return implode(' ', [$this->getGender(), $this->getFirstname(), $this->getLastname()]);
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }