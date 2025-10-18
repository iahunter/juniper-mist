<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model UserMacImport
 */
class UserMacImport extends BaseModel
{
    /** @var mixed */
    public $added;
    /** @var mixed */
    public $errors;
    /** @var mixed */
    public $updated;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}