<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    </head>
    
    <body class="bg-slate-800">

        <div class="hover:ring-2 hover:ring-rose-500 text-center underline text-rose-500 bg-slate-900 mx-4 my-5 rounded-lg px-3 py-4 shadow-xl font-bold font-serif hover:shadow-xl">
            <h1 >Welcome to Laravel Practice Project</h1>
        </div>

        <div class="bg-slate-900 mx-4 my-5 rounded-lg px-3 py-4 shadow-xl hover:shadow-xl font-bold font-serif text-blue-500 hover:ring-2 hover:ring-blue-500">
            <div class="w-full h-full text-center">
                <x-header componentName="User Component" />
            </div>
        </div>

        <div class="bg-slate-900 mx-4 my-5 rounded-lg px-3 py-4 shadow-xl hover:shadow-xl font-bold font-serif text-green-500 hover:ring-2 hover:ring-green-500">
            <div class="w-full h-full text-center">
                <a href="/forms">Form Handling PHP</a>
            </div>
        </div>

        <div class="bg-slate-900 mx-4 my-5 rounded-lg px-3 py-4 shadow-xl hover:shadow-xl font-bold font-serif text-orange-500 hover:ring-2 hover:ring-orange-500">
            <div class="w-full h-full text-center">
                <a href="/forms">Middleware</a>
            </div>
        </div>
    </body>
</html>

