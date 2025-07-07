<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>{page_title}</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->
    <link rel="stylesheet" href="{base_url}/themes/css/tailwind.css">
    <link rel="stylesheet" href="{base_url}/themes/css/style.css">

    <!-- FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">

    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body class="text-[#1D2120] bg-gray-200">

    {!header_section!}

    <div class="bg-[#F5F5F5] mx-auto w-full md:max-w-md py-14">
        {!content_section!}
    </div>

    {!footer_section!}

    {!bottom_nav_section!} 

    <!-- JS -->
    <script src="{base_url}/themes/js/index.js"></script>

    <!-- JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</body>

</html>