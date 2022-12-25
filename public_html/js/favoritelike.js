


    const heart = document.querySelector('.fa-heart')
    let likefav = document.querySelector('.likefav')
    let favoritelike = document.querySelectorAll(".fa-heart")

    for(let favorite of favoritelike){
        favorite.addEventListener("click", liker)
        console.log(favoritelike)
        //favorite.classList.toggle("a.job-list-favourite")
        console.log("okay ")
    }


function liker(){
    console.log(this.classList)

    if(this.classList.contains("favouritejaime")){
        alert('Vous avez retiré un elment à votre favoris')

    }else{
        alert('Vous avez ajouté un elment à votre favoris')
    }

    //alert('Vous avez ajouté un elment à votre favoris')
    //this.classList.toggle('active')
    this.classList.toggle("favouritejaime")
   //console.log(this.classList.toggle("job-list-favourite-hard"))
   // console.log(this.dataset.id)
    let xmlhttp = new XMLHttpRequest;
    

    xmlhttp.open('GET', '/main/jaime/'+this.dataset.id)
    xmlhttp.send();
 
}