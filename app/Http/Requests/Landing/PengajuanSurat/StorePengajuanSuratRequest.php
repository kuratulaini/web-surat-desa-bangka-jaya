<?php

namespace App\Http\Requests\Landing\PengajuanSurat;

use App\Models\PengajuanSurat;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Validation\Rule;

class StorePengajuanSuratRequest extends FormRequest
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
            'user_id' => [ 'nullable', 'integer'],
            'layanan_id' => ['nullable', 'integer'],
            'tanggal_pengajuan' => ['nullable', 'date'],
            'tanggal_selesai' => [ 'nullable', 'date'],
            'status' => [ 'nullable', 'integer'],
        ];
    }
}
