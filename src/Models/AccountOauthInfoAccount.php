<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AccountOauthInfoAccount
 */
class AccountOauthInfoAccount extends BaseModel
{
    /** @var string */
    public string $account_id;
    /** @var string */
    public string $auto_probe_subnet;
    /** @var string */
    public string $client_id;
    /** @var string */
    public string $cloud_name;
    /** @var string */
    public string $company;
    /** @var boolean */
    public bool $enable_probe;
    /** @var string */
    public string $error;
    /** @var mixed */
    public $errors;
    /** @var string */
    public string $instance_url;
    /** @var string */
    public string $last_status;
    /** @var integer */
    public int $last_sync;
    /** @var string */
    public string $linked_by;
    /** @var number */
    public float $linked_timestamp;
    /** @var integer */
    public int $max_daily_api_requests;
    /** @var string */
    public string $name;
    /** @var string */
    public string $password;
    /** @var string */
    public string $region;
    /** @var mixed */
    public $regions;
    /** @var string */
    public string $service_account_name;
    /** @var mixed */
    public $service_connections;
    /** @var string */
    public string $smartgroup_name;
    /** @var string */
    public string $tsg_id;
    /** @var string */
    public string $username;
    /** @var string */
    public string $webhook_auth_type;
    /** @var boolean */
    public bool $webhook_enabled;
    /** @var string */
    public string $webhook_password;
    /** @var string */
    public string $webhook_url;
    /** @var string */
    public string $webhook_username;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}