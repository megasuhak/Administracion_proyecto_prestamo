<!--Contacto msj-->
<div class="container-fluid mt-5">
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h1 class="text-uppercase">contacto</h1>
        <p>Atendemos tus dudas.</p>
      </div>
    </div>
  </div>
</div>

<!--email y contactos-->
<div class="container-fluid mt-5">
  <div class="container">
    <div class="row">
      <!--Correo-->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h6 class="text-uppercase">para cualquier consulta puedes escribir un email. estaremos encantados de atenderte.</h6>
        <div class="container">
          <form class="mt-3" id="form">
            <div class="form-group">
              <input type="text" id="name" class="form-control"  placeholder="Correo">
            </div>
            <div class="form-group">
              <input type="email" id="email" class="form-control"  placeholder="Confirme su correo">
            </div>
            <div class="form-group">
              <input type="text" id="subject" name="telefono" class="form-control" placeholder="Teléfono">
            </div>
            <div class="form-group">
              <textarea class="form-control" id="body" placeholder="Por favor coloque sus preguntas aquí" rows="3"></textarea>
            </div>
            <input type="button" id="envio" onclick="sendEmail()" value="Enviar" class="btn btn-primary">
          </form>
        </div>
      </div>
      <!--Contacto-->
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <h4 class="text-center">Estamos para ayudarte.</h4>
        <p class="text-uppercase text-center">resolvemos tus dudas</p>
        <div class="row">
          <div class="col-12 mb-5">
            <table>
              <tr>
                <td><i class="fas fa-phone fa-3x" style="color:#048ccc;"></i></td>
                <td class="pl-2">
                  <h3 class="mt-1">Llámanos</h3>
                  <span class="p-2">809 568 7689</span>
                 </td>
              </tr>
            </table>
          </div>
          <div class="col-12 mb-5">
            <table>
              <tr>
                <td><i class="fas fa-envelope fa-3x" style="color:#048ccc;"></i></td>
                <td class="pl-2">
                  <h3 class="mt-1">Escríbenos</h3>
                  <span class="p-2">tuprestamo@gmail.com</span>
                </td>
            </table>
          </div>
          <div class="col-12">
            <table>
              <tr>
                <td><i class="fas fa-map-marker-alt fa-3x" style="color:#048ccc;"></i></td>
                <td class="pl-3">
                  <h3 class="mt-1">Encuéntranos</h3>
                  <span class="p-2">Av. Altagracia, Plaza Maurelys – frente a la Texaco Basílica (Rochell)
                    2º nivel-local 1
                    Higuey 23000
                  </span>
                </td>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
