<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EchantillonItem
 *
 * @ORM\Table(name="echantillon_item")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\EchantillonItemRepository")
 */
class EchantillonItem
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
     * @ORM\ManyToOne(targetEntity="Echantillon", inversedBy="echantillonItems")
     * @ORM\JoinColumn(name="echantillon_id", referencedColumnName="id")
     */
    private $echantillon ; 

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
     * Set reference
     *
     * @param string $reference
     *
     * @return EchantillonItem
     */
    public function setReference($reference)
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * Get reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->reference;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return EchantillonItem
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
     * Set echantillon
     *
     * @param \Analyses\AnalysesBundle\Entity\Echantillon $echantillon
     *
     * @return EchantillonItem
     */
    public function setEchantillon(\Analyses\AnalysesBundle\Entity\Echantillon $echantillon = null)
    {
        $this->echantillon = $echantillon;

        return $this;
    }

    /**
     * Get echantillon
     *
     * @return \Analyses\AnalysesBundle\Entity\Echantillon
     */
    public function getEchantillon()
    {
        return $this->echantillon;
    }
}
