<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillon
 *
 * @ORM\Table(name="echantillon")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\EchantillonRepository")
 */
class Echantillon {

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
     * @ORM\Column(name="reference", type="string", length=255)
     */
    private $reference;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\OneToMany(targetEntity="EchantillonItem", mappedBy="echantillon")
     */
    private $echantillonItems;

    /**
     * @ORM\ManyToOne(targetEntity="TypeEchantillon")
     * @ORM\JoinColumn(name="typeEchantillon_id", referencedColumnName="id")
     */
    private $typeEchantillon;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set reference
     *
     * @param string $reference
     *
     * @return Echantillon
     */
    public function setReference($reference) {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference() {
        return $this->reference;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Echantillon
     */
    public function setDate($date) {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate() {
        return $this->date;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Echantillon
     */
    public function setCommentaire($commentaire) {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire() {
        return $this->commentaire;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->echantillonItems = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add echantillonItem
     *
     * @param \Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem
     *
     * @return Echantillon
     */
    public function addEchantillonItem(\Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem) {
        $this->echantillonItems[] = $echantillonItem;

        return $this;
    }

    /**
     * Remove echantillonItem
     *
     * @param \Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem
     */
    public function removeEchantillonItem(\Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem) {
        $this->echantillonItems->removeElement($echantillonItem);
    }

    /**
     * Get echantillonItems
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEchantillonItems() {
        return $this->echantillonItems;
    }


  

    /**
     * Set typeEchantillon
     *
     * @param \Analyses\AnalysesBundle\Entity\TypeEchantillon $typeEchantillon
     *
     * @return Echantillon
     */
    public function setTypeEchantillon(\Analyses\AnalysesBundle\Entity\TypeEchantillon $typeEchantillon = null)
    {
        $this->typeEchantillon = $typeEchantillon;

        return $this;
    }

    /**
     * Get typeEchantillon
     *
     * @return \Analyses\AnalysesBundle\Entity\TypeEchantillon
     */
    public function getTypeEchantillon()
    {
        return $this->typeEchantillon;
    }
}
