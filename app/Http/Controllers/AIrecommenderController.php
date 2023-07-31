<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use OpenAI\Laravel\Facades\OpenAI;

class AIrecommenderController extends Controller
{
    public function index(): View
    {
        $result = '';

        if($jenisrekom = request()->input('jenisrekom') && $bidang = request()->input('bidang'))
        {
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->generatePrompt($jenisrekom, $bidang)],
                ],
            ]);
            $result = $response['choices'][0]['message']['content'];
        }

        return view('landing-page', ['result' => $result]);
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
