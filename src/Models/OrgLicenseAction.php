<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model OrgLicenseAction
 */
class OrgLicenseAction extends BaseModel
{
    /** @var string */
    public string $amendment_id;
    /** @var string */
    public string $dst_org_id;
    /** @var string */
    public string $notes;
    /** @var mixed */
    public $op;
    /** @var integer */
    public int $quantity;
    /** @var string */
    public string $subscription_id;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}