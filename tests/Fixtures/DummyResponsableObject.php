<?php

namespace Lucasmichot\LaravelResponsable\Tests\Fixtures;

use Illuminate\Http\Response;
use Lucasmichot\LaravelResponsable\Contracts\Responsable;

class DummyResponsableObject extends DummyJsonableObject implements Responsable
{
    /**
     * Generate for this response.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function getResponse()
    {
        return new Response($this->toArray(), 200, ['responsable' => 'set']);
    }
}
