<!DOCTYPE html>
<html>
<head>
    <meta name="language" content="English">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <!-- <meta name="google-site-verification" content="XVlGAgkGo6Pk-wr-_-AP57VPqTW_3eHzHmuipbkXrIU" /> -->
    <!-- <link rel="icon" href="{{ asset('bigly-fav.png') }}" sizes="32x32" /> -->

    <?php if(isset($meta) && isset($meta['title'])): ?>
    <title><?php echo $meta['title']; ?></title>
    <?php else: ?>
        <title>Ederno</title>
    <?php endif ?>    
    <?php if(isset($meta) && isset($meta['description'])): ?>
    <meta name="Description" content="<?php echo $meta['description']; ?>">
    <?php else: ?>
        <meta name="Description" content="My News Blogging site">
    <?php endif ?>
    <?php if(isset($meta) && isset($meta['keywords'])): ?>
    <meta name="Keywords" content="<?php echo $meta['keywords']; ?>">
    <?php endif ?>
    <?php if(isset($meta) && isset($meta['title'])): ?>
    <meta property="og:title" content="<?php echo $meta['title']; ?>">
    <?php endif ?>

    <?php if(isset($meta) && isset($meta['image'])): ?>
    <meta property="og:image" content="<?php echo $meta['image']; ?>">
    <?php else: ?>
        <meta property="og:image" content="{{ asset('images/home_slider.jpg') }}">
    <?php endif ?>

    <!-- @yield('metas') -->

    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap4/bootstrap.min.css') }}">
    <link href="{{ asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">
    <link rel="manifest" href="manifest.json">

    @yield('styles')

</head>
<body>
    <div class="super_container">
        @include('layouts.nav')
        
        @yield('content')

    </div>
    @include('layouts.footer')

    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('css/bootstrap4/popper.js') }}"></script>
    <script src="{{ asset('css/bootstrap4/bootstrap.min.js') }}"></script>
    <script src="{{ asset('plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
    <script src="{{ asset('plugins/jquery.mb.YTPlayer-3.1.12/jquery.mb.YTPlayer.js') }}"></script>
    <script src="{{ asset('plugins/easing/easing.js') }}"></script>
    <script src="{{ asset('plugins/masonry/masonry.js') }}"></script>
    <script src="{{ asset('plugins/masonry/images_loaded.js') }}"></script>
    <script src="{{ asset('plugins/parallax-js-master/parallax.min.js') }}"></script>
    <script src="{{ asset('js/post.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="{{ asset('js/web-app.js') }}"></script>
    <script src="{{ asset('js/sw.js') }}"></script>
</body>
</html>