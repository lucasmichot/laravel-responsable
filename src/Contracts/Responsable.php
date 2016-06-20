<?php

namespace Lucasmichot\LaravelResponsable\Contracts;

interface Responsable
{
    /**
     * Generate a response for this object.
     *
     * @return \Illuminate\Http\JsonResponse|\Illuminate\Http\Response
     */
    public function getResponse();
}
