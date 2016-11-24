<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * ServicesCategory
 *
 * @ORM\Table(name="services_category")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ServicesCategoryRepository")
 */
class ServicesCategory
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var bool
     *
     * @ORM\Column(name="forward", type="boolean")
     */
    private $forward;

    /**
     * @var bool
     *
     * @ORM\Column(name="validated", type="boolean")
     */
    private $validated;

    /**
     * @ORM\ManyToMany(targetEntity="Provider")
     */
    private $providers;

    /**
     * @ORM\OneToMany(targetEntity="Image", mappedBy="servicesCategory")
     */
    private $servicesCategory; /* ce sont les images des services categories mais mauvais nom A CHANGER !!!! */


    public function __construct(){

        $this->forward=false;
        $this->validated=false;

        //$this->servicesCategory = new ArrayCollection();

    }

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
     * Set name
     *
     * @param string $name
     *
     * @return ServicesCategory
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
     * Set description
     *
     * @param string $description
     *
     * @return ServicesCategory
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set forward
     *
     * @param boolean $forward
     *
     * @return ServicesCategory
     */
    public function setForward($forward)
    {
        $this->forward = $forward;

        return $this;
    }

    /**
     * Get forward
     *
     * @return bool
     */
    public function getForward()
    {
        return $this->forward;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return ServicesCategory
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return bool
     */
    public function getValidated()
    {
        return $this->validated;
    }

    /**
     * Add provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return ServicesCategory
     */
    public function addProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers[] = $provider;

        return $this;
    }

    /**
     * Remove provider
     *
     * @param \AppBundle\Entity\Provider $provider
     */
    public function removeProvider(\AppBundle\Entity\Provider $provider)
    {
        $this->providers->removeElement($provider);
    }

    /**
     * Get providers
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProviders()
    {
        return $this->providers;
    }

    /**
     * Add servicesCategory
     *
     * @param \AppBundle\Entity\Image $servicesCategory
     *
     * @return ServicesCategory
     */
    public function addServicesCategory(\AppBundle\Entity\Image $servicesCategory)
    {
        $this->servicesCategory[] = $servicesCategory;

        return $this;
    }

    /**
     * Remove servicesCategory
     *
     * @param \AppBundle\Entity\Image $servicesCategory
     */
    public function removeServicesCategory(\AppBundle\Entity\Image $servicesCategory)
    {
        $this->servicesCategory->removeElement($servicesCategory);
    }

    /**
     * Get servicesCategory
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServicesCategory()
    {
        return $this->servicesCategory;
    }
}
