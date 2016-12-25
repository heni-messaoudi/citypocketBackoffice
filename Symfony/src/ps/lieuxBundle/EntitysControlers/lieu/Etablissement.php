<?php

namespace ps\lieuxBundle\EntitysControlers\lieu;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;

/**
 * Etablissement
 *
 * @ORM\Table(name="lieu_etablissement")
 * @ORM\Entity(repositoryClass="ps\lieuxBundle\Repository\lieu\EtablissementRepository")
 */
class Etablissement
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="latitude", type="float")
     * @Assert\Type(
     *     type="double",
     *     message="ce champs doit être un nombre entre -85.051129 et 85.051129"
     * )
     */
    private $latitude;

    /**
     * @var float
     *
     * @ORM\Column(name="longitude", type="float")
     * @Assert\Type(
     *     type="double",
     *     message="ce champs doit être un nombre entre -85.051129 et 85.051129"
     * )
     */
    private $longitude;

    /**
     * @var string
     *
     * @ORM\Column(name="categorie", type="string", length=255)
     */
    private $categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255, nullable=true)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="numtel", type="string", length=255, nullable=true)
     * @Assert\Regex(
     *     pattern="/[a-zA-Z]/",
     *     match=false,
     *     message="Ce champs doit contenir que des nombres ou bien +"
     * )
     *
     */
    private $numtel;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="idUser", type="string", length=255, nullable=true)
     */
    private $idUser;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etablissement
     */
    public function setNom($nom)
    {
        $this->nom = trim($nom);

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set latitude
     *
     * @param float $latitude
     *
     * @return Etablissement
     */
    public function setLatitude($latitude)
    {
        $num = floatval($latitude);
        if ($num) {
            if ($num < 85.051129 && $num > -85.051129)
                $latitude = $num;
        }
        $this->latitude = $latitude;

        return $this;
    }

    /**
     * Get latitude
     *
     * @return float
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Set longitude
     *
     * @param float $longitude
     *
     * @return Etablissement
     */
    public function setLongitude($longitude)
    {
        $num = floatval($longitude);
        if ($num) {
            if ($num < 85.051129 && $num > -85.051129)
                $longitude = $num;
        }
        $this->longitude = $longitude;

        return $this;
    }

    /**
     * Get longitude
     *
     * @return float
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     *
     * @return Etablissement
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return Etablissement
     */
    public function setPresentation($presentation)
    {
        $this->presentation = trim($presentation);

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Etablissement
     */
    public function setAdresse($adresse)
    {
        $this->adresse = trim($adresse);

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set numtel
     *
     * @param string $numtel
     *
     * @return Etablissement
     */
    public function setNumtel($numtel)
    {
        $this->numtel = trim($numtel);
        return $this;
    }

    /**
     * Get numtel
     *
     * @return string
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Etablissement
     */
    public function setEmail($email)
    {
        $this->email = trim($email);

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return Etablissement
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}

