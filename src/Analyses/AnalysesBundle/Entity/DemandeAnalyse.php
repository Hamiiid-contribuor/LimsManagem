<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DemandeAnalyse
 *
 * @ORM\Table(name="demande_analyse")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\DemandeAnalyseRepository")
 */
class DemandeAnalyse
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
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    
    
     /**
     * @ORM\ManyToOne(targetEntity="client", inversedBy="demandeAnalyses")
     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     */
    private $client ;
    
      /**
     * @ORM\OneToMany(targetEntity="Echantillon", mappedBy="DemandeAnalyse")
     */
    private $Echantillons;
    
     /**
     * Constructor
     */
    public function __construct()
    {
        $this->Echantillons = new \Doctrine\Common\Collections\ArrayCollection();
      
        
        
        
    }
    
     /**
     * Get Echantillons
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getEchantillons()
    {
        return $this->Echantillons;
    }
    
    
    
    

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
     * Set date
     *
     * @param string $date
     *
     * @return DemandeAnalyse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return DemandeAnalyse
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
     * Set client
     *
     * @param \Analyses\AnalysesBundle\Entity\Client $client
     *
     * @return DemandeAnalyse
     */
    public function setClient(\Analyses\AnalysesBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Analyses\AnalysesBundle\Entity\Client
     */
    public function getClient()
    {
        return $this->client;
    }
}
