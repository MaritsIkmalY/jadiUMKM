<x-main-layout>
    <div  class="max-w-7xl m-auto p-4 min-h-screen">
    <h1 class="my-2 font-bold text-2xl" >Video Gratis</h1>
    <!-- <div class="flex flex-col gap-4 justify-center items-center">
        <div class="overflow-x-auto">
            <table class="table-auto m-auto">
                @foreach ($videos as $video)
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border-b-2 px-5">
                                <h2>{{ $video->title }}</h2>
                                <p class="text-gray-400 text-xs">{{ $video->subtitle }}</p>
                            </td>
                            <td class="border-b-2">
                                <label for="{{ $video->id }}" class="btn btn-primary btn-xs mx-5">Tonton</label>
                            </td>
                        </tr>
                    </tbody>
                    <input type="checkbox" id="{{ $video->id }}" class="modal-toggle" />
                    <div class="modal">
                        <div class="modal-box relative h-96 w-full">
                            <label for="{{ $video->id }}"
                                class="btn btn-sm btn-circle absolute right-2 top-2">✕</label>
                            <h3 class="text-lg font-bold mb-5">{{ $video->title }}</h3>
                            <iframe width="100%" height="250vh" src="{{ $video->link }}">
                            </iframe>
                        </div>
                    </div>
                @endforeach
            </table>
        </div>
    </div> -->
   
    <style>
        *{
        margin:0; padding:0;
        box-sizing: border-box;
        outline: none; border:none;
        text-decoration: none;
        text-transform: capitalize;
        }

        .container{
        margin: auto;
        display: flex;
        flex-wrap: wrap;
        align-items: flex-start;
        gap:20px;
        }

        .container .main-video-container{
        flex:1 1 700px;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,.1);
        background-color: #fff;
        padding:15px;
        }

        .container .main-video-container .main-video{
        margin-bottom: 7px;
        border-radius: 5px;
        width: 100%;
        }

        .container .main-video-container .main-vid-title{
        font-size: 20px;
        color:#444;
        }

        .container .video-list-container{
        flex:1 1 350px;
        height: 485px;
        overflow-y: scroll;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0,0,0,.1);
        background-color: #fff;
        padding:15px;
        }

        .container .video-list-container::-webkit-scrollbar{
        width: 10px;
        }

        .container .video-list-container::-webkit-scrollbar-track{
        background-color: #fff;
        border-radius: 5px;
        }

        .container .video-list-container::-webkit-scrollbar-thumb{
        background-color: #444;
        border-radius: 5px;
        }

        .container .video-list-container .list{
        display: flex;
        align-items: center;
        gap:15px;
        padding:10px;
        background-color: #eee;
        cursor: pointer;
        border-radius: 5px;
        margin-bottom: 10px;
        }

        .container .video-list-container .list:last-child{
        margin-bottom: 0;
        }

        .container .video-list-container .list.active{
        background-color: #444;
        }

        .container .video-list-container .list.active .list-title{
        color:#fff;
        }

        .container .video-list-container .list .list-video{
        width: 100px;
        border-radius: 5px;
        }

        .container .video-list-container .list .list-title{
        font-size: 17px;
        color:#444;
        }


        @media (max-width:1200px){

        .container{
            margin:0;
        }

        }

        @media (max-width:450px){

        .container .main-video-container .main-vid-title{
            font-size: 15px;
            text-align: center;
        }

        .container .video-list-container .list{
            flex-flow: column;
            gap:10px;
        }

        .container .video-list-container .list .list-video{
            width: 100%;
        }

        .container .video-list-container .list .list-title{
            font-size: 15px;
            text-align: center;
        }

        }
    </style>

    <div class="container">
        <div class="main-video-container">
            <iframe class="main-video" height="430" src="" allow="autoplay"></iframe>
        </div>
        <div class="video-list-container">
            @foreach ($videos as $video)
            <div class="list active">
                <iframe src="{{ $video->link }}" class="list-video" height="50"></iframe>
                <h3 class="list-title">{{ $video->title }} by {{ $video->subtitle }}</h3>
            </div>
            @endforeach
        </div>
    </div>
    </div>

    <script>
        let videoList = document.querySelectorAll('.video-list-container .list');

        videoList.forEach(vid =>{
        vid.onclick = () =>{
            videoList.forEach(remove =>{remove.classList.remove('active')});
            vid.classList.add('active');
            let src = vid.querySelector('.list-video').src;
            let title = vid.querySelector('.list-title').innerHTML;
            document.querySelector('.main-video-container .main-video').src = src;
            document.querySelector('.main-video-container .main-video').play();
            document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
        };
        });
    </script>

</x-main-layout>
