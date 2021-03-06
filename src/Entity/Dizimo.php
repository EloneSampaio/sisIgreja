<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\DizimoRepository")
 */
class Dizimo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;



    /**
     * @ORM\Column(type="string", length=100)
     */
    private $obs;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Crente", inversedBy="dizimos")
     *  @ORM\JoinColumn(name="dizimos_id", referencedColumnName="id",nullable=true)
     */
    protected $crentes;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EntregaValor", inversedBy="dizimos")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $entregaValores;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\TipoDizimo", inversedBy="dizimos")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $tipoDizimos;

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
     * @return mixed
     */
    public function getEntregaValores()
    {
        return $this->entregaValores;
    }

    /**
     * @param mixed $entregaValores
     */
    public function setEntregaValores($entregaValores)
    {
        $this->entregaValores = $entregaValores;
    }

    /**
     * @return mixed
     */
    public function getTipoDizimos()
    {
        return $this->tipoDizimos;
    }

    /**
     * @param mixed $tipoDizimos
     */
    public function setTipoDizimos($tipoDizimos)
    {
        $this->tipoDizimos = $tipoDizimos;
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
    public function setDatePagamento(\DateTime $datePagamento)
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
