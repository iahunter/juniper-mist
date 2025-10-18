<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Webhook
 */
class Webhook extends BaseModel
{
    /** @var mixed */
    public $assetfilter_ids;
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $enabled;
    /** @var boolean */
    public bool $for_site;
    /** @var object */
    public $headers;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var string */
    public string $oauth2_client_id;
    /** @var string */
    public string $oauth2_client_secret;
    /** @var mixed */
    public $oauth2_grant_type;
    /** @var string */
    public string $oauth2_password;
    /** @var mixed */
    public $oauth2_scopes;
    /** @var string */
    public string $oauth2_token_url;
    /** @var string */
    public string $oauth2_username;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $secret;
    /** @var boolean */
    public bool $single_event_per_message;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $splunk_token;
    /** @var mixed */
    public $topics;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $url;
    /** @var boolean */
    public bool $verify_cert;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}