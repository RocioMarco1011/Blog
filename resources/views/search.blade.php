@extends("layouts.app")
@section('content')
<div class="container " >
        <h5>Buscar Registros</h5>
<form  action="/api/search" method="get">
        <input type="text"  name="text" placeholder=""/>
        <button type="submit">Buscar</button>
</form>
</div>
@endsection
