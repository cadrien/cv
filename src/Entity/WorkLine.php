<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 09/04/18
   * @time  : 08:27
   */

  namespace App\Entity;

  use App\Extension\Doctrine\ArrayCollection;
  use Doctrine\ORM\Mapping as ORM;
  use Doctrine\ORM\PersistentCollection;


  /**
   * Class Work
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="work_line")
   * @ORM\Entity
   */
  class WorkLine extends Entity
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
     * @ORM\Column(name="wol_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var Work
     *
     * @ORM\ManyToOne(targetEntity="Work")
     * @ORM\JoinColumn(name="wor_id", referencedColumnName="wor_id", nullable=false)
     */
    private $work;

    /**
     * @var string
     *
     * @ORM\Column(name="wor_label", type="string")
     */
    private $label;

    /**
     * @var WorkLine|null
     *
     * @ORM\ManyToOne(targetEntity="WorkLine")
     * @ORM\JoinColumn(name="wol_id_parent", referencedColumnName="wol_id", nullable=true)
     */
    private $parent;

    /**
     * @var WorkLine[]|PersistentCollection|ArrayCollection
     *
     * @ORM\OneToMany(targetEntity="WorkLine", mappedBy="parent")
     */
    private $workLines;

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
     * @return Work
     */
    public function getWork()
    : Work
    {
      return $this->work;
    }

    /**
     * @param Work $work
     */
    public function setWork(Work $work)
    {
      $this->work = $work;
    }

    /**
     * @return string
     */
    public function getLabel()
    : string
    {
      return $this->label;
    }

    /**
     * @param string $label
     */
    public function setLabel(string $label)
    {
      $this->label = $label;
    }

    /**
     * @return WorkLine|null
     */
    public function getParent()
    {
      return $this->parent;
    }

    /**
     * @param WorkLine|null $parent
     */
    public function setParent(WorkLine $parent = null)
    {
      $this->parent = $parent;
    }

    /**
     * @return WorkLine[]
     */
    public function getWorkLines()
    : array
    {
      return $this->workLines->toArray();
    }

    /**
     * @param WorkLine $workLine
     * @return $this
     */
    public function addWorkLine(WorkLine $workLine)
    {
      $workLine->setWork($this->getWork());
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

    #endregion


    #region public methods
    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }