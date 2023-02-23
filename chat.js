const chatbox = document.querySelector('.chatbox');
const input = document.getElementById('input');
const sendBtn = document.getElementById('send-btn');

sendBtn.addEventListener('click', () => {
	if (input.value) {
		chatbox.innerHTML += `<p class="user-msg">${input.value}</p>`;
		input.value = '';
		chatbox.scrollTop = chatbox.scrollHeight;
	}
});

input.addEventListener('keypress', (e) => {
	if (e.key === 'Enter') {
		if (input.value) {
			chatbox.innerHTML += `<p class="user-msg">${input.value}</p>`;
			input.value = '';
			chatbox.scrollTop = chatbox.scrollHeight;
		}
	}
});
