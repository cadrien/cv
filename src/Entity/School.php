<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:06
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class School
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="school")
   * @ORM\Entity
   */
  class School extends Entity
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
     * @ORM\Column(name="sch_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="sch_name", type="string")
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sch_logo", type="text", nullable=true)
     */
    private $logo;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    /**
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
     * @return string|null
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param string|null $logo
     */
    public function setLogo(string $logo = null)
    {
      $this->logo = $logo;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }