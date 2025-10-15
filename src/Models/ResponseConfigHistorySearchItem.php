<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseConfigHistorySearchItem extends BaseModel
{
    public int $channel_24;
    public int $channel_5;
    public $radio_macs;
    public $radios;
    public bool $secpolicy_violated;
    public $ssids;
    public $ssids_24;
    public $ssids_5;
    public $timestamp;
    public string $version;
    public $wlans;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}