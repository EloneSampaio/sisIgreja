<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CargoRepository")
 */
class Cargo
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
     * @Assert\NotBlank()
     */
    private $nome;


    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Crente", mappedBy="cargos",cascade={"remove"})
     * @ORM\JoinColumn(nullable=true)
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




    /**
     * Add a product in the category.
     *
     * @param $crente Crente The product to associate
     */
   /* public function addCrente($crente)
    {
        if ($this->crentes->contains($crente)) {
            return;
        }
        $this->crentes->add($crente);
        $crente->addCategory($this);
    }*/
    /**
     * @param Crente $crente
     */
   /* public function removeCrente($crente)
    {
        if (!$this->crentes->contains($crente)) {
            return;
        }
        $this->crentes->removeElement($crente);
        $crente->removeCategory($this);
    }*/




}
