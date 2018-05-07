<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:14
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class Personal
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="personal")
   * @ORM\Entity
   */
  class Personal extends Entity
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
     * @ORM\Column(name="prs_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prs_name", type="string")
     */
    private $name;

    /**
     * @var CategoryPersonal
     *
     * @ORM\ManyToOne(targetEntity="CategoryPersonal", inversedBy="personals")
     * @ORM\JoinColumn(name="cat_id", referencedColumnName="cat_id", nullable=false)
     */
    private $category;

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

    /**
     * @return CategoryPersonal
     */
    public function getCategory()
    {
      return $this->category;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }