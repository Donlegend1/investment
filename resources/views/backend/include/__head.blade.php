<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link
        rel="shortcut icon"
        href="{{ asset(setting('site_favicon','global')) }}"
        type="image/x-icon"
    />
    <link rel="icon" href="{{ asset(setting('site_favicon','global')) }}" type="image/x-icon"/>

    <link rel="stylesheet" href="/global/css/fontawesome.min.css"/>
    <link rel="stylesheet" href="/backend/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/backend/css/animate.css"/>
    <link rel="stylesheet" href="/backend/css/nice-select.css"/>
    <link rel="stylesheet" href="/global/css/datatables.min.css"/>
    @notifyCss
    <link rel="stylesheet" href="/backend/css/summernote-lite.min.css"/>

    <link rel="stylesheet" href="/global/css/custom.css?var=5"/>
    <link rel="stylesheet" href="/backend/css/styles.css?var=5"/>
    @yield('style')

    <title>{{ setting('site_title', 'global') }} - @yield('title')</title>
</head>
