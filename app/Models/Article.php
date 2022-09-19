<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
      'title',
      'content'
    ];

    public function rules() {
        return [
            'title' => 'required',
            'content' => 'required',
        ];
    }

    public function getIlluminateArrayTranslator(): Translator
    {
        return new Translator(
            new ArrayLoader, 'en'
        );
    }

    /*
     * display validation messages
     * @return array
     * ***/
    public function messages()
    {
        return [
            'title.required' => 'Title is required',
            'content.required' => 'Content is required',
        ];
    }
}
