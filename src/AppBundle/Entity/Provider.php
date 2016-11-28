<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Provider
 *
 * @ORM\Table(name="provider")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProviderRepository")
 */
class Provider extends User
{

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="website", type="string", length=255)
     */
    private $website;

    /**
     * @var string
     *
     * @ORM\Column(name="providerMail", type="string", length=255)
     */
    private $providerMail;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string", length=255)
     */
    private $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="tva", type="string", length=255)
     */
    private $tva;

    /**
     * @ORM\ManyToMany(targetEntity="ServicesCategory")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="Promotion", mappedBy="provider")
     */
    private $promotions;

    /**
     * @ORM\OneToMany(targetEntity="TraineeShip", mappedBy="provider")
     */
    private $traineeship;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="provider")
     */
    private $comments;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categories = new ArrayCollection();
        $this->promotions = new ArrayCollection();
        $this->traineeship = new ArrayCollection();
        $this->comments = new ArrayCollection();
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Provider
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
     * Set website
     *
     * @param string $website
     *
     * @return Provider
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set providerMail
     *
     * @param string $providerMail
     *
     * @return Provider
     */
    public function setProviderMail($providerMail)
    {
        $this->providerMail = $providerMail;

        return $this;
    }

    /**
     * Get providerMail
     *
     * @return string
     */
    public function getProviderMail()
    {
        return $this->providerMail;
    }

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Provider
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }



    /**
     * Set tva
     *
     * @param string $tva
     *
     * @return Provider
     */
    public function setTva($tva)
    {
        $this->tva = $tva;

        return $this;
    }

    /**
     * Get tva
     *
     * @return string
     */
    public function getTva()
    {
        return $this->tva;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\ServicesCategory $category
     *
     * @return Provider
     */
    public function addCategory(\AppBundle\Entity\ServicesCategory $category)
    {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\ServicesCategory $category
     */
    public function removeCategory(\AppBundle\Entity\ServicesCategory $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     *
     * @return Provider
     */
    public function addPromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions[] = $promotion;

        return $this;
    }

    /**
     * Remove promotion
     *
     * @param \AppBundle\Entity\Promotion $promotion
     */
    public function removePromotion(\AppBundle\Entity\Promotion $promotion)
    {
        $this->promotions->removeElement($promotion);
    }

    /**
     * Get promotions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPromotions()
    {
        return $this->promotions;
    }

    /**
     * Add traineeship
     *
     * @param \AppBundle\Entity\TraineeShip $traineeship
     *
     * @return Provider
     */
    public function addTraineeship(\AppBundle\Entity\TraineeShip $traineeship)
    {
        $this->traineeship[] = $traineeship;

        return $this;
    }

    /**
     * Remove traineeship
     *
     * @param \AppBundle\Entity\TraineeShip $traineeship
     */
    public function removeTraineeship(\AppBundle\Entity\TraineeShip $traineeship)
    {
        $this->traineeship->removeElement($traineeship);
    }

    /**
     * Get traineeship
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTraineeship()
    {
        return $this->traineeship;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Provider
     */
    public function addComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments[] = $comment;

        return $this;
    }

    /**
     * Remove comment
     *
     * @param \AppBundle\Entity\Comment $comment
     */
    public function removeComment(\AppBundle\Entity\Comment $comment)
    {
        $this->comments->removeElement($comment);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getComments()
    {
        return $this->comments;
    }
}
