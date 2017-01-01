<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillonhastest
 *
 * @ORM\Table(name="echantillonhastest")
 * @ORM\Entity(repositoryClass="Analyses\AnalysesBundle\Repository\EchantillonhastestRepository")
 */
class Echantillonhastest {

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Test")
     * @ORM\JoinColumn(name="test_id", referencedColumnName="id")
     */
    private $test;

    /**
     * @ORM\ManyToOne(targetEntity="EchantillonItem", inversedBy="echantillohnHastests")
     * @ORM\JoinColumn(name="echantillonItem_id", referencedColumnName="id")
     */
    private $echantillonItem;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId() {
        return $this->id;
    }

    /**
     * Set echantillonItem
     *
     * @param \Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem
     *
     * @return Echantillonhastest
     */
    public function setEchantillonItem(\Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem = null) {
        $this->echantillonItem = $echantillonItem;

        return $this;
    }

    /**
     * Get echantillonItem
     *
     * @return \Analyses\AnalysesBundle\Entity\EchantillonItem
     */
    public function getEchantillonItem() {
        return $this->echantillonItem;
    }

    /**
     * Set test
     *
     * @param \Analyses\AnalysesBundle\Entity\Test $test
     *
     * @return Echantillonhastest
     */
    public function setTest(\Analyses\AnalysesBundle\Entity\Test $test = null) {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \Analyses\AnalysesBundle\Entity\Test
     */
    public function getTest() {
        return $this->test;
    }

}
