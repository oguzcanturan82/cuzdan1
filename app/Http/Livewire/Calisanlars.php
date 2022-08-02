<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Calisanlar;

class Calisanlars extends Component
{

    public $byMevki = null;
    public $byYetkinlik = null;
    public $bySehir = null;
    public $minAge = 18;
    public $maxAge= 27;

    public function render()
    {
        return view('livewire.calisanlars',
        ['calisanlar'=>Calisanlar::select('*')
        ->where('mevki','LIKE', '%'.$this->byMevki.'%')
        ->where('yetkinlik','LIKE','%'.$this->byYetkinlik.'%')
        ->where('yas','>=',$this->minAge)
        ->where('yas','<=',$this->maxAge)
        ->where('yasadigi_sehir','LIKE','%'.$this->bySehir.'%')->get(),
        
        'mevkiler'=> Calisanlar::select('mevki')->distinct()->get(),
        'sehir'=> Calisanlar::select('yasadigi_sehir')->distinct()->get(),
        'yetkinlik'=> Calisanlar::select('yetkinlik')->distinct()->get() ] );
    }
}
