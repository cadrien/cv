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
   * Class Category
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="category")
   * @ORM\Entity
   * @ORM\InheritanceType("SINGLE_TABLE")
   * @ORM\DiscriminatorColumn(name="cat_code", type="string")
   * @ORM\DiscriminatorMap({
   *      Category::CODE_COMPETENCE   = "App\Entity\CategoryCompetence",
   *      Category::CODE_PERSONAL     = "App\Entity\CategoryPersonal"
   * })
   */
  abstract class Category extends Entity
  {
    #region const

    const CODE_COMPETENCE = 'competence';
    const CODE_PERSONAL   = 'personal';

    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /**
     * @var int
     *
     * @ORM\Column(name="cat_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cat_name", type="string")
     */
    private $name;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    /**
     * @return int
     */
    public function getId()
    : int
    {
      return $this->id;
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
     */
    public function setName(string $name)
    {
      $this->name = $name;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }