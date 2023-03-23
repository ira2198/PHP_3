<?php

interface IListener {
    public function reaction(HandHunter $object);
}

interface HandHunter
{   
       
    public function addObserver(IListener $listener);
    public function removeObserver(IListener $listener);
    public function notify();
}

class JobExchange implements HandHunter 
{
    private $vacancy;
    private $observers = array();
    
    //add a vacancy.
    public function addVacancy(string $title)
    {
        $this->notify();
        $this->vacancy[] = $title;
        echo  $title . "\n";
    }
       
    public function addObserver(IListener $listener)
    {
        foreach ($this->observers as $observer) { 
            if ($listener === $observer) { 
                return false;  
            }  
        }
        $this->observers[] = $listener; 
        
        return true;  
    }

    public function removeObserver(IListener $listener)
    {
        foreach ($this->observers as $key => $observer) { 
            if ($listener === $observer) {
                unset($this->observers[$key]);
                return true;  
            } 
        } 
        return false;  
    }

    public function notify()
    {
        foreach ($this->observers as $observer){
            $observer->reaction($this);
            
        }
    }
}

class Intern implements IListener
{
    public function __construct(
        private string $name,
        private string $email,
        private int $experience)
    {}

    public function reaction(HandHunter $object)
    {
        echo "\nСоискатель:" . $this->name . 
        "\nДанные:" . $this->email .", " . $this->experience . 
        "\nОтправил заявку на вакансию\n";
    }
}

class Middle implements IListener 
{
    public function __construct(
        private string $name,
        private string $email,
        private int $experience)
    {}

    public function reaction(HandHunter $object)
    {
        echo "\nСоискатель:" . $this->name . 
        "\nДанные:" . $this->email .", " . $this->experience . 
        "\nОтправил заявку на вакансию\n";
    }
}

$intern = new Intern ("Ivan", "ivan@mail.ru", 1);
$middle = new Middle("Vova", "vova@mail.ru", 5);

$job = new JobExchange();

$job->addObserver($intern);
$job->addObserver($middle);
$job->addVacancy('Php developer');

$job->removeObserver($middle);
$job->addVacancy('java developer');
