<div id="chatbotWidget" class="chatbot-widget">
    <!-- Toggle Button -->
    <button type="button" class="chatbot-toggle" id="chatbotToggle" aria-label="Abrir chat">
        <i class="fas fa-comments"></i>
        <span class="chatbot-badge" id="chatbotBadge">1</span>
    </button>

    <!-- Chat Window -->
    <div class="chatbot-window" id="chatbotWindow">
        <div class="chatbot-header">
            <div class="chatbot-title">
                <h3>UtreBytes Chat</h3>
                <span class="chatbot-status">En línea</span>
            </div>
            <button type="button" class="chatbot-close" id="chatbotClose" aria-label="Cerrar chat">
                <i class="fas fa-minus"></i>
            </button>
        </div>

        <div class="chatbot-messages" id="chatbotMessages">
            <div class="chatbot-message chatbot-message--bot">
                <p>¡Hola! 👋 Somos el equipo de UtreBytes. ¿En qué podemos ayudarte hoy?</p>
            </div>
        </div>

        <div class="chatbot-input-area">
            <form class="chatbot-form" id="chatbotForm">
                <input 
                    type="text" 
                    class="chatbot-input" 
                    id="chatbotInput" 
                    placeholder="Escribe tu mensaje..."
                    aria-label="Campo de mensaje"
                >
                <button type="submit" class="chatbot-send" aria-label="Enviar mensaje">
                    <i class="fas fa-paper-plane"></i>
                </button>
            </form>
        </div>
    </div>
</div>
