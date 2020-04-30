<?php
namespace App\Model;
use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlAttribute;
use Doctrine\ORM\Mapping as ORM;



/**
 * @ORM\Entity(repositoryClass="App\Repository\CourseOfTradingRepository")
 */
class Content {
    /**
     * @XmlAttribute
     * @Type("string")
     * @ORM\Column(type="string")
     * @SerializedName("SECNAME")
     * @var string │ null
     */
    protected $SECNAME;
    /**
     * @XmlAttribute
     * @Type("string")
     * @ORM\Column(type="string")
     * @SerializedName("SHORTNAME")
     * @var string │ null
     */
    protected $SHORTNAME;
    /**
     * @XmlAttribute
     * @Type("string")
     * @ORM\Column(type="string")
     * @SerializedName("LATNAME")
     * @var string │ null
     */
    protected $LATNAME;

    /**
     * @XmlAttribute
     * @Type("float")
     * @ORM\Column(type="float")
     * @SerializedName("LASTOFFER")
     * @var float │ null
     */
    protected $LASTOFFER;
    /**

     * @XmlAttribute
     * @Type("float")
     * @ORM\Column(type="float")
     * @SerializedName("LASTTOPREVPRICE")
     * @var float │ null
     */
    protected $LASTTOPREVPRICE;

    /**
     * @XmlAttribute
     * @Type("float")
     * @ORM\Column(type="float")
     * @SerializedName("VOLTODAY")
     * @var float │ null
     */
    protected $VOLTODAY;
    /**
     * @XmlAttribute
     * @Type("string")
     * @ORM\Column(type="string")
     * @SerializedName("SYSTIME")
     * @var string │ null
     */
    protected $SYSTIME;

    /**
     * @return string
     */
    public function getSYSTIME(): string
    {
        return $this->SYSTIME;
    }

    /**
     * @return float
     */
    public function getLASTOFFER(): float
    {
        return $this->LASTOFFER;
    }

    /**
     * @return float
     */
    public function getLASTTOPREVPRICE(): float
    {
        return $this->LASTTOPREVPRICE;
    }

    /**
     * @return float
     */
    public function getVOLTODAY(): float
    {
        return $this->VOLTODAY;
    }


    /**
     * @return string │ null
     */
    public function getSECNAME(): string
    {
        return $this->SECNAME;
    }

    /**
     * @return string │ null
     */
    public function getSHORTNAME(): string
    {
        return $this->SHORTNAME;
    }

    /**
     * @return string │ null
     */
    public function getLATNAME(): string
    {
        return $this->LATNAME;
    }


















    /**
     * @param string $SECNAME
     */
    public function setSECNAME(string $SECNAME): void
    {
        $this->SECNAME = $SECNAME;
    }

    /**
     * @param string $SHORTNAME
     */
    public function setSHORTNAME(string $SHORTNAME): void
    {
        $this->SHORTNAME = $SHORTNAME;
    }

    /**
     * @param string $LATNAME
     */
    public function setLATNAME(string $LATNAME): void
    {
        $this->LATNAME = $LATNAME;
    }

    /**
     * @param float $LASTOFFER
     */
    public function setLASTOFFER(float $LASTOFFER): void
    {
        $this->LASTOFFER = $LASTOFFER;
    }

    /**
     * @param float $LASTTOPREVPRICE
     */
    public function setLASTTOPREVPRICE(float $LASTTOPREVPRICE): void
    {
        $this->LASTTOPREVPRICE = $LASTTOPREVPRICE;
    }

    /**
     * @param float $VOLTODAY
     */
    public function setVOLTODAY(float $VOLTODAY): void
    {
        $this->VOLTODAY = $VOLTODAY;
    }

    /**
     * @param string $SYSTIME
     */
    public function setSYSTIME(string $SYSTIME): void
    {
        $this->SYSTIME = $SYSTIME;
    }


}







