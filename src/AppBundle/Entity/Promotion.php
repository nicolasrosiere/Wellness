<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Promotion
 *
 * @ORM\Table(name="promotion")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PromotionRepository")
 */
class Promotion
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
     * @var string
     *
     * @ORM\Column(name="pdf", type="string", length=255)
     */
    private $pdf;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginDate", type="datetime")
     */
    private $beginDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="beginDisplay", type="datetime")
     */
    private $beginDisplay;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDisplay", type="datetime")
     */
    private $endDisplay;

    /**
     * @ORM\ManyToOne(targetEntity="ServicesCategory")
     */
    private $category;

    /**
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="promotions")
     */
    private $provider;

    public function __construct()
    {
        $this->setBeginDate(new \DateTime());
        $this->setEndDate(new \DateTime());
        $this->setBeginDisplay(new \DateTime());
        $this->setEndDisplay(new \DateTime());
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
     * @return Promotion
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
     * @return Promotion
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
     * Set pdf
     *
     * @param string $pdf
     *
     * @return Promotion
     */
    public function setPdf($pdf)
    {
        $this->pdf = $pdf;

        return $this;
    }

    /**
     * Get pdf
     *
     * @return string
     */
    public function getPdf()
    {
        return $this->pdf;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return Promotion
     */
    public function setBeginDate($beginDate)
    {
        $this->beginDate = $beginDate;

        return $this;
    }

    /**
     * Get beginDate
     *
     * @return \DateTime
     */
    public function getBeginDate()
    {
        return $this->beginDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Promotion
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set beginDisplay
     *
     * @param \DateTime $beginDisplay
     *
     * @return Promotion
     */
    public function setBeginDisplay($beginDisplay)
    {
        $this->beginDisplay = $beginDisplay;

        return $this;
    }

    /**
     * Get beginDisplay
     *
     * @return \DateTime
     */
    public function getBeginDisplay()
    {
        return $this->beginDisplay;
    }

    /**
     * Set endDisplay
     *
     * @param \DateTime $endDisplay
     *
     * @return Promotion
     */
    public function setEndDisplay($endDisplay)
    {
        $this->endDisplay = $endDisplay;

        return $this;
    }

    /**
     * Get endDisplay
     *
     * @return \DateTime
     */
    public function getEndDisplay()
    {
        return $this->endDisplay;
    }

    /**
     * Set category
     *
     * @param \AppBundle\Entity\ServicesCategory $category
     *
     * @return Promotion
     */
    public function setCategory(\AppBundle\Entity\ServicesCategory $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \AppBundle\Entity\ServicesCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set provider
     *
     * @param \AppBundle\Entity\provider $provider
     *
     * @return Promotion
     */
    public function setProvider(\AppBundle\Entity\provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \AppBundle\Entity\provider
     */
    public function getProvider()
    {
        return $this->provider;
    }
}
