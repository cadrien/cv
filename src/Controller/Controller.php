<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 08/04/18
   * @time  : 18:23
   */

  namespace App\Controller;


  use App\Entity\Infos\InfoName;
  use App\Entity\Infos\InfoMail;
  use Symfony\Bundle\FrameworkBundle\Routing\Router;

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
      return $this->get('router');
    }

    protected function getTwigParams()
    {
      return [
        'name'    => $this->getManager()->getRepository(InfoName::class)->findOneBy([]),
        'mails'   => $this->getManager()->getRepository(InfoMail::class)->findAll(),
      ];
    }

    #endregion


    #region private methods
    #endregion
  }