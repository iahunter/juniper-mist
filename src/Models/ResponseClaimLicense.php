<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseClaimLicense
 */
class ResponseClaimLicense extends BaseModel
{
    /** @var mixed */
    public $inventory_added;
    /** @var mixed */
    public $inventory_duplicated;
    /** @var mixed */
    public $inventory_pending;
    /** @var mixed */
    public $license_added;
    /** @var mixed */
    public $license_duplicated;
    /** @var mixed */
    public $license_error;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}