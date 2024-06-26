<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link rel="icon" href="images/favicon.ico" />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
            integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
            crossorigin="anonymous"
            referrerpolicy="no-referrer"
        />
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
            tailwind.config = {
                theme: {
                    extend: {
                        colors: {
                            laravel: "#1967D2",
                        },
                    },
                },
            };
        </script>
        <style>
            ::-webkit-scrollbar {
                width: 7px;
                height: 7px;
                border-radius: 10px;

            }

            /* Track */
            ::-webkit-scrollbar-track {
                background-color: #97c5d9;
                box-shadow: inset 0 0 3px rgba(0, 0, 0, 0.2);
            }

            /* Handle */
            ::-webkit-scrollbar-thumb {
                background: #1967D2;
                border-radius: 10px;
            }

            ::-webkit-scrollbar-corner {
                display: none;
            }
        </style>
        <title>Login</title>
    </head>
    <body class="mb-48 bg-slate-100">
        <nav class="sticky top-0 flex justify-between items-center mb-4 h-16 bg-laravel">
            <a href="/">
                <p class="text-2xl font-medium text-white ml-4">Polynet</p>
            </a>
            <ul class="flex space-x-6 mr-6 text-lg text-white">
                
            </ul>
        </nav>

        <main>
            <div class="mx-4">
                <div
                    class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24 shadow-lg"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Se connecter
                        </h2>
                    </header>

                    <form action="/authentification" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="inline-block text-lg mb-2"
                                >E-mail</label
                            >
                            <input
                                type="email"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="email"
                                value="{{old('email')}}"
                            />
                            @error('email')
                                <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label
                                for="password"
                                class="inline-block text-lg mb-2"
                            >
                            Mot de passe
                            </label>
                            <input
                                type="password"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="password"
                            />
                            @error('password')
                            <p class="text-red-500 text-xs w-80 mt-1">{{$message}} </p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                                type="submit"
                                class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                            Se connecter
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </main>
    </body>
</html>
