<!DOCTYPE html>
<html lang="en">


<!-- index.html  21 Nov 2019 03:44:50 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Otika - Admin Dashboard Template</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{asset ("css/app.min.css") }}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{asset ("css/style.css") }}">
  <link rel="stylesheet" href="{{asset ("css/components.css") }}">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{asset ("css/custom.css") }}">
  <link rel='shortcut icon' type='image/x-icon' href={{asset ('img/favicon.ico') }} />
  @livewireStyles

  <style>
    .ellipsis{
        text-overflow: ellipsis;
        white-space: nowrap;
        overflow: hidden;
    }
</style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
