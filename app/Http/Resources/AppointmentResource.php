<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AppointmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'doctor_id' => $this->doctor_id,
            'patient' =>  new PatientResource($this->patient),
            'appointment_date' => $this->appointment_date,
            'status' => $this->status,
            'note' => $this->note
        ];
    }
}
