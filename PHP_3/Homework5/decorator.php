<?php

interface InNotification 
{
    public function show();
}

class Notification implements InNotification
{
    private string $text;

    public function __construct ($text)
    {
        $this->text = $text;
    }

    public function show()
    {
        return $this->text;
    }   
}


class ADecorator implements InNotification
{
    protected $text = null;
  
    public function __construct($text)
    {
        $this->text = $text;
        
    }
    public function show()
    {
        return  $this->text; 
    }   
    
}

class SuccessfulExecutionDecor extends ADecorator  
{
    public function show()
    {
        return  $this->text->show() . " успешно выполнен!";
    }
}

class FarewellDecor extends ADecorator
{
    public function show()
    {
        return  $this->text->show() . " До скорых встреч.";
    }
}


class RequestError extends ADecorator
{
    public function show()
    {
        return  "Произошла ошибка, " . $this->text->show() . " не выполнен!";
    }
}

class Repit extends ADecorator 
{
    public function show()
    {
        return $this->text->show() . " Повторите запрос.";
    }
}

$text = 'Ваш запрос, Cергей Семенович,';

$notification = new FarewellDecor( new SuccessfulExecutionDecor( new Notification($text)));

echo $notification->show() . "\n";

$unSuccessNotifi = new Repit( new RequestError( new Notification ( $text )));

echo $unSuccessNotifi->show();