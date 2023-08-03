<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use OpenAI\Laravel\Facades\OpenAI;

class Airecommender extends Component
{
    public String $result = '';
    public String $jenisrekom;
    public String $bidang;

    public function render()
    {
        return view('livewire.airecommender');
    }

    public function callPrompt(Request $request)
    {

        if ($this->jenisrekom && $this->bidang) {
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->generatePrompt($this->jenisrekom, $this->bidang)],
                ],
            ]);
            $this->result = $response['choices'][0]['message']['content'];
        }
    }

    public function generatePrompt($jenisrekom, $bidang)
    {
        return <<<EOT
            Ada beberapa kreator JadiUMKM dengan kehalian tertentu
            Nicholaus Adhyatma Surya: video, fotografi, audio
            Elsa Dwi Aryuning Putri: pemasaran, periklanan, penulisan, penerjemahan
            Fahmi Dwi Muharom: pemasaran, periklanan, video, fotografi, audio
            Arya Andhika Ardinato: desain, branding
            Ulul Albab: video, fotografi, audio
            Cahyo Arissabarno: desain, branding, penulisan, penerjemahan

            berikan rekomendasi dan saran $jenisrekom untuk UMKM $bidang dan tunjuk salah satu kreator JadiUMKM yang cocok melakukan $jenisrekom tersebut
            EOT;
    }
}
