@extends('layout.front')
@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card p-4 border-0">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="{{ asset('assets/images/hero.png') }}" alt="Hero" class="img-fluid p-4">
                        </div>
                        <div class="col-md-6">
                            <a href="#"
                                class="btn btn-light btn-lg border-2 border-info rounded-circle text-center"><i
                                    class="bi bi-collection-play text-info"></i> </a>
                            <h2 class="mt-3">Hello Again!</h2>
                            <p class="text-secondary mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magni
                                maiores similique, et, repellendus eos explicabo illo dolorem eveniet nam ducimus ad natus
                                excepturi alias illum doloribus at quo. At, omnis!</p>
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="name@example.com">
                                    <label for="email">Email address</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="password" class="form-control" name="password" id="password"
                                        placeholder="Password">
                                    <label for="floatingPassword">Password</label>
                                </div>
                                <div class="mb-3 text-end">
                                    <a href="#" class="text-decoration-none text-info">Forgot Password?</a>
                                </div>
                                <div class="d-grid gap-2 mx-auto mb-3">
                                    <button class="btn btn-dark btn-lg" type="submit">Log In</button>
                                </div>
                            </form>
                            <div class="d-grid gap-2 mx-auto">
                                <a class="btn btn-outline-dark btn-lg" href="{{ route('user.login') }}"><i
                                        class="bi bi-google"></i> Sign in with Google</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
