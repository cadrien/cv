<?php
  /**
   * Created by PhpStorm.
   * @author: Adrien CHAUMARAT <adrien.chaumarat@gmail.com>
   * @date  : 02/06/18
   * @time  : 19:54
   */

  namespace App\Form;


  use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
  use Symfony\Component\Form\Extension\Core\Type\CollectionType;
  use Symfony\Component\Form\Extension\Core\Type\TextareaType;
  use Symfony\Component\Form\Extension\Core\Type\TextType;
  use Symfony\Component\Form\FormBuilderInterface;
  use Symfony\Component\Form\FormInterface;
  use Symfony\Component\Form\FormView;

  class ContactType extends AbstractType
  {
    #region const

    const FIELD_GENDER    = 'gender';
    const FIELD_FIRSTNAME = 'firstname';
    const FIELD_LASTNAME  = 'lastname';
    const FIELD_COMPANY   = 'company';
    const FIELD_MAIL_CC   = 'mail_cc';
    const FIELD_CONTENT   = 'content';

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

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder
        ->add(self::FIELD_GENDER, ChoiceType::class, [
          'choices'                   => ['Mlle' => 'Mlle',
                                          'Mme'  => 'Mme',
                                          'Mr'   => 'Mr'],
          'placeholder'               => '-',
          'required'                  => true,
          'translation_domain'        => 'abstract_type',
          'choice_translation_domain' => 'common'
        ])
        ->add(self::FIELD_FIRSTNAME, TextType::class, [
          'attr' => ['placeholder' => 'firstname']
        ])
        ->add(self::FIELD_LASTNAME, TextType::class, [
          'attr' => ['placeholder' => 'lastname']
        ])
        ->add(self::FIELD_COMPANY, TextType::class, [
          'attr' => ['placeholder' => 'company']
        ])
        ->add(self::FIELD_MAIL_CC, CollectionType::class, [
          'allow_add'    => true,
          'allow_delete' => true
        ])
        ->add(self::FIELD_CONTENT, TextareaType::class);
    }

    public function buildView(FormView $view, FormInterface $form, array $options)
    {
      $view->vars = array_replace($view->vars, []);
    }

    #endregion


    #region protected methods
    #endregion


    #region private methods
    #endregion
  }