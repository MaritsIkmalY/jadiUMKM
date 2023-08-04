<?php

namespace App\Http\Livewire;

use App\Models\Video as ModelVideo;
use Livewire\Component;

class Video extends Component
{

    public $videos;

    public function boot()
    {
        $this->videos = ModelVideo::where('is_subscribe', false)->get();
    }

    public function render()
    {
        return view('livewire.video');
    }
}
