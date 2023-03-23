<?php

//copy, cut, paste

interface IAction{
    public function action();
    public function cancel();
}

class Copy implements IAction
{  
    public function action()
    {
      return  "Копируем текст";
    }

    public function cancel()
    {
      return  "Отменить действие 'Копирование'";
    }
}

class Cut implements IAction
{
      public function action()
    {
        return "Вырезать текст";
    }

    public function cancel()
    {        
      return "Отменить действие 'Вырезать'";
    }
}

class Paste implements IAction
{
      public function action()
    {
        return "Вставить текст";
    }

    public function cancel()
    {        
      return "Отменить действие 'Вставка'";
    }
}


interface ICommad {
    public function perform();
}

class Action implements ICommad 
{   
    private $action;
    
    public function __constract(IAction $action)
    {     
        $this->action = $action;
    }

    public function perform()
    {
        echo "action";
        $this->action->action();
    }
}

class Cancel implements ICommad 
{
    private $cancel;
    public function __constract(IAction $cancel)
    {
        $this->cancel = $cancel;
    }

    public function perform()
    {
        echo "delete";
        $this->cancel->cancel();
    }
}


class Transmitter
{
    public function submit(ICommad $command)
    {
        $command->perform();
    }
}


$transmitter = new Transmitter();

$cut = new Cut();
$transmitter->submit(new Action($cut));
var_dump($transmitter);

$cancelCut = new Cut();
$transmitter->submit(new Cancel($cancelCut));
var_dump($transmitter);

$copy = new Copy();
$transmitter->submit(new Action($copy));
var_dump($transmitter);

$cancelCopy = new Copy();
$transmitter->submit(new Cancel($cancelCopy));
var_dump($transmitter);

$paste = new Paste();
$transmitter->submit(new Action($paste));
var_dump($transmitter);

$cancelPaste = new Paste();
$transmitter->submit(new Cancel($cancelPaste));
var_dump($transmitter);