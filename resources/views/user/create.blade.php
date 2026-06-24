@extends('layouts.admin')

@section('content')


<div class="mb-4">

    <h2 class="fw-bold">
        Tambah User
    </h2>

    <p class="text-muted">
        Tambahkan akun admin atau resepsionis baru.
    </p>

</div>





<div class="card card-dashboard p-4">



<form action="{{ route('user.store') }}" method="POST">

@csrf



<div class="row">



<div class="col-md-6 mb-3">

<label class="form-label">
Nama
</label>

<input
type="text"
name="nama"
class="form-control"
required>

</div>





<div class="col-md-6 mb-3">

<label class="form-label">
Username
</label>

<input
type="text"
name="username"
class="form-control"
required>

</div>





<div class="col-md-6 mb-3">

<label class="form-label">
Password
</label>

<input
type="password"
name="password"
class="form-control"
required>

</div>





<div class="col-md-6 mb-3">


<label class="form-label">
Role
</label>


<select name="role"
class="form-control"
required>


<option value="">
-- Pilih Role --
</option>


<option value="admin">
Admin
</option>


<option value="resepsionis">
Resepsionis
</option>


</select>


</div>




<div class="col-md-6 mb-3">


<label class="form-label">
Status
</label>


<select name="status"
class="form-control">


<option value="Aktif">
Aktif
</option>


<option value="Nonaktif">
Nonaktif
</option>


</select>


</div>




</div>





<button class="btn btn-success">

Simpan

</button>



<a href="{{ route('user.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>



</div>


@endsection
