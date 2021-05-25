let timer_show = document.getElementById("timer");

function diff(date1, date2) {
    return date2 - date1;
}

let end_date = {
    "year": "2022",
    "month": "09",
    "day": "15",
    "hours": "12",
    "minutes": "00",
    "seconds": "00"
}

let end_date_str = `${end_date.year}-${end_date.month}-${end_date.day} ${end_date.hours}:${end_date.minutes}:${end_date.seconds}`;



timer = setInterval(function () {
    let now = new Date();
    let date = new Date(end_date_str);
    let left = diff(now, date);
    if (left <= 0) {
        clearInterval(timer);
        alert("Мы открыты!");
       
    } 
    else {
        let res = new Date(left);
        let str_timer = `${res.getUTCFullYear() - 1970} лет 
        ${res.getUTCMonth()} месяца(-ев) 
        ${res.getUTCDate() - 1} дней(-я)
        ${res.getUTCHours()} часов(-а) 
        ${res.getUTCMinutes()} минут
        ${res.getUTCSeconds()} секунд`;
    
        timer_show.innerHTML = str_timer;
    }
}, 1000)
