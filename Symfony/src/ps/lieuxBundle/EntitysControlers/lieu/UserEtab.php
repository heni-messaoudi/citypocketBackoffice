<?php

namespace ps\lieuxBundle\EntitysControlers\lieu;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserEtab
 *
 * @ORM\Table(name="lieu_user_etab")
 * @ORM\Entity(repositoryClass="ps\lieuxBundle\Repository\lieu\UserEtabRepository")
 */
class UserEtab
{

    /**
     * @var string
     * @ORM\Id
     * @ORM\Column(name="userId", type="string", length=255, unique=true)
     */
    private $userId;

    /**
     * @var string
     *
     * @ORM\Column(name="idEtab", type="string", length=255)
     */
    private $idEtab;


    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return UserEtab
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set idEtab
     *
     * @param string $idEtab
     *
     * @return UserEtab
     */
    public function setIdEtab($idEtab)
    {
        $this->idEtab = $idEtab;

        return $this;
    }

    /**
     * Get idEtab
     *
     * @return string
     */
    public function getIdEtab()
    {
        return $this->idEtab;
    }
}

