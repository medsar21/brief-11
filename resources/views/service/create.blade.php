<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <h1 class="max-w-sm mx-auto">Create a Service</h1>
    <form action="{{route('service.store')}}" method="POST" class="max-w-sm mx-auto my-28 border-solid">
        @csrf
        @method('post')
        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Title</label>
        <div class="mb-5">

            <input type="name" name="title" placeholder="title" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            @error('title')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>

        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Descriptions</label>
        <div class="mb-5">

            <textarea  name="description" placeholder="descriptions" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" ></textarea>
            @error('description')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>
        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">category</label>
        <div class="mb-5">
            <select name="category" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light " >
                @foreach($categories as $category)
                    <option value="{{ $category->name }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">cost</label>
        <div class="mb-5">

            <input type="number" name="cost" placeholder="cost" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            @error('cost')
            <div class="text-red-600"> {{$message}}</div>  
            @enderror
        </div>
        <label for="" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
        <div class="mb-5">

            <input type="email" name="contact" placeholder="contact" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light" >
            @error('email')
            <div class="text-red-600"> {{$message}}</div> 
            @enderror
        </div>
        <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Create</button>

    </form>
    

  
</body>

</html>
