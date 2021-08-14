function splitScroll(){
    const controller = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: '200%',
        triggerElement: '.serviciosTitulo',
        triggerHook: 0
    })
    .setPin('.serviciosTitulo')
    //.addIndicators()
    .addTo(controller);

    const controllerProducto = new ScrollMagic.Controller();

    new ScrollMagic.Scene({
        duration: '200%',
        triggerElement: '.productosTitulo',
        triggerHook: 0
    })
    .setPin('.productosTitulo')
    //.addIndicators()
    .addTo(controllerProducto);
}

splitScroll();