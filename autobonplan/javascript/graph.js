/// Table

let rows;

// function tableCreate(){
//   var body = document.querySelector(".table"),
//       tbl  = document.createElement('table');
//   tbl.style.width  = '100px';
//   tbl.style.border = '1px solid black';

//   for(var i = 0; i < 3; i++){
//       var tr = tbl.insertRow();
//       for(var j = 0; j < 2; j++){
//           if(i == 2 && j == 1){
//               break;
//           } else {
//               var td = tr.insertCell();
//               td.appendChild(document.createTextNode('Cell'));
//               td.style.border = '1px solid black';
//               if(i == 1 && j == 1){
//                   td.setAttribute('rowSpan', '2');
//               }
//           }
//       }
//   }
//   body.appendChild(tbl);
// }
// tableCreate();

let datasCount = [];
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
      data: datasCount,
    },
  ],
};

const config = {
  type: "bar",
  data: data,
  options: {
    onClick: (e) => {
      document.querySelector("table")?.remove();

      const canvasPosition = myChart.getElementsAtEventForMode(
        e,
        "nearest",
        {
          intersect: true,
        },
        false
      );
      let table = document.createElement("table");
      let test =
        "<tr><td>VIN</td><td>Marque</td><td>Modele</td><td>Energie</td><td>Date arrivee</td><td>Fournisseur</td></tr>";
      rows[canvasPosition[0].index].forEach((row) => {
        test =
          test +
          `<tr><td>${row?.VIN}</td><td>${row?.Marque}</td><td>${row?.Modele}</td><td>${row?.Energie}</td><td>${row?.DateArrivee}</td><td>${row?.Fournisseur}</td></tr>`;
      });
      table.innerHTML = test;
      document.querySelector(".table").append(table);
    },
  },
};

function addData(chart, data) {
  chart.data.datasets.forEach((dataset) => {
    dataset.data.push(data);
  });
  chart.update();
}

function addDataTable(datas, row) {
  datas;
}

var myChart = new Chart(document.getElementById("myChart"), config);

// onload

let xhr = new XMLHttpRequest();
xhr.open("GET", "php/graph.php", true);
xhr.onload = (e) => {
  if (xhr.readyState === XMLHttpRequest.DONE) {
    if (xhr.readyState === 4) {
      if (xhr.status === 200) {
        rows = JSON.parse(xhr.responseText);
        datasCount.push(
          rows[0].length,
          rows[1].length,
          rows[2].length,
          rows[3].length,
          rows[4].length
        );

        // test =
        //   test +
        //   "<tr><td>VIN</td><td>Marque</td><td>Modele</td><td>Energie</td><td>Date arrivee</td><td>Fournisseur</td></tr>";

        // onClick = (e) => {
        //   rows[e].forEach((row) => {
        //     test =
        //       test +
        //       `<tr><td>${row.VIN}</td><td>${row.Marque}</td><td>${row.Modele}</td><td>${row.Energie}</td><td>${row.DateArrivee}</td><td>${row.Fournisseur}</td></tr>`;
        //   });
        //   table.innerHTML = test;
        //   document.querySelector(".table").append(table);
        // };

        addData(myChart, datasCount);
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
