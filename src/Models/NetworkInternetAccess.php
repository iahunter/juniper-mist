<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model NetworkInternetAccess
 */
class NetworkInternetAccess extends BaseModel
{
    /** @var boolean */
    public bool $create_simple_service_policy;
    /** @var mixed */
    public $destination_nat;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $restricted;
    /** @var mixed */
    public $static_nat;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}