<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model PskPortalTemplate
 */
class PskPortalTemplate extends BaseModel
{
    /** @var mixed */
    public $alignment;
    /** @var string */
    public string $color;
    /** @var string */
    public string $logo;
    /** @var boolean */
    public bool $poweredBy;
    /** @var boolean */
    public bool $tos;
    /** @var string */
    public string $tosAcceptLabel;
    /** @var string */
    public string $tosError;
    /** @var string */
    public string $tosLink;
    /** @var string */
    public string $tosText;
    /** @var string */
    public string $tosUrl;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}