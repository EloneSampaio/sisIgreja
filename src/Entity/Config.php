<?php
/**
 * Created by PhpStorm.
 * User: sam
 * Date: 18/02/18
 * Time: 00:36
 */

namespace App\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

const NOME_IGREJA_SEDE = "Igreja Pentecostal";
const NOME_IGREJA_FILHA = "Centro Cafarnaaum";
const LOGOTIPO = "adpm-logotipo.jpg";

/**
 * @ORM\Entity(repositoryClass="App\Repository\ConfigRepository")
 * @Vich\Uploadable
 */
class Config
{
    const CARTAO_DE_MEMBRO = "Cartão De Membro";

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=25)
     */
    private $igrejaSede;

    /**
     * @ORM\Column(type="string", length=30)
     */

    private $igrejaFilial;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @var string
     */
    private $image;

    /**
     *@Assert\File(
     *     maxSize="5M",
     *     mimeTypes={"image/png", "image/jpeg", "image/pjpeg","image/jpg"}
     * )
     * @Vich\UploadableField(mapping="membro_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;


    /**
     * @ORM\Column(type="datetime",nullable=true)
     * @var \DateTime
     */
    private $updatedAt;


    /**
     *@ORM\OneToOne(targetEntity="App\Entity\Crente")
     * @@ORM\JoinColumn(name="crentes_id", referencedColumnName="id")
     */
    private  $crentes;

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return File
     */
    public function getImageFile()
    {
        return $this->imageFile;
    }

    /**
     * @param File $imageFile
     */
    public function setImageFile(File $image = null)
    {
        $this->imageFile = $image;
        if ($image) {
            // if 'updatedAt' is not defined in your entity, use another property
            $this->updatedAt = new \DateTime('now');
        }
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
    public function getIgrejaSede()
    {
        return $this->igrejaSede;
    }

    /**
     * @param mixed $igrejaSede
     */
    public function setIgrejaSede($igrejaSede)
    {
        $this->igrejaSede = $igrejaSede;
    }

    /**
     * @return mixed
     */
    public function getIgrejaFilial()
    {
        return $this->igrejaFilial;
    }

    /**
     * @param mixed $igrejaFilial
     */
    public function setIgrejaFilial($igrejaFilial)
    {
        $this->igrejaFilial = $igrejaFilial;
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




}