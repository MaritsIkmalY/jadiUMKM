<?php

namespace App\Http\Controllers;

use App\Models\ContentCreator;
use App\Models\ContentCreatorCategory;
use App\Models\Product;
use App\Models\Video;
use App\Models\Webinar;
use Illuminate\Http\Request;
use OpenAI\Laravel\Facades\OpenAI;

class LandingController extends Controller
{
    public function home()
    {
        $result = '';
        $creatorchosen = '';

        if($jenisrekom = request()->input('jenisrekom') && $bidang = request()->input('bidang'))
        {
            $response = OpenAI::chat()->create([
                'model' => 'gpt-3.5-turbo',
                'messages' => [
                    ['role' => 'user', 'content' => $this->generatePrompt($jenisrekom, $bidang)],
                ],
            ]);
            $result = $response['choices'][0]['message']['content'];
            $creatorchosen = $this->findWord($result);
        }

        return view('landing-page', ['result' => $result], ['creatorchosen' => $creatorchosen]);
    }

    public function generatePrompt($jenisrekom, $bidang)
    {
        return <<<EOT
            Ada beberapa freelancer JadiUMKM dengan kehalian tertentu
            Nicholaus Adhyatma Surya: video, fotografi, audio
            Elsa Dwi Aryuning Putri: pemasaran, periklanan, penulisan, penerjemahan
            Fahmi Dwi Muharom: pemasaran, periklanan, video, fotografi, audio
            Arya Andhika Ardinato: desain, branding
            Ulul Albab: video, fotografi, audio
            Cahyo Arissabarno: desain, branding, penulisan, penerjemahan

            sebagai ahli bisnis, berikan rekomendasi dan saran $jenisrekom untuk UMKM $bidang lalu tunjuk salah satu freelancer JadiUMKM yang cocok melakukan $jenisrekom tersebut
            EOT;
    }
    public function findWord($input) {
        $input = strtolower($input);
        if (strpos($input, 'nicholaus') !== false) {
            return 1;
        }
        else if (strpos($input, 'elsa') !== false) {
            return 2;
        }
        else if (strpos($input, 'fahmi') !== false) {
            return 1;
        }
        else if (strpos($input, 'arya') !== false) {
            return 2;
        }
        else if (strpos($input, 'ulul') !== false) {
            return 1;
        }
        else if (strpos($input, 'cahyo') !== false) {
            return 2;
        }
        return 0;
    }

    public function video()
    {
        $videos = Video::where('is_subscribe', false)->get();
        return view('video', compact('videos'));
    }

    public function creator()
    {
        $categories = ContentCreatorCategory::all();
        $creators = ContentCreator::all();
        return view('creator', compact('creators', 'categories'));
    }

    public function edukasi()
    {
        return view('edukasi');
    }

    public function creatorDetail(String $id)
    {
        $creator = ContentCreator::find($id);
        return view('creator-detail', compact('creator'));
    }

    public function webinar() {
        $webinar = Webinar::all();
        return view('webinar', compact('webinar'));
    }

    public function katalog() {
        $products = Product::paginate(20);
        return view('katalog', compact('products'));
    }

    public function katalogDetail(int $id) {
        $product = Product::find($id);
        return view('katalog-detail', compact('product'));
    }
}
