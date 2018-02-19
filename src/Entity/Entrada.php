<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EntradaRepository")
 */
class Entrada
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=100)
     * @Assert\NotBlank()
     */
    private $obs;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Crente", inversedBy="entradas")
     * @@ORM\JoinColumn(name="crentes_id", referencedColumnName="id",nullable=true)
     */
    protected $crentes;




    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoPagamento", inversedBy="dizimos")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $tipoPagamentos;

    /**
     * The date of the delivery (it doesn't include the time).
     *
     * @var \DateTime
     * @ORM\Column(type="date",nullable=true)
     */
    protected $datePagamento = null;
    /**
     * The value rate to apply on the despesa.
     *
     * @var string
     * @ORM\Column(type="decimal")
     * @Assert\NotBlank()
     */
    protected $valor;

    /**
     * Dizimo constructor.
     */
    public function __construct()
    {
        $this->datePagamento = new \DateTime();
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
    public function getObs()
    {
        return $this->obs;
    }

    /**
     * @param mixed $obs
     */
    public function setObs($obs)
    {
        $this->obs = $obs;
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
        $this->crentes = $crentes;

    }





    /**
     * @return \DateTime
     */
    public function getDatePagamento()
    {
        return $this->datePagamento;
    }

    /**
     * @param \DateTime $datePagamento
     */
    public function setDatePagamento( $datePagamento)
    {
        $this->datePagamento = $datePagamento;
    }

    /**
     * @return string
     */
    public function getValor()
    {
        return $this->valor;
    }

    /**
     * @param string $valor
     */
    public function setValor( $valor)
    {
        $this->valor = $valor;
    }

    /**
     * @return mixed
     */
    public function getTipoPagamentos()
    {
        return $this->tipoPagamentos;
    }

    /**
     * @param mixed $tipoPagamentos
     */
    public function setTipoPagamentos($tipoPagamentos)
    {
        $this->tipoPagamentos = $tipoPagamentos;
    }




}
