<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CrenteRepository")
 */
class Crente
{

/**
 */
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $nome;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $bi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $estadoCivil;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $genero;

    /**
     * @ORM\Column(type="integer",nullable=true)
     */
    private $numeroDeFilhos;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $profissao;
    /**
     * @ORM\Column(type="boolean")
     */
    private $statusTrabalho=false;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $grauAcademico;

    /**
     * @ORM\Column(type="boolean")
     */
    private $dizimista = false;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Cargo", inversedBy="crentes")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $cargos;


    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Funcao", inversedBy="crentes")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $funcoes;


    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Corista", mappedBy="crentes")
     */
    protected  $coristas;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Filial", mappedBy="crentes", cascade={"remove"})
     */
    private  $filias;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Oferta", mappedBy="conferentes")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $ofertas;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Dizimo", mappedBy="crentes")
     *  @ORM\JoinColumn(nullable=true)
     */
    private  $dizimos;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $endereco;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */
    private $nomeMulher;

    /**
     * @ORM\Column(type="boolean")
     */
    private $batizado;


    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     *
     *   */
    private $telefone;


    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    protected $dateCadastro;


    /**
     * @var \DateTime
     * @ORM\Column(type="date")
     */
    protected $dateNascimento;

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
    public function getEstadoCivil()
    {
        return $this->estadoCivil;
    }

    /**
     * @param mixed $estadoCivil
     */
    public function setEstadoCivil($estadoCivil)
    {
        $this->estadoCivil = $estadoCivil;
    }

    /**
     * @return mixed
     */
    public function getNumeroDeFilhos()
    {
        return $this->numeroDeFilhos;
    }

    /**
     * @param mixed $numeroDeFilhos
     */
    public function setNumeroDeFilhos($numeroDeFilhos)
    {
        $this->numeroDeFilhos = $numeroDeFilhos;
    }

    /**
     * @return mixed
     */
    public function getProfissao()
    {
        return $this->profissao;
    }

    /**
     * @param mixed $profissao
     */
    public function setProfissao($profissao)
    {
        $this->profissao = $profissao;
    }

    /**
     * @return mixed
     */
    public function getStatusTrabalho()
    {
        return $this->statusTrabalho;
    }

    /**
     * @param mixed $statusTrabalho
     */
    public function setStatusTrabalho($statusTrabalho)
    {
        $this->statusTrabalho = $statusTrabalho;
    }

    /**
     * @return mixed
     */
    public function getGrauAcademico()
    {
        return $this->grauAcademico;
    }

    /**
     * @param mixed $grauAcademico
     */
    public function setGrauAcademico($grauAcademico)
    {
        $this->grauAcademico = $grauAcademico;
    }

    /**
     * @return mixed
     */
    public function getDizimista()
    {
        return $this->dizimista;
    }

    /**
     * @param mixed $dizimista
     */
    public function setDizimista($dizimista)
    {
        $this->dizimista = $dizimista;
    }



    /**
     * @return mixed
     */
    public function getBatizado()
    {
        return $this->batizado;
    }

    /**
     * @param mixed $batizado
     */
    public function setBatizado($batizado)
    {
        $this->batizado = $batizado;
    }

    /**
     * @return mixed
     */
    public function getNomeMulher()
    {
        return $this->nomeMulher;
    }

    /**
     * @param mixed $nomeMulher
     */
    public function setNomeMulher($nomeMulher)
    {
        $this->nomeMulher = $nomeMulher;
    }

    /**
     * @return mixed
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param mixed $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return mixed
     */
    public function getBi()
    {
        return $this->bi;
    }

    /**
     * @param mixed $bi
     */
    public function setBi($bi)
    {
        $this->bi = $bi;
    }


    // add your own fields

    public function __construct()
    {
        $this->dateCadastro = new \DateTime();
        $this->coristas=new ArrayCollection();


    }


    /**
     * @return mixed
     */
    public function getCargos()
    {
        return $this->cargos;
    }

    /**
     * @param mixed $cargos
     */
    public function setCargos($cargos)
    {
       $this->cargos=$cargos;
    }

    /**
     * @return mixed
     */
    public function getFuncoes()
    {
        return $this->funcoes;
    }

    /**
     * @param mixed $funcoes
     */
    public function setFuncoes($funcoes)
    {


        $this->funcoes=$funcoes;
    }



    /**
     * @return mixed
     */
    public function getCoristas()
    {
        return $this->coristas;
    }

    /**
     * @param mixed $coristas
     */
    public function setCoristas($coristas)
    {
        $this->coristas->clear();
        $this->coristas = new ArrayCollection($coristas);

    }


    public function addCorista($corista){
        if($this->coristas->contains($corista)){
            return;
        }
        $this->coristas->add($corista);
        $corista->addCorista($this);
    }

    public function removeCrente($corista){
        if($this->coristas->contains($corista)){
            return;
        }
        $this->coristas->removeElement($corista);
        $corista->removeCorista($this);
    }

    public function __toString()
    {
        return $this->getNome();
    }

    /**
     * @return mixed
     */
    public function getFilias()
    {
        return $this->filias;
    }

    /**
     * @param mixed $filias
     */
    public function setFilias($filias)
    {
        $this->filias = $filias;
    }

    /**
     * @return mixed
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param mixed $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return mixed
     */
    public function getGenero()
    {
        return $this->genero;
    }

    /**
     * @param mixed $genero
     */
    public function setGenero($genero)
    {
        $this->genero = $genero;
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
       $this->dizimos=$dizimos;
    }

    /**
     * @return mixed
     */
    public function getOfertas()
    {
        return $this->ofertas;
    }

    /**
     * @param mixed $ofertas
     */
    public function setOfertas($ofertas)
    {
        $this->ofertas = $ofertas;
    }

    /**
     * @return \DateTime
     */
    public function getDateCadastro()
    {
        return $this->dateCadastro;
    }

    /**
     * @param \DateTime $dateCadastro
     */
    public function setDateCadastro( $dateCadastro)
    {
        $this->dateCadastro = $dateCadastro;
    }

    /**
     * @return \DateTime
     */
    public function getDateNascimento()
    {
        return $this->dateNascimento;
    }

    /**
     * @param \DateTime $dateNascimento
     */
    public function setDateNascimento( $dateNascimento)
    {
        $this->dateNascimento = $dateNascimento;
    }






}
