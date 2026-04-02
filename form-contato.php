<?php
include('./dependencies/header.php');
?>

<!-- Hero Section Reduzida -->
<section class="hero-section" style="height: 40vh; margin-top: 60px;">
    <div class="hero-background"></div>
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 style="font-size: 3rem;">Entre em Contato</h1>
        <p>Sua mensagem é importante para nós</p>
    </div>
</section>

<!-- Informações de Contato -->
<section class="content-section">
    <div class="container-lg">
        <div class="row g-5 mb-5">
            <div class="col-md-4">
                <div class="card-topic">
                    <div class="card-body text-center">
                        <h5 class="card-title">📧 Email</h5>
                        <p class="card-text">contato@pascoa.com.br</p>
                        <p class="card-text" style="font-size: 0.9rem; color: #999;">Responderemos em até 24 horas</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-topic">
                    <div class="card-body text-center">
                        <h5 class="card-title">📱 Telefone</h5>
                        <p class="card-text">(11) 9999-9999</p>
                        <p class="card-text" style="font-size: 0.9rem; color: #999;">Segunda a sexta, das 9h às 18h</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card-topic">
                    <div class="card-body text-center">
                        <h5 class="card-title">📍 Localização</h5>
                        <p class="card-text">São Paulo, SP</p>
                        <p class="card-text" style="font-size: 0.9rem; color: #999;">Brasil</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Formulário de Contato -->
<section class="form-section" id="contato">
    <div class="container-lg">
        <h2 class="section-title text-center mb-5">Fale Conosco</h2>
        <div class="form-container">
            <h3 class="form-title">Entre em Contato</h3>
            <p class="form-subtitle">Você tem dúvidas ou gostaria de compartilhar suas tradições de Páscoa?</p>
            
            <form action="#" method="POST">
                <div class="form-group">
                    <label for="nome" class="form-label">Nome Completo</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Seu nome..." required>
                </div>

                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="seu@email.com" required>
                </div>

                <div class="form-group">
                    <label for="mensagem" class="form-label">Mensagem</label>
                    <textarea class="form-control" id="mensagem" name="mensagem" placeholder="Escreva sua mensagem aqui..." required></textarea>
                </div>

                <button type="submit" class="btn-submit">Enviar Mensagem</button>
            </form>
        </div>
    </div>
</section>


<!-- CTA de Retorno -->
<section class="content-section" style="text-align: center;">
    <div class="container-lg">
        <h3 style="color: var(--primary-color); margin-bottom: 20px;">Quer conhecer mais sobre Páscoa?</h3>
        <p style="color: #666; margin-bottom: 30px; font-size: 1.1rem;">Volte à nossa página inicial e explore todos os tópicos sobre essa celebração fascinante</p>
        <a href="./index.php" style="display: inline-block; padding: 12px 40px; background: linear-gradient(135deg, var(--primary-color) 0%, #6B4428 100%); color: white; text-decoration: none; border-radius: 8px; font-weight: 600; transition: all 0.3s ease;" onmouseover="this.style.transform='translateY(-3px)'; this.style.boxShadow='0 8px 20px rgba(139, 90, 60, 0.3)';" onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none';">
            ← Voltar ao Início
        </a>
    </div>
</section>

<?php
include('./dependencies/footer.php');
?>
