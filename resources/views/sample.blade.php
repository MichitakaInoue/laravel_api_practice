<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>vue.js</title>
</head>
<body>
<h1>sample</h1>

<div id="app1">
    <example-component></example-component>
</div>


<div id="app2">
  <span>
    マウスホバーで画面を表示した時刻が表示されます。
  </span>
</div>

<div id="app3">
  <span>v-ifを使って、domの表示非表示ができます</span>
</div>

@yield('camera')



<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
