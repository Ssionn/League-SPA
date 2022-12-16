<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>League SPA</title>
</head>
<body>
    <form method="POST">
        @csrf
        <label for="name">Summoner Name:</label><br>
        <input type="text" id="name" name="summonerName"><br>
        <label for="region">Region:</label><br>
        <select id="region" name="region">
            <option value="na1">North America</option>
            <option value="euw1">Europe West</option>
            <option value="eune1">Europe Nordic & East</option>
        </select><br><br>
        <button type="submit">Search</button>
    </form>

</body>
</html>
