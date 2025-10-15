<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class RfDiagInfoItem extends BaseModel
{
    public string $asset_id;
    public string $asset_name;
    public string $client_name;
    public int $duration;
    public int $end_time;
    public int $frame_count;
    public $id;
    public string $mac;
    public string $map_id;
    public string $name;
    public string $next;
    public string $raw_events;
    public bool $ready;
    public string $sdkclient_id;
    public string $sdkclient_name;
    public string $sdkclient_uuid;
    public int $start_time;
    public $type;
    public string $url;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}