<x-main-layout>
    <style>
        body {
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 50px 0;
            max-width: 1200px;
            margin: 0 auto;
        }

        .profile {
            flex: 1;
            margin: 0 20px;
            background-color: #fff;
            padding: 30px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            min-width: 300px;
            max-width: 400px;
            position: sticky;
            top: 60px;
        }

        .profile img {
            display: block;
            margin-bottom: 20px;
            border-radius: 100%;
            object-fit: cover;
            object-position: center;
        }

        .profile h2 {
            font-size: 28px;
            font-weight: 700;
            margin-bottom: 10px;
        }

        .profile p {
            font-size: 16px;
            line-height: 24px;
        }

        .profile ul {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .profile ul li {
            display: flex;
            align-items: center;
            font-size: 16px;
            line-height: 24px;
            margin-bottom: 10px;
            color: #666;
        }

        .profile ul li:before {
            content: "\2022";
            color: #999;
            font-weight: bold;
            margin-right: 5px;
            font-size: 20px;
            line-height: 20px;
        }

        .portfolio {
            flex: 2;
            display: flex;
            flex-wrap: wrap;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .portfolio .card {
            flex-basis: calc(33.33% - 20px);
            margin: 10px;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }

        .portfolio .card img {
            display: block;
            width: 100%;
            height: 200px;
            object-fit: cover;
            object-position: center;
        }

        .portfolio .card h3 {
            font-size:
                20px;
            font-weight: 700;
            margin: 20px;
        }

        .portfolio .card p {
            font-size: 16px;
            line-height: 24px;
            margin: 20px;
            color: #666;
        }

        .portfolio .card:hover img {
            transform: scale(1.1);
            transition: transform 0.5s ease-in-out;
        }

        @media (max-width: 768px) {
            .container {
                padding: 30px 0;
            }

            .profile {
                margin-bottom: 30px;
                position: static;
                max-width: 100%;
                box-shadow: none;
            }

            .portfolio .card {
                flex-basis: calc(50% - 20px);
                margin: 10px;
            }
        }

        @media (max-width: 576px) {
            .portfolio .card {
                flex-basis: calc(100% - 20px);
            }
        }
    </style>

    <x-jadiumkm-header title="Detail Kreator {{ $creator->user->name }}" back="creator">
        <div class="container">
            <div class="profile">
                <img src="{{ Str::contains($creator->user->photo, 'default') ? '/assets/images/webinar.jpg' : '/storage/' . $creator->user->photo }}"
                    alt="Profile picture">
                <h2>{{ $creator->user->name }}</h2>

                <p class="font-semibold mb-4">Kategori</p>
                <div class="flex flex-wrap gap-2">
                    @foreach ($creator->category as $category)
                        <span
                            class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $category->category->name }}</span>
                    @endforeach
                </div>
                <div class="flex gap-4 flex-col my-2">

                    <p class="font-semibold mt-4">
                        Alamat
                    </p>
                    <p>
                        {{ $creator->user->address }}
                    </p>

                    <p class="font-semibold">Keahlian</p>
                    <div class="flex flex-wrap gap-4 items-center">
                        @foreach ($creator->skill as $skill)
                            <span
                                class="bg-blue-100 text-blue-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-blue-900 dark:text-blue-300">{{ $skill->name }}</span>
                        @endforeach
                    </div>
                    <div class="flex flex-wrap gap-4 items-center">
                        @foreach ($creator->education as $education)
                            <div class="badge badge-primary">{{ $education->name }}</div>
                        @endforeach
                    </div>

                    <x-jadiumkm-btn target="_blank" href="https://wa.me/{{ $creator->user->phone }}">Chat dan
                        Negosiasi</x-jadiumkm-btn>
                </div>
            </div>

            <div class="portfolio flex flex-col gap-4 ">
                <h1 class="text-3xl font-bold text-center ml-4">Portofolio</h1>
                <div class="grid grid-cols-1 justify-center gap-4 sm:grid-cols-2">
                    @foreach ($creator->portofolio as $portofolio)
                        <div class="card">
                            <img src="/storage/{{ $portofolio->photo }}" alt="{{ $portofolio->photo }}">
                            <h3>{{ $portofolio->title }}</h3>
                            <p>{{ $portofolio->description }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </x-jadiumkm-header>



</x-main-layout>
