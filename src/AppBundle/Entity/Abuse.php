<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Abuse
 *
 * @ORM\Table(name="abuse")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\AbuseRepository")
 */
class Abuse
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encodingDate", type="datetime")
     */
    private $encodingDate;

    /**
     * @ORM\ManyToOne(targetEntity="Comment", inversedBy="abuse")
     */
    private $comment;

    /**
     * @ORM\ManyToOne(targetEntity="Surfer", inversedBy="abuse")
     */
    private $surfer;

    public function __construct()
    {
        $this->setEncodingDate(new \DateTime());
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
     * Set description
     *
     * @param string $description
     *
     * @return Abuse
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
     * Set encodingDate
     *
     * @param \DateTime $encodingDate
     *
     * @return Abuse
     */
    public function setEncodingDate($encodingDate)
    {
        $this->encodingDate = $encodingDate;

        return $this;
    }

    /**
     * Get encodingDate
     *
     * @return \DateTime
     */
    public function getEncodingDate()
    {
        return $this->encodingDate;
    }

    /**
     * Set comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Abuse
     */
    public function setComment(\AppBundle\Entity\Comment $comment = null)
    {
        $this->comment = $comment;

        return $this;
    }

    /**
     * Get comment
     *
     * @return \AppBundle\Entity\Comment
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * Set surfer
     *
     * @param \AppBundle\Entity\Surfer $surfer
     *
     * @return Abuse
     */
    public function setSurfer(\AppBundle\Entity\Surfer $surfer = null)
    {
        $this->surfer = $surfer;

        return $this;
    }

    /**
     * Get surfer
     *
     * @return \AppBundle\Entity\Surfer
     */
    public function getSurfer()
    {
        return $this->surfer;
    }
}
