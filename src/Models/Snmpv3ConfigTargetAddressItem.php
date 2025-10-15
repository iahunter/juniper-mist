<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Snmpv3ConfigTargetAddressItem extends BaseModel
{
    public string $address;
    public string $address_mask;
    public string $port;
    public string $tag_list;
    public string $target_address_name;
    public string $target_parameters;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}