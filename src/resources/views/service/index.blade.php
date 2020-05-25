@extends('layouts.app')

@section('title', 'Services')

@section('content')
<h1>
    Welcome to Services
</h1>

<form action="/service" method="post">
    @csrf
    <input type="text" name="name">
    <button>Add Service</button>
    <p style="color: red">@error('name') {{ $message }} @enderror</p>

    <h2>Lista de Serviços Disponíveis</h2>
<select>
    @forelse($materials as $material)
        <option>{{ $material->material }}</option>
    @empty
        <option>No material Available</option>
    @endforelse
</select>

</form>



<ul>
    @forelse($services as $service)
        <li>{{ $service->name }}</li>
    @empty
        <li>No Service Available</li>
    @endforelse
</ul>
<br>

    {{ dd( $services ) }}

@endsection
