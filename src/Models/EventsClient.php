<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventsClient extends BaseModel
{
    public string $ap;
    public $band;
    public string $bssid;
    public int $channel;
    public $key_mgmt;
    public $proto;
    public string $ssid;
    public string $text;
    public $timestamp;
    public string $type;
    public int $type_code;
    public string $wlan_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}