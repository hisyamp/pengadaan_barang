<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OutProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            return [
           
            'id_transaksi_out' => 'required',
            'barang_id' => 'required',
            'jumlah_keluar' => 'required|integer'

        ];
        ];
    }
}
