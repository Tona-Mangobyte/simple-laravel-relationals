<?php

namespace Tests\Validation;

use App\Models\Article;
use Illuminate\Validation\Validator;
use Tests\TestCase;

class ArticleValidationTest extends TestCase
{
    /** @test */
    public function testValidationRequired() {
        $article = new Article();
        $trans = $article->getIlluminateArrayTranslator();
        $data = ['title' => '', 'content' => ''];
        $validator = new Validator($trans, $data, $article->rules(), $article->messages());
        $method_name = 'addFailure';
        $messages = json_decode($validator->messages());
        $this->assertTrue(method_exists($validator, $method_name));
        $this->assertEquals('Title is required', $messages->{'title'}[0]);
        $this->assertEquals('Content is required', $messages->{'content'}[0]);
    }
}
