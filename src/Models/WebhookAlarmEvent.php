<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model WebhookAlarmEvent
 */
class WebhookAlarmEvent extends BaseModel
{
    /** @var mixed */
    public $aps;
    /** @var mixed */
    public $bssids;
    /** @var integer */
    public int $count;
    /** @var string */
    public string $event_id;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $last_seen;
    /** @var mixed */
    public $node;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;
    /** @var mixed */
    public $ssids;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $type;
    /** @var boolean */
    public bool $update;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}