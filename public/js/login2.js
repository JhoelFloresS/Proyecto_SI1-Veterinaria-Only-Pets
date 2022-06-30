const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');
const linkSubmit = document.getElementById('linkSubmitLogin');

signUpButton.addEventListener('click', () => {
    container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
    container.classList.remove("right-panel-active");
});

linkSubmit.addEventListener('click', ()=>{
    document.getElementById('buttonFormLogin').click();
})