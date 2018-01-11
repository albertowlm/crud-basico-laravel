<html>
<body>
<h1>Editar Clientes</h1>
<form method="post" action="/cliente/{{$client->id}}/editar">
    {!! csrf_field() !!}
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name" value="{{$client->name}}">
    <br/>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" value="{{$client->email}}">
    <br/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>