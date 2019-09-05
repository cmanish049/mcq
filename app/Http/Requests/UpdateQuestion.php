<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Question;
class UpdateQuestion extends FormRequest
{
    public function __construct(Question $question) {
        $this->question = $question;
    }
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'question' => 'required|min:10'
        ];
    }
}
