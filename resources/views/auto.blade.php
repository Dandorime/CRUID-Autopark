<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>doc</title>
    @vite(['resources/сss/app.css', 'resources/js/app.js'])
</head>
<body>
    <div id="app">
        <header-admin-component></header-admin-component>
        <router-view></router-view>
        <footer-component></footer-component>
    </div>
</body>
</html>