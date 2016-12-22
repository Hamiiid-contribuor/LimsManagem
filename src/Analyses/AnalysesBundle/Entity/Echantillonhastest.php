<?php

namespace Analyses\AnalysesBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Echantillonhastest
 *
 * @ORM\Table(name="echantillonhastest", indexes={@ORM\Index(name="fktest_is", columns={"test_id"}), @ORM\Index(name="fkechnatillohitem", columns={"echantillon_item_id"})})
 * @ORM\Entity
 */
class Echantillonhastest
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
     * @var \EchantillonItem
     *
     * @ORM\ManyToOne(targetEntity="EchantillonItem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="echantillon_item_id", referencedColumnName="id")
     * })
     */
    private $echantillonItem;

    /**
     * @var \Test
     *
     * @ORM\ManyToOne(targetEntity="Test")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="test_id", referencedColumnName="id")
     * })
     */
    private $test;



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
     * Set echantillonItem
     *
     * @param \Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem
     *
     * @return Echantillonhastest
     */
    public function setEchantillonItem(\Analyses\AnalysesBundle\Entity\EchantillonItem $echantillonItem = null)
    {
        $this->echantillonItem = $echantillonItem;

        return $this;
    }

    /**
     * Get echantillonItem
     *
     * @return \Analyses\AnalysesBundle\Entity\EchantillonItem
     */
    public function getEchantillonItem()
    {
        return $this->echantillonItem;
    }

    /**
     * Set test
     *
     * @param \Analyses\AnalysesBundle\Entity\Test $test
     *
     * @return Echantillonhastest
     */
    public function setTest(\Analyses\AnalysesBundle\Entity\Test $test = null)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * Get test
     *
     * @return \Analyses\AnalysesBundle\Entity\Test
     */
    public function getTest()
    {
        return $this->test;
    }
}
