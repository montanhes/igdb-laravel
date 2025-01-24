<?php

declare(strict_types=1);

namespace MarcReichel\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\EventNetwork;

class EventNetworkCreated extends Event
{
    public function __construct(public EventNetwork $data, Request $request)
    {
        parent::__construct($request);
    }
}
