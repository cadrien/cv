<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:16
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class CategoryCompetence
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class CategoryPersonal extends Category
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /**
     * @var Personal[]
     *
     * @ORM\OneToMany(targetEntity="Personal", mappedBy="category")
     */
    private $personals;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    /**
     * @return Personal[]
     */
    public function getPersonals()
    {
      return $this->personals;
    }

    /**
     * @param Personal[] $personals
     */
    public function setPersonals(array $personals)
    {
      $this->personals = $personals;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }