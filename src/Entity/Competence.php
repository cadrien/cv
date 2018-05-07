<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:13
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class Competence
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="competence")
   * @ORM\Entity
   */
  class Competence extends Entity
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /**
     * @var int
     *
     * @ORM\Column(name="cpt_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="cpt_name", type="string")
     */
    private $name;

    /**
     * @var int|null
     *
     * @ORM\Column(name="cpt_level", type="smallint", nullable=true)
     */
    private $level;

    /**
     * @var Category
     *
     * @ORM\ManyToOne(targetEntity="CategoryCompetence", inversedBy="competences")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id", nullable=false)
     */
    private $category;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
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

    /**
     * @return int|null
     */
    public function getLevel()
    {
      return $this->level;
    }

    /**
     * @param int $level
     */
    public function setLevel(int $level)
    {
      $this->level = $level;
    }

    /**
     * @return Category
     */
    public function getCategory()
    : Category
    {
      return $this->category;
    }

    /**
     * @param Category $category
     */
    public function setCategory(Category $category)
    {
      $this->category = $category;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }