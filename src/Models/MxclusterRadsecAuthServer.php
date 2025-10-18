<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model MxclusterRadsecAuthServer
 */
class MxclusterRadsecAuthServer extends BaseModel
{
    /** @var string */
    public string $host;
    /** @var boolean */
    public bool $inband_status_check;
    /** @var integer */
    public int $inband_status_interval;
    /** @var boolean */
    public bool $keywrap_enabled;
    /** @var mixed */
    public $keywrap_format;
    /** @var string */
    public string $keywrap_kek;
    /** @var string */
    public string $keywrap_mack;
    /** @var integer */
    public int $port;
    /** @var integer */
    public int $retry;
    /** @var string */
    public string $secret;
    /** @var mixed */
    public $ssids;
    /** @var integer */
    public int $timeout;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}