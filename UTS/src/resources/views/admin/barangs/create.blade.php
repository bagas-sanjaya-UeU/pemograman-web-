@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} Barang
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route('admin.barangs.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="bookname">Nama Barang</label>
                <input class="form-control {{ $errors->has('barangName') ? 'is-invalid' : '' }}" type="text"
                    name="barangName" id="barangName" value="{{ old('barangName', '') }}" required>
                @if($errors->has('barangName'))
                <div class="invalid-feedback">
                    {{ $errors->first('barangName') }}
                </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="bookname">Kode Barang</label>
                <input class="form-control {{ $errors->has('barangCode') ? 'is-invalid' : '' }}" type="text"
                    name="barangCode" id="barangCode" value="{{ old('barangCode', '') }}" required>
                @if($errors->has('barangCode'))
                <div class="invalid-feedback">
                    {{ $errors->first('barangCode') }}
                </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="bookname">Stok Barang</label>
                <input class="form-control {{ $errors->has('barangStock') ? 'is-invalid' : '' }}" type="text"
                    name="barangStock" id="barangStock" value="{{ old('barangStock', '') }}" required>
                @if($errors->has('barangStock'))
                <div class="invalid-feedback">
                    {{ $errors->first('barangStock') }}
                </div>
                @endif
                <span class="help-block"></span>
            </div>
            <div class="form-group">
                <label class="required" for="bookname">Harga Barang</label>
                <input class="form-control {{ $errors->has('barangPrice') ? 'is-invalid' : '' }}" type="text"
                    name="barangPrice" id="barangPrice" value="{{ old('barangPrice', '') }}" required>
                @if($errors->has('barangPrice'))
                <div class="invalid-feedback">
                    {{ $errors->first('barangPrice') }}
                </div>
                @endif
                <span class="help-block"></span>
            </div>

            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection