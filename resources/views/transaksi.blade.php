@extends('layouts.app')

@section('content')
<div class="container ">
    <div class="row justify-content-center">
<div class="col-5 text-center">
@if (session('status'))
<div class="alert alert-success" role="alert">
    {{ session('status') }}
</div>
@endif
</div></div></div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"  style="background-color: #7fa99b">{{ __('Master Transaction') }}</div>

                <div class="card-body">
                   
                    
                    <table class="table table-responsive table-stripped">
                        <thead class="thead-light">
                            <td>No</td>
                            <td>Category</td>
                            <td>Name</td>
                            <td>Price</td>
                            <td class="col-md-2">Stock</td>
                            <td>Action<td>
                        </thead>
                        {{-- @foreach ($items as $item)
                            @foreach ($kategori as $categories) --}}
                            <tbody>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Rp.</td>
                                <td></td>
                                <td>
                                    <form action="{{ route('transaksi.store')}}" method="POST">
                                        @csrf
                                        <input type="hidden" value="" name="item_id">
                                        <input class="form-control" type="hidden" name="qty" value="1">
                                        <button type="submit" class="btn btn-sm btn-warning text-light"><i class="fas fa-plus"></i></button>
                                    </form>
                                </td>
                                
                            </tbody>
                            {{-- @endforeach
                        
                           @endforeach --}}
                    </table>
                    
                </div>
            </div>
        </div>
        <div class="col-md-5">
            <div class="card">
                <div class="card-header"  style="background-color: #7fa99b">{{ __('Cart') }}</div>

                <div class="card-body">
                    

                    <table class="table table-responsive">
                        <thead>
                        <td>No</td>
                        <td>Name</td>
                        <td class="col-md-2">Qty</td>
                        <td>Subtotal</td>
                        <td>Action</td>
                        </thead>
                        {{-- @if (($carts->isEmpty()))
                        <tr>
                            <td class="text-center" colspan="5">Keranjang Kosong</td>
                        </tr>
                        @else
                        @foreach ($carts as $cart) --}}
                        <tbody>
                            <td></td>
                            <td></td>    
                            <td>
                                <form action="" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <input min="1" max="" type="number" id="qty" class="form-control" 
                                        onchange="update ()" name="qty" value="" >
                                </td>
                            <td></td>
                            <td>
                                <input type="submit" class="btn btn-sm btn-primary" id="ubah" style="display: none" value="update">
                                </form>
                                <form action="" method="POST" class="action">
                                    @csrf
                                    @method('DELETE')
                        
                                   
                                    <!-- gtw nambah style apa -->
                                    <input type="submit" class="btn-danger btn btn-sm" id="hapus"  value="hapus">
                                </form>
                                <script>
                                    function update() {
                                        document.getElementById("ubah").style.display = "inline";
                                        document.getElementById("hapus").style.display = "none";
                                    }
                                </script>
                            </td>
                            <!-- <td>
                                <button class="btn btn-warning btn-sm">Edit</button>
                                <button class="btn btn-warning btn-sm">Hapus</button>
                            </td> -->
                      
                        {{-- @endforeach
                        @endif   --}}
                    </tbody>
                        <form action="" method="POST">
                            @csrf
                            <input type="hidden" value="" name="user_id" id="user_id">
                            <tbody>
                           
                                <td colspan="2">Total</td>
                                <td colspan="3">
                                    <input type="text" name="total"  class="form-control" readonly
                                    value=""  >
                                </td>
                            </tbody>
                            <tbody>
                                <td colspan="2">Payment</td>
                                <td colspan="3">
                                    <input  type="text" class="form-control" 
                                    {{-- min="="{{ $carts->sum(function($item){
                                        
                                        $grand = $item->price * $item->carts->qty;
                                        return $grand;
                                        }) }}  --}}
                                    name="pay_total" required >
                                </td>
                            </tbody>
                        </table>
                        <div class="footer">
                      
                        <input type="submit" class="btn-success btn text-light" name="" id="" value="submit">
                        <a href="" class="btn btn-danger">cancel</a>
                    </div>
                </form>
                    
            
                </div>
            </div>
        </div>
    </div>
</div>
@endsection