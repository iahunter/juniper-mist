<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UserApitoken
 */
class UserApitoken extends BaseModel
{
    /** @var mixed */
    public $created_time;
    /** @var mixed */
    public $id;
    /** @var string */
    public string $key;
    /** @var integer */
    public int $last_used;
    /** @var string */
    public string $name;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}