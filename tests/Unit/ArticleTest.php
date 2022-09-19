<?php

namespace Tests\Unit;

use App\Models\Article;
use Tests\TestCase;

class ArticleTest extends TestCase
{
    /** @test */
    public function create() {
        $article = new Article([
            'title' => "simple title of article",
            'content' => "simple content"
        ]);
        $isSuccess = $article->save();
        echo "Article Created ";
        $this->assertTrue($isSuccess);
    }
}
