<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:04
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class Formation
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="formation")
   * @ORM\Entity
   */
  class Formation extends Entity
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
     * @ORM\Column(name="frm_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var School
     *
     * @ORM\ManyToOne(targetEntity="School")
     * @ORM\JoinColumn(name="sch_id", referencedColumnName="sch_id", nullable=false)
     */
    private $school;

    /**
     * @var string
     *
     * @ORM\Column(name="frm_degree", type="string")
     */
    private $degree;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="frm_from", type="date")
     */
    private $from;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="frm_to", type="date", nullable=true)
     */
    private $to;

    /**
     * @var string|null
     *
     * @ORM\Column(name="frm_url", type="string", nullable=true)
     */
    private $url;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters
    #endregion


    #region public methods

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    : int
    {
      return $this->id;
    }

    /**
     * @return School
     */
    public function getSchool()
    : School
    {
      return $this->school;
    }

    /**
     * @param School $school
     */
    public function setSchool(School $school)
    {
      $this->school = $school;
    }

    /**
     * @return string
     */
    public function getDegree()
    : string
    {
      return $this->degree;
    }

    /**
     * @param string $degree
     */
    public function setDegree(string $degree)
    {
      $this->degree = $degree;
    }

    /**
     * @return \DateTime
     */
    public function getFrom()
    : \DateTime
    {
      return $this->from;
    }

    /**
     * @param \DateTime $from
     */
    public function setFrom(\DateTime $from)
    {
      $this->from = $from;
    }

    /**
     * @return \DateTime|null
     */
    public function getTo()
    {
      return $this->to;
    }

    /**
     * @param \DateTime|null $to
     */
    public function setTo(\DateTime $to = null)
    {
      $this->to = $to;
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
     */
    public function setUrl(string $url)
    {
      $this->url = $url;
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }