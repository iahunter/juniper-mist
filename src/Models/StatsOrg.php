<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsOrg extends BaseModel
{
    public string $alarmtemplate_id;
    public bool $allow_mist;
    public $created_time;
    public $id;
    public $modified_time;
    public $msp_id;
    public string $name;
    public int $num_devices;
    public int $num_devices_connected;
    public int $num_devices_disconnected;
    public int $num_inventory;
    public int $num_sites;
    public $orggroup_ids;
    public int $session_expiry;
    public $sle;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}