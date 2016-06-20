<?php

namespace Lucasmichot\LaravelResponsable\Tests\Fixtures;

use Illuminate\Http\JsonResponse;
use Lucasmichot\LaravelResponsable\Contracts\Responsable;

class DummyJsonResponsableObject extends DummyJsonableObject implements Responsable
{
    /**
     * Generate for this response.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function getResponse()
    {
        return new JsonResponse($this->toArray(), 200, ['responsable_json' => 'set']);
    }
}
