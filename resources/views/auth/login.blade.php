
@section('title')
Login
@endsection


@section('main')
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="flash-message">
            @foreach(['danger', 'warning', 'success', 'info'] as $msg)
            @if(Session::has('alert-' . $msg))
            <p class="alert alert-{{ $msg }}">
                {{ Session::get('alert-' . $msg) }} <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
            </p>
            @endif
            @endforeach
        </div>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif


        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="{{asset('https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg')}}" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">

                <!-- Email input -->

                <form method="POST" action="{{ url('/login') }}">
                    @csrf
                    <!-- Isi input email dan password di sini -->
                    <!-- ... -->
                    <div class="form-outline mb-4">
                        <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
                        <label class="form-label" for="form1Example13">Email address</label>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" id="form1Example23" class="form-control form-control-lg" name="password" />
                        <label class="form-label" for="form1Example23">Password</label>
                    </div>
                    <!-- Submit button -->

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                </form>
            </div>

        </div>
    </div>
    </div>
</section>
@endsection
