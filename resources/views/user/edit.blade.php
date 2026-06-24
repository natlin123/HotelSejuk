@extends('layouts.admin')

@section('content')


<div class="mb-4">

    <h2 class="fw-bold">
        Edit User
    </h2>

    <p class="text-muted">
        Perbarui data pengguna.
    </p>

</div>




<div class="card card-dashboard p-4">



<form action="{{ route('user.update',$user->id) }}" method="POST">

@csrf

@method('PUT')





<div class="row">



<div class="col-md-6 mb-3">

<label class="form-label">
Nama
</label>


<input
type="text"
name="nama"
class="form-control"
value="{{ $user->nama }}"
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
value="{{ $user->username }}"
required>


</div>






<div class="col-md-6 mb-3">


<label class="form-label">
Role
</label>



<select name="role"
class="form-control">



<option value="admin"
@if($user->role=='admin')
selected
@endif>

Admin

</option>




<option value="resepsionis"
@if($user->role=='resepsionis')
selected
@endif>

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



<option value="Aktif"
@if($user->status=='Aktif')
selected
@endif>

Aktif

</option>




<option value="Nonaktif"
@if($user->status=='Nonaktif')
selected
@endif>

Nonaktif

</option>



</select>


</div>




</div>






<button class="btn btn-success">

Update

</button>



<a href="{{ route('user.index') }}"
class="btn btn-secondary">

Kembali

</a>



</form>



</div>


@endsection
