<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>League SPA</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-[#232323]">

<div class="container mx-auto flex justify-center w-full mt-20">
    <form method="POST" action="/summoner">
        @csrf
        <div class="flex flex-col space-y-4">
            <input type="text" id="summonerName" name="summonerName" class="w-96 h-12 rounded-lg text-2xl text-center"
                   placeholder="Summoner Name"><br>
            <select name="region" id="region" class="w-96 h-12 rounded-lg text-2xl text-center">
                <option selected disabled hidden>Region</option>
                <option value="euw1">EUW</option>
                <option value="na1">NA</option>
                <option value="eun1">EUNE</option>
                <option value="kr">KR</option>
                <option value="br1">BR</option>
                <option value="jp1">JP</option>
                <option value="la1">LAN</option>
                <option value="la2">LAS</option>
                <option value="oc1">OCE</option>
                <option value="ru">RU</option>
                <option value="tr1">TR</option>
            </select><br>
        </div>
        <div class="flex items-center justify-center mt-12">
            <button type="submit"
                    class="w-60 h-12 rounded-lg text-2xl text-center  border-2 border-[#581c87] hover:bg-[#7c3aed] transition-all ease-in-out  delay-150 hover:scale-110 text-white">
                Search
            </button>
        </div>
    </form>
</div>

</body>
</html>
