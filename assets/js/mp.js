
// Agrega credenciales de SDK del vendedor
  const mp = new MercadoPago("TEST-65df8076-734e-42c5-bef0-89bbe707e7c4", {
        locale: 'es-AR'
  });

  // Inicializa el checkout
  mp.checkout({
      preference: {
             // Inicializa del vendedor
          id: document.getElementById("preferenceId").value
      },
      render: {
            container: '.cho-container', // Indica el nombre de la clase donde se mostrará el botón de pago
            label: 'Pagar', // Cambia el texto del botón de pago (opcional)
      }
});
