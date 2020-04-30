<?php
namespace App\Model;
use JMS\Serializer\Annotation;
use JMS\Serializer\Annotation\XmlAttribute;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\XmlRoot;
use JMS\Serializer\Annotation\XmlList;




/**
 * @XmlRoot("data")
 */
class ParsXml
{

    /**
     * @Type("array<App\Model\Content>")
     * @XmlList(inline = true, entry = "row")
     * @var array │ null
     */
    protected $content;

    /**
     * @return array
     */
    public function getContent(): array
    {

        return $this->content;
    }





}








