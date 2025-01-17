@extends('layouts.dashboard_template')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        {{ $page_title ?? "Page Title" }}
        <small>{{ $page_description ?? '' }}</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">{{ $page_title }}</li>
    </ol>
</section>

<!-- Main content -->
<section class="content container-fluid">
    @include('partials.flash_message')

    <div class="row">
        <div class="col-md-12">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <a href="{{ route('informasi.regulasi.create') }}" class="btn btn-success btn-sm {{Sentinel::guest() ? 'hidden':''}}" title="Tambah"><i class="fa fa-plus"></i>&ensp; Tambah</a>
                </div>
                <!-- /.box-header -->
                @if (count($regulasi) > 0)
                    <div class="box-body no-padding">

                        <table class="table table-striped">
                            <tr>
                                <th style="width: 150px">Aksi</th>
                                <th>Judul Regulasi</th>
                            </tr>

                            @foreach($regulasi as $item)
                            <tr>
                                @unless(!Sentinel::check())
                                <td class="text-center text-nowrap">
                                    <?php

                                        // TODO : Pindahkan ke controller dan gunakan datatable
                                        $data['show_url']   = route('informasi.regulasi.show', $item->id);
                                        $data['edit_url']   = route('informasi.regulasi.edit', $item->id);
                                        $data['delete_url'] = route('informasi.regulasi.destroy', $item->id);
                                        $data['download_url'] = route('informasi.regulasi.download', $item->id);

                                        echo view('forms.aksi', $data);
                                    ?>
                                </td>
                                @endunless

                                <td>{{ $item->judul }}</td>

                            </tr>
                            @endforeach
                        </table>
                    </div>

                    <!-- /.box-body -->
                    <div class="box-footer clearfix">
                        {!! $regulasi->links() !!}
                    </div>
                @else
                    <div class="box-body">
                        <h3>Data tidak ditemukan.</h3>
                    </div>
                @endif
                    <!-- /.box-footer -->
            </div>
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
<!-- /.content -->
@endsection

@push('scripts')
@include('forms.delete-modal')
@endpush


