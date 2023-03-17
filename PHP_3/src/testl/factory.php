<?php



abstract class AbstractArticle
{
    private $text;

    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function quoteSpechialChars(): void
    {
        echo 'Переводим спец. символы в html мнемоники';
    }

    abstract public function render(): void;
}


class HtmlArticle extends AbstractArticle
{
    public function render(): void
    {
        echo 'Выводим статью в html';
    }
}

class RssArticle extends AbstractArticle
{
    public function render(): void
    {
        echo 'Выводим статью в rss';
    }
}


// Factories

abstract class AbstractFactory
{
    abstract public function createArticle(string $content): AbstractArticle;
    
}


class HtmlFactory extends AbstractFactory
{
    public function createArticle(string $content): AbstractArticle
    {
        return new HtmlArticle($content);
    }

    
}

class RssFactory extends AbstractFactory
{
    public function createArticle(string $content): AbstractArticle
    {
        return new RssArticle($content);
    }

}


class Article
{
    public function createPage(AbstractFactory $abstractFactory)
    {
        $string = "yuiuoi";
           
        $article = $abstractFactory->createArticle($string);
        $article->quoteSpechialChars();
        $article->render();


    }
}
