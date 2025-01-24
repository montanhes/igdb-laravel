<?php

declare(strict_types=1);

namespace MarcReichel\IGDBLaravel\Events;

use Illuminate\Http\Request;
use MarcReichel\IGDBLaravel\Models\Genre;

class GenreCreated extends Event
{
    public function __construct(public Genre $data, Request $request)
    {
        parent::__construct($request);
    }
}
