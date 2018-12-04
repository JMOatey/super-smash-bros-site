function startTime() {
    var today = new Date();
	var currentDay = today.getDate();
    var currentHour = today.getHours();
    var currentMinute = today.getMinutes();
    var currentSecond = today.getSeconds();
	var currentMonth = today.getMonth();
	
	var releaseDate = new Date('December 07, 2018 00:00:00');
	var releaseMonth = releaseDate.getMonth();
	var releaseDay = releaseDate.getDate();
	var releaseHour = releaseDate.getHours();
	var releaseMinute = releaseDate.getMinutes();
	var releaseSecond = releaseDate.getSeconds();
	
	var monthsLeft = releaseMonth - currentMonth;
	var daysLeft = releaseDay - currentDay;
	var hoursLeft = releaseHour - currentHour;
	var minutesLeft = releaseMinute - currentMinute;
	var secondsLeft = releaseSecond - currentSecond;
	
	daysLeft = fixDays(monthsLeft, daysLeft);
    hoursLeft = fixHours(hoursLeft);
    minutesLeft = fixTime(minutesLeft);
	secondsLeft = fixTime(secondsLeft);
	
    document.getElementById('timer').innerHTML =
    "<h3>" + daysLeft + " Days " + hoursLeft + " Hours " + minutesLeft + " Minutes " + secondsLeft + " Seconds</h3>";
    var t = setTimeout(startTime, 500);
}

function fixTime(i) {
	i += 60;
    if (i < 10) {
		i = "0" + i;
	};
    return i;
}

function fixHours(i) {
	i += 24;
	if(i < 10) {
		i = "0" + i;
	}
	return i;
}

function fixDays(month, day){
	//I could hard code every month but this is just for demo purposes of a timer
	if(month > 0){
		day += 30;
	}
	return day;
}