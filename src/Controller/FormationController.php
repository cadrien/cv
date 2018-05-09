<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:03
   */

  namespace App\Controller;

  use App\Entity\Formation;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

  class FormationController extends Controller
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

    /**
     * @Route("/formation", name="formation")
     * @Method("GET")
     * @Template("formation.html.twig")
     * @return mixed[]
     */
    public function indexAction()
    {
      return ['formations' => $this->getManager()->getRepository(Formation::class)->findAll()];
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }