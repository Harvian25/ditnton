</div>
</a>
</li>
<li>
    <hr class="dropdown-divider">
</li>
@empty
    <li>
        <a href="#" class="dropdown-item">Tidak ada Favorite...</a>
    </li>
    <li>
        <hr class="dropdown-divider">
    </li>
    @endforelse
    <li>
        <a href="#" class="dropdown-item">More</a>
    </li>
    </ul>
    </li> --}}
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ auth()->user()->name }}
        </a>
        <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
                    Logout</a></li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </ul>
    </li>
    </ul>
@endauth
</div>
</div>
</nav>

{{-- Masukkan @yield('content') didalam sini --}}

{{-- footer --}}
<section id="footer" class="bg-dark text-white border-2 border-top border-info p-3">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                Copyright 2022 Ditonton
            </div>
        </div>
    </div>
</section>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
</script>

</body>

</html>
