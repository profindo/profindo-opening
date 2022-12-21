@extends('home')

@section('content')
@include('surat.'.$surat)
@endsection

@section('footer')
<footer>
    <div class="appBottomMenu bg-danger">
        <div class="item">
            <a href="/">
                <p class="text-white">
                    <i class="fa-solid fa-arrow-left"></i>
                    <span>Kembali</span>
                </p>
            </a>
        </div>
    </div>
</footer>
@endsection
