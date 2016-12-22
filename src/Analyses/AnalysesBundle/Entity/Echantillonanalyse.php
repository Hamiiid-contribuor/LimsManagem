<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillonanalyse
 *
 * @ORM\Table(name="echantillonanalyse", indexes={@ORM\Index(name="echant", columns={"echantillon_id"}), @ORM\Index(name="analyseref", columns={"analyse_id"})})
 * @ORM\Entity
 */
class Echantillonanalyse
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="string", length=244)
     */
    private $date;

    /**
     * @var \Analyse
     *
     * @ORM\ManyToOne(targetEntity="Analyse")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="analyse_id", referencedColumnName="id")
     * })
     */
    private $analyse;

    /**
     * @var \Echantillon
     *
     * @ORM\ManyToOne(targetEntity="Echantillon")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echantillon_id", referencedColumnName="id")
     * })
     */
    private $echantillon;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Echantillonanalyse
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set analyse
     *
     * @param \Analyses\AnalysesBundle\Entity\Analyse $analyse
     *
     * @return Echantillonanalyse
     */
    public function setAnalyse(\Analyses\AnalysesBundle\Entity\Analyse $analyse = null)
    {
        $this->analyse = $analyse;

        return $this;
    }

    /**
     * Get analyse
     *
     * @return \Analyses\AnalysesBundle\Entity\Analyse
     */
    public function getAnalyse()
    {
        return $this->analyse;
    }

    /**
     * Set echantillon
     *
     * @param \Analyses\AnalysesBundle\Entity\Echantillon $echantillon
     *
     * @return Echantillonanalyse
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
