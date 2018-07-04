<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 08/04/18
   * @time  : 18:35
   */

  namespace App\Controller;


  use App\Entity\Company;
  use App\Entity\Work;
  use App\Extension\Doctrine\ArrayCollection;
  use Symfony\Component\HttpFoundation\JsonResponse;
  use Symfony\Component\Routing\Annotation\Route;


  class WorkController extends Controller
  {
    #region const
    #endregion


    #region public properties
    #endregion


    #region protected properties
    #endregion


    #region private properties

    private $works = null;

    #endregion


    #region magic methods
    #endregion


    #region getters/setters
    #endregion


    #region public methods

    /**
     * @Route("/", name="homepage")
     * @return JsonResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function workAction()
    {
      return $this->render('work.html.twig', array_merge($this->getTwigParams(), ['companies' => $this->getCompaniesSorted()]));
    }

    #endregion


    #region protected methods

    /**
     * @return Work[]|ArrayCollection
     */
    protected function getWorks()
    : ArrayCollection
    {
      $works = $this->getManager()->getRepository(Work::class)->findAll();
      return $this->works = ( new ArrayCollection($works) )->usort(function(Work $w1, Work $w2) {
        return $w1->getFrom() < $w2->getFrom();
      });
    }

    /**
     * @return ArrayCollection
     */
    protected function getCompanies()
    : ArrayCollection
    {
      return $this->getWorks()->map(function(Work $work) {
        return $work->getCompany();
      })->unique();
    }

    /**
     * @return ArrayCollection
     */
    protected function getCompaniesSorted()
    : ArrayCollection
    {
      return $this->getCompanies()->usort(function(Company $c1, Company $c2) {
        return $c1->getWorksSorted()->last()->getFrom() < $c2->getWorksSorted()->last()->getFrom();
      });
    }

    #endregion


    #region private methods
    #endregion
  }