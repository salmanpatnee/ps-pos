<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    const HTTP_OK = 200;
    const HTTP_CREATED = 201;
    const HTTP_NOT_FOUND = 400;
    const HTTP_INTERNAL_ERROR = 500;


    protected $statusCode = self::HTTP_OK;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;

        return $this;
    }

    public function respondNotFound($message = "Not Found!")
    {
        return $this->setStatusCode(self::HTTP_NOT_FOUND)->respondWithError($message);
    }

    public function respondInternalError($message = "Internal Server Error!")
    {
        return $this->setStatusCode(self::HTTP_INTERNAL_ERROR)->respondWithError($message);
    }

    public function respond(array $data, array $headers = [])
    {
        return response()->json($data, $this->getStatusCode(), $headers);
    }

    public function respondWithError($message)
    {
        return $this->respond([
            'error' => [
                'message'     => $message,
                'status_code' => $this->getStatusCode()
            ]
        ]);
    }

    public function respondCreated($message)
    {
        return $this->setStatusCode(self::HTTP_CREATED)->respond([
            'message' => $message,
            'status_code' => $this->getStatusCode()
        ]);
    }
}
