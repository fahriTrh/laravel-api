<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
{
    public $status;
    public $message;
    public $data;

    public function __construct($status, $message, $resource)
    {
        parent::__construct($resource);

        $this->status = $status;
        $this->message = $message;
        $this->resource = $resource;

    }

    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => $this->status,
            'message' => $this->message,
            'resource' => $this->resource,
        ];
    }
}
