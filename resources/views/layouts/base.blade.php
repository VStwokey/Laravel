<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
     <!-- CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>

    <div class="container">
        <h1>T94 - Olá Mundo! </h1>
        <hr>
        @yield('content')
        <hr>
        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quos architecto labore optio. Ad maxime amet, dicta mollitia nulla, quam asperiores veritatis in, perspiciatis nemo beatae est? Ullam tenetur in praesentium?</p>
        <p>Aperiam dolor quos voluptate molestias molestiae corporis veritatis. Laboriosam quasi dignissimos sequi distinctio neque nulla consectetur molestiae. Nesciunt ea nobis soluta, iusto autem vel quod ad dicta repellendus voluptas dolor!</p>
        <p>Assumenda, numquam eius. Temporibus perferendis veritatis quis facilis atque officiis deleniti incidunt nobis pariatur a laudantium, illum molestiae sed ex dolor. Ullam illum aut provident esse ut labore, explicabo at.</p>
        <p>Cupiditate quas hic vero recusandae error architecto veritatis? Itaque voluptate nam magni! Facilis corporis aliquam similique nostrum itaque, amet, autem nesciunt consequatur distinctio eum quisquam praesentium voluptatum quia eaque porro.</p>
        <p>Blanditiis mollitia molestias recusandae, officia, cupiditate eum id aut, architecto odio aliquam exercitationem perferendis. Similique tempore reiciendis dignissimos, quibusdam dicta sed autem in aperiam excepturi numquam dolores consequuntur molestias molestiae.</p>
    </div>

    <footer>
        <p class="fs-1 text-center">T94</p>
    </footer>

</body>
</html>
