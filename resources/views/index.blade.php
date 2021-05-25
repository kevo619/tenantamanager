<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/datatables.net-dt/css/jquery.dataTables.css') }}">
    <link rel="stylesheet" href="{{ asset('css/filepond/dist/filepond.min.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}"  ></script>
    <script src="{{ mix('js/form.js') }}" ></script>
    <script src="https://unpkg.com/filepond/dist/filepond.js"></script>

    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
</head>
<!-- component -->
<!-- This is an example component -->
<div>
    <div class="bg-indigo-900 px-4 py-4">
      <div
        class="md:max-w-6xl md:mx-auto md:flex md:items-center md:justify-between"
      >
        <div class="flex justify-between items-center">
          <div><img src="/images/equix.png" alt="" width="50px"></div><a href="{{ url('/dashboard') }}" class="inline-block py-2 text-white text-xl font-bold"
            >Equixweb</a
          >
          <div
            class="inline-block cursor-pointer md:hidden">
            <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
            <div class="bg-gray-400 w-8 mb-2" style="height: 2px;"></div>
            <div class="bg-gray-400 w-8" style="height: 2px;"></div>
          </div>
        </div>

        <div>
          <div class="hidden md:block">
            <a
              href="#Howitworks"
              class="inline-block py-1 md:py-4 text-gray-100 mr-6 font-bold"
              >How it Works</a
            >
            {{-- <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100 mr-6"
              >Services</a
            >
            <a
              href="#"
              class="inline-block py-1 md:py-4 text-gray-500 hover:text-gray-100"
              >Blog</a
            > --}}
          </div>
        </div>
        <div class="hidden md:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-white underline"> <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg></a>
                    @else
                        <a
                        href="{{ route('login') }}"
                        class=" md:mb-0 md:mt-10 inline-block py-2 px-4 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow"
                        >Login</a>
                        <a href="{{ route('register') }}" class="md:mb-0 md:mt-10 inline-block py-2 px-4 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow">Register</a>
                    @endauth


        </div>
      </div>
    </div>

    <div class="bg-indigo-900 md:overflow-hidden">
      <div class="px-4 py-20 md:py-4">
        <div class="md:max-w-6xl md:mx-auto">
          <div class="md:flex md:flex-wrap">
            <div class="md:w-1/2 text-center md:text-left md:pt-16">
              <h1
                class="font-bold text-white text-2xl md:text-5xl leading-tight mb-4"
              >
                Simple management platform for your rental needs
              </h1>

              <p class="text-indigo-200 md:text-xl md:pr-48">
                View your expenses, income and tenant details all in one place.
              </p>

              <a
                href="#"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow"
                >Get Started</a
              >
            </div>
            <div class="md:w-1/2 relative">
              <div class="hidden md:block">
                <div
                  class="-ml-24 -mb-40 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"
                  style="transform: rotate(-8deg);"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg px-2 pb-2 relative mb-8"
                  >
                    <div class="mb-1">
                      <span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                        style="margin-right: 1px;"
                      ></span
                      ><span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                        style="margin-right: 1px;"
                      ></span
                      ><span
                        class="w-1 h-1 bg-indigo-100 rounded-full inline-block"
                      ></span>
                    </div>
                    <div class="h-1 w-12 bg-indigo-100 rounded mb-1"></div>
                    <div class="h-1 w-10 bg-indigo-100 rounded mb-2"></div>

                    <div class="flex">
                      <div class="w-6 h-3 rounded bg-indigo-100 mr-1"></div>
                      <div class="w-6 h-3 rounded bg-indigo-100"></div>
                    </div>

                    <div
                      class="-mr-2 -mb-4 absolute bottom-0 right-0 h-16 w-10 rounded-lg bg-green-700 border-2 border-white"
                    ></div>
                    <div
                      class="w-2 h-2 rounded-full bg-green-800 mx-auto absolute bottom-0 right-0 mr-2 -mb-2 z-10 border-2 border-white"
                    ></div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Land rate payment
                  </div>
                </div>

                <div
                  class="ml-24 mb-16 absolute left-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-6 py-8"
                  style="transform: rotate(-8deg); z-index: 2;"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg relative mb-8 py-2 w-20 border-2 border-white"
                  >
                    <div
                      class="h-8 bg-green-700 w-8 rounded absolute left-0 top-0 -mt-3 ml-4"
                      style="transform: rotate(-45deg); z-index: -1;"
                    ></div>
                    <div
                      class="h-8 bg-green-800 w-8 rounded absolute left-0 top-0 -mt-3 ml-8"
                      style="transform: rotate(-12deg); z-index: -2;"
                    ></div>

                    <div
                      class="flex items-center justify-center h-6 bg-indigo-800 w-6 rounded-l-lg ml-auto border-4 border-white -mr-1"
                    >
                      <div
                        class="h-2 w-2 rounded-full bg-indigo-800 border-2 border-white"
                      ></div>
                    </div>

                    <div
                      class="w-8 h-8 bg-green-700 border-4 border-white rounded-full -ml-3 -mb-5"
                    ></div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Payment for repairs
                  </div>
                </div>

                <div
                  class="ml-32 absolute left-0 bottom-0 w-48 bg-white rounded-lg shadow-lg px-10 py-8"
                  style="transform: rotate(-8deg); z-index: 2; margin-bottom: -220px;"
                >
                  <div
                    class="bg-indigo-800 mx-auto rounded-lg pt-4 mb-16 relative"
                  >
                    <div class="h-4 bg-white"></div>

                    <div class="text-right my-2 pb-1">
                      <div
                        class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"
                      ></div>
                      <div
                        class="inline-flex w-3 h-3 rounded-full bg-indigo-800 border-2 border-white mr-2"
                      ></div>
                    </div>

                    <div
                      class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3"
                    >
                      <div class="h-2 bg-white mb-2"></div>
                      <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                    </div>
                  </div>

                  <div class="text-gray-800 text-center">
                    Payment for <br />Water
                  </div>
                </div>

                <div
                  class="mt-10 w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow-lg"
                  style="transform: rotate(-8deg); margin-right: -250px; z-index: 1;"
                >
                  <div class="w-32 bg-gray-200" style="height: 560px;"></div>
                  <div class="flex-1 p-6">
                    <h2 class="text-lg text-gray-700 font-bold mb-3">
                      Rent Payments
                    </h2>
                    <div class="flex mb-5">
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4 mr-2">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                      <div class="w-16 rounded-full bg-gray-100 py-2 px-4">
                        <div class="p-1 rounded-full bg-gray-300"></div>
                      </div>
                    </div>

                    <div class="flex flex-wrap -mx-4 mb-5">
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                      <div class="w-1/3 px-4">
                        <div class="h-40 rounded-lg bg-white shadow-lg p-6">
                          <div
                            class="w-16 h-16 rounded-full bg-gray-200 mb-6"
                          ></div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-2 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-200 rounded-full"></div>
                        </div>
                      </div>
                    </div>

                    <h2 class="text-lg text-gray-700 font-bold mb-3">
                      Expense Payments
                    </h2>

                    <div
                      class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-green-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-10 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>

                    <div
                      class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-orange-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-16 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>

                    <div
                      class="flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                    >
                      <div class="w-1/3">
                        <div class="flex">
                          <div class="h-8 w-8 rounded bg-gray-200 mr-4"></div>
                          <div>
                            <div
                              class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                            ></div>
                            <div
                              class="h-2 w-10 bg-gray-100 rounded-full"
                            ></div>
                          </div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="w-16 rounded-full bg-blue-100 py-2 px-4 mx-auto"
                        >
                          <div class="p-1 rounded-full bg-blue-200"></div>
                        </div>
                      </div>
                      <div class="w-1/3">
                        <div
                          class="h-2 w-8 bg-gray-100 rounded-full mx-auto"
                        ></div>
                      </div>
                    </div>
                  </div>
                </div>

                <div
                  class="w-full absolute left-0 bottom-0 ml-1"
                  style="transform: rotate(-8deg); z-index: 1; margin-bottom: -360px;"
                >
                  <div class="grid--gray h-48 w-48"></div>
                </div>
              </div>

              <div
                class="md:hidden w-full absolute right-0 top-0 flex rounded-lg bg-white overflow-hidden shadow"
              >
                <div
                  class="h-4 bg-gray-200 absolute top-0 left-0 right-0 rounded-t-lg flex items-center"
                >
                  <span
                    class="h-2 w-2 rounded-full bg-red-500 inline-block mr-1 ml-2"
                  ></span>
                  <span
                    class="h-2 w-2 rounded-full bg-orange-400 inline-block mr-1"
                  ></span>
                  <span
                    class="h-2 w-2 rounded-full bg-green-500 inline-block mr-1"
                  ></span>
                </div>
                <div class="w-32 bg-gray-100 px-2 py-8" style="height: 340px;">
                  <div class="h-2 w-16 bg-gray-300 rounded-full mb-4"></div>
                  <div class="flex items-center mb-4">
                    <div
                      class="h-5 w-5 rounded-full bg-gray-300 mr-3 flex-shrink-0"
                    ></div>
                    <div>
                      <div class="h-2 w-10 bg-gray-300 rounded-full"></div>
                    </div>
                  </div>

                  <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-16 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-10 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-20 bg-gray-200 rounded-full mb-2"></div>
                  <div class="h-2 w-6 bg-gray-200 rounded-full mb-2"></div>
                </div>
                <div class="flex-1 px-4 py-8">
                  <h2 class="text-xs text-gray-700 font-bold mb-1">
                    Recent Payments
                  </h2>
                  <div class="flex mb-5">
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                    <div class="p-2 w-12 rounded-full bg-gray-100 mr-2"></div>
                  </div>

                  <div class="flex flex-wrap -mx-2 mb-5">
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                    <div class="w-1/3 px-2">
                      <div class="p-3 rounded-lg bg-white shadow">
                        <div
                          class="w-6 h-6 rounded-full bg-gray-200 mb-2"
                        ></div>
                        <div
                          class="h-2 w-10 bg-gray-200 mb-1 rounded-full"
                        ></div>
                        <div class="h-2 w-6 bg-gray-200 rounded-full"></div>
                      </div>
                    </div>
                  </div>

                  <h2 class="text-xs text-gray-700 font-bold mb-1">
                    Rent Payments
                  </h2>

                  <div
                    class="w-full flex flex-wrap justify-between items-center border-b-2 border-gray-100 py-3"
                  >
                    <div class="w-1/3">
                      <div class="flex">
                        <div
                          class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"
                        ></div>
                        <div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="w-16 rounded-full bg-green-100 py-2 px-4 mx-auto"
                      >
                        <div class="p-1 rounded-full bg-green-200"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="h-2 w-10 bg-gray-100 rounded-full mx-auto"
                      ></div>
                    </div>
                  </div>

                  <div class="flex flex-wrap justify-between items-center py-3">
                    <div class="w-1/3">
                      <div class="flex">
                        <div
                          class="h-5 w-5 rounded-full bg-gray-200 mr-3 flex-shrink-0"
                        ></div>
                        <div>
                          <div
                            class="h-2 w-16 bg-gray-200 mb-1 rounded-full"
                          ></div>
                          <div class="h-2 w-10 bg-gray-100 rounded-full"></div>
                        </div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="w-16 rounded-full bg-orange-100 py-2 px-4 mx-auto"
                      >
                        <div class="p-1 rounded-full bg-orange-200"></div>
                      </div>
                    </div>
                    <div class="w-1/3">
                      <div
                        class="h-2 w-16 bg-gray-100 rounded-full mx-auto"
                      ></div>
                    </div>
                  </div>
                </div>
              </div>

              <div
                class="mr-3 md:hidden absolute right-0 bottom-0 w-40 bg-white rounded-lg shadow-lg px-10 py-6"
                style="z-index: 2; margin-bottom: -380px;"
              >
                <div
                  class="bg-indigo-800 mx-auto rounded-lg w-20 pt-3 mb-12 relative"
                >
                  <div class="h-3 bg-white"></div>

                  <div class="text-right my-2">
                    <div
                      class="inline-flex w-3 h-3 rounded-full bg-white -mr-2"
                    ></div>
                    <div
                      class="inline-flex w-3 h-3 rounded-full bg-indigo-800 border-2 border-white mr-2"
                    ></div>
                  </div>

                  <div
                    class="-ml-4 -mb-6 absolute left-0 bottom-0 w-16 bg-green-700 mx-auto rounded-lg pb-2 pt-3"
                  >
                    <div class="h-2 bg-white mb-2"></div>
                    <div class="h-2 bg-white w-6 ml-auto rounded mr-2"></div>
                  </div>
                </div>

                <div class="text-gray-800 text-center text-sm">
                  Payment for <br />Utilities
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <svg
        class="fill-current text-white hidden md:block"
        xmlns="http://www.w3.org/2000/svg"
        viewBox="0 0 1440 320"
      >
        <path fill-opacity="1" d="M0,224L1440,32L1440,320L0,320Z"></path>
      </svg>
    </div>
    <div class="bg-gray-300 md:overflow-hidden">
        <div class="px-4 py-20 md:py-4">
          <div class="md:max-w-6xl md:mx-auto">
            <div class="md:flex md:flex-wrap">
            <div id="Howitworks" class="md:w-1/2 text-center md:text-left md:pt-16  rounded-lg">
                <h2
                class="font-bold text-black text-xl md:text-5xl leading-tight mb-4"
                >
                How it works
                </h2>

                <p class="text-gray-700 md:text-xl md:pr-48">
                You log in and from your dashboard you can view all the expenses for your property as well as your income and all your tenent details. So simple!
                </p>

                {{-- <a
                href="#"
                class="mt-6 mb-12 md:mb-0 md:mt-10 inline-block py-3 px-8 text-white bg-red-500 hover:bg-red-600 rounded-lg shadow"
                >Get Started</a
                > --}}
            </div>
            </div>
          </div>
        </div>
    </div>
    {{-- <p class="text-center p-4 text-gray-600 pt-10">
      Created by
      <a
        class="border-b text-blue-500"
        href="https://twitter.com/mithicher"
        target="_blank"
        >@mithicher</a
      >. Inspired by dribble shot
      <a
        href="https://dribbble.com/shots/8807920-Quickpay-Hero-section/attachments/1015863"
        target="_blank"
        class="border-b text-blue-500"
        >https://dribbble.com/vadimdrut</a
      >
    </p> --}}
</div>

