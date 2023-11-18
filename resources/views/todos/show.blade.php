<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    <div class="text-center flex flex-col justify-center w-1/3 mx-auto">
        <div class="rounded-md text-center mt-4 mb-4 bg-red-300 border-2 border-sky-300">
            {{ $todo->title }}
        </div>
        <div class="rounded-md flex-col w-12/12 bg-slate-300 mb-1">
            توضیحات
        </div>
        <div class="rounded-md w-full bg-red-50 border-2 border-sky-200">
            {{ $todo->description }}
        </div>
        <hr>
        <a class="btn btn-sm text-center w-1/3 rounded-md  bg-yellow-300   mt-3 mb-1 border-2"
            href="{{ route('todos.edit', ['todo' => $todo->id]) }}">ویرایش</a>

        <div class="text-center flex flex-col justify-center w-1/3">
            <form action="{{ route('todos.delete', ['todo' => $todo->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-sm text-center w-2/3 rounded-md  bg-red-500 mb-1 border-2">حذف</button>
            </form>
        </div>
    </div>

</body>

</html>
