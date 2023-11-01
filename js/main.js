
let ladingPage = document.querySelector(".landing");


let imageArry = ["sing3.jpeg", "bg6.jpg", "bg5.jpg", "sin2.jpeg", "bg3.jpg"];

    bgInterval =  setInterval(() => { 
    let randomPage = Math.floor(Math.random() * imageArry.length);
    
    ladingPage.style.backgroundImage = 'url("img/' + imageArry[randomPage] + '")';
    }, 5000) ;
    
     // count 
     let nums = document.querySelectorAll(".stats .number");
     let statt = document.querySelector(".stats");
     let started = false;
 
     window.onscroll = function () {
         if(window.scrollY >= statt.offsetTop){
             if(!started){
                 nums.forEach((num) => starCount(num));
             }
             started = true; 
         }
     };
 
     function starCount(elee) {
         let goal = elee.dataset.goal;
         let count = setInterval(() => {
             elee.textContent++;
             if(elee.textContent == goal) {
                 clearInterval(count);
             }
         }, 2000 / goal);
     }
