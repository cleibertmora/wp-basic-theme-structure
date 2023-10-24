<?php
/* Template Name: Preguntas Frecuentes
    Template Post Type: page
*	@package Lexco Theme
*   @since Lexco Theme 1.0
*/

// Header
get_header();

// Navegacion
lexco_theme_render_nav();
?>


<div class="display-4 text-primary text-center mt-5 fw-bold">
    Preguntas frecuentes
</div>

<!-- Acordeon de preguntas -->

<div class="container mt-5">
    <h2 class="text-center"></h2>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <!-- Pregunta 1 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                    aria-controls="flush-collapseOne">
                    ¿Debo abrir de manera inmediata una cuenta en el banco a nombre de mi compañía recién creada?
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Sí, es obligación sacar inmediatamente la cuenta bancaria una vez terminado el trámite.
                </div>
            </div>
        </div>
        <!-- Pregunta 2 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false"
                    aria-controls="flush-collapseTwo">
                    ¿Qué opción es más recomendable ¿Comprar una compañía ya constituida o crear una nueva?
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Por lo general, la mejor opción es crear una compañía nueva.
                </div>
            </div>
        </div>
        <!-- Pregunta 3 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                    aria-controls="flush-collapseThree">
                    ¿Cuáles son los beneficios de tener mi compañía?
                </button>
            </h2>
            <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    <ul>
                        <li>Tener tasas de interés menores en los préstamos bancarios.</li>
                        <li>Generar confianza y seriedad ante sus clientes y potenciales clientes, al tener un negocio
                            formal.</li>
                        <li>Tener las cuentas claras entre socios, lo cual es muy importante para la repartición de las
                            ganancias.</li>
                        <li>Tener mejores oportunidades para conseguir contratos con el Estado y con otras compañías.
                        </li>
                        <li>Generar un patrimonio para dejarle a su familia.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Pregunta 4 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                    aria-controls="flush-collapseFour">
                    ¿Qué requisitos necesito para que LEXCO constituya mi compañía?
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    <ul>
                        <li>Copia de las cédulas de identidad de los socios y administradores.</li>
                        <li>Copia de la planilla de servicios básicos correspondiente al lugar donde va a operar la
                            compañía.</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Pregunta 5 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false"
                    aria-controls="flush-collapseFive">
                    ¿Cuál es la diferencia entre el nombre de la compañía y el nombre comercial?
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    El nombre de la compañía es el que consta en los documentos de la compañía y en las facturas, y, por
                    otro lado, el nombre comercial es el nombre constante en el logotipo. Estos nombres pueden ser
                    iguales o diferentes.
                </div>
            </div>
        </div>
        <!-- Pregunta 6 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false"
                    aria-controls="flush-collapseSix">
                    ¿Puedo usar el nombre comercial que estoy usando como persona natural en mi nueva compañía?
                </button>
            </h2>
            <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Sí se puede.
                </div>
            </div>
        </div>
        <!-- Pregunta 7 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false"
                    aria-controls="flush-collapseSeven">
                    Teniendo una compañía, ¿puedo mantener mi RUC como persona natural?
                </button>
            </h2>
            <div id="flush-collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Si usted desea, lo puede mantener. No es obligación que cierre su RUC como persona natural.
                </div>
            </div>
        </div>
        <!-- Pregunta 8 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false"
                    aria-controls="flush-collapseEight">
                    Yo no vivo en la ciudad de Guayaquil, ¿igualmente LEXCO me puede constituir mi compañía?
                </button>
            </h2>
            <div id="flush-collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Sí podemos.
                </div>
            </div>
        </div>
        <!-- Pregunta 9 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false"
                    aria-controls="flush-collapseNine">
                    ¿Cuál es la diferencia entre el Presidente y Gerente General?
                </button>
            </h2>
            <div id="flush-collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    El gerente general y el presidente son administradores de la compañía. El gerente general es el
                    primero al mando y el segundo al mando es el presidente, y los dos tienen la representación legal de
                    la compañía. Es importante indicar que no es necesario que los dos firmen juntos los actos y/o
                    contratos de la compañía, pero pueden decidir que sea con firma conjunta.
                </div>
            </div>
        </div>
        <!-- Pregunta 10 -->
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed text-primary fw-bold fs-5" type="button"
                    data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false"
                    aria-controls="flush-collapseTen">
                    ¿Cuál es la diferencia entre los socios y representantes legales?
                </button>
            </h2>
            <div id="flush-collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body fs-5">
                    Los socios son los propietarios de la compañía. Los representantes legales son administradores de la
                    compañía, estos últimos pueden ser socios o no.
                </div>
            </div>
        </div>
        <!-- Más preguntas aquí... -->
    </div>
</div>

<div class="justify-content-center text-center mt-4 pt-3">
    <h2 class="mb-2 pb-3 text-primary fs-2">Más Información</h2>
    <div class="">
        <a class="btn btn-warning text-white btn-lg pt-1 fw-bold"
            href="<?= esc_url(home_url('/contactanos')); ?>">CONTÁCTANOS</a>
    </div>
</div>

<br>
<br>
<?php
lexco_theme_render_footer();

// Footer
get_footer();