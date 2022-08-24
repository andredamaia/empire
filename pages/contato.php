<div class="content-interna">
    <img src="<?php echo $pageurl; ?>/public/images/background-texture.jpg" class="content-interna-background" alt="" />
    <img src="<?php echo $pageurl; ?>/public/images/image-contato.jpg" class="xl-door image-contato" alt="" />

    <div class="content-wrapper content-contato">
        <h2><span>Contato</span></h2>

        <p>Para mais informações ou orçamentos, fale com a gente!</p>

        <form action="https://formsubmit.co/Jv.durigon@gmail.com" method="post" class="contact-form">
            <input type="hidden" name="_captcha" value="false">
            <input type="hidden" name="_next" value="https://empireacmdoors.com/contato">

            <div class="input-holder">
                <input type="text" name="name" placeholder="Nome" required />
            </div>

            <div class="input-holder">
                <input type="email" name="email" placeholder="E-mail" required />
            </div>

            <div class="input-holder">
                <input type="text" name="telefone" placeholder="Telefone" required />
            </div>

            <div class="input-holder">
                <textarea name="mensagem" placeholder="Mensagem" id="" cols="30" rows="10"></textarea>
            </div>

            <div class="button-holder">
                <button type="submit">Enviar</button>
            </div>
        </form>
    </div>
</div>