<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 09/04/18
   * @time  : 08:26
   */

  namespace App\Entity;

  use App\Extension\Doctrine\ArrayCollection;
  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class Company
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="company")
   * @ORM\Entity
   */
  class Company extends Entity
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
     * @ORM\Column(name="com_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="com_name", type="string")
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="com_long_name", type="string")
     */
    private $longName;

    /**
     * @var string
     *
     * @ORM\Column(name="com_url", type="string")
     */
    private $url;

    /**
     * @var string
     *
     * @ORM\Column(name="com_logo", type="text", nullable=true)
     */
    private $logo;

    /**
     * @var Work[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="Work", mappedBy="company", cascade={"persist"})
     */
    private $works;

    #endregion


    #region magic methods

    /**
     * @return string
     */
    public function __toString()
    : string
    {
      return $this->getLongName();
    }

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
     * @return $this
     */
    public function setName(string $name)
    {
      $this->name = $name;
      return $this;
    }

    /**
     * @return string
     */
    public function getLongName()
    : string
    {
      return $this->longName;
    }

    /**
     * @param string $longName
     * @return $this
     */
    public function setLongName(string $longName)
    {
      $this->longName = $longName;
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
     */
    public function setUrl(string $url)
    {
      $this->url = $url;
    }

    /**
     * @return string|null
     */
    public function getLogo()
    {
      return $this->logo;
    }

    /**
     * @param string $logo
     */
    public function setLogo(string $logo)
    {
      $this->logo = $logo;
    }

    /**
     * @return Work[]|ArrayCollection
     */
    public function getWorks()
    : ArrayCollection
    {
      return new ArrayCollection($this->works->getValues());
    }

    /**
     * @return Work[]|ArrayCollection
     */
    public function getWorksSorted()
    : ArrayCollection
    {
      return $this->getWorks()->usort(function(Work $w1, Work $w2) {
        return $w1->getFrom() < $w2->getFrom();
      });
    }

    /**
     * @param Work $work
     * @return $this
     */
    public function addWork(Work $work)
    {
      $work->setCompany($this);
      $this->works->add($work);
      return $this;
    }

    /**
     * @param Work $work
     * @return $this
     */
    public function removeWork(Work $work)
    {
      $this->getWorks()->remove($work);
      return $this;
    }

    #endregion


    #region public methods

    /**
     * @return \DateTime
     */
    public function getFrom()
    {
      return array_shift($this->getWorksSorted())->getFrom();
    }

    /**
     * @return \DateTime
     */
    public function getTo()
    {
      return array_pop($this->getWorksSorted())->getTo();
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }