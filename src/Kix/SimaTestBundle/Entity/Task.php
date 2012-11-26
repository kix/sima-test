<?php

namespace Kix\SimaTestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Kix\SimaTestBundle\Entity\Task
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Task
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime $addedOn
     *
     * @ORM\Column(name="addedOn", type="datetime")
     */
    private $addedOn;

    /**
     * @var \DateTime $completedOn
     *
     * @ORM\Column(name="completedOn", type="datetime")
     */
    private $completedOn;

    /**
     * @var \DateTime $dueOn
     *
     * @ORM\Column(name="dueOn", type="datetime")
     */
    private $dueOn;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * Set addedOn
     *
     * @param \DateTime $addedOn
     * @return Task
     */
    public function setAddedOn($addedOn)
    {
        $this->addedOn = $addedOn;
    
        return $this;
    }

    /**
     * Get addedOn
     *
     * @return \DateTime 
     */
    public function getAddedOn()
    {
        return $this->addedOn;
    }

    /**
     * Set completedOn
     *
     * @param \DateTime $completedOn
     * @return Task
     */
    public function setCompletedOn($completedOn)
    {
        $this->completedOn = $completedOn;
    
        return $this;
    }

    /**
     * Get completedOn
     *
     * @return \DateTime 
     */
    public function getCompletedOn()
    {
        return $this->completedOn;
    }

    /**
     * Set dueOn
     *
     * @param \DateTime $dueOn
     * @return Task
     */
    public function setDueOn($dueOn)
    {
        $this->dueOn = $dueOn;
    
        return $this;
    }

    /**
     * Get dueOn
     *
     * @return \DateTime 
     */
    public function getDueOn()
    {
        return $this->dueOn;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Task
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
}
