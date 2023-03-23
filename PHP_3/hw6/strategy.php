<?php

//Qiwi, Яндекс, WebMoney
interface IPayment {
    public function payment(string $data);
}

Class QiwiPayment implements IPayment
{ 

    public function payment (string $data)
    {
        echo "Оплата через платежную систему Qiwi\n сумма и контакт: " . $data;
    } 
}


Class YandexPayment implements IPayment
{ 

    public function payment (string $data)
    {
        echo "Оплата через сервис Yandex\n сумма и контакт: " . $data;
    } 
}

Class WebMoneyPayment implements IPayment
{ 

    public function payment (string $data)
    {
        echo "Оплата через систему WebMoney\n сумма и контакт: " . $data;
    } 
}

// Контекст

class PaymentMethod
{
    public function distribution(IPayment $method, array $userData)
    {
        $data = implode(" ", $userData);
        return $method->payment($data);
    }

}

Class SendFactory 
{
    public function createSender ($method)
    {
        $className = $method . "Payment";

        if (class_exists($className)) {
            return new $className();
        }
        return null;
    }
}

$user_1 = [456, "руб.", "8(900)999-99-00"];
$user_2 = [16854, "руб.", "8(900)111-99-00" ];
$user_3 = [164, "руб.", "8(900)222-99-00" ];

$methodPay_1 = (new SendFactory())->createSender("Qiwi");
$methodPay_2 = (new SendFactory())->createSender("Yandex");
$methodPay_3 = (new SendFactory())->createSender("WebMoney");

$run = (new PaymentMethod())->distribution($methodPay_2, $user_3);

