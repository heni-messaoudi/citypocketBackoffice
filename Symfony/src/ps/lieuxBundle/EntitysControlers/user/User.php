<?php

namespace ps\lieuxBundle\EntitysControlers\user;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * User
 *
 * @ORM\Table(name="user_user")
 * @ORM\Entity(repositoryClass="ps\lieuxBundle\Repository\user\UserRepository")
 */
class User implements UserInterface, \Serializable
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="email", type="string", length=255, unique=true)
     */
    private $email;

    /**
     * @var string
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     * @ORM\Column(name="mdp", type="string", length=255)
     */
    private $mdp;

    /**
     * @var bool
     * @ORM\Column(name="isComercial", type="boolean")
     */
    private $isComercial;

    /**
     * Set email
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Get email
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set nom
     * @param string $nom
     * @return User
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Get nom
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set mdp
     * @param string $mdp
     * @return User
     */
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;
        return $this;
    }

    /**
     * Get mdp
     * @return string
     */
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set isComercial
     * @param boolean $isComercial
     * @return User
     */
    public function setIsComercial($isComercial)
    {
        $this->isComercial = $isComercial;
        return $this;
    }

    /**
     * Get isComercial
     * @return bool
     */
    public function getIsComercial()
    {
        return $this->isComercial;
    }

    public function getRoles()
    {
        if ($this->isComercial)
            return array('ROLE_ADMIN');
        else
            return array('ROLE_USER');
    }


    public function getPassword()
    {
        return $this->getMdp();
    }

    public function getSalt()
    {
        return null;
    }

    public function getUsername()
    {
        return $this->getEmail();
    }

    public function eraseCredentials()
    {
    }

    public function serialize()
    {
        return serialize(
            array(
                $this->email,
                $this->nom,
                $this->mdp,
                $this->isComercial,
            )
        );
    }

    public function unserialize($serialized)
    {
        list (
            $this->email,
            $this->nom,
            $this->mdp,
            $this->isComercial,
            ) = unserialize($serialized);
    }
}

