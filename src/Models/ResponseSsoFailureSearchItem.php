<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model ResponseSsoFailureSearchItem
 */
class ResponseSsoFailureSearchItem extends BaseModel
{
    /** @var string */
    public string $detail;
    /** @var string */
    public string $saml_assertion_xml;
    /** @var mixed */
    public $timestamp;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}