<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * client
 *
 * @ORM\Table(name="client")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\clientRepository")
 */
class client {

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
     * @ORM\Column(name="cin", type="string", length=255)
     */
    private $cin;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255)
     */
    private $age;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateNaissance", type="date")
     */
    private $dateNaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="commentaire", type="string", length=255)
     */
    private $commentaire;

    /**
     * @ORM\ManyToOne(targetEntity="Laboratoire", inversedBy="clients")
     * @ORM\JoinColumn(name="laboratoire_id", referencedColumnName="id")
     */
    private $laboratoire;

    /**
     * @ORM\OneToMany(targetEntity="DemandeAnalyse", mappedBy="client")
     */
    private $demandesAnalyses;

    /**
     * Get id
     *
     * @return int
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set cin
     *
     * @param string $cin
     *
     * @return client
     */
    public function setCin($cin) {
        $this->cin = $cin;

        return $this;
    }

    /**
     * Get cin
     *
     * @return string
     */
    public function getCin() {
        return $this->cin;
    }

    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return client
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return client
     */
    public function setPrenom($prenom) {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom() {
        return $this->prenom;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return client
     */
    public function setAdresse($adresse) {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse() {
        return $this->adresse;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return client
     */
    public function setEmail($email) {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail() {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return client
     */
    public function setTel($tel) {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel() {
        return $this->tel;
    }

    /**
     * Set age
     *
     * @param string $age
     *
     * @return client
     */
    public function setAge($age) {
        $this->age = $age;

        return $this;
    }

    /**
     * Get age
     *
     * @return string
     */
    public function getAge() {
        return $this->age;
    }

    /**
     * Set dateNaissance
     *
     * @param \DateTime $dateNaissance
     *
     * @return client
     */
    public function setDateNaissance($dateNaissance) {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    /**
     * Get dateNaissance
     *
     * @return \DateTime
     */
    public function getDateNaissance() {
        return $this->dateNaissance;
    }

    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return client
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
     * Set laboratoire
     *
     * @param \Analyses\AnalysesBundle\Entity\Laboratoire $laboratoire
     *
     * @return client
     */
    public function setLaboratoire(\Analyses\AnalysesBundle\Entity\Laboratoire $laboratoire = null) {
        $this->laboratoire = $laboratoire;

        return $this;
    }

    /**
     * Get laboratoire
     *
     * @return \Analyses\AnalysesBundle\Entity\Laboratoire
     */
    public function getLaboratoire() {
        return $this->laboratoire;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->demandesAnalyses = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add demandesAnalysis
     *
     * @param \Analyses\AnalysesBundle\Entity\DemandeAnalyse $demandesAnalysis
     *
     * @return client
     */
    public function addDemandesAnalysis(\Analyses\AnalysesBundle\Entity\DemandeAnalyse $demandesAnalysis)
    {
        $this->demandesAnalyses[] = $demandesAnalysis;

        return $this;
    }

    /**
     * Remove demandesAnalysis
     *
     * @param \Analyses\AnalysesBundle\Entity\DemandeAnalyse $demandesAnalysis
     */
    public function removeDemandesAnalysis(\Analyses\AnalysesBundle\Entity\DemandeAnalyse $demandesAnalysis)
    {
        $this->demandesAnalyses->removeElement($demandesAnalysis);
    }

    /**
     * Get demandesAnalyses
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemandesAnalyses()
    {
        return $this->demandesAnalyses;
    }
}
