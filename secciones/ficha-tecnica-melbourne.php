<section class="ficha-tecnica-section-1">
    <div class="ficha-tecnica-header">
        <hr class="ficha-tecnica-slide-hr">
        <span class="ficha-tecnica-heading">
            <?php if ($len == 'es'): ?>
                Ficha técnica: Melbourne
            <?php else: ?>
                Prospectus: Melbourne
            <?php endif; ?>
            </span>
        <hr class="ficha-tecnica-slide-hr">
    </div>
    <div class="ficha-tecnica-content">
        <div class="operaciones-section-1-text-box">
            <span
                class="operaciones-section-1-heading"><?php if ($len == 'es'): ?>Gracias por su interés en nuestros proyectos.<?php else: ?>Thank you for your interest in our projects.<?php endif; ?></span>
            <p class="operaciones-section-1-text">
                <?php if ($len == 'es'): ?>
                    Nuestra especialidad es preparar a las empresas mexicanas para que puedan ser receptoras de capital
                    privado proveniente de fondos de inversión, compradores estratégicos o de Family Offices. Nos definimos
                    como “Fondo Puente”, ya que somos un vínculo entre la empresa familiar mexicana y los profesionales del
                    sector de Private Equity o Venture Capital.
                <?php else: ?>
                    Our expertise lies in enabling businesses to be targets of private equity sourced by investment funds, strategic buyers or family offices. We define ourselves as a “Bridge Fund”, given that we facilitate and establish the bond between a family-owned business and the private equity or venture capital sectors.
                <?php endif; ?>
            </p>
            <p class="operaciones-section-1-text">
                <?php if ($len == 'es'): ?>
                    El empresario que decide integrar nuevos socios o vender su compañía nos formaliza un mandato de
                    búsqueda y establecemos un convenio de colaboración con el objetivo de corregir contingencias de índole
                    financiero, jurídico, laboral, fiscal y comercial. Contamos con una estructura de asociación amplia;
                    conforme a las necesidades, adquirimos acciones de la entidad legal, colocamos deuda convertible o
                    tomamos una opción de compra preferente con un acuerdo de servicio.
                <?php else: ?>
                    The business owner who decides to bring strategic partners, or sell his company, specifies a search mandate and establishes a collaboration agreement with us in order to correct contingencies of several areas of the business, such as sales, financial, labor, tax and legal. According to the specific needs of our clients, we provide a flexible partnership structure in which we acquire equity from the legal entity, place convertible debt or obtain a preferential call option with an agreement to deliver the service.
                <?php endif; ?>
            </p>
            <p class="operaciones-section-1-text">
                <?php if ($len == 'es'): ?>
                    A los especialistas del sector de fusiones y adquisiciones les proporcionamos acceso a un pipeline de
                    empresas auditadas, así como una estructura documental que facilita el due diligence. Nuestro equipo de
                    especialistas proporciona detalles específicos sobre las condiciones de la empresa en todas las áreas de
                    negocio. Actualmente nos enfocamos principalmente en la industria médica, energética, telecomunicaciones
                    y retail.
                <?php else: ?>
                    To the professionals of the M&A sector, we provide access to a pipeline of audited businesses, ready to receive investment, and a platform of structured information that eases the due diligence process. Our team of specialists provides specific details about the conditions under which the company operates in all areas of business. Currently, EFM Capital focuses on industries, such as medical, energy, telecom and retail.
                <?php endif; ?>
            </p>
        </div>
        <div class="operaciones-section-1-form">
            <div class="operaciones-side-b-1">
                <img src="img/logos/pdf-icon.png" alt="Pdf Icono">
<<<<<<< HEAD
                <a href="descarga/ficha/melbourne-<?= $len; ?>.pdf" target="_blank">
=======
                <a href="descarga/melbourne-<?= $len; ?>.pdf" target="_blank">
>>>>>>> c7e545f8a2aa9e29ee13cc9ab3f648c4815c93ae
                    <button
                        class="operaciones-side-b-button-descarga"><?php if ($len == 'es'): ?>Descargar <?php else: ?>Download <?php endif; ?></button>
                </a>
                <hr>
                <p class="operaciones-side-b-text-1">
                    <?php if ($len == 'es'): ?>
                    Si este proyecto cumple con sus criterios y desea participar en el proceso por favor, continúe en
                    este enlace.
                    <?php else: ?>
                        If this project meets your criteria and wish to participate in the process please follow this link:
                    <?php endif; ?>
                </p>
<<<<<<< HEAD
                <a href="<?= $len; ?>/<?= $rqstForm; ?>" class="operaciones-side-b-button-descarga">
=======
                <a href="es/request-info" class="operaciones-side-b-button-descarga">
>>>>>>> c7e545f8a2aa9e29ee13cc9ab3f648c4815c93ae
                    <?php if ($len == 'es'): ?>
                    Solicitar información
                    <?php else: ?>
                        Request information
                    <?php endif; ?>
                </a>
                <p class="operaciones-side-b-text-1">
                    <?php if ($len == 'es'): ?>
                        EFM Capital se reserva la decisión sobre las autorizaciones de acceso a la plataforma, conforme a
                        sus propios criterios institucionales y no garantiza el envío del convenio de confidencialidad.
                    <?php else: ?>
                        EFM Capital reserves the decision on authorizations of access to the platform, according to their own institutional criteria and does not guarantee the shipping of confidentiality and non-disclosure agreement.
                    <?php endif; ?>

                </p>
            </div>
            <div class="operaciones-side-b-2"></div>
        </div>
    </div>
</section>