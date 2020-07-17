


@if($errors->any())
    @foreach($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
@endif

@if(session()->has('message'))
    <div class="alert alert-{{ session('type') }}">{{ session('message') }}</div>
@endif
