<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model VrrpGroup
 */
class VrrpGroup extends BaseModel
{
    /** @var string */
    public string $auth_key;
    /** @var string */
    public string $auth_password;
    /** @var mixed */
    public $auth_type;
    /** @var mixed */
    public $networks;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}