<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Alarm extends BaseModel
{
    public string $ack_admin_id;
    public string $ack_admin_name;
    public bool $acked;
    public int $acked_time;
    public $aps;
    public $bssids;
    public int $count;
    public $gateways;
    public string $group;
    public $hostnames;
    public $id;
    public float $last_seen;
    public string $note;
    public $org_id;
    public int $resolved_time;
    public string $severity;
    public $site_id;
    public $ssids;
    public $status;
    public $switches;
    public $timestamp;
    public string $type;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}