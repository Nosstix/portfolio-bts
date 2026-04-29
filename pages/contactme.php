<br><br><br>

<div class="contact-container">
    <h1><i class="fas fa-envelope"></i> Contact</h1>

    <table class="contact-table">
        <tr>
            <td><i class="fab fa-linkedin"></i> LinkedIn</td>
            <td>
                <a href="https://www.linkedin.com/in/noah-millot-2505a4389" target="_blank" rel="noopener">
                    linkedin.com/in/noah-millot
                </a>
            </td>
        </tr>

        <tr>
            <td><i class="fab fa-github"></i> GitHub</td>
            <td>
                <a href="https://github.com/Nosstix" target="_blank" rel="noopener">
                    github.com/Nosstix
                </a>
            </td>
        </tr>

        <tr>
            <td><i class="fas fa-envelope"></i> Email</td>
            <td>
                <div class="contact-email-line">
                    <a href="mailto:noah.millot.m@gmail.com">noah.millot.m@gmail.com</a>
                    <button type="button" class="contact-send-btn" id="openContactForm">
                        <i class="fas fa-paper-plane"></i> Envoyer
                    </button>
                </div>
            </td>
        </tr>

        <tr>
            <td><i class="fab fa-discord"></i> Discord</td>
            <td>nosstix_15</td>
        </tr>

        <tr>
            <td><i class="fab fa-instagram"></i> Instagram</td>
            <td>
                <a href="https://instagram.com/nosstix15" target="_blank" rel="noopener">
                    @nosstix15
                </a>
            </td>
        </tr>
    </table>
</div>

<div class="contact-modal" id="contactModal" aria-hidden="true">
    <div class="contact-modal-backdrop"></div>
    <div class="contact-modal-card">
        <button type="button" class="contact-modal-close" id="closeContactForm">&times;</button>
        <h2><i class="fas fa-paper-plane"></i> Envoyer un message</h2>
        <p class="contact-modal-intro">
            Remplis le formulaire, il m’enverra directement ton message par mail.
        </p>

        <form action="https://formspree.io/f/mqewrvgg" method="POST" class="contact-form">
            <input type="hidden" name="_subject" value="Nouveau message depuis le portfolio de Noah Millot">

            <label for="contact-name">Nom</label>
            <input type="text" id="contact-name" name="name" placeholder="Votre nom" required>

            <label for="contact-email">Email</label>
            <input type="email" id="contact-email" name="email" placeholder="votre.email@example.com" required>

            <label for="contact-message">Message</label>
            <textarea id="contact-message" name="message" rows="6" placeholder="Votre message" required></textarea>

            <button type="submit" class="contact-submit-btn">
                <i class="fas fa-paper-plane"></i> Envoyer le message
            </button>
        </form>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('contactModal');
    const openBtn = document.getElementById('openContactForm');
    const closeBtn = document.getElementById('closeContactForm');

    function openModal() {
        modal.classList.add('open');
        modal.setAttribute('aria-hidden', 'false');
    }

    function closeModal() {
        modal.classList.remove('open');
        modal.setAttribute('aria-hidden', 'true');
    }

    openBtn.addEventListener('click', openModal);
    closeBtn.addEventListener('click', closeModal);

    modal.addEventListener('click', function(e) {
        if (e.target.classList.contains('contact-modal-backdrop')) {
            closeModal();
        }
    });
});
</script>
