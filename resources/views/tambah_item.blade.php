@extends('layouts.app')

@section('content')
<div class="container">
  
        <div class="row justify-content-center">

            <div class="col-md-4 ">
                <div class="card p-2" style="background-color: slategray"    >
<div class="form-body" >
    <div class="row">
        <div class="form-holder">
            <div class="form-content">
                <div class="form-items">
                    <div class="form-header fw-bold bg-warning text-center rounded-2">
                    <h3>Tambah Item</h3>
                    <p>Isi semua kolom dibawah ini.</p>
                    </div>
                    <form class="requires-validation" novalidate>
                        <div class="col-md-12 mb-2">
                            <select class="form-select mt-3" required>
                                  <option selected disabled value="">Kategori</option>
                                  <option value="">Makanan</option>
                           </select>
                            <div class="valid-feedback">You selected a position!</div>
                            <div class="invalid-feedback">Please select a position!</div>
                       </div>

                        <div class="col-md-12 mb-2">
                           <input class="form-control" type="text" name="name" placeholder="Nama Item" required>
                           <div class="valid-feedback">Username field is valid!</div>
                           <div class="invalid-feedback">Username field cannot be blank!</div>
                        </div>

                        <div class="col-md-12 mb-2">
                            <input class="form-control" type="text" name="name" placeholder="Harga Item" required>
                            <div class="valid-feedback">Username field is valid!</div>
                            <div class="invalid-feedback">Username field cannot be blank!</div>
                         </div>

                         <div class="col-md-12">
                            <input class="form-control" type="text" name="name" placeholder="Stok Item" required>
                            <div class="valid-feedback">Username field is valid!</div>
                            <div class="invalid-feedback">Username field cannot be blank!</div>
                         </div>

                        <div class="form-button mt-3">
                            <button id="submit" type="submit" class="btn btn-success">simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
            </div>
        </div>
</div>
@endsection