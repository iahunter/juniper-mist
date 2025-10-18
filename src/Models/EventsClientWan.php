<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model EventsClientWan
 */
class EventsClientWan extends BaseModel
{
    /** @var string */
    public string $When;
    /** @var string */
    public string $ev_type;
    /** @var object */
    public $metadata;
    /** @var mixed */
    public $org_id;
    /** @var boolean */
    public bool $random_mac;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $text;
    /** @var string */
    public string $wcid;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}