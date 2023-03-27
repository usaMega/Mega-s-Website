const submit = document.querySelector('#submit');
const modalContent = document.querySelector("#feedback .modal-body");

const email = document.querySelector('#email');
const name = document.querySelector('#name');
const message = document.querySelector('#message');

submit.addEventListener('click', () => {
   modalContent.innerHTML = `<p>Email: ${email.value}</p> <p>Name: ${name.value}</p> <p>Message:${message.value}</p>`;
});
