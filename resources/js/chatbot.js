document.addEventListener('DOMContentLoaded', () => {
    const chatbotToggle = document.getElementById('chatbotToggle');
    const chatbotWindow = document.getElementById('chatbotWindow');
    const chatbotClose = document.getElementById('chatbotClose');
    const chatbotForm = document.getElementById('chatbotForm');
    const chatbotInput = document.getElementById('chatbotInput');
    const chatbotMessages = document.getElementById('chatbotMessages');

    if (!chatbotToggle || !chatbotWindow) return;

    // Abrir/cerrar chat
    chatbotToggle.addEventListener('click', () => {
        chatbotWindow.classList.add('is-open');
        chatbotToggle.classList.add('is-open');
        chatbotInput.focus();
    });

    chatbotClose.addEventListener('click', () => {
        chatbotWindow.classList.remove('is-open');
        chatbotToggle.classList.remove('is-open');
    });

    // Enviar mensaje
    chatbotForm.addEventListener('submit', (e) => {
        e.preventDefault();
        const message = chatbotInput.value.trim();

        if (message) {
            // Agregar mensaje del usuario
            const userMessageDiv = document.createElement('div');
            userMessageDiv.className = 'chatbot-message chatbot-message--user';
            userMessageDiv.innerHTML = `<p>${escapeHtml(message)}</p>`;
            chatbotMessages.appendChild(userMessageDiv);

            // Limpiar input
            chatbotInput.value = '';

            // Scroll al último mensaje
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

            // Simular respuesta bot después de 500ms
            setTimeout(() => {
                const botMessageDiv = document.createElement('div');
                botMessageDiv.className = 'chatbot-message chatbot-message--bot';
                botMessageDiv.innerHTML = `<p>Próximamente disponible. 😊</p>`;
                chatbotMessages.appendChild(botMessageDiv);
                chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
            }, 500);
        }
    });

    // Función para escapar HTML
    function escapeHtml(text) {
        const div = document.createElement('div');
        div.textContent = text;
        return div.innerHTML;
    }

    // Cerrar chat cuando se presiona Escape
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape' && chatbotWindow.classList.contains('is-open')) {
            chatbotClose.click();
        }
    });
});
