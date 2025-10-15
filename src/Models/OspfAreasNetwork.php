<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OspfAreasNetwork extends BaseModel
{
    public array $auth_keys;
    public string $auth_password;
    public $auth_type;
    public int $bfd_minimum_interval;
    public int $dead_interval;
    public string $export_policy;
    public int $hello_interval;
    public string $import_policy;
    public $interface_type;
    public int $metric;
    public bool $no_readvertise_to_overlay;
    public bool $passive;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}