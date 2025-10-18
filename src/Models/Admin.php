<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Admin
 */
class Admin extends BaseModel
{
    /** @var mixed */
    public $admin_id;
    /** @var mixed */
    public $compliance_status;
    /** @var string */
    public string $email;
    /** @var boolean */
    public bool $enable_two_factor;
    /** @var integer */
    public int $expire_time;
    /** @var string */
    public string $first_name;
    /** @var integer */
    public int $hours;
    /** @var string */
    public string $last_name;
    /** @var string */
    public string $name;
    /** @var boolean */
    public bool $no_tracking;
    /** @var boolean */
    public bool $oauth_google;
    /** @var number */
    public float $password_modified_time;
    /** @var string */
    public string $phone;
    /** @var string */
    public string $phone2;
    /** @var mixed */
    public $privileges;
    /** @var integer */
    public int $session_expiry;
    /** @var mixed */
    public $tags;
    /** @var boolean */
    public bool $two_factor_verified;
    /** @var boolean */
    public bool $via_sso;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}