<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class OrgLicenseAction extends BaseModel
{
    public string $amendment_id;
    public string $dst_org_id;
    public string $notes;
    public $op;
    public int $quantity;
    public string $subscription_id;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}