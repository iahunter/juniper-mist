<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Login
 */
class Login extends BaseModel
{
    /** @var string */
    public string $email;
    /** @var string */
    public string $password;
    /** @var string */
    public string $two_factor;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}