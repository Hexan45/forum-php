<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
      <?= out($title) ?>
    </title>
    
    <link rel="stylesheet" type="text/css" href="./css/main.css" />
</head>
<body>
    <nav class="relative container flex flex-row justify-between mx-auto items-center md:px-8 sm:px-0 min-w-[335px]">
        <div>
            <img src="./images/forum-logo.png" alt="" class="w-36" />
        </div>
        <div class="hidden md:flex flex-row gap-x-8 text-base font-normal">
            <a href="" class="hover:text-rose-400">Portal</a>
            <a href="" class="hover:text-rose-400">Użytkownicy</a>
            <a href="" class="hover:text-rose-400">Najnowsze tematy</a>
            <a href="" class="hover:text-rose-400">Szukaj</a>
        </div>
        <a href="" class="hidden md:block text-white px-10 pt-2 pb-3 bg-rose-500 rounded-full hover:bg-rose-600 hover:pb-2 ease-out duration-100">
            Zaloguj się
        </a>
        <div class="md:hidden">
            <img src="./images/mobile-menu.svg" alt="" class="w-10" />
        </div>
    </nav>

    <main class="container flex flex-col mx-auto px-4 sm:px-0 mt-14 md:px-8 gap-10">
        <header class="py-4 border-b-[1px] border-slate-300">
            <h1 class="text-3xl">Lorem ipsum dolor sit amet</h1>
            <p class="pt-2 text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </header>
        <section class="w-[100%]">
            <header class="bg-slate-200 py-2 px-2 rounded-md text-lg font-normal flex flex-row justify-between">
                <div class="flex-[1_1_50%]">Tytuł, nazwa wątku</div>
                <div class="flex-[1_1_30%] hidden md:block">Liczba odpowiedzi</div>
                <div class="flex-[1_1_20%] text-right md:text-left">Ostatni post</div>
            </header>

            <article class="flex md:flex-row py-6 justify-between flex-col border-b-[1px] border-slate-300">
                <div class="flex flex-row flex-[1_1_50%] px-2">
                    <div class="hidden px-4 self-center">
                        <img src="./images/active-forum.svg" alt="" class="w-[20px]">
                    </div>
                    <div class="md:self-center">
                        <h2 class="text-lg text-cyan-500">
                            <a href="">Forum one title</a>
                        </h2>
                        <p class="text-slate-500 text-sm">
                            Description of forum one content lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="hidden md:block flex-[1_1_30%] px-2 self-center text-left">
                    <div>2</div>
                    <span>Odpowiedzi</span>
                </div>
                <div class="flex flex-row-reverse md:flex-row flex-[1_1_20%] md:mr-4 pr-4 items-center  px-4 md:px-0 py-2 md:py-0 md:bg-transparent bg-slate-200 rounded my-7 md:my-0">
                    <img src="./images/default-avatar.jpg" alt="" class="object-contain w-[60px] h-[60px]" />
                    <div class="md:ml-3">
                        <a href="" class="block text-cyan-500">Last post title</a>
                        <span class="block text-xs text-slate-500">11-05-2022 13:54</span>
                        <span class="block">
                            <span class="text-xs text-slate-500">by</span> <span class="text-sm">Nickname</span>
                        </span>
                    </div>
                </div>
            </article>
            <article class="flex md:flex-row py-6 justify-between flex-col border-b-[1px] border-slate-300">
                <div class="flex flex-row flex-[1_1_50%] px-2">
                    <div class="hidden px-4 self-center">
                        <img src="./images/active-forum.svg" alt="" class="w-[20px]">
                    </div>
                    <div class="md:self-center">
                        <h2 class="text-lg text-cyan-500">
                            <a href="">Forum one title</a>
                        </h2>
                        <p class="text-slate-500 text-sm">
                            Description of forum one content lorem ipsum dolor sit amet
                        </p>
                    </div>
                </div>
                <div class="hidden md:block flex-[1_1_30%] px-2 self-center text-left">
                    <div>2</div>
                    <span>Odpowiedzi</span>
                </div>
                <div class="flex flex-row-reverse md:flex-row flex-[1_1_20%] md:mr-4 pr-4 items-center  px-4 md:px-0 py-2 md:py-0 md:bg-transparent bg-slate-200 rounded my-7 md:my-0">
                    <img src="./images/default-avatar.jpg" alt="" class="object-contain w-[60px] h-[60px]" />
                    <div class="md:ml-3">
                        <a href="" class="block text-cyan-500">Last post title</a>
                        <span class="block text-xs text-slate-500">11-05-2022 13:54</span>
                        <span class="block">
                            <span class="text-xs text-slate-500">by</span> <span class="text-sm">Nickname</span>
                        </span>
                    </div>
                </div>
            </article>
        </section>
    </main>
</body>
</html>