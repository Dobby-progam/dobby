//display the about and scroll to it
const buttonL= document.getElementById("about");
const left = document.getElementById("left");
buttonL.addEventListener('click', function (){
left.classList.toggle('hadden')
left.scrollIntoView();
});
//display the contact page and scroll to it
const buttonR= document.getElementById("contact");
const contact = document.getElementById("contact1");
buttonR.addEventListener('click', function (){
contact.classList.toggle('hadden')
contact.scrollIntoView("");
});
//scroll up and hide the about 
const butabout= document.getElementById("butabout");
const up=document.getElementById("up");
butabout.addEventListener('click', function(){
up.scrollIntoView("");
left.classList.toggle("hadden");
});
//scroll up and hide the contact page
const butcont=document.getElementById("butcont")
butcont.addEventListener('click', function(){
    up.scrollIntoView
    contact.classList.toggle('hadden')

});