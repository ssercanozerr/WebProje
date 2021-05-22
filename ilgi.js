const url='https://api.openweathermap.org/data/2.5/'
const key='3005f58ff93f5ffcd42f60b89d63e134'

const setQuery=(e)=>{
    if(e.keyCode=='13')
    getResult(searchBar.value)
}

const getResult=(SehirIsmi)=>{
    let query=`${url}weather?q=${SehirIsmi}&appid=${key}&units=metric&lang=tr`
    fetch(query)
    .then(weather =>{
        return weather.json()
    })
    .then(displayResult)
}

const displayResult = (result) => {
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
searchBar.addEventListener('keypress',setQuery)