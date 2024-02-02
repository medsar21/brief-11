<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Document</title>
</head>

<body class="bg-gray-200">
  <!-- TW Elements is free under AGPL, with commercial license required for specific uses. See more details: https://tw-elements.com/license/ and contact us for queries at tailwind@mdbootstrap.com -->
  <!-- Main navigation container -->
  <nav class="flex w-full items-center fixed top-0 start-0 justify-between bg-gray-800 py-4 text-white shadow-lg hover:text-gray-200 focus:text-gray-200 dark:bg-gray-900">
    <div class="flex items-center justify-between px-4">
      <div>
        <a class="mx-2 my-1 flex items-center text-white hover:text-white focus:text-white" href="#">
          <img class="mr-2" src="https://tecdn.b-cdn.net/img/logo/te-transparent-noshadows.webp" style="height: 20px" alt="TE Logo" loading="lazy" />
        </a>
      </div>

      <!-- Hamburger button for mobile view -->
      <button class="block border-0 bg-transparent px-2 text-white hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-gray-200 lg:hidden" type="button" data-te-collapse-init data-te-target="#navbarSupportedContent4" aria-controls="navbarSupportedContent4" aria-expanded="false" aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="w-7">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-7 w-7">
            <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
          </svg>
        </span>
      </button>

      <!-- Collapsible navbar container -->
      <div class="hidden mt-2 flex-grow items-center lg:flex lg:basis-auto" id="navbarSupportedContent4" data-te-collapse-item>
        <!-- Left links -->
        <ul class="list-none mr-auto flex flex-col pl-0 lg:flex-row" data-te-navbar-nav-ref>
          <!-- Home link -->
          <li class="my-4 pl-4 lg:my-0 lg:pr-4" data-te-nav-item-ref>
            <a class="text-white hover:text-gray-300 focus:text-gray-300 dark:text-gray-200 dark:hover:text-gray-400 dark:focus:text-gray-400 [&.active]:text-gray-500 dark:[&.active]:text-gray-300" aria-current="page" href="#" data-te-nav-link-ref>HireMe</a>
          </li>
        </ul>

        <div class="flex items-center">
          <div class="text-right">
            <a href="{{route('service.create')}}" class="inline-flex items-center px-4 py-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
              <i class="fa fa-pencil"></i> Ajouter Service
            </a>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <div class="flex flex-row flex-wrap md:mx-auto gap-20 justify-center my-4 mt-20">

    @foreach ($services as $service)
    <div class="max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
      <a href="#">
        <!-- <img class="rounded-t-lg" src="https://scontent.fcmn1-1.fna.fbcdn.net/v/t39.30808-6/298876266_470928698372043_4393316596089167024_n.png?_nc_cat=104&ccb=1-7&_nc_sid=783fdb&_nc_ohc=MbQgAGwoB64AX8lTFd7&_nc_ht=scontent.fcmn1-1.fna&oh=00_AfC-JJNA7mtVd-ozygO0EmLgKxEzezh7dg3KRBHqH444Tg&oe=65BE1994" alt="" /> -->
      </a>

      <div class="p-5">
        <a href="#">
          <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">
            {{$service->title}}
          </h5>
        </a>
        <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 break-words">{{$service->description}}</p>
        <div class="flex">
          <a href="#" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-dark bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
            {{$service->category}}
            <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">

            </svg>
          </a>
          <div class="pl-40 text-white-700 bg-white ">

            <p class="text-xl font-bold">
              {{$service->cost}}</span>
            </p>


          </div>

        </div>
        <p class="mb-3 font-normal p-8 text-gray-700 dark:text-gray-400 break-words">{{$service->contact}}</p>
      </div>

    </div>
    @endforeach

  </div>




</body>

</html>