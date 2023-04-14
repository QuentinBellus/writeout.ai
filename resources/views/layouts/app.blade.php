<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
      class="h-full scroll-smooth bg-white antialiased [font-feature-settings:'ss01'] js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>writeout.ai - Transcribe and translate any audio file</title>
    <meta
        name="description"
        content="Transcribe and translate any audio file. Upload your audio file and get a transcript in seconds. Writeout.ai is a free online transcription service.">

    <meta property="og:site_name" content="writeout.ai">
    <meta property="og:title" content="writeout.ai">
    <meta property="og:description" content="Transcribe and translate any audio file in seconds.">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="writeout.ai">
    <meta name="twitter:description" content="Transcribe and translate any audio file in seconds.">
    <meta property="og:image" content="https://writeout.ai/og-image.png">
    <meta name="twitter:image" content="https://writeout.ai/og-image.png">

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:100,200,300,400,500,600,700,800,900|lexend:400,500"
          rel="stylesheet"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fathom - beautiful, simple website analytics -->
    <script src="https://cdn.usefathom.com/script.js" data-site="EMEZNIZE" defer></script>
    <!-- / Fathom -->
</head>
<body class="flex h-full flex-col min-h-full">
<header class="py-10">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <nav class="relative z-50 flex justify-between items-center">
            <div class="flex items-center md:gap-x-12">
                <a aria-label="Home" href="/#" class="font-bold text-xl font-display">
                    writeout.ai
                </a>
            </div>
        </nav>
    </div>
</header>
<main>
    @yield('content')
</main>
<footer class="bg-slate-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div
            class="flex flex-col items-center border-t border-slate-400/10 py-10 sm:flex-row-reverse sm:justify-between">
            <div class="flex gap-x-6">
                <a class="group" aria-label="GitHub" href="https://github.com/beyondcode/writeout.ai">
                    <svg aria-hidden="true" class="h-6 w-6 fill-slate-500 group-hover:fill-slate-700">
                        <path
                            d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0 1 12 6.844a9.59 9.59 0 0 1 2.504.337c1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.02 10.02 0 0 0 22 12.017C22 6.484 17.522 2 12 2Z"></path>
                    </svg>
                </a>
                <a class="group text-sm" href="/privacy-policy">
                    Privacy Policy
                </a>
            </div>
            <p class="mt-6 text-sm text-slate-500 sm:mt-0">
                Copyright © {{ date('Y') }} Beyond Code. All rights reserved.
            </p>
        </div>
    </div>
</footer>
</body>
</html>
