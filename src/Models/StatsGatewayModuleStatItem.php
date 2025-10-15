<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class StatsGatewayModuleStatItem extends BaseModel
{
    public string $backup_version;
    public string $bios_version;
    public string $cpld_version;
    public $fans;
    public string $fpga_version;
    public $last_seen;
    public bool $locating;
    public string $mac;
    public string $model;
    public $network_resources;
    public string $optics_cpld_version;
    public string $pending_version;
    public $poe;
    public string $poe_version;
    public string $power_cpld_version;
    public $psus;
    public string $re_fpga_version;
    public string $recovery_version;
    public string $serial;
    public string $status;
    public $temperatures;
    public string $tmc_fpga_version;
    public string $uboot_version;
    public int $uptime;
    public $vc_links;
    public string $vc_mode;
    public string $vc_role;
    public string $vc_state;
    public string $version;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}