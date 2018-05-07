<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 09/04/18
   * @time  : 08:22
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;
  use App\Extension\Doctrine\ArrayCollection;

  /**
   * Class Work
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="work")
   * @ORM\Entity
   */
  class Work extends Entity
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
     * @ORM\Column(name="wor_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="wor_from", type="date")
     */
    private $from;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="wor_to", type="date", nullable=true)
     */
    private $to;

    /**
     * @var string
     *
     * @ORM\Column(name="wor_job_name", type="string")
     */
    private $jobName;

    /**
     * @var Company
     *
     * @ORM\ManyToOne(targetEntity="Company", inversedBy="works")
     * @ORM\JoinColumn(name="com_id", referencedColumnName="com_id", nullable=false)
     */
    private $company;

    /**
     * @var WorkLine[]|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="WorkLine", mappedBy="work")
     */
    private $workLines;

    /**
     * @var null|\DateInterval
     */
    private $duration = null;

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
     * @return $this
     */
    public function setTo(\DateTime $to = null)
    {
      $this->to = $to;
      return $this;
    }

    /**
     * @return string
     */
    public function getJobName()
    : string
    {
      return $this->jobName;
    }

    /**
     * @param string $jobName
     */
    public function setJobName(string $jobName)
    {
      $this->jobName = $jobName;
    }

    /**
     * @return Company
     */
    public function getCompany()
    : Company
    {
      return $this->company;
    }

    /**
     * @param Company $company
     */
    public function setCompany(Company $company)
    {
      $this->company = $company;
    }

    /**
     * @return WorkLine[]|ArrayCollection
     */
    public function getWorkLines()
    : ArrayCollection
    {
      return new ArrayCollection($this->workLines->toArray());
    }

    /**
     * @param WorkLine $workLine
     * @return $this
     */
    public function addWorkLine(WorkLine $workLine)
    {
      $workLine->setWork($this);
      $this->workLines->add($workLine);
      return $this;
    }

    /**
     * @param WorkLine $workLine
     * @return $this
     */
    public function removeWorkLine(WorkLine $workLine)
    {
      $this->workLines->removeElement($workLine);
      return $this;
    }

    /**
     * @return WorkLine[]|ArrayCollection
     */
    public function getWorkLinesFirstLevel()
    : ArrayCollection
    {
      return $this->getWorkLines()->filter(function(WorkLine $workLine) {
        return $workLine->getParent() === null;
      });
    }

    /**
     * @return bool|\DateInterval
     */
    public function getDuration()
    {
      if($this->duration === null)
        $this->duration = ( $this->to === null ? new \DateTime() : $this->to )->diff($this->from);
      return $this->duration;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }