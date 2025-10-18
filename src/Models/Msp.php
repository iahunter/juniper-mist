<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Msp
 */
class Msp extends BaseModel
{
    /** @var boolean */
    public bool $allow_mist;
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $logo_url;
    /** @var mixed */
    public $modified_time;
    /** @var string */
    public string $name;
    /** @var mixed */
    public $tier;
    /** @var string */
    public string $url;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}