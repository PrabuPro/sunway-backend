let getUrl = window.location;
let baseUrl = getUrl.protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];

var imported = document.createElement('script');
imported.src = baseUrl + 'assets/js/moment.js';
document.head.appendChild(imported);
var imported = document.createElement('script');
imported.src = baseUrl + 'assets/js/jquery.min.js';
document.head.appendChild(imported);
let todayIcon = document.querySelector('.parallax-box-home--icon');
let todayDate = document.querySelector('.parallax-box-home--text');
let todayWeather = document.querySelector('.parallax-box-home--text-2');
let todayTemp = document.querySelector('.parallax-window-temp');
let todayForecast = document.querySelector('.parallax-window-forecast');

document.addEventListener('DOMContentLoaded', (e) => {
    

    var proxy = 'https://cors-anywhere.herokuapp.com/';
    let weatherType;

    sendXhr(
        proxy + 'https://api.darksky.net/forecast/b25638fbb37cb22fab7196f2ce550ded/6.927079,79.861244?units=auto',
        'GET',
        (r) => {
            switch(r.daily.data[0].icon){
                case "rain":
                    weatherType = "rain"
                    changeData(r,weatherType);
                    break;
                case "partly-cloudy-day":
                    weatherType = "partly-cloudy-day"
                    changeData(r, weatherType);
                    break;
                case "partly-cloudy-night":
                    weatherType = "partly-cloudy-day"
                    changeData(r, weatherType);
                    break;
                case "clear-day":
                    weatherType = "clear-day"
                    changeData(r, weatherType);
                    break;
                case "clear-night":
                    weatherType = "clear-day"
                    changeData(r, weatherType);
                    break;
                case "cloudy":
                    weatherType = "cloudy"
                    changeData(r, weatherType);
                    break;
                default:
                    weatherType = "clear-day"
                    changeData(r, weatherType);
            }

            let keys = Object.keys(r);

            for(let i=1; i < keys.length ; i++){

                let forecastDate = moment.unix(r.daily.data[i].time);
                forecastDate = forecastDate.format('Do');
                
                $('.parallax-box-home-section-2').append(`
                <div class="parallax-box-home-section-2-box">
                    <h3 class="parallax-box-home-section-2-box-date">${forecastDate}</h3>
                    <img src="${baseUrl}/assets/images/${r.daily.data[0].icon}.svg" class="parallax-box-home-section-2-box-icon" alt="">
                    <h3 class="parallax-box-home-section-2-box-text">${(r.daily.data[0].icon).replace(/-/g, " ")}</h3>
                </div>
                `);

                
            }

           
        },
        (r) => {
            
            
        }
    );

    function changeData(r,weatherType){
        todayIcon.src = baseUrl + '/assets/images/'+weatherType+'.svg';
        todayIcon.style.fill = '#000000';
        const temp = moment.unix(r.daily.data[0].time);
        todayDate.innerHTML = temp.format('dddd, MMMM Do');
        todayWeather.innerHTML = r.daily.data[0].summary;
        todayTemp.innerHTML = r.currently.temperature + ' &deg;C';
        todayForecast.innerHTML = r.daily.summary;
    }


    function sendXhr(url, method, successCallback, failureCallback){
        let xhr = new XMLHttpRequest();
        xhr.open(method,url,true);

        xhr.onload = () => {
            let response = JSON.parse(xhr.responseText);
            if(Object.keys(response).length != 0 ){
                successCallback(response);
            } else {
                failureCallback(response);
            }
        }

        xhr.onerror = () => {
            alert('error on weather');
        }

        xhr.send();
    }

},false)