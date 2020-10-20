{include file="header.tpl"}
<div class="container">
    <p>Cursos de tecnicas</p>
    <table class="table table-light">
        <thead class="thead-light">
            <tr>
                <th>Tecnica</th>
                <th>Profesor/a</th>
                <th>Precio/mes</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{}</td>
                <td>{}</td>
                <td>{}</td>
            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th>#</th>
            </tr>
        </tfoot>
    </table>
    
</div>
<form action="submit" method="POST">
  <div class="form-group">
    <label for="tecnica">Inserte tecnica</label>
    <input type="text" class="form-control" id="tecnica">
  </div>
  <div class="form-group">
    <label for="profesor">Profesor/a</label>
    <input type="text" class="form-control" id="profesor">
  </div>
  <div class="form-group">
    <label for="precio">Precio/mes</label>
    <input type="text" class="form-control" id="precio">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


{include file="footer.tpl"}