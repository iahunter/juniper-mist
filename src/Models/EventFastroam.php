<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventFastroam
 */
class EventFastroam extends BaseModel
{
    /** @var string */
    public string $ap_mac;
    /** @var string */
    public string $client_mac;
    /** @var string */
    public string $fromap;
    /** @var number */
    public float $latency;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $subtype;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}