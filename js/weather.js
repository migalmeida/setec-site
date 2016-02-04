if("geolocation" in navigator){
    navigator.geolocation.getCurrentPosition(function(position){
        loadWeather(position.coords.latitude + ',' + position.coords.longitude);
    });
}
else{
    loadWeather("Lisbon, IN", "");
}

$(document).ready(function(){

    loadWeather("Oporto, IN", "");
});

function loadWeather(location,woeid){

    $.simpleWeather({
        location:location,
        woied:woeid,
        unit:'c',
        success : function(weather){
            city = weather.city;
            temp = weather.temp +'&deg';
            wcode = '<img class="weathericon" src="images/weathericons/'+ weather.code+'.svg">;';
            wind = '<p>'+weather.wind.speed + '</p><p>'+weather.units.speed+'</p>';
            humidity = weather.humidity + '%';

            $(".location").text(city);
            $(".temperature").html(temp);
            $(".climate_bg").html(wcode);
            $(".windspeed").html(wind);
            $(".humidity").html(humidity);
        },
        error: function(error){
            $(".error").html('<p>'+ error+ '</p>')
        }
    });
}