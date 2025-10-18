<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AamwProfile
 */
class AamwProfile extends BaseModel
{
    /** @var mixed */
    public $categories;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $fallback_action;
    /** @var mixed */
    public $file_action;
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
    /** @var integer */
    public int $verdict_threshold;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}