<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BankResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'Bank ID' => $this->id,
            'Bank Name' => $this->bank_name,
            'Branch' => $this->branch_name,
            'IFSC Code' => $this->ifsc_code,
            'Balance' => "₹" . $this->balance,
        ];
    }
}
