<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\CategorieRepository")
 */
class Categorie {

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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="Analyse", inversedBy="categories")
     * @ORM\JoinColumn(name="analyse_id", referencedColumnName="id")
     */
    private $analyse;

    /**
     * @ORM\OneToMany(targetEntity="Test", mappedBy="categorie")
     */
    private $tests;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Categorie
     */
    public function setLibelle($libelle) {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle() {
        return $this->libelle;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Categorie
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
     * Set analyse
     *
     * @param \Analyses\AnalysesBundle\Entity\Analyse $analyse
     *
     * @return Categorie
     */
    public function setAnalyse(\Analyses\AnalysesBundle\Entity\Analyse $analyse = null) {
        $this->analyse = $analyse;

        return $this;
    }

    /**
     * Get analyse
     *
     * @return \Analyses\AnalysesBundle\Entity\Analyse
     */
    public function getAnalyse() {
        return $this->analyse;
    }

    /**
     * Constructor
     */
    public function __construct() {
        $this->tests = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add test
     *
     * @param \Analyses\AnalysesBundle\Entity\Test $test
     *
     * @return Categorie
     */
    public function addTest(\Analyses\AnalysesBundle\Entity\Test $test) {
        $this->tests[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \Analyses\AnalysesBundle\Entity\Test $test
     */
    public function removeTest(\Analyses\AnalysesBundle\Entity\Test $test) {
        $this->tests->removeElement($test);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTests() {
        return $this->tests;
    }

    public function __toString() {
        return $this->libelle;
    }

}
