<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventsClient
 */
class EventsClient extends BaseModel
{
    /** @var string */
    public string $ap;
    /** @var mixed */
    public $band;
    /** @var string */
    public string $bssid;
    /** @var integer */
    public int $channel;
    /** @var mixed */
    public $key_mgmt;
    /** @var mixed */
    public $proto;
    /** @var string */
    public string $ssid;
    /** @var string */
    public string $text;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var integer */
    public int $type_code;
    /** @var string */
    public string $wlan_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}