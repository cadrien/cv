<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:10
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;


  /**
   * Class CategoryCompetence
   * @package AppBundle\Entity
   *
   * @ORM\Entity
   */
  class CategoryCompetence extends Category
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /**
     * @var Competence[]
     *
     * @ORM\OneToMany(targetEntity="Competence", mappedBy="category")
     */
    private $competences;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    /**
     * @return Competence[]
     */
    public function getCompetences()
    {
      return $this->competences;
    }

    /**
     * @param Competence[] $competences
     */
    public function setCompetences(array $competences)
    {
      $this->competences = $competences;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }