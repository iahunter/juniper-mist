<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class AccountOauthInfoAccount extends BaseModel
{
    public string $account_id;
    public string $auto_probe_subnet;
    public string $client_id;
    public string $cloud_name;
    public string $company;
    public bool $enable_probe;
    public string $error;
    public $errors;
    public string $instance_url;
    public string $last_status;
    public int $last_sync;
    public string $linked_by;
    public float $linked_timestamp;
    public int $max_daily_api_requests;
    public string $name;
    public string $password;
    public string $region;
    public $regions;
    public string $service_account_name;
    public $service_connections;
    public string $smartgroup_name;
    public string $tsg_id;
    public string $username;
    public string $webhook_auth_type;
    public bool $webhook_enabled;
    public string $webhook_password;
    public string $webhook_url;
    public string $webhook_username;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}