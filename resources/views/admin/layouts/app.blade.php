<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, maximum-scale=1">
    <title>BPP | Dashboard</title>
    <link rel="icon" href="{{ asset('assets/images/logo.png') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.1/dist/sweetalert2.min.css" rel="stylesheet">


    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

</head>
<body>
    <nav class="sidebar close py-[2px] sm:py-[10px] px-[4px] sm:px-[14px]" style="font-family: 'Abhaya Libre', serif;">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="">
                </span>

                <div class="text header-text">
                    <span class="name">BPP</span>
                    <span class="profession">Houlpamoung</span>
                </div>
            </div>

            <div class="hidden sm:block">
                <i class="bx bx-chevron-right toggle"></i>
            </div>
        </header>

        <div class="menu-bar">
            <div class="menu">
                <ul class="manu-links">
                    <li class="nav-link {{ Route::is('dashboard') ? 'bg-[#580B0C] rounded-md !text-[#ffffff]' : '' }}">
                        <a href="{{ route('dashboard') }}" class="{{ Route::is(patterns: 'dashboard') ? 'active' : '' }}">
                            <i class="bx bx-home-alt icon"></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link  {{ Request::is('category') ? 'bg-[#580B0C] rounded-md !text-[#ffffff]' : '' }}">
                        <a href="{{ url('category') }}">
                            <i class="bx bx-category icon"></i>
                            <span class="text nav-text">Category</span>
                        </a>
                    </li>
                    <li class="nav-link {{ Request::is('product') ? 'bg-[#580B0C] rounded-md !text-[#ffffff]' : '' }}">
                        <a href="{{ url('product') }}">
                            <i class="bx bx-package icon"></i>
                            <span class="text nav-text">Product</span>
                        </a>
                    </li>
                </ul>
            </div>


            <div class="bottom-content">
                <li class="">
                    <a href="{{ route('profile.edit') }}">
                        <i class="bx bx-user-circle icon"></i>
                        <span class="text nav-text">Profile</span>
                    </a>
                </li>

                <li class="">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <i class="bx bx-log-out icon"></i>
                            <span class="text nav-text">Logout</span>
                        </a>
                    </form>
                </li>
            </div>
        </div>
    </nav>

    <section class="home">
        <div class="text px-[10px] sm:px-[20px] md:px-[40px] py-[8px] text-[20px] sm:text-[25px] md:text-[30px]">
            @yield('header')
        </div>
        <hr>
        <div class="px-[10px] sm:px-[20px] md:px-[40px] py-[8px] text-[#707070]">
            @yield('content')
        </div>
    </section>

    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script>
        // delete message
        function deleteRecord(url) {
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#4848e8",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, delete it!"
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: "Deleted!",
                        text: "Your file has been deleted.",
                        icon: "success"
                    }).then((result) => {
                        if (result.isConfirmed || result.dismiss === Swal.DismissReason.backdrop) {
                            window.location.href = url;
                        }
                    })
                }
            });
        }
    </script>
</body>
</html>
