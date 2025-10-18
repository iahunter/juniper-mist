<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventsDeviceAp
 */
class EventsDeviceAp extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $apfw;
    /** @var integer */
    public int $count;
    /** @var string */
    public string $device_type;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $port_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $text;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}