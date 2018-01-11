<html>
<body>
<h1>Crirar Clientes</h1>
<form method="post" action="/cliente/cadastrar">
    {!! csrf_field() !!}
    <label for="name">Nome:</label>
    <input type="text" name="name" id="name">
    <br/>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email">
    <br/>
    <button type="submit">Enviar</button>
</form>
</body>
</html>