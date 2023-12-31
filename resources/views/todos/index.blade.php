<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>todo task</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="text-center w-1/3 mx-auto font-semibold mb-2">
        <div class="text-center  w-1/3 mx-auto">
            <div class="rounded-md w-12/12 bg-green-500 mt-3 mb-4 border-2">
                <h1 class="font-monospace">تسک </h1>
            </div>
        </div>
        <div class="py-2 px-4">
            <div class="flex justify-around">
                <div class="rounded-md bg-sky-400 mt-3 mb-4 border-2">
                    <h4> :تسک ها </h4>
                </div>
                <div class="rounded-md bg-purple-500 mt-3 mb-4 border-2 ">
                    <a class="btn btn-sm" href="{{ route('todos.create') }}">ایجاد تسک</a>
                </div>
            </div>
        </div>
        @foreach ($todos as $todo)
            <ul class=" justify-around w-full bg-red-50 border-2 border-sky-200 ">
                <li class="rounded-md bg-amber-200  text-center border-2 border-sky-500">
                    {{ $todo->title }}
                    <a class="btn btn-sm mr-60" href="{{ route('todos.show', ['todo' => $todo]) }}">نمایش</a>
                    @if ($todo->complated == 0)
                        <br>
                        <a class="btn btn-sm mr-60"
                            href="{{ route('todos.complate', ['todo' => $todo]) }}>انجام شد </a>

                    @endif
                </li>
            </ul>
        @endforeach
    </div>


    <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
            <a href="#"
                class="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Previous</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
            <a href="#" aria-current="page"
                class="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold focus-visible:outline-indigo-600">1</a>
            <a href="#"
                class="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">2</a>
            <a href="#"
                class="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex">3</a>
            <a href="#"
                class="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0">
                <span class="sr-only">Next</span>
                <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z"
                        clip-rule="evenodd" />
                </svg>
            </a>
        </nav>
    </div>
    @include('sweetalert::alert', ['cdn' => 'https://cdn.jsdelivr.net/npm/sweetalert2@9'])
</body>

</html>
