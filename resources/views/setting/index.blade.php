@extends('layouts.admin')

@section('content')

<div class="row">


    <div class="col-md-3">


        <div class="card card-dashboard p-3">


            <h6 class="fw-bold">
                Menu
            </h6>


            <div class="list-group">


                <button class="list-group-item list-group-item-action active"
                data-bs-toggle="tab"
                data-bs-target="#profil">

                    <i class="bi bi-building"></i>
                    Profil Hotel

                </button>



                <button class="list-group-item list-group-item-action"
                data-bs-toggle="tab"
                data-bs-target="#sistem">

                    <i class="bi bi-gear"></i>
                    Sistem

                </button>



                <button class="list-group-item list-group-item-action"
                data-bs-toggle="tab"
                data-bs-target="#keamanan">

                    <i class="bi bi-shield-check"></i>
                    Keamanan

                </button>



            </div>


        </div>


    </div>





    <div class="col-md-9">


        <div class="card card-dashboard">


            <div class="card-header bg-white">

                <h5 class="mb-0 fw-bold">
                    Pengaturan Hotel
                </h5>

            </div>





            <div class="card-body">


                <div class="tab-content">



                    {{-- PROFIL HOTEL --}}


                    <div class="tab-pane fade show active" id="profil">



                        <form action="{{ route('setting.update',$setting->id ?? 0) }}"
                        method="POST">


                        @csrf
                        @method('PUT')



                        <div class="row">



                            <div class="col-md-6 mb-3">

                                <label>
                                    Nama Hotel
                                </label>


                                <input class="form-control"
                                name="nama_hotel"
                                value="{{ $setting->nama_hotel ?? '' }}">


                            </div>




                            <div class="col-md-6 mb-3">

                                <label>
                                    Email
                                </label>


                                <input class="form-control"
                                name="email"
                                value="{{ $setting->email ?? '' }}">


                            </div>




                            <div class="col-md-6 mb-3">

                                <label>
                                    Telepon
                                </label>


                                <input class="form-control"
                                name="telepon"
                                value="{{ $setting->telepon ?? '' }}">


                            </div>




                            <div class="col-md-6 mb-3">

                                <label>
                                    Website
                                </label>


                                <input class="form-control"
                                name="website"
                                value="{{ $setting->website ?? '' }}">


                            </div>




                            <div class="col-md-12 mb-3">

                                <label>
                                    Alamat
                                </label>


                                <textarea class="form-control"
                                name="alamat">{{ $setting->alamat ?? '' }}</textarea>


                            </div>



                        </div>




                        <button class="btn btn-success">

                            <i class="bi bi-save"></i>
                            Simpan

                        </button>



                        </form>



                    </div>





                    {{-- SISTEM --}}



                    <div class="tab-pane fade" id="sistem">


                        <h5 class="fw-bold">
                            Pengaturan Sistem
                        </h5>



                        <div class="mb-3">


                            <label>
                                Status Booking
                            </label>


                            <select class="form-control">


                                <option>
                                    Aktif
                                </option>


                                <option>
                                    Nonaktif
                                </option>


                            </select>


                        </div>




                        <div class="mb-3">


                            <label>
                                Tampilan
                            </label>


                            <select class="form-control">


                                <option>
                                    Normal
                                </option>


                                <option>
                                    Mode Gelap
                                </option>


                            </select>


                        </div>



                        <button class="btn btn-success">

                            <i class="bi bi-save"></i>
                            Simpan Sistem

                        </button>



                    </div>







                    {{-- KEAMANAN --}}



                    <div class="tab-pane fade" id="keamanan">


                        <h5 class="fw-bold">
                            Keamanan Akun
                        </h5>



                        <div class="mb-3">


                            <label>
                                Username
                            </label>


                            <input class="form-control"
                            value="{{ Auth::user()->username }}"
                            readonly>


                        </div>




<form action="{{ route('setting.password') }}" method="POST">

@csrf


<div class="mb-3">

<label>
Password Baru
</label>


<input type="password"
name="password"
class="form-control"
required>


</div>



<button class="btn btn-success">

<i class="bi bi-shield-check"></i>

Update Keamanan

</button>


</form>


                    </div>





                </div>



            </div>


        </div>


    </div>


</div>


@endsection
