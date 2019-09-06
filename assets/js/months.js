function getMonthdays(month, year) {
	if (month == 1 ||
		month == 3 ||
		month == 5 ||
		month == 7 ||
		month == 8 ||
		month == 10 ||
		month == 12) {
		return 31;
	} else if (month == 4 ||
		month == 6 ||
		month == 9 ||
		month == 11) {
		return 30;
	} else {
		isLeapYear = function(yr) {return !((yr % 4) || (!(yr % 100) && (yr % 400)));};
		if (isLeapYear) {
			return 29;
		} else {
			return 28;
		}
	}
}

function getTimeDifferenceContract(startDateStr, endDateStr) {
	var returnObject = { "years": null, "months": null, "days": null };
	var startDateArray = startDateStr.split('.');
	var endDateArray = endDateStr.split('.');
    var startMonthIx = startDateArray[1]-1;
    var endMonthIx = endDateArray[1]-1;
	var startDate = new Date(startDateArray[2], startMonthIx, startDateArray[0]);
	var endDate = new Date(endDateArray[2], endMonthIx, endDateArray[0]);
	
	var endDateFixed = new Date(endDate.getTime()+(1*24*60*60*1000));
	
	if (endDate > startDate) {
		var years = 0;
		var months = 0;
		var days = 0;
		var dateDiff = endDateFixed.getTime() - startDate.getTime();
	
		var sD = startDate.getDate();
		var sM = startDate.getMonth()+1;
		var sY = startDate.getFullYear();
		
		var eD = endDateFixed.getDate();
		var eM = endDateFixed.getMonth()+1;
		var eY = endDateFixed.getFullYear();
		
		if (sY == eY && sM == eM) {			
			days = Math.floor(dateDiff / (1000 * 60 * 60 * 24));
		}
		else if (sY == eY) {
			if (sD > eD) {
                months = eM - sM - 1;
				var startMonthRestDays = getMonthdays(sM, sY) - sD;
				days = startMonthRestDays + eD;
			}
			else {
                months = eM - sM;
				days = eD - sD;
			}
		}
		else {
			years = eY - sY - 1;
            var monthForYears = 0;
            if (years > 0) {
                monthForYears = (years - 1) * 12;
            } else {
                monthForYears = years * 12;
            }
			months = (12 - sM) + (eM - 1) + (monthForYears)
			var startMonthRestDays = getMonthdays(sM, sY) - sD;
			days = startMonthRestDays + eD - 0;
		}
		
        var lastMonth = eM - 1;
        var yearForEndMonthDays = eY;
        if (lastMonth < 1) {
            lastMonth = 12;
            yearForEndMonthDays = eY - 1;
        }		
        var endMonthDays = getMonthdays(lastMonth, yearForEndMonthDays);
		if (days >= endMonthDays) {          
			months = months + 1;
			days = days - endMonthDays - 1;
		}
		if (months >= 12) {
			years = years + 1;
			months = months - 12;
		}
		
		returnObject.years = years;
		returnObject.months = months;
		returnObject.days = days;
	}
	return returnObject;
}

function main() {   
    var difference = getTimeDifferenceContract("30.09.2011", "01.10.2015");
    var years = difference.years;
    var months = difference.months;
    var days = difference.days;
    
    jQuery('#myText2').text(years + " years, " + months + " months, " + days + " days");
}

main();

