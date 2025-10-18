<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseRouter128tRegisterCmd
 */
class ResponseRouter128tRegisterCmd extends BaseModel
{
    /** @var string */
    public string $conductor_cmd;
    /** @var string */
    public string $registration_code;
    /** @var string */
    public string $router_shell_cmd;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}