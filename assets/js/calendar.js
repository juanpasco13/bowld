//Formulario

const today = document.getElementById('date');
const hourSelect = document.getElementById('time');



const actuallyDate = document.getElementById("date");
const embol = document.getElementById("embol");
const save = document.getElementById("save");

const daysTag = document.querySelector(".days");
const currentDate = document.querySelector(".current-date");

// getting new date, current year and month
let date = new Date();
let currYear = date.getFullYear();
let currMonth = date.getMonth();

// storing full name of all months in array
const months = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre",
  "Octubre", "Noviembre", "Diciembre"];

const renderCalendar = () => {
  let idDays;
  let firstDayofMonth = new Date(currYear, currMonth, 1).getDay(), // getting first day of month
    lastDateofMonth = new Date(currYear, currMonth + 1, 0).getDate(), // getting last date of month
    lastDayofMonth = new Date(currYear, currMonth, lastDateofMonth).getDay(), // getting last day of month
    lastDateofLastMonth = new Date(currYear, currMonth, 0).getDate(); // getting last date of previous month
  let liTag = "";

  for (let i = firstDayofMonth; i > 0; i--) {
    // creating li of previous month last days
    liTag += `<li class="inactive">${lastDateofLastMonth - i + 1}</li>`;
  }

  for (let i = 1; i <= lastDateofMonth; i++) {
    // creating li of all days of current month
    // adding active class to li if the current day, month, and year matched
    let isToday = "";
    if (i === date.getDate()) {
      isToday = "active";
    }
    if (i < date.getDate()) {
      isToday = "inactive";
    }
    liTag += `<li class="day ${isToday}">${i}</li>`;
  }

  for (let i = lastDayofMonth; i < 6; i++) {
    // creating li of next month first days
    liTag += `<li class="inactive">${i - lastDayofMonth + 1}</li>`;
  }
  currentDate.innerText = `${months[currMonth]} ${currYear}`; // passing current mon and yr as currentDate text
  daysTag.innerHTML = liTag;
};
renderCalendar();

const days = document.querySelectorAll(".day");

days.forEach((day) => {
  day.addEventListener("click", function (event) {
    if (!day.classList.contains("inactive")) {
      days.forEach((b) => b.classList.remove("onday"));
      day.classList.add("onday");

      if (document.querySelectorAll(".time") !== null) {
        let li = document.querySelectorAll(".time");
        hourSelect.value = "";
        li.forEach((liTag) => {
          liTag.parentNode.removeChild(liTag);
        });
      }

      let search =
        currYear +
        "-" +
        ("0" + (currMonth + 1)).slice(-2) +
        "-" +
        this.innerText;
      actuallyDate.value = `${search}`;
      console.log(
        window.location.protocol +
          "//" +
          window.location.host +
          "/Bowld/api/iframe/disponibilities/" +
          search
      );
      fetch(
        window.location.protocol +
          "//" +
          window.location.host +
          "/Bowld/api/iframe/disponibilities/" +
          search
      )
        .then((response) => response.json())
        .then((data) => {
          let newLi = "";
          for (let i = 14; i < 23; i++) {
            if (data[i].avalible == 1) {
              newLi += `<a class="time list-group-item list-group-item-action" data-bs-toggle="tab" role="tab">${
                data[i].time + ":00"
              }</a>`;
            }
          }
          embol.innerHTML = newLi;
          const timeSelect = document.querySelectorAll(".time");

          timeSelect.forEach((time) => {
            time.addEventListener("click", function (event) {
              timeSelect.forEach((b) => b.classList.remove("on"));
              hourSelect.value = this.innerText;
              time.classList.add("on");
            });
          });
        });
    }
  });
});

function sendData(){
    if(today.value == "" || hourSelect.value == "") {
        alert("Debe seleccionar una hora y fecha de reservacion");
        return false;
    }
    return true;
}

