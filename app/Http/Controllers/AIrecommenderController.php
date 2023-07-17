<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use OpenAI\Laravel\Facades\OpenAI;

class AIrecommenderController extends Controller
{
    public function index() : View
    {
        $result = '';

        if($jenisrekom = request()->input('jenisrekom') and $bidang = request()->input('bidang'))
        {
            $response = OpenAi::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->generatePrompt($jenisrekom, $bidang)],
                ],
            ]);
            $result = $response['choices'][0]['message']['content'];
            // $data = OpenAI::completions()->create([
            //     'model' => 'text-davinci-003',
            //     'prompt' => $this->generatePrompt($animal),
            // ]);
            // $result = $data['choices'][0]['text'];
        }

        return view('airecommender.index', ['result' => $result]);
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

            berikan contoh $jenisrekom untuk UMKM $bidang dan tunjuk salah satu kreator JadiUMKM yang cocok melakukan $jenisrekom
            EOT;
    }
}