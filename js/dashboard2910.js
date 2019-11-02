 
 const mentorTable = document.querySelector(".mentor-table")
 const internTable = document.querySelector(".intern-table")
 const _mentorLocation = document.querySelector('#mentorLocation');
 const _internLocation = document.querySelector('#internLocation');
 const _mentorTrack = document.querySelector('#mentorTrack');
 const _internTrack = document.querySelector('#internTrack');
 const statistics = document.querySelector('#statistics');
 const internStateCanvas = document.querySelector('#count_by_state');
 const mentorStateCanvas = document.querySelector('#count_by_state2');
 const internTrackCanvas = document.querySelector('#count_by_track');
 const mentorTrackCanvas = document.querySelector('#count_by_track2');
 
//  console.log(_mentorLocation, _internLocation, _mentorTrack, _internTrack)
 
 const tableToArray=(table)=>{
  let data = [];
 
  let headers = [];
  for(let i=0; i<table.rows[0].cells.length; i++){

      headers[i]=table.rows[0].cells[i].dataset.heading
      
  }
      data.push(headers);

  for(let i=1; i<table.rows.length; i++){
      let tableRow = table.rows[i];
      let rowData = {};

      for(let j=0; j<tableRow.cells.length; j++){
      rowData[headers[j]] = tableRow.cells[j].innerHTML;
      }
      data.push(rowData)
  }
  return data
}

const mentorData = tableToArray(mentorTable)
const internData = tableToArray(internTable)
let interests;


const trackCount =(track)=>{
  
  if(!interests.hasOwnProperty(track.trim())){
    interests[track.trim()] = 1;
  }else{ interests[track.trim()] += 1} 
}


const collateByTrack =(element, dataArray, area, title)=>{
  interests = {};
  for(let i=1; i<dataArray.length; i++){
  
    if(dataArray[i][area].trim().includes(' ')){
    let tracks = dataArray[i][area].trim().split(' ');
      for(track of tracks){
        trackCount(track)
      }
    }else{
      let track = dataArray[i][area]
      trackCount(track) 
    }
  }
  
  createCharts(element, "bar", Object.keys(interests), Object.values(interests), title)
 
}

  const byLocation =(element, dataArray, state, title)=>{
    let states = {};
    
    for(let i=1; i<dataArray.length; i++){
        if(!states.hasOwnProperty(dataArray[i][state])){
            states[dataArray[i][state]] = 1;
        }else{ states[dataArray[i][state]] += 1} 
    }
    
    createCharts(element, "bar", Object.keys(states), Object.values(states), title)
}


  const loadChart =()=>{

      if(event.target.name === "byLocation" || event.type === "load"){
       
          if(_mentorLocation.checked){
            byLocation("count_by_state2", mentorData, "state", "Active Mentor Count By Location")
            internStateCanvas.classList.remove('active')
            mentorStateCanvas.classList.add('active')
        }else if(_internLocation.checked){
            byLocation("count_by_state", internData, "location", "Active Intern Count By Location")
            internStateCanvas.classList.add('active')
            mentorStateCanvas.classList.remove('active')
        }
      }
      if(event.target.name === "byTrack" || event.type === "load"){
        if(_mentorTrack.checked){      
          collateByTrack("count_by_track2", mentorData, "expertise","Active Mentor Count By Area Of Expertise")
          internTrackCanvas.classList.remove('active')
          mentorTrackCanvas.classList.add('active')
        }else if(_internTrack.checked){
          collateByTrack("count_by_track",internData, "interest", "Active Intern Count By Area Of Interest")
          internTrackCanvas.classList.add('active')
          mentorTrackCanvas.classList.remove('active')
      } 
    }
  }

  statistics.addEventListener('change', ()=>{
      loadChart()
  })

  window.addEventListener('load', ()=>{
      loadChart()
  })
  
  
  function createCharts(element, choice, xArray, yArray, title) {

    let canvas = document.getElementById(element)
    let ctx = canvas.getContext("2d");  
    let myChart = new Chart(ctx, {
      type: choice,
      data: {
        labels: xArray,
        datasets: [
          {
            label: title,
            data: yArray,
            backgroundColor: "rgba(209,240,246,1)",
            borderColor: "rgba(0,174,255,1)",
            borderWidth: 1
          }
        ]
      },
      options: {
        scales: {
          yAxes: [
            {
              ticks: {
                beginAtZero: true
              }
            }
          ]
        }
      }
    });
    
  }
  
  
  
  
  
  
  