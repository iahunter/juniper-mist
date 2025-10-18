<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventsRogue
 */
class EventsRogue extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var string */
    public string $bssid;
    /** @var integer */
    public int $channel;
    /** @var integer */
    public int $rssi;
    /** @var string */
    public string $ssid;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}