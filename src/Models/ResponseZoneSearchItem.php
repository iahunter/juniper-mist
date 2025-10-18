<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseZoneSearchItem
 */
class ResponseZoneSearchItem extends BaseModel
{
    /** @var integer */
    public int $enter;
    /** @var string */
    public string $scope;
    /** @var mixed */
    public $timestamp;
    /** @var string */
    public string $user;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}