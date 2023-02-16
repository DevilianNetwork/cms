<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ fake()->text(160) }}" />
    <title>{{ fake()->text(60) }}</title>
    <link rel="stylesheet" href="/fonts/inter/inter.css">
    <link rel="canonical" href="{{ config('app.url') }}" />
    @vite(['resources/js/app.js'])
</head>

<body>

    <div class="drawer">
        <input id="my-drawer" type="checkbox" class="drawer-toggle" />
        <div class="drawer-content">

            <nav class="navbar bg-base-100">
                <div class="flex-none">
                    <label for="my-drawer" class="btn btn-square btn-ghost">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            class="inline-block w-5 h-5 stroke-current">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </label>
                </div>
                <div class="flex-1">
                    <a href="/" class="btn btn-ghost normal-case text-xl">CMS</a>
                </div>
                <div class="flex-none">
                    <div class="dropdown dropdown-end">
                        <label tabindex="0" class="btn btn-ghost btn-circle avatar">
                            <div class="w-10 rounded-full">
                                <picture>
                                    <source srcset="/dummy/image/256/256/webp/username" type="image/webp">
                                    <source srcset="/dummy/image/256/256/jpg/username" type="image/jpeg">
                                    <img src="/dummy/image/256/256/jpg/username" alt="username" width="38" height="38" loading="eager" title="username">
                                </picture>
                            </div>
                        </label>
                        <ul tabindex="0"
                            class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-200 rounded-box w-52">
                            <li>
                                <a href="/profile" class="justify-between">
                                    Profile
                                    <span class="badge">New</span>
                                </a>
                            </li>
                            <li><a href="/settings">Settings</a></li>
                            <li><a href="/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

            <main class="px-4 space-y-6">

                <h1 class="sr-only">The best CMS homepage</h1>

                @for ($i = 0; $i < 24; $i++)
                <div class="card card-compact w-full bg-base-100 shadow-xl">
                    <figure>
                        <a href="/{{ $i }}">
                            <picture>
                                <source srcset="/dummy/image/640/320/webp/{{ $i }}" type="image/webp">
                                <source srcset="/dummy/image/640/320/jpg/{{ $i }}" type="image/jpeg">
                                @if ($i == 0)
                                <img src="/dummy/image/640/320/jpg/{{ $i }}" alt="{{ fake()->text(60) }}" width="640" height="320" loading="eager" title="{{ fake()->text(60) }}">
                                @else
                                <img src="/dummy/image/640/320/jpg/{{ $i }}" alt="{{ fake()->text(60) }}" width="640" height="320" loading="lazy" title="{{ fake()->text(60) }}">
                                @endif
                            </picture>
                        </a>
                    </figure>
                    <div class="card-body">
                        <a href="{{ $i }}">
                            <h2 class="card-title">{{ fake()->text(60) }}</h2>
                        </a>
                        <p>{{ fake()->text(160) }}</p>
                        <p class="space-x-1 text-sm">
                            <span class="badge badge-primary">{{ fake()->word(10) }}</span>
                            <span aria-hidden="true">·</span>
                            <time datetime="{{ \Carbon\Carbon::now()->subDays($i)->toIso8601String() }}">{{ \Carbon\Carbon::now()->subDays($i)->diffForHumans() }}</time>
                        </p>
                    </div>
                </div>
                @endfor

            </main>

            <div class="w-full my-6 text-center">
                <div class="btn-group">
                    <a href="/?page=1" title="Go to page 1" class="btn btn-active">1</a>
                    <a href="/?page=2" title="Go to page 2" class="btn">2</a>
                    <a href="/?page=3" title="Go to page 3" class="btn">3</a>
                    <a href="/?page=4" title="Go to page 4" class="btn">4</a>
                </div>
            </div>

            <footer class="footer footer-center p-10 bg-base-200 text-base-content rounded">
                <div class="grid grid-flow-col gap-4">
                  <a href="/about" class="link link-hover">About us</a> 
                  <a href="/contact" class="link link-hover">Contact</a> 
                  <a href="/jobs" class="link link-hover">Jobs</a> 
                  <a href="/press" class="link link-hover">Press kit</a>
                </div> 
                <div>
                  <div class="grid grid-flow-col gap-4">
                    <a href="https://twitter.com" title="twitter"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a> 
                    <a href="https://youtube.com" title="youtube"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a> 
                    <a href="https://facebook.com" title="facebook"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
                  </div>
                </div> 
                <div>
                  <p>Copyright © 2023 - All right reserved by {{ config('app.name') }}</p>
                </div>
              </footer>
        </div>
        <div class="drawer-side">
            <label for="my-drawer" class="drawer-overlay"></label>
            <ul class="menu p-4 w-80 bg-base-100 text-base-content">
                <!-- Sidebar content here -->
                <li><a href="/menu1">Sidebar Item 1</a></li>
                <li><a href="/menu2">Sidebar Item 2</a></li>

            </ul>
        </div>
    </div>



</body>

</html>
