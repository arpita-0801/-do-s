document.getElementById('contactForm').addEventListener('submit' , submitForm);

function submitForm(e){
    e.preventDefault();

    //Show Alert
    document.querySelector('.alert').style.display='block';

    //disapper after 3 seconds
    setTimeout(function(){
        document.querySelector('.alert').style.display="none"
    },2000)

    document.getElementById('contactForm').reset();

}