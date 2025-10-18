<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RfDiagInfoItem
 */
class RfDiagInfoItem extends BaseModel
{
    /** @var string */
    public string $asset_id;
    /** @var string */
    public string $asset_name;
    /** @var string */
    public string $client_name;
    /** @var integer */
    public int $duration;
    /** @var integer */
    public int $end_time;
    /** @var integer */
    public int $frame_count;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $map_id;
    /** @var string */
    public string $name;
    /** @var string */
    public string $next;
    /** @var string */
    public string $raw_events;
    /** @var boolean */
    public bool $ready;
    /** @var string */
    public string $sdkclient_id;
    /** @var string */
    public string $sdkclient_name;
    /** @var string */
    public string $sdkclient_uuid;
    /** @var integer */
    public int $start_time;
    /** @var mixed */
    public $type;
    /** @var string */
    public string $url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}