<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>MasterJobs - Gama Experience</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,900">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mako">
    <link rel="stylesheet" href="{{ asset('libs/bootstrap/css/bootstrap.min.css') }}" >
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}" >

    @if ($_SERVER['REQUEST_URI'] === '/')
    <meta property="og:site_name" content="MasterJobs" />
    <meta property="og:url" content="http://www.masterjobs.tech" />
    @endif
    <meta property="og:image" content="http://www.masterjobs.tech/assets/img/called.png" />

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="description" content="O blog masterjobs e Gama Academy ajudam centenas de profissionais transformarem seus talentos em oportunidades reais de trabalho em startups de todo o Brasil. Deseja se tornar um profissional do futuro? Nós queremos ajudar você!"/>
    <meta name="robots" content="index,follow" />

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('assets/img/icon-green.ico') }}">

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-102671259-2', 'auto');
      ga('send', 'pageview');

    </script>
</head>