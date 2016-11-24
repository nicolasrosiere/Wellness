<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 * @ORM\InheritanceType("SINGLE_TABLE")
 * @ORM\DiscriminatorColumn(name="discrim", type="string")
 * @ORM\DiscriminatorMap({"user" = "User", "provider" = "Provider", "surfer" = "Surfer"})
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="houseNumber", type="string", length=255)
     */
    private $houseNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="street", type="string", length=255)
     */
    private $street;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="inscription", type="datetime")
     */
    private $inscription;

    /**
     * @var string
     *
     * @ORM\Column(name="userType", type="string", length=255)
     */
    private $userType;

    /**
     * @var int
     *
     * @ORM\Column(name="testing", type="integer")
     */
    private $testing;

    /**
     * @var bool
     *
     * @ORM\Column(name="outcast", type="boolean")
     */
    private $outcast;

    /**
     * @var bool
     *
     * @ORM\Column(name="inscriptionConfirmed", type="boolean")
     */
    private $inscriptionConfirmed;

    /**
     * @ORM\ManyToOne(targetEntity="Locality")
     */
    private $locality;

    /**
     * @ORM\ManyToOne(targetEntity="Town")
     */
    private $town;

    /**
     * @ORM\ManyToOne(targetEntity="PostalCode")
     */
    private $postalCode;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="user")
     */
    private $images;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set houseNumber
     *
     * @param string $houseNumber
     *
     * @return User
     */
    public function setHouseNumber($houseNumber)
    {
        $this->houseNumber = $houseNumber;

        return $this;
    }

    /**
     * Get houseNumber
     *
     * @return string
     */
    public function getHouseNumber()
    {
        return $this->houseNumber;
    }

    /**
     * Set street
     *
     * @param string $street
     *
     * @return User
     */
    public function setStreet($street)
    {
        $this->street = $street;

        return $this;
    }

    /**
     * Get street
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Set inscription
     *
     * @param \DateTime $inscription
     *
     * @return User
     */
    public function setInscription($inscription)
    {
        $this->inscription = $inscription;

        return $this;
    }

    /**
     * Get inscription
     *
     * @return \DateTime
     */
    public function getInscription()
    {
        return $this->inscription;
    }

    /**
     * Set userType
     *
     * @param string $userType
     *
     * @return User
     */
    public function setUserType($userType)
    {
        $this->userType = $userType;

        return $this;
    }

    /**
     * Get userType
     *
     * @return string
     */
    public function getUserType()
    {
        return $this->userType;
    }

    /**
     * Set testing
     *
     * @param integer $testing
     *
     * @return User
     */
    public function setTesting($testing)
    {
        $this->testing = $testing;

        return $this;
    }

    /**
     * Get testing
     *
     * @return int
     */
    public function getTesting()
    {
        return $this->testing;
    }

    /**
     * Set outcast
     *
     * @param boolean $outcast
     *
     * @return User
     */
    public function setOutcast($outcast)
    {
        $this->outcast = $outcast;

        return $this;
    }

    /**
     * Get outcast
     *
     * @return bool
     */
    public function getOutcast()
    {
        return $this->outcast;
    }

    /**
     * Set inscriptionConfirmed
     *
     * @param boolean $inscriptionConfirmed
     *
     * @return User
     */
    public function setInscriptionConfirmed($inscriptionConfirmed)
    {
        $this->inscriptionConfirmed = $inscriptionConfirmed;

        return $this;
    }

    /**
     * Get inscriptionConfirmed
     *
     * @return bool
     */
    public function getInscriptionConfirmed()
    {
        return $this->inscriptionConfirmed;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set locality
     *
     * @param \AppBundle\Entity\Locality $locality
     *
     * @return User
     */
    public function setLocality(\AppBundle\Entity\Locality $locality = null)
    {
        $this->locality = $locality;

        return $this;
    }

    /**
     * Get locality
     *
     * @return \AppBundle\Entity\Locality
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Set town
     *
     * @param \AppBundle\Entity\Town $town
     *
     * @return User
     */
    public function setTown(\AppBundle\Entity\Town $town = null)
    {
        $this->town = $town;

        return $this;
    }

    /**
     * Get town
     *
     * @return \AppBundle\Entity\Town
     */
    public function getTown()
    {
        return $this->town;
    }

    /**
     * Set postalCode
     *
     * @param \AppBundle\Entity\PostalCode $postalCode
     *
     * @return User
     */
    public function setPostalCode(\AppBundle\Entity\PostalCode $postalCode = null)
    {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get postalCode
     *
     * @return \AppBundle\Entity\PostalCode
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Add image
     *
     * @param \AppBundle\Entity\Image $image
     *
     * @return User
     */
    public function addImage(\AppBundle\Entity\Image $image)
    {
        $this->images[] = $image;

        return $this;
    }

    /**
     * Remove image
     *
     * @param \AppBundle\Entity\Image $image
     */
    public function removeImage(\AppBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }
}
