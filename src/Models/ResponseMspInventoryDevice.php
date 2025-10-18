<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseMspInventoryDevice
 */
class ResponseMspInventoryDevice extends BaseModel
{
    /** @var boolean */
    public bool $for_site;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $model;
    /** @var mixed */
    public $org_id;
    /** @var string */
    public string $serial;
    /** @var mixed */
    public $site_id;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}