<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 20/04/18
   * @time  : 08:31
   */

  namespace App\Extension\Doctrine;


  class ArrayCollection extends \Doctrine\Common\Collections\ArrayCollection
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
     * @param string|null $flag
     * @return $this
     */
    public function unique($flag = null)
    {
      return $this->createFrom(array_unique($this->toArray(), $flag));
    }

    /**
     * @param \Closure $func
     * @return $this
     */
    public function usort(\Closure $func)
    {
      $array = $this->toArray();
      usort($array, $func);
      return $this->createFrom($array);
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }