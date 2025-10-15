<?php
declare(strict_types=1);

namespace Iahunter\JuniperMist\Models;

use Iahunter\JuniperMist\Models\BaseModel;

class TicketCommentsAttachment extends BaseModel
{
    public string $content_type;
    public string $content_url;
    public int $created_at;
    public string $file_name;
    public $id;
    public int $size_in_bytes;

    public function __construct(array $data = [])
    {
        foreach ($data as $k => $v) {
            if (property_exists($this, $k)) {
                $this->$k = $v;
            }
        }
    }
}