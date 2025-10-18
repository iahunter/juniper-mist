<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

/**
 * Model TicketCommentsAttachment
 */
class TicketCommentsAttachment extends BaseModel
{
    /** @var string */
    public string $content_type;
    /** @var string */
    public string $content_url;
    /** @var integer */
    public int $created_at;
    /** @var string */
    public string $file_name;
    /** @var mixed */
    public $id;
    /** @var integer */
    public int $size_in_bytes;

    public function __construct(array $data = []) { foreach ($data as $k=>$v) { if (property_exists($this,$k)) $this->$k = $v; } }
}