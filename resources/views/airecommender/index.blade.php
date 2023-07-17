<!DOCTYPE html>
<html style="background-color: white;" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
      @font-face {
        font-family: "ColfaxAI";
        src: url(https://cdn.openai.com/API/fonts/ColfaxAIRegular.woff2)
            format("woff2"),
          url(https://cdn.openai.com/API/fonts/ColfaxAIRegular.woff) format("woff");
        font-weight: normal;
        font-style: normal;
      }
      @font-face {
        font-family: "ColfaxAI";
        src: url(https://cdn.openai.com/API/fonts/ColfaxAIBold.woff2) format("woff2"),
          url(https://cdn.openai.com/API/fonts/ColfaxAIBold.woff) format("woff");
        font-weight: bold;
        font-style: normal;
      }
      body,
      input {
        font-size: 16px;
        line-height: 24px;
        color: #353740;
        font-family: "ColfaxAI", Helvetica, sans-serif;
      }
      body {
        display: flex;
        flex-direction: column;
        align-items: center;
        padding-top: 60px;
      }
      .icon {
        width: 34px;
      }
      h3 {
        font-size: 32px;
        line-height: 40px;
        font-weight: bold;
        color: #202123;
        margin: 16px 0 40px;
      }
      form {
        display: flex;
        flex-direction: column;
        width: 320px;
      }
      input[type="text"] {
        padding: 12px 16px;
        border: 1px solid #f2a100;;
        border-radius: 4px;
        margin-bottom: 24px;
      }
      ::placeholder {
        color: #8e8ea0;
        opacity: 1;
      }
      input[type="submit"] {
        padding: 12px 0;
        color: #fff;
        background-color: #0d6efd;;
        border: none;
        border-radius: 4px;
        text-align: center;
        cursor: pointer;
      }
      .result {
        font-weight: bold;
        margin: 40px;
      }
    </style>
    <title>JadiUMKM AI Recommender</title>
    <link rel="shortcut icon" href="/assets/images/logo.png"/>
</head>

<body>
  <a href="{{ route('home') }}">
    <img src="/assets/images/logo.png" style="width: 200px"/>
  </a>
  <a href="{{ route('home') }}">
    <h3>AI Recommender</h3>
  </a>
  <form action="{{ route('airecommender') }}" method="post">
    @csrf
    <h4>Jenis rekomendasi</h4>
    <input type="text" name="jenisrekom" placeholder="contoh: desain, pemasaran, dll" required />
    <h4>Bidang usaha</h4>
    <input type="text" name="bidang" placeholder="contoh: makanan, pakaian, dll" required />
    <input type="submit" value="Lihat rekomendasi" />
  </form>
  <div class="result">{{$result}}</div>
</body>
</html>

