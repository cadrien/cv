<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/05/18
   * @time  : 09:11
   */

  namespace App\Entity;

  use Doctrine\ORM\Mapping as ORM;

  /**
   * Class Info
   * @package AppBundle\Entity
   *
   * @ORM\Table(name="info")
   * @ORM\Entity
   * @ORM\InheritanceType("SINGLE_TABLE")
   * @ORM\DiscriminatorColumn(name="inf_type", type="string")
   * @ORM\DiscriminatorMap({
   *      Info::TYPE_GENDER         = "App\Entity\Infos\InfoGender",
   *      Info::TYPE_FIRSTNAME      = "App\Entity\Infos\InfoFirstname",
   *      Info::TYPE_LASTNAME       = "App\Entity\Infos\InfoLastname",
   *      Info::TYPE_BIRTHDAY       = "App\Entity\Infos\InfoBirthday",
   *      Info::TYPE_MAIL           = "App\Entity\Infos\InfoMail",
   *      Info::TYPE_ADDRESS        = "App\Entity\Infos\InfoAddress",
   *      Info::TYPE_SOCIAL_NETWORK = "App\Entity\Infos\InfoSocialNetwork",
   *      Info::TYPE_PHONE          = "App\Entity\Infos\InfoPhone",
   *      Info::TYPE_PHOTO          = "App\Entity\Infos\InfoPhoto"
   * })
   */
  abstract class Info extends Entity
  {
    #region const

    const TYPE_GENDER = 'gender';
    const TYPE_FIRSTNAME = 'firstname';
    const TYPE_LASTNAME = 'lastname';
    const TYPE_BIRTHDAY = 'birthday';
    const TYPE_MAIL = 'mail';
    const TYPE_ADDRESS = 'address';
    const TYPE_SOCIAL_NETWORK = 'social_network';
    const TYPE_PHONE = 'phone';
    const TYPE_PHOTO = 'photo';

    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    /**
     * @var int
     *
     * @ORM\Column(name="inf_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="inf_value", type="text")
     */
    private $value;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters

    public function getId()
    {
      return $this->id;
    }

    #endregion


    #region public methods
    #endregion


    #region protected methods

    final protected function getValue()
    {
      $this->value;
    }

    #endregion


    #region private methods
    #endregion
  }