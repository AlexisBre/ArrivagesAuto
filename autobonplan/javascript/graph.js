let datas = [];
const monthNames = [
  "Janvier",
  "Fevrier",
  "Mars",
  "Avril",
  "Mai",
  "Juin",
  "Juillet",
  "Aout",
  "Septembre",
  "Octobre",
  "Novembre",
  "Decembre",
  "Janvier",
  "Fevrier",
  "Mars",
  "Avril",
  "Mai",
  "Juin",
];

const dateObj = new Date();
const monthNumber = dateObj.getMonth();
const monthName = monthNames[monthNumber];

const labels = [
  monthNames[monthNumber],
  monthNames[monthNumber + 1],
  monthNames[monthNumber + 2],
  monthNames[monthNumber + 3],
  monthNames[monthNumber + 4],
];

const data = {
  labels: labels,
  datasets: [
    {
      label: "arrivages",
      backgroundColor: "rgb(60, 122, 206)",
      borderColor: "rgb(255, 99, 132)",
      data: datas,
    },
  ],
};

const config = {
  type: "bar",
  data: data,
  options: {},
};

function addData(chart, data) {
  chart.data.datasets.forEach((dataset) => {
    dataset.data.push(data);
  });
  chart.update();
}

var myChart = new Chart(document.getElementById("myChart"), config);


            // onload
let xhr = new XMLHttpRequest();
xhr.open("GET", "php/graph.php", true);
xhr.onload = (e) => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        let rows = JSON.parse(xhr.responseText);
        console.log(rows);
        datas.push(rows[0].length,rows[1].length,rows[2].length,rows[3].length,rows[4].length);
        addData(myChart,datas)
      } else {
        console.error(xhr.statusText);
      }
    }
  }
};
xhr.onerror = function (e) {
  console.error(xhr.statusText);
};
xhr.send(null);
