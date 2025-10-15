<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Admin extends BaseModel
{
    public $admin_id;
    public $compliance_status;
    public string $email;
    public bool $enable_two_factor;
    public int $expire_time;
    public string $first_name;
    public int $hours;
    public string $last_name;
    public string $name;
    public bool $no_tracking;
    public bool $oauth_google;
    public float $password_modified_time;
    public string $phone;
    public string $phone2;
    public $privileges;
    public int $session_expiry;
    public $tags;
    public bool $two_factor_verified;
    public bool $via_sso;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}