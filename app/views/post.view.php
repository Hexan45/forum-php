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

    <main class="container flex flex-col mx-auto px-20 mt-14 gap-10">
        <header class="py-4 border-b-[1px] border-slate-300">
            <h1 class="text-3xl">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</h1>
            <p class="pt-2 text-slate-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </header>
        <section>
            <div class="flex flex-row mt-10">
                <img src="./images/default-avatar.jpg" alt="" class="w-32 h-32" />
                <div class="p-4 border w-[100%] border border-slate-300">
                    <span class="font-bold text-sky-600 mr-1">Nickname</span>
                    <span class="mx-1 font-light">Offline</span>
                    <span class="mx-1 font-light">03-02-2022 09:10</span>
                    <div class="mt-4 font-normal">                    
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur eros scelerisque vestibulum commodo.
                        Cras id nulla nunc.</p> <p class="py-2">Nam rutrum, nisl et congue sagittis, elit purus semper massa, non euismod mi orci id lectus.
                        Etiam non quam in magna laoreet vehicula. Quisque varius leo in nisl facilisis, quis scelerisque nisl auctor.</p>
                        <p class="py-2">Vestibulum accumsan velit ac orci varius tristique. Praesent ut nunc purus.
                        Vestibulum eget dolor et nisi blandit consectetur at in leo.</p>
                    </div>
                </div>
            </div>
            <div class="flex flex-row mt-10">
                <img src="./images/default-avatar.jpg" alt="" class="w-32 h-32" />
                <div class="p-4 border w-[100%] border border-slate-300">
                    <span class="font-bold text-sky-600 mr-1">Nickname</span>
                    <span class="mx-1 font-light">Offline</span>
                    <span class="mx-1 font-light">03-02-2022 09:10</span>
                    <div class="mt-4 font-normal">                    
                        <p class="py-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer consectetur eros scelerisque vestibulum commodo.
                        Cras id nulla nunc.</p> <p class="py-2">Nam rutrum, nisl et congue sagittis, elit purus semper massa, non euismod mi orci id lectus.
                        Etiam non quam in magna laoreet vehicula. Quisque varius leo in nisl facilisis, quis scelerisque nisl auctor.</p>
                        <p class="py-2">Vestibulum accumsan velit ac orci varius tristique. Praesent ut nunc purus.
                        Vestibulum eget dolor et nisi blandit consectetur at in leo.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>