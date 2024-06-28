<?php

namespace App\Http\Requests\Landing\BerkasPengajuan;

use App\Models\BerkasPendukung;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class StoreBerkasRequest extends FormRequest
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
            'id_pengajuan_surat' => [ 'nullable', 'integer'],
            'nama_berkas' => ['nullable', 'string'],
            'url_berkas' => ['nullable', 'string'],
        ];
    }
}
