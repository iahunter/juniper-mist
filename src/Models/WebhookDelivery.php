<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookDelivery extends BaseModel
{
    public string $error;
    public $id;
    public $org_id;
    public string $req_headers;
    public string $req_payload;
    public string $req_url;
    public string $resp_body;
    public string $resp_headers;
    public $site_id;
    public $status;
    public int $status_code;
    public $timestamp;
    public $topic;
    public string $webhook_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}