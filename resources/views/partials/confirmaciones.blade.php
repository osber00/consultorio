@if(session('responsable'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Asignación de responsable</h3>
        Fue asignado con éxito un responsable para esta solicitud, también se ha transferido el manejo de la misma a la persona delegada,
        el estado de la solicitud cambió a <strong>Asiganda</strong>
    </div>
@endif

@if(session('revisor'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Asignación de revisor</h3>
        Fue asignado con éxito un revisor para esta solicitud.
    </div>
@endif

@if(session('categoria'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Categoría</h3>
        La solicitud fue registrada en la categoría <strong>{{session('categoria')}}</strong>
    </div>
@endif

@if(session('prioridad'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Categoría</h3>
        La solicitud fue registrada con prioridad <strong>{{session('prioridad')}}</strong>
    </div>
@endif

@if(session('visibilidanota'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Categoría</h3>
        La estado de visiblidad de la nota pasó a <strong>{{session('visibilidanota')}}</strong>
    </div>
@endif

@if(session('nota-normal'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Nota agregada</h3>
        Se ha agregado con éxito la <strong>{{session('nota-normal')}}</strong>
    </div>
@endif

@if(session('nota-archivo'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Nota agregada</h3>
        Se ha agregado con éxito la <strong>{{session('nota-archivo')}} con archivo adjunto</strong>
    </div>
@endif

@if(session('nota-editada'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Edición de nota</h3>
        Se ha editado con éxito la {{session('nota-editada')}}
    </div>
@endif

@if(session('aceptacion'))
    <div class="alert alert-info">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-info"><i class="fa fa-check-circle"></i> Inicio de respuesta a la solicitud</h3>
        La solicitud está bajo su responsabilidad, verifique por favor el nivel de prioridad y su revisor(a) encargado(a), el estado de la solicitud es <strong>En progreso</strong>
        recuerde hacer la transferencia a su revisor(a) de esta cuando haya hecho el respectivo proceso y esté atenta(a) a hacer ajustes, suministrar información y/o documentos al usuario.
    </div>
@endif

@if(session('no-formato'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-danger"><i class="fa fa-check-circle"></i> Formato no permitido</h3>
        El formato del archivo que intenta adjuntar no está permitido por el sistema
    </div>
@endif

@if(session('sin-revisor'))
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span> </button>
        <h3 class="text-danger"><i class="fa fa-check-circle"></i> Sin revisor asignado</h3>
        Esta solicitud no tiene asignado un revisor
    </div>
@endif

