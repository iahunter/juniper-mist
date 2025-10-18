<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpConfigV2cConfig
 */
class SnmpConfigV2cConfig extends BaseModel
{
    /** @var string */
    public string $authorization;
    /** @var string */
    public string $client_list_name;
    /** @var string */
    public string $community_name;
    /** @var string */
    public string $view;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}