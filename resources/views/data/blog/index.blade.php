<!-- Custom styles for this page -->
@extends('halaman_dashboard.index')

@section('main')
<div class="container-fluid">
@if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if (Session::has('success'))
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            Swal.fire(
                                'Sukses',
                                '{{ Session::get('success') }}',
                                'success'
                            );
                        });
                    </script>
                @endif
    <div class="card">
        <div class="card-body">
            <h1>Kelola blog</h1>

        </div>
        <div class="section-body">
            <div class="mb-3">
                <ol class="breadcrumb bg-primary">
                    <li class="breadcrumb-item"><a href="#" class="text-white text-decoration-none">Kelola blog</a></li>
                </ol>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4><i class="far fa-address-card"></i> blog</h4>
                </div>
                <div class="card-body">
                <div class="row">
                            @if(count($blog) == 0)
                                <a href="{{route('data/blog/create')}}" class="btn btn-primary mb-4"><i class="fas fa-plus-circle"></i> Tambah blog</a>&nbsp;
                            @endif
                        </div>
                    </div>
                    <div class="table-responsive">
                    <table class="table table-bordered" id="guru">
                            <thead>
                            <tr>
                                <th scope="col" style="text-align: center;width: 6%">NO.</th>
                                <th scope="col">GAMBAR</th>
                                <th scope="col">NAMA LOMBA</th>
                                <th scope="col">BIDANG LOMBA</th>
                                <th scope="col">JUARA</th>
                                <th scope="col">KET</th>
                                <th scope="col" style="width: 25%;text-align: center">AKSI&nbsp;LAINNYA</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php $nomor = 1; ?>
                            @foreach ($blog as $no => $blog)
                                <tr>
                                    <td scope="row" style="text-align: center">{{$nomor++}}</td>
                                    <td>{{ $blog->gambar }}</td>
                                    <td>{{ $blog->nama_lomba }}</td>
                                    <td>{{ $blog->bidang_lomba}}</td>
                                    <td>{{ $blog->juara}}</td>
                                    <td>{{ $blog->ket }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('data.blog.edit', $blog->id) }}" class="btn btn-sm btn-primary">
                                            <i class="fa fa-pencil-alt"></i>
                                        </a>
                                        <a href="/data/blog/index/delete/{{ $blog->id }}" class="btn btn-sm btn-danger">
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
    </section>
</div>
@endsection
