<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgApitoken
 */
class OrgApitoken extends BaseModel
{
    /** @var string */
    public string $created_by;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $key;
    /** @var number */
    public float $last_used;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var mixed */
    public $privileges;
    /** @var mixed */
    public $src_ips;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}