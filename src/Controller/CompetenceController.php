<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 26/04/18
   * @time  : 08:09
   */

  namespace App\Controller;

  use App\Entity\CategoryCompetence;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
  use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
  use Symfony\Component\HttpFoundation\Response;
  use Symfony\Component\VarDumper\VarDumper;

  class CompetenceController extends Controller
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
     * @Route("/competence", name="competence")
     * @Method("GET")
     * @return Response
     */
    public function indexAction()
    {
      return new Response($this->renderView('competence.html.twig', array_merge($this->getTwigParams(),
                                                                                ['categories' => $this->getManager()
                                                                                                      ->getRepository(CategoryCompetence::class)
                                                                                                      ->findAll()])));
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }