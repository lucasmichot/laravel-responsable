<?php

namespace Lucasmichot\LaravelResponsable\Factories;

use Lucasmichot\LaravelResponsable\Contracts\Responsable;
use Illuminate\Routing\ResponseFactory as BaseResponseFactory;

class ResponseFactory extends BaseResponseFactory
{
    /**
     * {@inheritdoc}
     */
    public function json($data = [], $status = 200, array $headers = [], $options = 0)
    {
        if ($data instanceof Responsable && $response = $data->getResponse()) {
            return $response;
        }

        return parent::json($data, $status, $headers, $options);
    }
}
