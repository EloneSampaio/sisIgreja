<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\DespesaRepository")
 */
class Despesa
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */

    private $docNumber;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank()
     * @Assert\Length(
     *      min = 2,
     *      max = 50,
     *      minMessage = "Não pode ter menos de   {{ limit }} caracteres",
     *      maxMessage = "Não pode ter mais de {{ limit }} caracteres"
     * )
     */

    private $descricao;
    /**
     * The date of the delivery (it doesn't include the time).
     *
     * @var \DateTime
     * @ORM\Column(type="date",nullable=true)
     */
    protected $dateVencimento = null;


    /**
     * The date of the delivery (it doesn't include the time).
     *
     * @var \DateTime
     * @ORM\Column(type="date")
     * @Assert\NotBlank()
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
     * @ORM\Column(type="boolean")
     */
    private $recebido=true;




    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Fornecedor", inversedBy="despesas")
     *  @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank()
     */
    private  $fornecedores;


    public function __construct()
    {
        $this->dateVencimento = new \DateTime();
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
    public function getDocNumber()
    {
        return $this->docNumber;
    }

    /**
     * @param mixed $docNumber
     */
    public function setDocNumber($docNumber)
    {
        $this->docNumber = $docNumber;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return \DateTime
     */
    public function getDateVencimento(): \DateTime
    {
        return $this->dateVencimento;
    }

    /**
     * @param \DateTime $dateVencimento
     */
    public function setDateVencimento(\DateTime $dateVencimento)
    {
        $this->dateVencimento = $dateVencimento;
    }

    /**
     * @return \DateTime
     */
    public function getDatePagamento(): \DateTime
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
    public function setValor($valor)
    {
        $this->valor = $valor;
    }



    /**
     * @return mixed
     */
    public function getRecebido()
    {
        return $this->recebido;
    }

    /**
     * @param mixed $recebido
     */
    public function setRecebido($recebido)
    {
        $this->recebido = $recebido;
    }

    /**
     * @return mixed
     */
    public function getFornecedores()
    {
        return $this->fornecedores;
    }

    /**
     * @param mixed $fornecedores
     */
    public function setFornecedores($fornecedores)
    {
        $this->fornecedores = $fornecedores;
    }








}
