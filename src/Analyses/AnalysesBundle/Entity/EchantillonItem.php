<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EchantillonItem
 *
 * @ORM\Table(name="echantillon_item")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\EchantillonItemRepository")
 */
class EchantillonItem {

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
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @ORM\ManyToOne(targetEntity="Echantillon")
     * @ORM\JoinColumn(name="id_echantillon", referencedColumnName="id")
     */
    private $echantillon;

    /**
     * @ORM\OneToMany(targetEntity="Echantillonhastest", mappedBy="echantillonItem")
     */
    private $echantillohnHastests;

    /**
     * Get echantillohnHastests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    function getEchantillohnHastests() {
        return $this->echantillohnHastests;
    }

    /**
     * Get date
     *
     * @return string
     */
    function getDate() {
        return $this->date;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return EchantillonItem
     */
    function setDate($date) {
        $this->date = $date;
    }

    /**
     * Constructor
     */
    public function __construct() {

        $this->echantillohnHastests = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return EchantillonItem
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
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return EchantillonItem
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
     * Set echantillon
     *
     * @param \Analyses\AnalysesBundle\Entity\Echantillon $echantillon
     *
     * @return EchantillonItem
     */
    public function setEchantillon(\Analyses\AnalysesBundle\Entity\Echantillon $echantillon = null) {
        $this->echantillon = $echantillon;

        return $this;
    }

    /**
     * Get echantillon
     *
     * @return \Analyses\AnalysesBundle\Entity\Echantillon
     */
    public function getEchantillon() {
        return $this->echantillon;
    }

}
