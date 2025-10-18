<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model RfDiag
 */
class RfDiag extends BaseModel
{
    /** @var integer */
    public int $duration;
    /** @var string */
    public string $mac;
    /** @var string */
    public string $name;
    /** @var string */
    public string $sdkclient_id;
    /** @var mixed */
    public $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}