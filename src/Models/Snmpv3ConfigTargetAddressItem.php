<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Snmpv3ConfigTargetAddressItem
 */
class Snmpv3ConfigTargetAddressItem extends BaseModel
{
    /** @var string */
    public string $address;
    /** @var string */
    public string $address_mask;
    /** @var string */
    public string $port;
    /** @var string */
    public string $tag_list;
    /** @var string */
    public string $target_address_name;
    /** @var string */
    public string $target_parameters;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}