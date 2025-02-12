<?php

declare(strict_types=1);

namespace Klongchu\HL7\Segments;

use Klongchu\HL7\Segment;

/**
 * AIL segment class
 *
* AIL: Appointment Information - Location Resource
*
* The AIL segment contains information about location resources (meeting rooms, operating rooms, examination rooms, or
* other locations) that can be scheduled. Resources included in a transaction using this segment are assumed to be
* controlled by a schedule on a schedule filler application. Resources not controlled by a schedule are not identified
* on a schedule request using this segment. Location resources are identified with this specific segment because of the
* specific encoding of locations used by the HL7 specification.

 * Ref: http://hl7-definition.caristix.com:9010/Default.aspx?version=HL7+v2.5.1&segment=AIL
 */
class RXR extends Segment
{
    /**
     * Index of this segment. Incremented for every new segment of this class created
     * @var int
     */
    protected static $setId = 1;

    public function __construct(array $fields = null)
    {
        parent::__construct('RXR', $fields);
        $this->setID($this::$setId++);
    }

    public function __destruct()
    {
        $this->setID($this::$setId--);
    }

    public static function resetIndex(int $index = 1): void
    {
        self::$setId = $index;
    }

    public function setID(int $value, int $position = 1)
    {
        return $this->setField($position, $value);
    }


    public function getID(int $position = 1)
    {
        return $this->getField($position);
    }

    public function getAdministrationMethod(int $position = 4)
    {
        return $this->getField($position);
    }

}
