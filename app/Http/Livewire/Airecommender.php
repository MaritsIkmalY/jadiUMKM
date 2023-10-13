<?php

namespace App\Http\Livewire;

use Livewire\Component;
use OpenAI;

class Airecommender extends Component
{
    public $jenisrekom;
    public $bidang;
    public $result;

    public function callPrompt()
    {
        $apiKey = config('app.open_api_key');
        $client = OpenAI::client($apiKey);

        if ($this->jenisrekom && $this->bidang) {
            $response = $client->chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->generatePrompt($this->jenisrekom, $this->bidang)],
                ],
            ]);
            $this->result = $response->choices[0]->message->content;
        }
    }

    public function generatePrompt($jenisrekom, $bidang)
    {
        return <<<EOT
            Ada beberapa kreator JadiUMKM dengan keahlian tertentu
            Alfa : Design dan Branding
            Fahmi Dwi Muharom: Video, fotografi, audio
            Arya Andhika Ardinato: desain, branding, Video, Fotografi, dan Audio
            Ulul Albab: Design dan Branding
            Cahyo Arissabarno: Video, Fotografi, Audio, Design, dan Branding
            Rohman Aditya : Website Developer
            Irfan Taufiqurrahman : Website Developer

            berikan rekomendasi dan saran $jenisrekom untuk UMKM $bidang dan tunjuk salah satu kreator JadiUMKM yang cocok melakukan $jenisrekom tersebut
            EOT;
    }

    public function render()
    {
        return view('livewire.airecommender')
            ->layout('layouts.main',[
                'result' => $this->result
            ]);
    }
}
