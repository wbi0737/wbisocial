<?php

namespace Wbi\ForumBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wbi\ForumBundle\Entity\Domain
 *
 * @ORM\Table(name="domain")
 * @ORM\Entity
 */
class Domain
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=45, nullable=true)
     */
    private $label;

/**
   * @ORM\OneToMany(targetEntity="Wbi\ForumBundle\Entity\Underdomain", mappedBy="domain")
   */
  private $underdomains; // Ici underdomains prend un « s », car un domain a plusieurs underdomains !


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
     * Set label
     *
     * @param string $label
     * @return Domain
     */
    public function setLabel($label)
    {
        $this->label = $label;
    
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }


    public function __construct()
  {
    // Rappelez-vous, on a un attribut qui doit contenir un ArrayCollection, on doit l'initialiser dans le constructeur
    $this->underdomains = new \Doctrine\Common\Collections\ArrayCollection();
  }

  public function addUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain)
  {
    $this->underdomains[] = $underdomain;
    $underdomains->setDomain($this);
    return $this;
  }

  public function removeUnderdomain(\Wbi\ForumBundle\Entity\Underdomain $underdomain)
  {
    $this->underdomains->removeElement($underdomain);
  }

  public function getUnderdomains()
  {
    return $this->underdomains;
  }
}