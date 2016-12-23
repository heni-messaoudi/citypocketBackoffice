<?php

namespace ps\lieuxBundle\EntitysControlers\lieu;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="lieu_categorie")
 * @ORM\Entity(repositoryClass="ps\lieuxBundle\Repository\lieu\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="categories", type="array")
     */
    private $categories;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set categories
     *
     * @param array $categories
     *
     * @return Categorie
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;

        return $this;
    }

    /**
     * Get categories
     *
     * @return array
     */
    public function getCategories()
    {
        $this->categories = [
            'Agence de location', 'Agence de voyage', 'Autre', 'Banque',
            'Café et Bar', 'Cinéma et théatre', 'Hopitaux', 'Hotel',
            'Pompier et Police', 'Restaurant', 'Stade', 'Super marché'
        ];
        return $this->categories;
    }
}

