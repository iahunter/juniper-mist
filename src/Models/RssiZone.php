<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RssiZone
 */
class RssiZone extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $devices;
    /** @var boolean */
    public bool $for_site;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}