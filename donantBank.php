<?php
include 'includes/templates/header.php';
?>

<main class="program">
  <div class="hero-img">
    <div class="img-container">
      <img src="build/img/hero/donorBank.webp" alt="hero-image" />
    </div>
  </div>
  <div class="program-info">
    <h3>Banco de <span>donantes</span></h3>
    <p>
      Nuestro equipo comprende que la búsqueda de donantes de óvulos puede
      parecer una tarea desalentadora. Durante su búsqueda de donación de
      óvulos, podrá ver una base de datos de donantes de óvulos con perfiles
      detallados de donantes de óvulos.
    </p>
    <p>
      Como parte de nuestro programa de donación de óvulos, estamos aquí
      para ayudarte a encontrar una donante de óvulos que satisfaga tus
      necesidades y preferencias únicas. Egg Donor lo ayudará en cada paso
      del camino, para cumplir su sueño de formar una familia.
    </p>
  </div>
  <div class="program-details">
    <div class="program-details-text">
      <ol>
        <li>
          Consultar: nuestro personal amable y experto está disponible para
          responder cualquier pregunta que pueda tener sobre el proceso de
          donación de óvulos. Nuestro objetivo es aliviar sus inquietudes al
          explicar cómo funciona nuestro programa con respecto a los asuntos
          legales, la detección y la logística de funcionamiento de un
          ciclo.
        </li>
        <li>
          Selección de donantes: encontrar la donante de óvulos adecuada es
          un proceso muy personal y trabajamos arduamente para garantizar
          que encuentre la pareja perfecta. Si bien las características como
          la altura, el color de los ojos y el cabello y los puntajes de
          coeficiente intelectual son importantes para muchas personas,
          también queremos darle una idea de la personalidad única de su
          donante de óvulos. Hemos descubierto que la mayoría de los futuros
          padres “sienten una conexión” cuando encuentran a la donante de
          óvulos adecuada.
        </li>
        <li>
          Centro de fertilidad: si aún no está trabajando con un centro o
          clínica de fertilidad, lo ayudaremos a seleccionar un centro de
          confianza en función de su ubicación y necesidades. El centro de
          fertilidad realizará la preselección de su donante de óvulos. Si
          aún no ha tenido su examen médico, también deberá hacerse la
          prueba.
        </li>
        <li>
          Cuenta fiduciaria: todas las tarifas deben ser mantenidas en
          depósito por un agente de depósito en garantía independiente, con
          licencia y garantizado, asegurándose de que su dinero esté
          protegido.
        </li>
        <li>
          Legalidades: nuestro coordinador legal le proporcionará una
          plantilla de un acuerdo de donante. Asimismo, lo derivará a un
          abogado en su jurisdicción con experiencia en la ley de
          reproducción asistida para revisar el acuerdo de donación, o
          redactar un acuerdo completamente nuevo, si lo desea. Una vez que
          haya firmado su acuerdo, nuestro coordinador se lo presentará a la
          donante, con la recomendación de que consulte con un abogado en su
          jurisdicción antes de firmarlo.
        </li>
        <li>
          Ciclismo: su médico de FIV les dará a todas las partes un
          protocolo médico a seguir. Los ciclos serán sincronizados y
          monitoreados. Nuestro personal atento y comprensivo lo mantendrá
          informado sobre el progreso del ciclo y lo guiará a través de su
          viaje para convertirse en padre.
        </li>
        <li>Embarazo: ¡ojalá en la primera transferencia de embriones!</li>
      </ol>
      <div class="program-details-title">
        <p>Pasos <span>a seguir</span></p>
      </div>
      <div class="program-details-heart">
        <img src="build/img/icons/heart.webp" alt="heart">
      </div>
    </div>
  </div>
  <div class="login-link">
    <p>Para poder acceder al catálogo de gestantes, es necesario iniciar sesión, en el botón de registro. Si requires más información, completa el siguiente formulario.</p>
    <a href="login.php">Iniciar sesión para acceder al catálogo</a>
  </div>
  <div class="program-contact">
    <div class="form-body">
      <div class="contact-form">
        <h2 class="contact-form-title">Quiero seleccionar donante</h2>
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
              <div>Enviar</div>
            </button>
          </div>

          <div
                  class="modal fade"
                  id="exampleModal"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                  aria-hidden="true"
                >
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h3 class="modal-title" id="exampleModalLabel">
                          Aviso de privacidad
                        </h3>
                        <button
                          type="button"
                          class="btn-close"
                          data-bs-dismiss="modal"
                          aria-label="Close"
                        ></button>
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
                          <i
                            >Última actualización de este aviso de privacidad:
                            15/01/2022</i
                          >
                        </p>
                      </div>
                      <div class="modal-footer">
                        <button
                          type="button"
                          class="btn"
                          data-bs-dismiss="modal"
                        >
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