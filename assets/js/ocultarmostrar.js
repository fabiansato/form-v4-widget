function cerrarformulario() { // cierra el formulario

    div1 = document.getElementById('formulario');
    div1.style.display = 'none';
    
    div2 = document.getElementById('thankyou');
    div2.style.display = 'block';

    div3 = document.getElementById('registrateTitulo');
    div3.style.display = 'none';
    
    }
    
        function recargar(){
          location.reload(); 
        }