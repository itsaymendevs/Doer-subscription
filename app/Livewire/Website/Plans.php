<?php

namespace App\Livewire\Website;

use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('livewire.layouts.subscription')]
class Plans extends Component
{




    public function render()
    {

        return view('livewire.website.plans');

    } // end function



} // end class
