function Notificacion(tipo, titulo, mensaje) {
    //http://sciactive.com/pnotify/#demos-simple

    if (tipo == "notice") {
        new PNotify({ title: titulo, text: mensaje, delay: 3000 });
    }
    else if (tipo == "info") {
        new PNotify({ title: titulo, text: mensaje, type: "info", delay: 3000 });
    }
    else if (tipo == "success") {
        new PNotify({ title: titulo, text: mensaje, type: "success", delay: 3000 });
    }
    else if (tipo == "error") {
        new PNotify({ title: titulo, text: mensaje, type: "error", delay: 3000 });
    }
}