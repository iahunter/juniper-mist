<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class WebhookAlarmEvent extends BaseModel
{
    public $aps;
    public $bssids;
    public int $count;
    public string $event_id;
    public bool $for_site;
    public $id;
    public $last_seen;
    public $node;
    public $org_id;
    public $site_id;
    public $ssids;
    public $timestamp;
    public string $type;
    public bool $update;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}