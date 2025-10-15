<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class ResponseClaimLicense extends BaseModel
{
    public $inventory_added;
    public $inventory_duplicated;
    public $inventory_pending;
    public $license_added;
    public $license_duplicated;
    public $license_error;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}