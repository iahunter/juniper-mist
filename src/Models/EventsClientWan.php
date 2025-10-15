<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class EventsClientWan extends BaseModel
{
    public string $When;
    public string $ev_type;
    public array $metadata;
    public $org_id;
    public bool $random_mac;
    public $site_id;
    public string $text;
    public string $wcid;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}