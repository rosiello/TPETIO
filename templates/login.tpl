{include file="header.tpl"}
<div class="container">
    <figure class="figure">
        <img class="figure-img img-fluid" src="img/cabeza.jpg" alt="">
    </figure>
    <form>
        <div class="form-group">
            <label for="usuario">Usuario</label>
            <input type="text" class="form-control" id="usuarioInput" aria-describedby="usuario">
            <small id="user" class="form-text text-muted">Ingrese usuario</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
{include file="footer.tpl"}