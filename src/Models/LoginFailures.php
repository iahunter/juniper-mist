<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class LoginFailures extends BaseModel
{
    public string $email;
    public int $last_failure_at;
    public int $num_attempts;
    public $scr_ips;
    public $user_agents;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}