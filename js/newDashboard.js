        
        
        const body = document.querySelector('body')
        const mentorTable = document.querySelector(".table.table-hover")
        
        function printDiv(divID) {
            let box = document.querySelector('.box');
            document.getElementById("printablediv").removeChild(box)
           
            //Get the HTML of div
            var divElements = document.getElementById(divID).innerHTML;
            
            //Get the HTML of whole page
            var oldPage = document.body.innerHTML;
          

            //Reset the page's HTML with div's HTML only
            document.body.innerHTML = "<html><head><title></title></head><body><br><br><br>" + divElements + "</body></html>";

            //Print Page
            window.print();

            //Restore orignal HTML
            document.body.innerHTML = oldPage;
            createPages("printablediv")
        }

        

        
        // const internTable = document.querySelector("#table_interns table")
        
        
        let sortDirection = false;
        
        //To create pages for the Mentor and Intern tables
        const createPages =(tableDivId)=>{
            
            let box = paginator({
                table: document.getElementById(tableDivId).getElementsByTagName("table")[0],
                box_mode: "list",
        });
            box.className = "box";
            document.getElementById(tableDivId).appendChild(box);
        }

        createPages("printablediv")
        // createPages("table_interns")
        
        
        //To convert the HTML table to an Array of Objects
        const tableToArray=(table)=>{
            let data = [];
            // first row needs to be headers
            let headers = [];
            let test = [];
            for(let i=0; i<table.rows[0].cells.length; i++){
    
                headers[i]=table.rows[0].cells[i].dataset.heading
                
            }
                data.push(headers);

            //iterate through the cells
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

        //stores respective HTML tables in variables in the form of arrays
        const mentorData = tableToArray(mentorTable)
       
        
        // const internData = tableToArray(internTable)

        
    //This function creates tableRows when fed an array of objects. 
        const loadTable=(userData, tableBody)=>{
            
            let sn = 1
            let dataHTML = '';
            userData.forEach((user, index)=>{
                
                if(!Array.isArray(user)){
                    dataHTML += `<tr>
                        <td>${sn++}</td>
                        <td>${user.expertise}</td>
                        <td>${user.photo}</td>
                        <td>${user.name}</td>
                        <td>${user.email}</td>
                        <td>${user.phone}</td>
                        
                        <td>${user.cv}</td>
                        <td>${user.interest}</td>
                        <td>${user.state}</td>
                        <td>${user.employment-status}</td>
                        <td>${user.timestamp}</td>
                    </tr>`
                }
            })
            tableBody.innerHTML = dataHTML;
        }
        
                 
    //Series of functions which work in tandem to sort data when sortup or sort down icon is clicked
        const sortColumn =(columnName,userData,tableBody)=>{
            const dataType = typeof userData[1][columnName];
            
            sortDirection = !sortDirection;
           
            switch(dataType){
                case 'number':
                        
                    sortNumberColumn(sortDirection, columnName,userData, tableBody);
                    break;
                case 'string':
                        
                    sortStringColumn(sortDirection, columnName,userData, tableBody);
                    break;
            }
            // loadTable(userData,tableBody)
        }

        const sortNumberColumn =(sortDirection,columnName)=>{
            userData = userData.sort((u1, u2)=>{
                return sortDirection ? u1[columnName] - u2[columnName] : u2[columnName] - u1[columnName] 
            })
        }

        const sortStringColumn =(sortDirection,columnName,userData, tableBody)=>{
            
            modifiedUserData = userData.slice(1, userData.length)
            
            if(sortDirection){
                userData =  modifiedUserData.sort((u1, u2)=> (u1[columnName].toLowerCase() > u2[columnName].toLowerCase()) ? 1: ((u2[columnName].toLowerCase() > u1[columnName].toLowerCase())? -1 : 0 ))
            }else{
                userData = modifiedUserData.sort((u1, u2)=> (u1[columnName].toLowerCase() > u2[columnName].toLowerCase()) ? 1: ((u2[columnName].toLowerCase() > u1[columnName].toLowerCase())? -1 : 0 )).reverse()
            }
            
            loadTable(userData,tableBody)
        }

             
    /////////EXPORT TO PDF//////////////////////////////////////////             
    const getPDF =()=>{
        let doc = new jsPDF()
        doc.autoTable({html: '.table.table-hover'});
        doc.save('Lists.pdf')
    }
                  
    /////////EXPORT TO CSV/////////////////////////////////////////
    const objectToCSV =(data)=>{
        const csvRows = [];
        let values = [];        
        //get the headers
        headers = [...data[0]]
        csvRows.push(headers.join(','));
        
        //loop over the rows
        for(const row of data){
            if (!Array.isArray(row)){
                    values = headers.map(header =>{
                    const escQuotes = (''+row[header]).replace(/"/g, '\\"')
                    return `"${escQuotes}"`
                })
                csvRows.push(values.join(','))
            }
        }
        
        //form escaped CSVs
        return csvRows.join('\n')
    }

    const download =(data)=>{
        const blob = new Blob([data], {type: 'text/csv'});
        
        const url = window.URL.createObjectURL(blob);
        const a = document.createElement('a');
        a.setAttribute('hidden', '');
        a.setAttribute('href', url);
        a.setAttribute('download', 'download.csv');
        document.body.appendChild(a);
        a.click();
        document.body.removeChild(a)
    }

    const getCSV =()=>{
        const csvData = objectToCSV(mentorData)
        download(csvData)
    }

    
    ////////////////////SEARCH//////////////////////////////////
    
    const filterEntries =(searchBox)=>{
        const entries = document.querySelectorAll('tbody tr');
        const searchBoxValue = searchBox.value.toLowerCase();
    
        entries.forEach(entry=>{
            let rowContent = []
            entry.querySelectorAll('td').forEach(td=>{
                rowContent.push(td.textContent)
            })
            rowContent = rowContent.join(' ').toLowerCase();
            if(rowContent.indexOf(searchBoxValue) === -1){
                entry.style.display = "none";
            }else{
                entry.style.display = "";
            }
        })
    }
    
  
    /////////More Details SideBar/////////////////////////////////////////

   
    const prev = document.querySelector('.left');
    const next = document.querySelector('.right');
    let row = 0;
    
    const populateDetails =(id, row)=>{
        document.getElementById('sn').innerHTML = mentorData[row]["sn"]
        if(id !== 'cv'){
            document.getElementById(id).innerHTML = mentorData[row][id]
        }else if(id == 'cv'){
            let link = document.createElement("a");
            link.setAttribute("href", mentorData[row][id]);
            link.setAttribute("target", "_blank");
            link.textContent = mentorData[row][id];
            if(document.getElementById(id).firstChild){
                document.getElementById(id).removeChild(document.getElementById(id).firstChild)
            }
            document.getElementById(id).appendChild(link)
        }
       
        
    }
    const iterateRow =(e)=>{
        let dataRow = document.querySelectorAll('#my-table tbody tr');
        let details = document.querySelectorAll('.details span');
        const navigator = document.querySelector('#navigator');
        dataRow = Array.from(dataRow)
    
        if(dataRow.indexOf(e.target.parentElement) >= 0){
            document.getElementById("details-section").classList.add('activated');
            document.getElementById("no-intern").innerHTML = "";
            navigator.classList.add('active');
            row = dataRow.indexOf(e.target.parentElement) + 1;
            details.forEach(detail =>{
                populateDetails(detail.id, row)
            })
        }else if(e.target.classList.contains("navigator")){
            
            if(e.target.classList.contains("right")){
                if(row > dataRow.length){
                    row = 1
                }
            }else if(e.target.classList.contains("left")){
                if(row === 0){
                    row = dataRow.length
                }
            }
           
            details.forEach(detail =>{
                
                populateDetails(detail.id, row)
            })
        }
        
    }
    
        
  ////////////////Event Listeners////////////////////////////////////////
 
  body.addEventListener('keyup',(e)=>{
    const searchBox = document.querySelector('.searchBox');
   
    if(e.target.classList.contains('searchBox')){
        filterEntries(searchBox)
    }
  })



  body.addEventListener('click',(e)=>{
     
    const overlay = document.querySelector('#overlay');
    const exportModal = document.querySelector('#export-modal');
    const photo = document.querySelector('#photo')
    
        if(e.target.id === "exportAs"){
            overlay.classList.add('visible')
            exportModal.classList.add('visible')
            photo.style.visibility = "hidden";

        }else if(e.target.id === "overlay"){
            overlay.classList.remove('visible')
            exportModal.classList.remove('visible')
            photo.style.visibility = "";
           
        }else if(event.target.id === "download"){
            const radioBtn = document.querySelectorAll('input[name="exportOptions"]')
            if(radioBtn[0].checked){
                getCSV()
            }else if(radioBtn[1].checked){
                getPDF()
            }else{
                document.querySelector('#message').innerHTML = `<span style="color:red; position:absolute; left: 13%; width:100%;">You've not selected an option</span>`
                setTimeout(()=>{
                    document.querySelector('#message').innerHTML  = '';
                }, 2000)
            }
        }else if(e.target.tagName === 'TD'){
            
            iterateRow(e)
            
        }else if(e.target.classList.contains("right")){
            row++
            iterateRow(e)
        }else if(e.target.classList.contains("left")){
            row--
            iterateRow(e)
        }else if(e.target.parentElement.tagName === 'TH' ){
            if(e.target.tagName == 'I'){
                const tableBody = e.target.parentElement.parentElement.parentElement.nextElementSibling
        
                const columnName = e.target.parentElement.dataset.heading
                
                    sortColumn(columnName, mentorData,tableBody)
                    Array.from(e.target.parentElement.children).forEach(child=>{
                    child.style.display = ""
                })
                    e.target.style.display = "none"         
            }
            
        }else if(e.target.className === "details-back"){
            document.getElementById("details-section").classList.remove('activated');
        }
        

  })


window.addEventListener("resize", e => 
{
	if (screen.width > 860){
            
            document.getElementById("details-section").classList.remove('activated');
    
    }
})









