<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model LoginFailures
 */
class LoginFailures extends BaseModel
{
    /** @var string */
    public string $email;
    /** @var integer */
    public int $last_failure_at;
    /** @var integer */
    public int $num_attempts;
    /** @var mixed */
    public $scr_ips;
    /** @var mixed */
    public $user_agents;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}