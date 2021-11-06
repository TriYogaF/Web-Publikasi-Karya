<?php

namespace App\Http\Livewire;

use App\Models\Artwork;
use Livewire\Component;

class LoadArtwork extends Component
{

    protected $paginationTheme = 'bootstrap';

    public $limitPerPage = 8;

    public function load()
    {
        $this->limitPerPage += 8;
    }

    public function render()
    {
        
        return view('livewire.load-artwork', [
            "title" => "Artpage",
            "active" => "artwork",
            "posts" => Artwork::query()->paginate($this->limitPerPage)
        ]);
    }
}
