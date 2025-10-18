<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseClaimLicenseLicenseItem
 */
class ResponseClaimLicenseLicenseItem extends BaseModel
{
    /** @var integer */
    public int $end;
    /** @var integer */
    public int $quantity;
    /** @var integer */
    public int $start;
    /** @var string */
    public string $type;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}