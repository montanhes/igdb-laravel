<?php

declare(strict_types=1);

namespace MarcReichel\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Platform;

class PlatformCreated extends Event
{
    public Platform $data;

    public function __construct(Platform $data, Request $request)
    {
        parent::__construct($request);
        $this->data = $data;
    }
}
