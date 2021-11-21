@extends("plantilla")

@section("cabecera")

@endsection

@section("contenido")
    <section id="contenido">
        <form>
                <h3>Usuarios</h3>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="UserName">Nombre de usuario</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="UserName" name="UserName" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="name">Nombre</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="name" name = "name" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="lname">Apellido</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="lname" name="lname" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="id">Cédula</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="id" name="id" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="telephone">Teléfono</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="telephone" name="telephone">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="mobile">Celular</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="mobile" name="mobile" required>
                </div>
            </div>          
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="address">Dirección</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="address" name="address" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="password">Contraseña</label>
                <div class="col-sm-10">
                <input type="password" class="form-control" id="password" name="password" required>
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">Rol en el sistema</label>
                <div class="col-sm-10">
                <input type="text" class="form-control" id="email" >
                </div>
            </div>
            <div class="row">
                    <div class="col align-self-end">
                        <button class="btn btn-success col align-self-end">Guardar</button>
                </div>
            </div>		  
            <hr>
        </form>

        <table id="tabla" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>Nombre de usuario</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Cédula</th>
                    <th>Teléfono</th>
                    <th>Celular</th>
                    <th>Dirección</th>
                    <th>Contraseña</th>
                    <th>Rol en el sistema.</th>                
                </tr>
            </thead>
        </table>
        </section>
    </body>
    </html>
    <script>
        $(document).ready(function() {
            $('#tabla').DataTable();
        } );

        $(document).on('click', '.eliminar', function(e) {
            Swal.fire({
            title: 'Estas seguro de eliminar?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Si!'
            }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire(
                'Eliminado!',
                'Archivo eliminado correctamente.',
                'success'
                )
            }
            })
        });
    </script>
@endsection

@section('piedepagina')

@endsection