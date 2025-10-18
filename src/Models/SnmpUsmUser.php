<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model SnmpUsmUser
 */
class SnmpUsmUser extends BaseModel
{
    /** @var string */
    public string $authentication_password;
    /** @var mixed */
    public $authentication_type;
    /** @var string */
    public string $encryption_password;
    /** @var mixed */
    public $encryption_type;
    /** @var string */
    public string $name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}