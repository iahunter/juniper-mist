<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class Webhook extends BaseModel
{
    public $assetfilter_ids;
    public $created_time;
    public bool $enabled;
    public bool $for_site;
    public array $headers;
    public $id;
    public $modified_time;
    public string $name;
    public string $oauth2_client_id;
    public string $oauth2_client_secret;
    public $oauth2_grant_type;
    public string $oauth2_password;
    public $oauth2_scopes;
    public string $oauth2_token_url;
    public string $oauth2_username;
    public $org_id;
    public string $secret;
    public bool $single_event_per_message;
    public $site_id;
    public string $splunk_token;
    public $topics;
    public $type;
    public string $url;
    public bool $verify_cert;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}