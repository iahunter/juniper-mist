<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseCertificate
 */
class ResponseCertificate extends BaseModel
{
    /** @var string */
    public string $cert;
    /** @var string */
    public string $pending_cert;
    /** @var integer */
    public int $pending_cert_expiry;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}