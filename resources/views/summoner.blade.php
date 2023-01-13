<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Summoner Data</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#232323]">

<header class="flex flex-row items-center w-full">
    <div class="pl-32 pt-8">
        <img src="{{ asset('images/profileicon/' . $summoner['profileIconId'] . '.png') }}" alt="Profile Icon" class="w-24 h-24">
    </div>
    <div class="pl-8">
        <h1 class="text-4xl text-white font-bold">{{ $summoner['name'] }}</h1>
        <h2 class="text-gray-400">Summoner Level: {{ $summoner['summonerLevel'] }}</h2>
    </div>
    <form method="POST" action="/summoner">
        @csrf
    <div class="flex pl-16 mt-2">
        <input type="text" id="newSummonerName" name="newSummonerName" class="w-96 h-12 rounded-lg text-2xl text-center"
               placeholder="Summoner Name">
    </div>
    </form>
</header>


</body>
</html>
