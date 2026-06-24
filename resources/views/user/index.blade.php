@extends('layouts.admin')

@section('content')


<div class="d-flex justify-content-between align-items-center mb-4">


    <div>

        <h2 class="fw-bold">
            Daftar Pengguna
        </h2>

        <p class="text-muted">
            Kelola akun admin dan resepsionis hotel.
        </p>

    </div>


    <a href="{{ route('user.create') }}"
       class="btn btn-success">

        + Tambah User

    </a>


</div>





<div class="row mb-4">


    <div class="col-md-4">

        <div class="card card-dashboard p-3">

            <small>Total User</small>

            <h2 class="fw-bold">
                {{ $totalUser }}
            </h2>

        </div>

    </div>





    <div class="col-md-4">

        <div class="card card-dashboard p-3">

            <small>Admin</small>

            <h2 class="fw-bold">
                {{ $admin }}
            </h2>

        </div>

    </div>





    <div class="col-md-4">

        <div class="card card-dashboard p-3">

            <small>Resepsionis</small>

            <h2 class="fw-bold">
                {{ $resepsionis }}
            </h2>

        </div>

    </div>



</div>







<div class="card card-dashboard p-3">


<div class="table-responsive">


<table class="table align-middle">


<thead class="table-light">


<tr>

<th>NAMA</th>
<th>USERNAME</th>
<th>ROLE</th>
<th>STATUS</th>
<th>AKSI</th>

</tr>


</thead>





<tbody>



@foreach($users as $user)


<tr>


<td>

<strong>
{{ $user->nama }}
</strong>

</td>




<td>

{{ $user->username }}

</td>





<td>


@if($user->role == 'admin')

<span class="badge bg-success">
Admin
</span>


@else

<span class="badge bg-primary">
Resepsionis
</span>


@endif


</td>






<td>


@if($user->status == 'Aktif')


<span class="badge bg-success">
Aktif
</span>


@else


<span class="badge bg-secondary">
Nonaktif
</span>


@endif


</td>






<td>


<a href="{{ route('user.edit',$user->id) }}"
class="btn btn-sm btn-outline-primary">


<i class="bi bi-pencil"></i>


</a>





<form action="{{ route('user.destroy',$user->id) }}"
method="POST"
class="d-inline">


@csrf

@method('DELETE')



<button class="btn btn-sm btn-outline-danger"
onclick="return confirm('Hapus user?')">


<i class="bi bi-trash"></i>


</button>



</form>



</td>



</tr>



@endforeach



</tbody>



</table>


</div>


</div>



@endsection
