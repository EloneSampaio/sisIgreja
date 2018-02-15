<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FuncaoRepository")
 */
class Funcao
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    // add your own fields

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nome;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Crente", mappedBy="funcoes")
     *  @ORM\JoinColumn(nullable=true)
     */
    protected  $crentes;

    /**
     * Cargo constructor.
     */
    public function __construct()
    {
        $this->crentes=new ArrayCollection();
    }

    public function __toString()
    {
        return $this->getNome();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return mixed
     */
    public function getCrentes()
    {
        return $this->crentes;
    }

    /**
     * @param mixed $crentes
     */
    public function setCrentes($crentes)
    {
        $this->crentes->clear();
        $this->crentes = new ArrayCollection($crentes);
    }






}
