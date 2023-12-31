<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {

        if($request->isMethod('delete')){
            return [
                'id' => $this->id,
                'email' => $this->email,
                'password' => $this->password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'photo' => $this->photo,
                'status' => 'This Record Deleted'
            ];
        }
        elseif($request->isMethod('put')){
            return [
                'id' => $this->id,
                'email' => $this->email,
                'password' => $this->password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'photo' => $this->photo,
                'status' => 'This Record Update'
            ];
        }
        else
        {
            return [
                'id' => $this->id,
                'email' => $this->email,
                'password' => $this->password,
                'first_name' => $this->first_name,
                'last_name' => $this->last_name,
                'photo' => $this->photo,
            ];
        }
    }
}
