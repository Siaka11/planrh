


    const heart = document.querySelector('.fa-heart')
    let likefav = document.querySelector('.likefav')
    let favoritelike = document.querySelectorAll(".fa-heart")

    for(let favorite of favoritelike){
        favorite.addEventListener("click", liker)
        //favorite.classList.toggle("a.job-list-favourite")
        console.log("okay ")
    }


function liker(){
    this.classList.toggle('job-list-favourite-hard')
   // heart.classList.toggle("job-list-favourite-hard")
   // console.log(this.classList.toggle("job-list-favourite-hard"))
   // console.log(this.dataset.id)
    let xmlhttp = new XMLHttpRequest;

    xmlhttp.open('GET', '/main/jaime/'+this.dataset.id)
    xmlhttp.send();
 
}