<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- CSS --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- JS --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <div class="container">
        <h1>T94 - Olá Mundo!</h1>
        <hr>
        @yield('content')
        <hr>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi nobis esse, dolor fugiat nulla molestiae incidunt quibusdam laboriosam eum sed neque explicabo debitis nostrum corporis odit aut quasi? Quis, nemo?</p>
        <p>Neque magni, dicta impedit laudantium deleniti numquam ad! Numquam natus, assumenda, ut, maxime eius similique voluptatem porro repellat praesentium itaque minima modi exercitationem eos quaerat excepturi facilis error eum mollitia?</p>
        <p>Voluptatem inventore unde culpa consequatur. Mollitia officia recusandae, vero beatae aperiam doloremque perferendis assumenda dolore nemo placeat aliquam officiis ab. Veritatis quod tempore nam expedita velit quis eius a harum?</p>
        <p>Esse laborum alias tempore corrupti accusamus harum ducimus quod pariatur? Totam soluta quos ullam illum, officiis quod non dicta. Eos aliquid eum consequuntur mollitia impedit maxime necessitatibus exercitationem laborum nam?</p>
        <p>Labore facilis itaque earum? Earum eum vel ratione! Sint vitae libero asperiores, amet voluptates culpa. Quaerat fuga, incidunt nostrum aspernatur quia magnam repellendus est unde quae veritatis at! Fuga, ea!</p>
    </div>
    <footer>
        <p class="fs-1 text-center"> T94 </p>
    </footer>
</body>
</html>
