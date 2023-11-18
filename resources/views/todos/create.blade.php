<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
    @vite(['resources/css/app.css'])
</head>

<body>
    @include('section.errors')
    <div class="text-center flex flex-col justify-center w-1/3 mx-auto">
        <div class="rounded-md flex-col w-12/12 bg-purple-500 mt-3 mb-4 border-2 ">
            ایجاد تسک جدید
        </div>
        <div class="text-center w-1/3 rounded-md flex-col  bg-teal-300   mt-3 mb-1 border-2">
            <form action="{{ route('todos.store') }}" method="POST">
                @csrf
                <label for="title" class="text-right">عنوان</label>
        </div>
        <div class="rounded-md w-full bg-red-50 border-2 border-sky-200">
            <input type="text" id="title" name="title"
                class=" form-control @error('title') appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @enderror"
                value="{{ old('title') }}">
        </div>
        @error('title')
            <div class="rounded-md flex-col w-12/12 bg-red-500 mt-3 mb-4 border-2 ">
                {{ $message }}
            </div>
        @enderror
        <div class="text-center w-1/3 rounded-md flex-col  bg-teal-300   mt-3 mb-1 border-2">
            <label for="description" class="text-right">توضیحات</label>
            <br>
        </div>
        <div class="rounded-md w-full bg-red-50 border-2 border-sky-200">
            <textarea id="title" name="description"
                class="form-control @error('description') appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @enderror">{{ old('description') }}</textarea>
        </div>
        @error('description')
            <div class="rounded-md flex-col w-12/12 bg-red-500 mt-3 mb-4 border-2 ">
                {{ $message }}
            </div>
        @enderror
        <button class="rounded-md text-center-right bg-red-500 w-1/3 mt-2 border-2 border-sky-300"
            type="submit">ارسال</button>
        </form>
    </div>

</body>

</html>
