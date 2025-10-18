<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model Hours
 */
class Hours extends BaseModel
{
    /** @var mixed */
    public $fri;
    /** @var mixed */
    public $mon;
    /** @var mixed */
    public $sat;
    /** @var mixed */
    public $sun;
    /** @var mixed */
    public $thu;
    /** @var mixed */
    public $tue;
    /** @var mixed */
    public $wed;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}