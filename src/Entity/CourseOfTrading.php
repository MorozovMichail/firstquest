<?php

namespace App\Entity;


use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as JMS;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseOfTradingRepository")
 */
class CourseOfTrading
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }

//<column name="SECNAME" type="string"/>
    /**
     * @ORM\Column(type="string", length=255)
     * @JMS\Type("string")
     */
    public $SECNAME;
//<column name="SHORTNAME" type="string"/>
    /**
     * @ORM\Column(type="string", length=255)
     * @JMS\Type("string")
     */
    public $SHORTNAME;
//<column name="LATNAME" type="string"/>
    /**
     * @JMS\Type("string")
     * @ORM\Column(type="string", length=255)
     */

    public $LATNAME;

    /**
     * @JMS\Type("float")
     * @ORM\Column(type="float")
     */
    public $LASTTOPREVPRICE;

//<column name="VOLTODAY" type="number"/>
    /**
     * @JMS\Type("float")
     * @ORM\Column(type="float")
     */
    public $VOLTODAY;

//<column name="LASTOFFER" type="number"/>
    /**
     * @JMS\Type("float")
     * @ORM\Column(type="float")
     */
    public $LASTOFFER;

//<column name="SYSTIME" type="datetime"/>
    /**
     * @JMS\Type("datetime")
     * @ORM\Column(type="datetime")
     */
    public $SYSTIME;

    /**
     * @return mixed
     */
    public function getSECNAME()
    {
        return $this->SECNAME;
    }

    /**
     * @param mixed $SECNAME
     */
    public function setSECNAME($SECNAME): void
    {
        $this->SECNAME = $SECNAME;
    }

    /**
     * @return mixed
     */
    public function getSHORTNAME()
    {
        return $this->SHORTNAME;
    }

    /**
     * @param mixed $SHORTNAME
     */
    public function setSHORTNAME($SHORTNAME): void
    {
        $this->SHORTNAME = $SHORTNAME;
    }

    /**
     * @return mixed
     */
    public function getLATNAME()
    {
        return $this->LATNAME;
    }

    /**
     * @param mixed $LATNAME
     */
    public function setLATNAME($LATNAME): void
    {
        $this->LATNAME = $LATNAME;
    }

    /**
     * @return mixed
     */
    public function getLASTTOPREVPRICE()
    {
        return $this->LASTTOPREVPRICE;
    }

    /**
     * @param mixed $LASTTOPREVPRICE
     */
    public function setLASTTOPREVPRICE($LASTTOPREVPRICE): void
    {
        $this->LASTTOPREVPRICE = $LASTTOPREVPRICE;
    }

    /**
     * @return mixed
     */
    public function getVOLTODAY()
    {
        return $this->VOLTODAY;
    }

    /**
     * @param mixed $VOLTODAY
     */
    public function setVOLTODAY($VOLTODAY): void
    {
        $this->VOLTODAY = $VOLTODAY;
    }

    /**
     * @return mixed
     */
    public function getLASTOFFER()
    {
        return $this->LASTOFFER;
    }

    /**
     * @param mixed $LASTOFFER
     */
    public function setLASTOFFER($LASTOFFER): void
    {
        $this->LASTOFFER = $LASTOFFER;
    }

    /**
     * @return mixed
     */
    public function getSYSTIME()
    {
        return $this->SYSTIME;
    }

    /**
     * @param mixed $SYSTIME
     */
    public function setSYSTIME($SYSTIME): void
    {
        $this->SYSTIME = $SYSTIME;
    }



}
