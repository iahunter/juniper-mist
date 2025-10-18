<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookDelivery
 */
class WebhookDelivery extends BaseModel
{
    /** @var string */
    public string $error;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $req_headers;
    /** @var string */
    public string $req_payload;
    /** @var string */
    public string $req_url;
    /** @var string */
    public string $resp_body;
    /** @var string */
    public string $resp_headers;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $status;
    /** @var integer */
    public int $status_code;
    /** @var mixed */
    public $timestamp;
    /** @var mixed */
    public $topic;
    /** @var string */
    public string $webhook_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}