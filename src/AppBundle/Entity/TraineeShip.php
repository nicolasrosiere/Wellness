<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TraineeShip
 *
 * @ORM\Table(name="trainee_ship")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\TraineeShipRepository")
 */
class TraineeShip
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
     * @ORM\Column(name="price", type="string", length=255)
     */
    private $price;

    /**
     * @var string
     *
     * @ORM\Column(name="information", type="string", length=255)
     */
    private $information;

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
     *
     * @ORM\ManyToOne(targetEntity="Provider", inversedBy="traineeship")
     */
    private $provider;

    public function __construct()
    {
        $this->setBeginDisplay(new \DateTime());
        $this->setendDisplay(new \DateTime());
        $this->setBeginDate(new \DateTime());
        $this->setEndDate(new \DateTime());
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
     * @return TraineeShip
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
     * @return TraineeShip
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
     * Set price
     *
     * @param string $price
     *
     * @return TraineeShip
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set information
     *
     * @param string $information
     *
     * @return TraineeShip
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * Get information
     *
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * Set beginDate
     *
     * @param \DateTime $beginDate
     *
     * @return TraineeShip
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
     * @return TraineeShip
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
     * @return TraineeShip
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
     * @return TraineeShip
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
     * Set provider
     *
     * @param \AppBundle\Entity\Provider $provider
     *
     * @return TraineeShip
     */
    public function setProvider(\AppBundle\Entity\Provider $provider = null)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Get provider
     *
     * @return \AppBundle\Entity\Provider
     */
    public function getProvider()
    {
        return $this->provider;
    }
}
