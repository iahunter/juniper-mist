<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model AamwProfileCategory
 */
class AamwProfileCategory extends BaseModel
{
    /** @var mixed */
    public $category;
    /** @var boolean */
    public bool $hash_lookup_only;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}