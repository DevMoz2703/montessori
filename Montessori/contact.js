function enviarparawhatsapp() {
    let numero = "+258844231316";

    let nome = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let mensagem = document.getElementById('mensagem').value;

    const url = "https://wa.me/"+ numero + "?text="
    + "Nome: " +nome+ "%0a"
    + "Email: " +email+ "%0a"
    + "Mensagem: " +mensagem+ "%0a%0a";

    window.open(url, '_blank').focus();
}

function enviarparaemail() {
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "username",
        Password : "password",
        To : 'them@website.com',
        From : "you@isp.com",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
    
}