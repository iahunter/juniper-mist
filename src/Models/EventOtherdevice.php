<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventOtherdevice
 */
class EventOtherdevice extends BaseModel
{
    /** @var string */
    public string $device_mac;
    /** @var string */
    public string $mac;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $text;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var string */
    public string $vendor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}