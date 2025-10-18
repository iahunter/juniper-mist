<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Sdkinvite
 */
class Sdkinvite extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var boolean */
    public bool $enabled;
    /** @var integer */
    public int $expire_time;
    /** @var mixed */
    public $id;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $org_id;
    /** @var integer */
    public int $quota;
    /** @var boolean */
    public bool $quota_limited;
    /** @var mixed */
    public $site_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}