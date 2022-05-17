<!-- 
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
 -->

<?php

//phpinfo()

class E_commerce {
    public $companyName;
    function __construct($_companyName){
        $this->companyName = $_companyName;
    }
}

class prodotto extends E_commerce {

    public $type;
    public $name;
    public $description;
    public $price;

    function __construct($_type, $_name, $_price){
        $this->type = $_type;
        $this->name = $_name;
        $this->price = $_price;
    }
}


class User extends E_commerce {

    public $userName;
    public $userSurname;
    public $fiscalCode;
    public $id;
    public $registered = true; 
    public $cart; 

    function __construct($_UserName, $_UserSurname, $_FiscalCode){
        $this->UserName = $_UserName;
        $this->UserSurname = $_UserSurname;
        $this->FiscalCode = $_FiscalCode;
        $this->cart = $_cart;
    }
    
    function discount(){
        if ($this->registered == true) {
            $totalPrice = $cart * 20 / 100;
            return $cart = $totalprice;
        }
    }
}


class CreditCard extends User {

    public $ownerName;
    public $expiration;
    public $cardNumber;
    public $cvv;
    public $valid = true;

}



?>