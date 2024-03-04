<?php

namespace App\Http\Resources;

use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PassengerFlightsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'passenger' => new PassengerResource($this->passenger),
            'flight' => new FlightsResource($this->flight),
            'class_type' => $this->class_type
        ];
    }
}
