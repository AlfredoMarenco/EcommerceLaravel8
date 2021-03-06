<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PaymentsForms extends Component
{
    public $formvisible = 0;


    public function render()
    {
        return view('livewire.payments-forms');
    }

    public function formOpenPay(){
        $this->formvisible = 1;
    }

    public function formConekta(){
        $this->formvisible = 2;
    }

    public function formMercadoPago(){
        $this->formvisible = 3;
    }
}
