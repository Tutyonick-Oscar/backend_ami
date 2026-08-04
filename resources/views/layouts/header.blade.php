<!DOCTYPE html>
<html class="light" lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title>
      @yield('title','Action Miséricorde')
    </title>
    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link
      href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@600;700&amp;family=Inter:wght@400;500;600;700&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
      rel="stylesheet"
    />
    <!-- <script id="tailwind-config">__EDGE_RAW_1__</script>  -->
  </head>
  <body
    class="bg-background text-on-background font-body-md selection:bg-secondary-container selection:text-on-secondary-container"
  >
    @include('layouts/navbar')
    @yield('main')
    @include('layouts.footer')
  </body>
</html>
