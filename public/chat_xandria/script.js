
const endpoint="https://www.rafaelxander.com/chat"
//const endpoint="http://localhost:8000/chat"

document.getElementById('chatbot-button').addEventListener('click', function() {
    const chatbotContainer = document.getElementById('chatbot-container');
    chatbotContainer.style.display = 'flex';
    setTimeout(() => {
        chatbotContainer.classList.add('show');
    }, 10); // Pequeno atraso para permitir a transição
    this.style.display = 'none';
});

document.getElementById('close-chatbot').addEventListener('click', function() {
    const chatbotContainer = document.getElementById('chatbot-container');
    chatbotContainer.classList.remove('show');
    setTimeout(() => {
        chatbotContainer.style.display = 'none';
    }, 300); // Tempo suficiente para a transição ocorrer
    document.getElementById('chatbot-button').style.display = 'block';
});

document.getElementById('send-message').addEventListener('click', function() {
    const userInput = document.getElementById('user-input');
    const message = userInput.value.trim();
    if (message) {
        addMessage('user-message', message);
        userInput.value = '';
        
        // Adiciona o indicador de carregamento
        const loadingIndicator = document.createElement('div');
        loadingIndicator.className = 'message bot-message loading';
        document.getElementById('chatbot-body').appendChild(loadingIndicator);
        document.getElementById('chatbot-body').scrollTop = document.getElementById('chatbot-body').scrollHeight;

        // Envia a mensagem para a API
        sendMessageToApi(message).then(responseMessage => {
            loadingIndicator.remove();
            addMessage('bot-message', responseMessage);
        }).catch(error => {
            loadingIndicator.remove();
            addMessage('bot-message', 'Desculpe, estamos em manutenção agora, aguarde por alguns minutos por favor.');
            console.error('Erro:', error);
        });
    }
});
document.getElementById('user-input').addEventListener('keydown', function(event) {
    // Verifica se a tecla pressionada é Enter (código 13)
    if (event.keyCode === 13) {
        event.preventDefault();  // Evita que o formulário seja enviado (comportamento padrão)

        const userInput = document.getElementById('user-input');
        const message = userInput.value.trim();
        if (message) {
            addMessage('user-message', message);
            userInput.value = '';
            
            // Adiciona o indicador de carregamento
            const loadingIndicator = document.createElement('div');
            loadingIndicator.className = 'message bot-message loading';
            document.getElementById('chatbot-body').appendChild(loadingIndicator);
            document.getElementById('chatbot-body').scrollTop = document.getElementById('chatbot-body').scrollHeight;

            // Envia a mensagem para a API
            sendMessageToApi(message).then(responseMessage => {
                loadingIndicator.remove();
                addMessage('bot-message', responseMessage);
            }).catch(error => {
                loadingIndicator.remove();
                addMessage('bot-message', 'Desculpe, estamos em manutenção agora, aguarde por alguns minutos por favor.');
                console.error('Erro:', error);
            });
        }
    }
});


function addMessage(className, message) {
    const messageElement = document.createElement('div');
    messageElement.className = `message ${className}`;
    messageElement.innerText = message;
    document.getElementById('chatbot-body').appendChild(messageElement);
    document.getElementById('chatbot-body').scrollTop = document.getElementById('chatbot-body').scrollHeight;
}

async function sendMessageToApi(message) {
    const apiUrl = endpoint; // Substitua pela URL da sua API
   // const apiUrl = 'http://localhost:7000/chat'; // Substitua pela URL da sua API
    const response = await fetch(apiUrl, {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
        },
        body: JSON.stringify({'prompt':message }),
    });

    if (!response.ok) {
        throw new Error('Erro na resposta da API');
    }

    const data = await response.json();
    console.log(data);
    return data; // Ajuste de acordo com o formato de resposta da sua API
}
