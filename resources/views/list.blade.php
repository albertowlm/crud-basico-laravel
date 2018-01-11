<html>
<body>
<h1>Listar Clientes</h1>
<a href="form-cadastrar">Novo Cliente</a>
<table>
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
            <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->email}}</td>
                <td><a href="/cliente/{{$client->id}}/form-editar">Editar</a></td>
                <td><a href="/cliente/{{$client->id}}/excluir" onclick="event.preventDefault()
                ;if(confirm('Deseja excluir este Registro?')){window.location.href='/cliente/{{$client->id}}/excluir'};">Excluir</a></td>
            </tr>

        @endforeach
    </tbody>
</table>
</body>
</html>