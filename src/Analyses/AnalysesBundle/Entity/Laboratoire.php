<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Laboratoire
 *
 * @ORM\Table(name="laboratoire")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\LaboratoireRepository")
 */
class Laboratoire
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="logo", type="string", length=255)
     */
    private $logo;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="email1", type="string", length=255)
     */
    private $email1;

    /**
     * @var string
     *
     * @ORM\Column(name="email2", type="string", length=255)
     */
    private $email2;

    /**
     * @var string
     *
     * @ORM\Column(name="site", type="string", length=255)
     */
    private $site;

     /**
     * @ORM\OneToMany(targetEntity="Analyse", mappedBy="Laboratoire")
     */
    private $analyses ;

    
      /**
     * @ORM\ManyToOne(targetEntity="Domaine")
     * @ORM\JoinColumn(name="domaine_id", referencedColumnName="id")
     */
    private $domaine ; 
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Laboratoire
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }
    
     /**
     * @ORM\OneToMany(targetEntity="Client", mappedBy="laboratoire")
     */
    private $clients ; 

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return Laboratoire
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set logo
     *
     * @param string $logo
     *
     * @return Laboratoire
     */
    public function setLogo($logo)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return Laboratoire
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return Laboratoire
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set email1
     *
     * @param string $email1
     *
     * @return Laboratoire
     */
    public function setEmail1($email1)
    {
        $this->email1 = $email1;

        return $this;
    }

    /**
     * Get email1
     *
     * @return string
     */
    public function getEmail1()
    {
        return $this->email1;
    }

    /**
     * Set email2
     *
     * @param string $email2
     *
     * @return Laboratoire
     */
    public function setEmail2($email2)
    {
        $this->email2 = $email2;

        return $this;
    }

    /**
     * Get email2
     *
     * @return string
     */
    public function getEmail2()
    {
        return $this->email2;
    }

    /**
     * Set site
     *
     * @param string $site
     *
     * @return Laboratoire
     */
    public function setSite($site)
    {
        $this->site = $site;

        return $this;
    }

    /**
     * Get site
     *
     * @return string
     */
    public function getSite()
    {
        return $this->site;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->analyses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add analysis
     *
     * @param \Analyses\AnalysesBundle\Entity\Analyse $analysis
     *
     * @return Laboratoire
     */
    public function addAnalysis(\Analyses\AnalysesBundle\Entity\Analyse $analysis)
    {
        $this->analyses[] = $analysis;

        return $this;
    }

    /**
     * Remove analysis
     *
     * @param \Analyses\AnalysesBundle\Entity\Analyse $analysis
     */
    public function removeAnalysis(\Analyses\AnalysesBundle\Entity\Analyse $analysis)
    {
        $this->analyses->removeElement($analysis);
    }

    /**
     * Get analyses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getAnalyses()
    {
        return $this->analyses;
    }

    /**
     * Set domaine
     *
     * @param \Analyses\AnalysesBundle\Entity\Domaine $domaine
     *
     * @return Laboratoire
     */
    public function setDomaine(\Analyses\AnalysesBundle\Entity\Domaine $domaine = null)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \Analyses\AnalysesBundle\Entity\Domaine
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * Add client
     *
     * @param \Analyses\AnalysesBundle\Entity\Client $client
     *
     * @return Laboratoire
     */
    public function addClient(\Analyses\AnalysesBundle\Entity\Client $client)
    {
        $this->clients[] = $client;

        return $this;
    }

    /**
     * Remove client
     *
     * @param \Analyses\AnalysesBundle\Entity\Client $client
     */
    public function removeClient(\Analyses\AnalysesBundle\Entity\Client $client)
    {
        $this->clients->removeElement($client);
    }

    /**
     * Get clients
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClients()
    {
        return $this->clients;
    }
}
