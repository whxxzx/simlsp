@extends('layouts.app')

@section('content')

<div class="container">
    {{-- @if (session('c_success'))
    <div class="alert alert-success" role="alert">
        {{ session('c_success') }}
    </div>
@endif

@if (session('item_success'))
    <div class="alert alert-success" role="alert">
        {{ session('item_success') }}
    </div>
@endif

@if (session('hapus_item'))
    <div class="alert alert-success" role="alert">
       <p> {{ session('hapus_item') }} Berhasil diapus</p>
        
    </div>
@endif --}}
{{-- @if (session('hapus_kategori'))
    <div class="alert alert-success" role="alert">
       <p> {{ session('hapus_kategori') }} </p>
        
    </div>
@endif --}}
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header" style="background-color: #7fa99b">
                    <div class="row">
                        <div class="col my-2 fw-bold"  >
                            Daftar Produk
                        </div>

                        <div class="col text-end ">
                            <a  class="btn btn-dark m-0 text-white fw-bold " href="{{route('item.create')}}" style="background-color: #233142"> Tambah Item</a>

                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table table-bordered text-center">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Stok</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            {{-- @foreach($items as $i) --}}

                                <tr>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        
                                        <a href=""  class="btn btn-sm btn-warning btn-circle fw-bold">Edit</a>
                                        <a href="" class="btn btn-sm btn-danger btn-circle fw-bold">Delete</a>
                                    </td>
                                </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header fw-bold" style="background-color: #7fa99b">
                    <div class="row">
                        <div class="col my-2 fw-bold"  >
                            Daftar Kategori
                        </div>

                        <div class="col text-end ">
                            <a  class="btn btn-dark m-0 text-white fw-bold " href="{{route('kategori.create')}}" style="background-color: #233142"> Tambah Kategori</a>

                        </div>
                    </div>
                   
                    {{-- <div class="col text-end ">
                        <a  class="btn btn-dark m-0 text-white fw-bold " href="{{route('item.create')}}" style="background-color: #233142"> Tambah Item</a>
                    </div> --}}
                </div>

                <div class="card-body">
                    {{-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif --}}
                    
                    <table class="table table-responsive table-stripped">
                        <thead class="thead-light fw-bold">
                            <td>No</td>
                            <td>Category</td>
                            <td>Action</td>
                        </thead>
                        {{-- @foreach ($categories as $categories) --}}
                            
                       <tr>
                        <td> </td>
                        <td></td>
                       
                            <td>
                                <a href="" class="btn btn-sm btn-warning fw-bold text-dark btn-circle" >Edit</a>
                                <a href="" class="btn btn-sm btn-danger btn-circle" >Delete</a>
                            </td>
                        
                       </tr>
                       {{-- @endforeach --}}
                    </table>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
