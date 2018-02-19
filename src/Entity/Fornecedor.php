<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Misd\PhoneNumberBundle\Validator\Constraints as MisdAssert;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;
use JMS\Serializer\Annotation as Serializer;
use Symfony\Component\Validator\Constraints as Assert;





/**
 * @ORM\Entity(repositoryClass="App\Repository\FornecedorRepository")
 */
class Fornecedor
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

    private $nome;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     */

    private $endereco;

    /**
     * @ORM\Column(type="string", length=100,nullable=true)
     *
     *   */
       private $telefone;



    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Despesa", mappedBy="fornecedores")
     *  @ORM\JoinColumn(nullable=true)
     */
    protected  $despesas;

    /**
     * Fornecedor constructor.
     * @param $despesas
     */
    public function __construct()
    {
        $this->despesas=new ArrayCollection();
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

    public function __toString()
    {
        return $this->getNome();
    }

    /**
     * @return mixed
     */
    public function getDespesas()
    {
        return $this->despesas;
    }

    /**
     * @param mixed $despesas
     */
    public function setDespesas($despesas)
    {
        $this->despesas->clear();
        $this->despesas = new ArrayCollection($despesas);
    }



}
