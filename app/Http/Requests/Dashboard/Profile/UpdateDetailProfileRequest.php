<?php

namespace App\Http\Requests\Dashboard\Profile;

use App\Models\DetailUser;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

use Auth;

class UpdateDetailProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'role' => [ 'nullable', 'string', 'max:255'],
            'alamat' => ['required', 'string', 'max:255'],
            'nomor_telpon' => ['required', 'regex:/^([0-9\s\-\+\(\)]*)$/', 'max:12'],
            // 'jenis_kelamin' => ['required', 'string', 'max:255'],
            // 'tanggal_lahir' => ['nullable', 'date']
        ];
    }
}
