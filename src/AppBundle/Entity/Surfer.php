<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Surfer
 *
 * @ORM\Table(name="surfer")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\SurferRepository")
 */
class Surfer extends User
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
     * @ORM\Column(name="firstname", type="string", length=255)
     */
    private $firstname;

    /**
     * @var bool
     *
     * @ORM\Column(name="newsletter", type="boolean")
     */
    private $newsletter;

    /**
     *
     * @ORM\OneToMany(targetEntity="Abuse", mappedBy="surfer")
     *
     */
    private $abuse;

    /**
     * @ORM\OneToMany(targetEntity="BlockPosition", mappedBy="surfer")
     */
    private $position;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="surfer")
     */
    private $comments;



    /**
     * Constructor
     */

    public function __construct()
    {
        $this->abuse = new ArrayCollection();
        $this->position = new ArrayCollection();
        $this->newsletter = false;
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
     * @return Surfer
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
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Surfer
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set newsletter
     *
     * @param boolean $newsletter
     *
     * @return Surfer
     */
    public function setNewsletter($newsletter)
    {
        $this->newsletter = $newsletter;

        return $this;
    }

    /**
     * Get newsletter
     *
     * @return bool
     */
    public function getNewsletter()
    {
        return $this->newsletter;
    }

    /**
     * Add abuse
     *
     * @param \AppBundle\Entity\Abuse $abuse
     *
     * @return Surfer
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
     * Add position
     *
     * @param \AppBundle\Entity\BlockPosition $position
     *
     * @return Surfer
     */
    public function addPosition(\AppBundle\Entity\BlockPosition $position)
    {
        $this->position[] = $position;

        return $this;
    }

    /**
     * Remove position
     *
     * @param \AppBundle\Entity\BlockPosition $position
     */
    public function removePosition(\AppBundle\Entity\BlockPosition $position)
    {
        $this->position->removeElement($position);
    }

    /**
     * Get position
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Add comment
     *
     * @param \AppBundle\Entity\Comment $comment
     *
     * @return Surfer
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
