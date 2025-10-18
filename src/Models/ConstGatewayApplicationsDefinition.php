<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ConstGatewayApplicationsDefinition
 */
class ConstGatewayApplicationsDefinition extends BaseModel
{
    /** @var boolean */
    public bool $app_id;
    /** @var string */
    public string $key;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $ssr_app_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}