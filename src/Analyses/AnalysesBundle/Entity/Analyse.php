<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Analyse
 *
 * @ORM\Table(name="analyse")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\AnalyseRepository")
 */
class Analyse {

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
     * @ORM\Column(name="code", type="string", length=255)
     */
    private $code;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;

    /**
     * @ORM\OneToMany(targetEntity="Categorie", mappedBy="analyse")
     */
    private $categories;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return Analyse
     */
    public function setNom($nom) {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom() {
        return $this->nom;
    }

    public function __construct() {
        $this->categories = new ArrayCollection();
    }

    /**
     * Add category
     *
     * @param \Analyses\AnalysesBundle\Entity\Categorie $category
     *
     * @return Analyse
     */
    public function addCategory(\Analyses\AnalysesBundle\Entity\Categorie $category) {
        $this->categories[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \Analyses\AnalysesBundle\Entity\Categorie $category
     */
    public function removeCategory(\Analyses\AnalysesBundle\Entity\Categorie $category) {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories() {
        return $this->categories;
    }

    public function __toString() {
        return $this->nom;
    }

    /**
     * Set code
     *
     * @param string $code
     *
     * @return Analyse
     */
    public function setCode($code) {
        $this->code = $code;

        return $this;
    }

    /**
     * Get code
     *
     * @return string
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * Set prix
     *
     * @param \double $prix
     *
     * @return Analyse
     */
    public function setPrix($prix) {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return \double
     */
    public function getPrix() {
        return $this->prix;
    }

}
