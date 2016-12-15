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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

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

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Analyse
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

}
