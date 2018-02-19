<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass="App\Repository\CoristaRepository")
 */
class Corista
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Crente", inversedBy="coristas")
     *  @ORM\JoinTable(name="corista_crente")
     */
    private  $crentes;


    public function __construct()
    {
        $this->crentes=new ArrayCollection();
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

    public function addCrente($crente){
        if($this->crentes->contains($crente)){
            return;
        }
        $this->crentes->add($crente);
        $crente->addCrente($this);
    }

    public function  removeCrente($crente){
        if($this->crentes->contains($crente)){
            return;
        }
        $this->crentes->removeElement($crente);
        $crente->removeCrente($this);
    }

    public function __toString()
    {
       return $this->getCrentes().getNome();
    }


}
