<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Resultat
 *
 * @ORM\Table(name="resultat")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\ResultatRepository")
 */
class Resultat {

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="Echantillonhastest")
     * @ORM\JoinColumn(name="echantillonhastest_id", referencedColumnName="id")
     */
    private $echantillonhastest;

    /**
     * @var float
     *
     * @ORM\Column(name="value", type="float")
     */
    private $value;

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
     * Set echantillonhastest
     *
     * @param \Analyses\AnalysesBundle\Entity\Echantillonhastest $echantillonhastest
     *
     * @return Resultat
     */
    public function setEchantillonhastest(\Analyses\AnalysesBundle\Entity\Echantillonhastest $echantillonhastest = null) {
        $this->echantillonhastest = $echantillonhastest;

        return $this;
    }

    /**
     * Get echantillonhastest
     *
     * @return \Analyses\AnalysesBundle\Entity\Echantillonhastest
     */
    public function getEchantillonhastest() {
        return $this->echantillonhastest;
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
     * Set value
     *
     * @param float $value
     *
     * @return Resultat
     */
    public function setValue($value) {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return float
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Resultat
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
     * @return Resultat
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

}
