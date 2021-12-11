<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    </head>
    <body>
        <section class="section-content">
            <div class="flex-center position-ref" style="background-color: rgb(255, 255, 255);height: 60px; border-bottom: solid 1px rgb(219, 219, 219)">
                @if (Route::has('login'))
                    <div class="top-right links">
                        @auth
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/user') }}">Dashboard User</a>
                            <a href="{{ url('/superadmin') }}">Dashboard Admin</a>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        @else
                            <a href="{{ url('/') }}">Home</a>
                            <a href="{{ url('/user') }}">Dashboard User</a>
                            <a href="{{ url('/superadmin') }}">Dashboard Admin</a>
                            <a href="{{ route('login') }}">Login</a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <div class="container-fluid mt-2" style="padding-bottom: 100px;">
                <div class="col">
                    <div class="row">
                        <div class="content col-lg-8 mt-4">
                            <h2 style="text-align: center;">DATA BARANG</h2>
                            <div class="data-barang mt-4">
                                <div class="mx-auto" style="width: 60%;">
                                    <table class="table table-light mx-auto">
                                        <tr style="font-weight: bold;">
                                            <td>No</td>
                                            <td>Nama Barang</td>
                                            <td>Jenis Barang</td>
                                            <td>Stock Barang</td>
                                        </tr>
                                        <?php $i=1; ?>
                                        @foreach ($items as $item)
                                        <tr>
                                            <td><?= $i; ?></td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->type}}</td>
                                            <td>{{$item->stock}}</td>
                                        </tr>
                                        <?php $i++; ?>
                                        @endforeach
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-information col-lg-4 mt-4 ">
                            <div class="card p-4">
                                <h3 class="" style="border-bottom: solid 1px rgb(212, 212, 212)">INFORMASI AKUN</h3>
                                <div class="item mt-4">
                                    <h5 class="mb-3">Super Administrator</h5>
                                    <fieldset disabled="disabled">
                                        <div class="mb-2">
                                            <label for="disabledTextInput" class="form-label">Email:</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="superadministrator@app.com">
                                        </div>
                                        <div class="mb-2">
                                            <label for="disabledTextInput" class="form-label">Password:</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="admin">
                                        </div>
                                    </fieldset>

                                    <h5 class="mb-3 mt-5">Staff Admin</h5>
                                    <fieldset disabled="disabled">
                                        <div class="mb-2">
                                            <label for="disabledTextInput" class="form-label">Email:</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="staff@app.com">
                                        </div>
                                        <div class="mb-2">
                                            <label for="disabledTextInput" class="form-label">Password:</label>
                                            <input type="text" id="disabledTextInput" class="form-control" placeholder="staff">
                                        </div>
                                    </fieldset>
                                </div>
                            </div>
                            <div class="card cv mt-4 p-4" style="min-height: 200px;">
                                <div class="judul text-center mb-4" style="border-bottom: solid 1px rgb(212, 212, 212)">
                                    <h3>CURRICULUM VITAE</h3>
                                </div>
                                <div class="embed">
                                    <iframe src="https://ramdnz.github.io/" width="100%" height="400px">
                                        Tampilan dari URL akan muncul di halaman ini(Teks ini akan digunakan sebagai deskripsi halaman jika deskripsi halaman tidak diatur). 
                                    </iframe>
                                    <div class="button mt-3">
                                        <a href="https://ramdnz.github.io/" class="btn btn-primary text-center mx-auto" style="text-decoration: none;">Lihat Curriculum Vitae</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
