<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TicketUploadAttachmentsFile
 */
class TicketUploadAttachmentsFile extends BaseModel
{
    /** @var string */
    public string $file;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}