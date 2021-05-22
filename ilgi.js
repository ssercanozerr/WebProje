const url='https://api.openweathermap.org/data/2.5/'
const key='3005f58ff93f5ffcd42f60b89d63e134'

const BasEnter=(e)=>{
    if(e.keyCode=='13')
    GetirSonuc(searchBar.value)
}

const GetirSonuc=(SehirIsmi)=>{
    let Url=`${url}weather?q=${SehirIsmi}&appid=${key}&units=metric&lang=tr`
    fetch(Url)
    .then(api =>{
        return api.json()
    })
    .then(GosterSonuc)
}

const GosterSonuc = (result) => {
    let sehir = document.querySelector('.sehir')
    sehir.innerText =`${result.name}, ${result.sys.country}`
    
    let derece =document.querySelector('.derece')
    derece.innerText = `${Math.round(result.main.temp)}°C`

    let durum = document.querySelector('.durum')
    durum.innerText = result.weather[0].description

    let hissedilen=document.querySelector('.hissedilen')
    hissedilen.innerText=`${Math.round(result.main.temp_min)}°c /${Math.round(result.main.temp_max)}°c`

}

const searchBar=document.getElementById('searchBar')
searchBar.addEventListener('keypress',BasEnter)