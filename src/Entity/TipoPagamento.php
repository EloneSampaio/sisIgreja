<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TipoPagamentoRepository")
 */
class TipoPagamento
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
     * @ORM\OneToMany(targetEntity="App\Entity\Dizimo", mappedBy="tipoPagamentos")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $dizimos;

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
    public function getDizimos()
    {
        return $this->dizimos;
    }

    /**
     * @param mixed $dizimos
     */
    public function setDizimos($dizimos)
    {
        $this->dizimos = $dizimos;
    }


    public function __toString()
    {
        return $this->getNome();
    }


}
