//Sabrina Meng/Tay Mitchell Quarter 3 Project 03/14/2020

var region = [];
var number = [];

function getJSON() {
	$.getJSON("overweightNumber.json", function(data) { 
		$.each(data, function( key, val ) {
			alert(key+" "+val);
			//region.push(val["GeoAreaName"]);
			//number.push(val["2015"]);
			//$("graph").append(val["GeoAreaName"]);
		})
	})
}

/*function getJSON() {
	$.ajax({url: "overweightNumber.json", success: function(result){
	$("#graph").html(result);
	}});
}*/

/*
function init() {
  const table = $("#table").DataTable( {
	"lengthMenu": [ 5, 10, 15, 20 ]
  } );
  const tableData = getTableData(table);
  createHighcharts(tableData);
  setTableEvents(table);
}

function getTableData(table) {
	const dataArray = [],
    yearArray = [],
    gdpArray = [];
 
  // loop table rows
  table.rows({ search: "applied" }).every(function() {
    const data = this.data();
    yearArray.push(data[0]);
    gdpArray.push(parseInt(data[1].replace(/\,/g, "")))
  });
 
  // store all data in dataArray
  dataArray.push(yearArray, gdpArray);

  return dataArray;
}

function createHighcharts(data) {
  Highcharts.setOptions({
    lang: {
      thousandsSep: ","
    }
  });
 
  Highcharts.chart("chart", {
    title: {
      text: "GDP Growth Over Time"
    },
    subtitle: {
      text: "Data from UN SDG Database"
    },
    xAxis: [
      {
        categories: data[0],
        labels: {
          rotation: -45
        }
      }
    ],
    yAxis: [
      {
        // first yaxis
        title: {
          text: "GDP Growth (%)"
        }
	  }
    ],
    series: [
      {
        name: "Density (P/Km²)",
        color: "#FF404E",
        type: "spline",
        data: data[1],
        yAxis: 1
      }
    ],
    tooltip: {
      shared: true
    },
    legend: {
      backgroundColor: "#ececec",
      shadow: true
    },
    credits: {
      enabled: false
    },
    noData: {
      style: {
        fontSize: "16px"
      }
    }
  });
}

let draw = false;
 
function setTableEvents(table) {
  // listen for page clicks
  table.on("page", () => {
    draw = true;
  });
 
  // listen for updates and adjust the chart accordingly
  table.on("draw", () => {
    if (draw) {
      draw = false;
    } else {
      const tableData = getTableData(table);
      createHighcharts(tableData);
    }
  });
}
*/
