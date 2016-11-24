<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BlockPosition
 *
 * @ORM\Table(name="block_position")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BlockPositionRepository")
 */
class BlockPosition
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
     * @ORM\Column(name="position", type="integer")
     */
    private $position;

    /**
     * @ORM\ManyToOne(targetEntity="Block", inversedBy="position")
     */
    private $block;

    /**
     * @ORM\ManyToOne(targetEntity="Surfer", inversedBy="position")
     */
    private $surfer;


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
     * Set position
     *
     * @param integer $position
     *
     * @return BlockPosition
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return int
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set block
     *
     * @param \AppBundle\Entity\Block $block
     *
     * @return BlockPosition
     */
    public function setBlock(\AppBundle\Entity\Block $block = null)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return \AppBundle\Entity\Block
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set surfer
     *
     * @param \AppBundle\Entity\Surfer $surfer
     *
     * @return BlockPosition
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
