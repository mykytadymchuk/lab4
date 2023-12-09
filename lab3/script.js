function averageExperienceCalculation() {
  
  employeeDates = new Array();

  for (let i = 1; i <= 5; i++) {
    var dateInput = document.getElementById(`EmployeeDate${i}`).value;
    if (dateInput !== '') {
      employeeDates.push(new Date(dateInput));
    }
  }

  var currentDate = new Date();

  var totalDifferenceInYears = employeeDates.reduce(function(total, current) {
    var difference = currentDate.getFullYear() - current.getFullYear();
    return total + difference;
  }, 0);

  var averageYears = Math.round(totalDifferenceInYears / employeeDates.length);

  if (employeeDates.length !== 0) { 
    
    if (averageYears == 1) {
      alert("Середній стаж: " + averageYears + " рік");
    }

    else if (averageYears >= 2 && averageYears <= 4) {
      alert("Середній стаж: " + averageYears + " роки");
    }

    else {
      alert("Середній стаж: " + averageYears + " років");
    }
  }  
}