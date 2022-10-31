@extends("layouts.app")
@section('title', 'Trainers Create')
@section('content')
<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data">
    @csrf
    <div clas="form-group">
        <label for="">Nombre:</label>
        <input type="text" name="name" class="form-control">
</div>
<div clas="form-group">
        <label for="">Apellido:</label>
        <input type="text" name="apellido" class="form-control">
</div>
<div clas="form-group">
        <label for="">Avatar:</label>
        <input type="file" name="avatar" class="form-control">
</div>

<button type="submit" class="btn btn-primary">Guardar</button>
</form>
@endsection

