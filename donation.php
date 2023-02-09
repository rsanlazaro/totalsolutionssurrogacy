<?php
include 'includes/templates/header.php';
?>

<main class="program">
  <div class="hero-img">
    <div class="img-container">
      <img src="build/img/hero/eggDonor.webp" alt="hero-image" />
    </div>
  </div>
  <div class="program-info">
    <h3>Conviértete en <span>donante de óvulos</span></h3>
    <p>En Egg Donor, tenemos la mayor admiración y respeto por las mujeres jóvenes que deciden ayudar a otros donando sus óvulos. Convertirse en donante de óvulos puede parecer complejo y abrumador. Nuestro trabajo es guiar a la donante de óvulos a través del proceso, aliviar las preocupaciones y hacer de esta una experiencia placentera y satisfactoria.</p>
    <p>Sin donantes de óvulos como usted, las parejas que luchan por formar una familia tendrían pocas esperanzas. La donación de óvulos ha sido descrita como una de las decisiones más poderosas y gratificantes que una mujer puede tomar, y esperamos que elija convertirse en donante de óvulos. Obtenga más información sobre el proceso de donación de óvulos, la compensación de las donantes de óvulos y los requisitos de las donantes de óvulos para los solicitantes.</p>
  </div>
  <div class="program-details">
    <div class="program-details-text">
      <ul>
        <li>Entre los 21 y 31 años.</li>
        <li>Físicamente saludable.</li>
        <li>Tener un IMC 19-29 <a class="IMC-link" href="https://www.cdc.gov/healthyweight/spanish/assessing/bmi/adult_bmi/metric_bmi_calculator/bmi_calculator.html"> (Calculadora de IMC) </a></li>
        <li>No fumador.</li>
        <li>Tiene períodos menstruales mensuales regulares.</li>
        <li>No usar inyecciones de Depo-Provera, DIU Mirena, o implantes como forma de control de la natalidad.</li>
        <li>Tener ambos ovarios.</li>
        <li>Psicológicamente saludable.</li>
        <li>Sin consumo actual de psicofármacos.</li>
        <li>Sin anteceedentes de abuso de sustancias.</li>
        <li>Sin antecedentes familiares de transtornos genéticos hereditarios.</li>
        <li>Dispuesto a tomar inyecciones.</li>
        <li>Confiable, maduro y capaz de asistir a las citas.</li>
        <li>Si se cumplen los requisitos mínimos de óvulos de donante anteriores, complete y envíe la solicitud en línea.</li>
      </ul>
      <div class="program-details-title">
        <p>Requisitos <span>para donación de óvulos</span></p>
      </div>
      <div class="program-details-heart">
        <img src="build/img/icons/heart.webp" alt="heart">
      </div>
    </div>
  </div>
  <div class="program-contact">
    <div class="form-body">
      <div class="contact-form">
        <h2 class="contact-form-title">Quiero ser donante</h2>
        <form action="https://formsubmit.co/26414949918063df4e1da63cd289b75d" method="POST" class="row g-3 needs-validation" novalidate>
          <div class="col-md-12">
            <input type="text" class="form-control" id="validationCustom01" name="Nombre" placeholder="Nombre completo" required />
            <div class="invalid-feedback">
              <div>Ingrese un nombre</div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="has-validation">
              <input type="email" class="form-control" id="validationCustomUsername" aria-describedby="inputGroupPrepend" name="Correo" required placeholder="Correo electrónico" />
              <div class="invalid-feedback">
                <div>Ingrese un correo válido</div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <input type="tel" class="form-control" id="validationCustom02" pattern="[0-9]+" required name="Teléfono" placeholder="Teléfono" />
            <div class="invalid-feedback">
              <div>Ingrese un número de teléfono</div>
            </div>
          </div>
          <div class="col-md-12">
            <select class="form-select" required aria-label="select example">
              <option value="">Programa de interés</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
            <div class="invalid-feedback">Seleccione un programa</div>
          </div>
          <div class="col-md-12">
            <textarea class="form-control" id="validationCustom03" name="Mensaje" placeholder="Mensaje adicional"></textarea>
            <div class="invalid-feedback">
              <div></div>
            </div>
          </div>

          <div>
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required />
              <label class="form-check-label" for="invalidCheck">
                <a href="#exampleModal" data-bs-toggle="modal">
                  <p class="aviso">Acepto el aviso de privacidad</p>
                </a>
              </label>
              <div class="invalid-feedback">
                <p class="aviso">Debe aceptar el aviso de privacidad</p>
              </div>
            </div>
          </div>
          <input type="hidden" name="_next" value="https://www.mpetsa.com/thanks.php" />
          <input type="hidden" name="_subject" value="Solicitud de informes" />
          <div class="d-grid d-md-block d-md-flex justify-content-md-center">
            <button class="btn btn-send" type="submit">
              <div>Agendar</div>
            </button>
          </div>

          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h3 class="modal-title" id="exampleModalLabel">
                    Aviso de privacidad
                  </h3>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  <p>
                    Salud and Concept, con domicilio para efectos del
                    tratamiento de datos personales que efectúa dentro
                    del territorio de los Estados Unidos Mexicanos, el
                    ubicado en las calles de Concepción Beistegui 720,
                    Col del Valle Centro, Benito Juárez, 03100, en la
                    Ciudad de México, es responsable del tratamiento de
                    sus datos personales, mismos que serán utilizados
                    para la prestación de nuestros servicios de
                    intermediación en gestación subrogada, incluyendo
                    los servicios médico-hospitalarios, hospitalización,
                    cirugía, farmacéuticos, análisis de laboratorio,
                    radiología e imagen, estudios y análisis
                    patológicos, terapia, rehabilitación, dieta,
                    nutrición, trabajo social, atención médica y
                    psicológica, inherentes a dicha actividad
                    profesional, así como para los distintos fines
                    establecidos en nuestro aviso de privacidad
                    integral.
                  </p>
                  <br />
                  <p>
                    Los Datos podrían ser transferidos, dentro y fuera
                    del país, a terceros relacionados o subcontratados
                    para los servicios a nuestro cargo, para los mismos
                    fines previstos en nuestro aviso de privacidad
                    integral.
                  </p>
                  <br />
                  <p>
                    Si Usted no manifiesta su oposición para que los
                    datos personales sean transferidos, se entenderá que
                    otorga su consentimiento para ello.
                  </p>
                  <br />
                  <p>
                    Para revocar su consentimiento, ponemos a su
                    disposición el correo electrónico
                    recepcion@saludconcept.mx, indicando en el asunto
                    del mensaje, la leyenda: “Revocación de
                    consentimiento de datos personales”, debiendo
                    proporcionar la información solicitada en nuestro
                    aviso de privacidad integral.
                  </p>
                  <br />
                  <p>
                    Para el ejercicio de sus derechos ARCO ponemos a su
                    disposición el correo electrónico
                    recepcion@saludconcept.mx, indicando en el asunto
                    la leyenda: “Solicitud de ejercicio de derechos
                    ARCO”, debiendo proporcionar la información
                    solicitada en nuestro aviso de privacidad integral.
                  </p>
                  <br />
                  <p>
                    <i>Última actualización de este aviso de privacidad:
                      15/01/2022</i>
                  </p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn" data-bs-dismiss="modal">
                    <div>Cerrar</div>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</main>

<?php
include 'includes/templates/footer.php';
?>

<!-- Boostrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- Custom JS -->
<script src="build/js/bundle.min.js"></script>
</body>

</html>