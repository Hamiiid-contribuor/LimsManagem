<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Test
 *
 * @ORM\Table(name="test")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\TestRepository")
 */
class Test
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
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurMin", type="float")
     */
    private $valeurMin;

    /**
     * @var float
     *
     * @ORM\Column(name="valeurMax", type="float")
     */
    private $valeurMax;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    
    /**
     * @ORM\ManyToOne(targetEntity="Categorie", inversedBy="tests")
     * @ORM\JoinColumn(name="categorie_id", referencedColumnName="id")
     */
    private $categorie;

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
     * Set libelle
     *
     * @param string $libelle
     *
     * @return Test
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set valeurMin
     *
     * @param float $valeurMin
     *
     * @return Test
     */
    public function setValeurMin($valeurMin)
    {
        $this->valeurMin = $valeurMin;

        return $this;
    }

    /**
     * Get valeurMin
     *
     * @return float
     */
    public function getValeurMin()
    {
        return $this->valeurMin;
    }

    /**
     * Set valeurMax
     *
     * @param float $valeurMax
     *
     * @return Test
     */
    public function setValeurMax($valeurMax)
    {
        $this->valeurMax = $valeurMax;

        return $this;
    }

    /**
     * Get valeurMax
     *
     * @return float
     */
    public function getValeurMax()
    {
        return $this->valeurMax;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Test
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }

    /**
     * Set categorie
     *
     * @param \Analyses\AnalysesBundle\Entity\Categorie $categorie
     *
     * @return Test
     */
    public function setCategorie(\Analyses\AnalysesBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \Analyses\AnalysesBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
}
