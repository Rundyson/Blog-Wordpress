<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="../dist/output.css">
    <?php wp_head() ?>
</head>
<body >

    <!-- HEADER -->
    <header class="header">
        <div class="container">
            <div class="header__wrapper flex flex-row justify-between border-b pb-2 ">
                <div class="nav_left  items-end flex flex-row gap-5  ">
                     <a href="" class=" border-transparent border-b-4 hover:border-b-4 hover:border-dark font-bold text-[30px]">BLOG</a>
                    <ul class="header_menu flex flex-row gap-5">
                        <?php wp_menu_li() ?>
                    </ul>
                </div>
                <div class="btn  flex items-end">
                    <button id="themeToggle" class=" text-[20px]"><i class="fa-solid fa-moon"></i></button>
                </div>
            </div>
        </div>
    </header>