<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 08/04/18
   * @time  : 18:23
   */

  namespace App\Controller;


  use App\Entity\Infos\InfoAddress;
  use App\Entity\Infos\InfoBirthday;
  use App\Entity\Infos\InfoName;
  use App\Entity\Infos\InfoMail;
  use App\Entity\Infos\InfoPhone;
  use App\Entity\Infos\InfoPhoto;
  use App\Entity\Infos\InfoSocialNetwork;
  use Symfony\Bundle\FrameworkBundle\Routing\Router;
  use Symfony\Component\DependencyInjection\Exception\ServiceNotFoundException;

  class Controller extends \Symfony\Bundle\FrameworkBundle\Controller\Controller
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties
    #endregion


    #region magic methods
    #endregion


    #region getters/setters
    #endregion


    #region public methods
    #endregion


    #region protected methods

    /**
     * @param null|string $name
     * @return \Doctrine\Common\Persistence\ObjectManager
     */
    protected function getManager($name = null)
    {
      return $this->getDoctrine()->getManager($name);
    }

    /**
     * @return Router|object
     */
    protected function getRouter()
    {
      if ($this->has('router'))
        throw new ServiceNotFoundException('router');
      return $this->get('router');
    }

    /**
     * @return object|\Symfony\Component\Translation\DataCollectorTranslator|\Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslator()
    {
      if ($this->has('translator'))
        throw new ServiceNotFoundException('translator');
      return $this->get('translator');
    }

    protected function getTwigParams()
    {
      return [
        'name'            => $this->getManager()->getRepository(InfoName::class)->findOneBy([]),
        'mails'           => $this->getManager()->getRepository(InfoMail::class)->findAll(),
        'phones'          => $this->getManager()->getRepository(InfoPhone::class)->findAll(),
        'addresses'       => $this->getManager()->getRepository(InfoAddress::class)->findAll(),
        'birthday'        => $this->getManager()->getRepository(InfoBirthday::class)->findOneBy([]),
        'social_networks' => $this->getManager()->getRepository(InfoSocialNetwork::class)->findAll(),
        'photo'           => $this->getManager()->getRepository(InfoPhoto::class)->findOneBy([]),
      ];
    }

    #endregion


    #region private methods
    #endregion
  }