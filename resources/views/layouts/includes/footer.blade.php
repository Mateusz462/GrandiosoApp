<footer class="px-4 bg-dark text-lg-start">
    <!-- Copyright -->
    <div class="py-4 mx-auto align-items-center">
        <div class="container-fluid">
            <p class="float-end mb-1">
                <a href="{{ route('logout') }}" class="text-decoration-none text-white" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" style="cursor: pointer;">
                    <i class="fas fa-sign-out-alt bg-gray p-2 rounded-circle"></i>

                        Wyloguj się

                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </p>
            <p class="mb-1">Copyright © Grandioso App 2022 by Mateusz Wydra</p>
        </div>
    </div>
    <!-- Copyright -->
</footer>
