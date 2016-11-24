<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Comment
 *
 * @ORM\Table(name="comment")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CommentRepository")
 */
class Comment
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
     * @var int
     *
     * @ORM\Column(name="rating", type="integer")
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="string", length=255)
     */
    private $content;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="encodingDate", type="datetime")
     */
    private $encodingDate;

    /**
     * @ORM\ManyToOne(targetEntity="Surfer", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $surfer;

    /**
     * @ORM\ManyToOne(targetEntity="provider", inversedBy="comments")
     * @ORM\JoinColumn(nullable=false)
     */
    private $provider;

    /**
     * @ORM\OneToMany(targetEntity="Abuse", mappedBy="comments")
     */
    private $abuse;

    /*
     * Constructor
     */
    public function __construct(){
        $this->setEncodingDate(new \DateTime());
        //$this->abuse = new ArrayCollection();
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
     * Set rating
     *
     * @param integer $rating
     *
     * @return Comment
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return int
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Comment
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Comment
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set encodingDate
     *
     * @param \DateTime $encodingDate
     *
     * @return Comment
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
     * Set provider
     *
     * @param \AppBundle\Entity\provider $provider
     *
     * @return Comment
     */
    public function setProvider(\AppBundle\Entity\provider $provider)
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

    /**
     * Add abuse
     *
     * @param \AppBundle\Entity\Abuse $abuse
     *
     * @return Comment
     */
    public function addAbuse(\AppBundle\Entity\Abuse $abuse)
    {
        $this->abuse[] = $abuse;

        return $this;
    }

    /**
     * Remove abuse
     *
     * @param \AppBundle\Entity\Abuse $abuse
     */
    public function removeAbuse(\AppBundle\Entity\Abuse $abuse)
    {
        $this->abuse->removeElement($abuse);
    }

    /**
     * Get abuse
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAbuse()
    {
        return $this->abuse;
    }

    /**
     * Set surfer
     *
     * @param \AppBundle\Entity\Surfer $surfer
     *
     * @return Comment
     */
    public function setSurfer(\AppBundle\Entity\Surfer $surfer)
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
