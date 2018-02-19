<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Misd\PhoneNumberBundle\Validator\Constraints as MisdAssert;
use Misd\PhoneNumberBundle\Validator\Constraints\PhoneNumber as AssertPhoneNumber;
use JMS\Serializer\Annotation as Serializer;




/**
 * @ORM\Entity(repositoryClass="App\Repository\FilialRepository")
 */
class Filial
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

    private $nome;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $endereco;

    /**
     * @ORM\Column(type="string", length=100)
     *
     *   */
       private $telefone;



    /**
     *
     *@ORM\OneToOne(targetEntity="App\Entity\Crente", inversedBy="filias",  orphanRemoval=true)
     * @@ORM\JoinColumn(name="crentes_id", referencedColumnName="id")
     */
    private  $crentes;

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

        $this->crentes = $crentes;

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


}
