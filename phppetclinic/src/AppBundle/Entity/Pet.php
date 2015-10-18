<?php
/**
 * Created by PhpStorm.
 * User: tw
 * Date: 18.10.15
 * Time: 11:54
 */


// src/AppBundle/Entity/Pet.php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="pets")
 */
class Pet
{

    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $name;

    /**
     * @ORM\Column(type="date")
     */
    protected $birthdate;

    /**
     * @ORM\ManyToOne(targetEntity="PetType")
     * @ORM\JoinColumn(name="pettype_id", referencedColumnName="id")
     **/
    protected $petType;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Pet
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Pet
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set petType
     *
     * @param \AppBundle\Entity\PetType $petType
     *
     * @return Pet
     */
    public function setPetType(\AppBundle\Entity\PetType $petType = null)
    {
        $this->petType = $petType;

        return $this;
    }

    /**
     * Get petType
     *
     * @return \AppBundle\Entity\PetType
     */
    public function getPetType()
    {
        return $this->petType;
    }
}
