<div class="modal  fade" id="{{$id}}" tabindex="5" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl modal-fullscreen-lg-down">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title text-start fs-4" id="exampleModalLabel">
                    @if ($type == "administrativo")
                        Añadir Administrativo
                    @elseif($type == "veterinario")
                        Añadir Veterinario
                    @else
                        Añadir Cliente
                    @endif
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid bd-example-row">
                    <form class="row g-3" action="" method="post" >
                        @csrf
                        <div class="col-md-4">
                            <label for="nombre" class="form-label fs-5">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre">
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_paterno" class="form-label fs-5">Apellido Paterno</label>
                            <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno">
                        </div>
                        <div class="col-md-4">
                            <label for="apellido_materno" class="form-label fs-5">Apellido Materno</label>
                            <input type="text" class="form-control" id="apellido_materno" name="apellido_materno">
                        </div>
                        <div class="col-md-4">
                            <label for="ci" class="form-label fs-5">CI</label>
                            <input type="number" class="form-control" id="ci" name="ci">
                        </div>
                        <div class="col-md-4">
                            <label for="email" class="form-label fs-5">Email</label>
                            <input type="email" class="form-control" id="email" name="email">
                        </div>
                        <div class="col-md-4">
                            <label for="fecha_de_nacimiento" class="form-label fs-5">Fecha de nacimiento</label>
                            <input type="date" class="form-control" id="fecha_de_nacimiento" name="fecha_de_nacimiento">
                        </div>
                        <div class="col-12">
                            <label for="direccion" class="form-label fs-5">Dirección</label>
                            <input type="text" class="form-control" id="direccion" placeholder="Zona, Avenida, calle"
                            name="direccion">
                        </div>
                        <div class="col-md-4">
                            <label for="sexo" class="form-label fs-5">Sexo</label>
                            <div class="row px-5">
                                <div class="col-sm-5 form-check pl-2">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault1" value="M" name="sexo">
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Masculino
                                    </label>
                                </div>
                                <div class="col-sm-5 form-check">
                                    <input class="form-check-input" type="radio" name="flexRadioDefault"
                                        id="flexRadioDefault2" value="F" name="sexo">
                                    <label class="form-check-label" for="flexRadioDefault2">
                                        Femenino
                                    </label>
                                </div>
                            </div>
                           
                            <div class="row px-5">
                                <label for="sexo" class="col-sm-2 col-form-label fs-5">Turno</label>
                                <div class="col-sm-5 form-check pl-2">
                                    <select name="" id="">
                                        
                                    </select>
                                    <label class="form-check-label" for="flexRadioDefault1">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                            
                        </div>
                        @if ( $type != "cliente")
                        <div class="col-md-8">
                            <label for="profesion" class="form-label fs-5">Profesión</label>
                            <input type="text" class="form-control" id="profesion">
                        </div>
                        @endif
                       
                    </form>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-lg" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary btn-lg">Añadir</button>
            </div>
        </div>
    </div>
</div>