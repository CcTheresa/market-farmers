<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MallWishlist extends Component
{

    public $cartItems = [];


    protected $listeners = ['wishlistUpdated' => 'onwishlistUpdate'];


    public function mount()
    {
        $this->wishlistItems = \Wishlist::session(auth()->id())->getContent()->toArray();
    }

    public function onWishlistUpdate()
    {

        // $this->wishlistItems = \Wishlist::session(auth()->id())->getContent()->toArray();
        $this->mount();


    }

    public function render()
    {
        return view('livewire.mall-wishlist');
    }
}
