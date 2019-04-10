<div class="container-fluid mt-5 bg-light">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h1 class="text-uppercase text-center display-3 ">solicita tu préstamos ahora</h1>
        <p class="text-center display-4">Préstamos sin garantía y con garantía</p>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
        <div class="contenedor">
          <img src="assets/img/fondo1.jpg" class="img-fluid" alt="">
        </div>
        <div class="centrado">
          <h4 class="text-white">PRÉSTAMO SIN GARANTÍA</h4>
          <p class="text-uppercase text-white">* requisitos *</p>
          <p class="text-white">Ser mayor de 18 años <br>
            Cédula o pasaporte vigente <br>
            Ingresos fijos demostrables
          </p>
          <a href="#" class="bg-primary boton py-2 text-white text-uppercase">Solicitar Préstamos sin garantía</a>
        </div>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-4 col-xs-12">
        <div class="contenedor">
            <img src="assets/img/fondo2.jpg" class="img-fluid" alt="">
        </div>
        <div class="centrado">
          <h4 class="text-white">PRÉSTAMO CON GARANTÍA</h4>
          <p class="text-uppercase text-white">* requisitos *</p>
          <p class="text-white">Ser mayor de 18 años <br>
            Cédula o pasaporte vigente <br>
            Ingresos fijos demostrables
          </p>
          <a href="#" class="bg-primary boton py-2 text-white text-uppercase" data-toggle="modal" data-target=".bd-example-modal-xl">Solicitar Préstamos con garantía</a>

        </div>
        <div class="modal fade bd-example-modal-xl" id="formulario_prestamo" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-scrollable">
          <div class="modal-content">
            <div class="modal-header bg-primary">
             <h5 class="modal-title text-uppercase text-white" id="exampleModalScrollableTitle">Solicitud Préstamos con garantía</h5>
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
             </button>
           </div>
           <div class="modal-body">
             <form class="" id="form_prestamo" method="post">
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">nombres y apellidos*</label>
                   <input type="text" name="nombre" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">cédula/pasaporte*</label>
                   <input type="text" name="cedula_pasaporte" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">fecha de nacimiento(01/01/1990)*</label>
                   <input type="date" name="fecha_nacimiento" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">Teléfonos*</label>
                   <input type="tel" name="telefono" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">email*</label>
                   <input type="email" name="email" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">provincia*</label>
                   <input type="text" name="provincia" class="form-control" value="" required>
                 </div>
               </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">ciudad*</label>
                   <input type="text" name="ciudad" class="form-control" value="" required>
                 </div>
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">calle*</label>
                   <input type="text" name="calle" class="form-control" value="" required>
                 </div>
               </div>
                <div class="form_group col-md-6">
                   <label for="tipo_garantia" class="text-uppercase">Tipo garantia</label>
                  <select name="tipo_garantia" id="tipo_garantia" class="form-control">
                    <option value="aval">Aval</option>
                    <option value="embargo">Embargo</option>
                    <option value="hipoteca">Hipoteca</option>
                  </select>
               </div>
              <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">Monto rd$*</label>
                   <input type="number" name="monto" class="form-control" required>
                 </div>
                  <div class="form-group col-6">
                   <label for="meses" class="text-uppercase">Tiempo a pagar en meses*</label>
                   <input type="number" name="meses" class="form-control" required>
                 </div>
              </div>
               <div class="row">
                 <div class="form-group col-6">
                   <label for="nombres" class="text-uppercase">comentario*</label>
                   <textarea class="form-control" name="comentario" rows="3" required></textarea>
                 </div>
               </div>
               <!-- <p>El cliente es responsable de la veracidad de sus datos, comprometiéndose a no introducir datos falsos y a proceder a la modificación de los mismos si fuera necesario. Al rellenar esta solicitud reconoce y autoriza a Avalyca S.R.L. a verificar dicha información con todos los medios a nuestro alcance, incluido la consulta en los burós de información de crédito que consideremos oportunos. Avalyca S.R.L. se reserva el derecho de solicitar más información en caso de que sea necesario. Una solicitud de préstamo no constituye una obligación imputable a Avalyca S.R.L. para la aprobación del mismo.</p>
               <p>Su información podrá ser compartida con otras entidades ajenas a AVALYCA S.R.L. en aquellos casos en los que dicha entidad deba realizar alguna acción para nosotros o para satisfacer la necesidad de su solicitud. En estos casos AVALYCA S.R.L. tratará de asegurar que la información sólo se utilizará por parte de estas entidades para realizar la función para la que se contratan. Sólo revelaremos aquella información que sea absolutamente precisa para dicha labor. En cualquier momento podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición, comunicándolo a AVALYCA S.R.L. por e-mail (info@avalyca.com) o por carta a AVALYCA, calle Arquímedes Soto número 3, Higuey, provincia La Altagracia, República Dominicana.
               </p> -->
               <input type="submit" name="" class="btn-primary py-2 text-white justify-content-center enviar" value="SOLICITAR">
             </form>
           </div>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>
