<?php

namespace ps\lieuxBundle\Form\lieu;

use ps\lieuxBundle\MyClassUtil\CountryIsoCode;
use ps\lieuxBundle\EntitysControlers\lieu\Categorie;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Misd\PhoneNumberBundle\Form\Type\PhoneNumberType;


class EtablissementType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $numCodeList = new CountryIsoCode();
        $numCodeList = $numCodeList->getCountries();
        $cat = new Categorie();
        $cat = $cat->getCategories();
        $choices = [];
        foreach ($cat as $value) {
            $choices[$value] = $value;
        }
        $builder->add('nom', TextType::class)
            ->add('categorie', ChoiceType::class, array(
                'choices' => $choices, 'multiple' => false))
            ->add('latitude', TextType::class)
            ->add('longitude', TextType::class)
            ->add('presentation', TextareaType::class, array('required' => false))
            ->add('adresse', TextType::class)
            ->add('numtel', PhoneNumberType::class, array('required' => false,
                'widget' => PhoneNumberType::WIDGET_COUNTRY_CHOICE,
                'country_choices' => $numCodeList,
                'invalid_message' => 'Numéro de téléphone invalide',
                'preferred_country_choices' => array('GA')))
            ->add('email', TextType::class, array('required' => false))
            ->add('Ajouter', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ps\lieuxBundle\EntitysControlers\lieu\Etablissement'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'ps_lieuxbundle_lieu_etablissement';
    }


}
