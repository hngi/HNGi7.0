<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="css/header-footer.css"> -->
    <link rel="stylesheet" href="css/dashboard.css">
    <link rel="stylesheet" href="css/admindashboard.css">
    
    <link rel="icon" type="img/png" href="images/hng-favicon.png">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet'>

</head>
<body>
    <!-- <header>
        <a href="index.html"><img id="hng-logo"
          src="https://res.cloudinary.com/phiileo/image/upload/v1571147073/brand-logo_tx0mdt.png"></a>
        <input type="checkbox" id="mobile-bars-check" />
        <label for="mobile-bars-check" id="mobile-bars">
         img src="images/ bars-icon.png" height="23px"
         <div class="stix" id="stik1"></div>
         <div class="stix" id="stik2"></div>
         <div class="stix" id="stik3"></div>
        </label>
        <nav>
            <a href="index.html" class="header-links">Home</a>
            <a href="hng6.html" class="header-links">HNG 6</a>
            <a href="mentorpage.html" class="header-links">Mentors</a>
            <a href="contactform.html" class="header-links">Contact</a>
            <a href="join-intern.html" id="join-hng" class="def-button">Join HNG</a> 
           
        </nav>
       </header> -->

    <!--Side Bar-->
    <input type="checkbox" id="mobile-bars-check" />
    <label for="mobile-bars-check" id="mobile-bars">
        <div class="stix" id="stik1"></div>
        <div class="stix" id="stik2"></div>
        <div class="stix" id="stik3"></div>
    </label>
    <section id="sidebar">
		<div id="upper">
			<img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722683/mentors-first_qlquq9.png" height="100px">
			<div id="username">Seyi Onifade</div>
			<em>Admin</em>
		</div>
		<nav id="lower">
			<a href="#a-mentors">Mentors</a>
			<a href="#a-users">Users</a>
            <a href="#">Advanced</a>
            <a href="#">Add Admin</a>
			<a href="#">Logout</a>
		</nav>
	</section>

    <!-- Mentor Table-->
    
    <div class="top-bar col-md-12">
        <div class="col-md-6">
            <h2 >Admin Dashboard</h2>
        </div>
        
        <div class="col-md-3" style="margin-top: 1%;">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Enter Keyword here...">
                <span class="input-group-addon">Search</span>
              </div>
        </div>
        
        <div class="pull-right" style="margin-top: 2%;">
            <div class="dropdown" >
                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: black; font-weight: bold; font-size: 17px;">Admin</a>
                <div class="dropdown-menu">
                    <a href="#" class="dropdown-item">Action</a>
                    <a href="#" class="dropdown-item">Another action</a>
                </div>
            </div>
        </div>
        
    </div>
    
        <div class="tables">
           
            <h2 class="table_title" id="a-mentors">Mentors</h2>
            <div id="table_mentors">
                <div class="scroll">
                <table class="table" >
                    <thead class="table-headers">
                    <tr class="table-input">
                        <th scope="col" data-heading= "sn" class="prop-mentor">SN <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                        <th scope="col" data-heading= "name"  class="prop-mentor">Name <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                        <th scope="col" data-heading= "tracks"  class="prop-mentor">Tracks <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                        <th scope="col" data-heading= "sex"  class="prop-mentor">Sex <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                        <th scope="col" data-heading= "phone"  class="prop-mentor">Phone <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                        <th scope="col" data-heading= "state"  class="prop-mentor">State <i class="fa fa-fw fa-sort-up"></i>
                            <i class="fa fa-fw fa-sort-down"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="table-input">
                        <th scope="row">1</th>
                        <td>Teslim Balogun</td>
                        <td>Backend</td>
                        <td>Male</td>
                        <td>08056785345</td>
                        <td>Lagos</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">2</th>
                        <td>Mojisola Ahmed</td>
                        <td>Frontend</td>
                        <td>Female</td>
                        <td>08071112456</td>
                        <td>Ogun</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">3</th>
                        <td>Ifiok Udeme</td>
                        <td>Backend</td>
                        <td>Male</td>
                        <td>07068558213</td>
                        <td>Akwa-Ibom</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">4</th>
                        <td>Jenifer Etoma</td>
                        <td>Frontend</td>
                        <td>Female</td>
                        <td>08045562223</td>
                        <td>Cross-River</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">5</th>
                        <td>Kelechi Akuma</td>
                        <td>Mobile</td>
                        <td>Male</td>
                        <td>08145661229</td>
                        <td>Abia</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">6</th>
                        <td>Boniface ThankGod</td>
                        <td>UI/UX</td>
                        <td>Male</td>
                        <td>08070419419</td>
                        <td>Rivers</td>
                    </tr>
                    <tr class="table-input">
                        <th scope="row">7</th>
                        <td>Samson Akume</td>
                        <td>Digital Marketing</td>
                        <td>Male</td>
                        <td>08132149955</td>
                        <td>Benue</td>
                    </tr>
                    
                    </tbody>
                </table>
                </div>
            </div>
            <div class="m-5">
                <button type="button" id="exportMentors" class="btn btn-lg">Export +</button>
            </div>
            
        </div>
    <!--Button-->
       
    <!--Intern Table-->
    
    <div class="tables" >
        <h2 class="table_title" id="a-users">Interns</h2>
        <div id="table_interns">
            <div class="scroll">
            <table class="table">
                <thead class="table-headers">
                <tr class="table-input">
                    <th scope="col" data-heading= "sn" class="prop-intern">SN <i class="fa fa-fw fa-sort-up"></i>
                    <i class="fa fa-fw fa-sort-down"></i></th>
                    <th scope="col" data-heading= "name" class="prop-intern">Name<i class="fa fa-fw fa-sort-up"></i>
                        <i class="fa fa-fw fa-sort-down"></i></th>
                    <th scope="col" data-heading= "tracks" class="prop-intern">Tracks<i class="fa fa-fw fa-sort-up"></i>
                        <i class="fa fa-fw fa-sort-down"></i></th>
                    <th scope="col" data-heading= "sex" class="prop-intern">Sex<i class="fa fa-fw fa-sort-up"></i>
                        <i class="fa fa-fw fa-sort-down"></i></th>
                    <th scope="col" data-heading= "phone" class="prop-intern">Phone<i class="fa fa-fw fa-sort-up"></i>
                        <i class="fa fa-fw fa-sort-down"></i></th>
                    <th scope="col" data-heading= "state" class="prop-intern">State<i class="fa fa-fw fa-sort-up"></i>
                        <i class="fa fa-fw fa-sort-down"></i></th>
                </tr>
                </thead>
                <tbody>
                <tr class="table-input">
                    <th scope="row">1</th>
                    <td>Dino Malaye</td>
                    <td>Backend</td>
                    <td>Male</td>
                    <td>07045671234</td>
                    <td>Kogi</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">2</th>
                    <td>Ugo Lanre</td>
                    <td>Frontend</td>
                    <td>Male</td>
                    <td>08085551234</td>
                    <td>Lagos</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">3</th>
                    <td>Godsent Ibru</td>
                    <td>Machine Learning</td>
                    <td>Male</td>
                    <td>07053451234</td>
                    <td>Delta</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">4</th>
                    <td>Peace Aku</td>
                    <td>Frontend</td>
                    <td>Female</td>
                    <td>08045687327</td>
                    <td>Imo</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">5</th>
                    <td>Edwards Gyang</td>
                    <td>Digital Marketing</td>
                    <td>Backend</td>
                    <td>08035671232</td>
                    <td>Plateau</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">6</th>
                    <td>Felicia Osagie</td>
                    <td>UI/UX</td>
                    <td>Female</td>
                    <td>08063949272</td>
                    <td>Edo</td>
                </tr>
                <tr class="table-input">
                    <th scope="row">7</th>
                    <td>Cosmas Maduka</td>
                    <td>Mobile</td>
                    <td>Male</td>
                    <td>07067891265</td>
                    <td>Anambra</td>
                </tr>
                </tbody>
            </table>
            </div>
        </div>
        
        <div class="m-5">
            <button type="button" id="exportInterns" class="btn btn-lg">Export +</button>
        </div>  
    </div>
<!--Button-->
    
    <!-- Footer
    <footer>
            <img src="https://res.cloudinary.com/jaycodist/image/upload/v1570722444/hng-brand-logo_gnplmq.svg">
            <nav>
            <section>
            <h2 class="skyblue-text">Quick Links</h2>
            <div id="link-list">
            <a href="join-intern.html" class="skyblue-text">Join HNG</a>
            <a href="index.html" class="skyblue-text">About HNG</a>
            <a href="MentorSetUpPage2.html" class="skyblue-text">Become a Sponsor</a>
            <a href="MentorSetUpPage2.html" class="skyblue-text">Sign up as Mentor</a>
            </div>
            </section>
            <section id="contact-section">
            <h2 class="skyblue-text">Contact Us</h2>
            <div>
            <a href="tel:+2348123456789">
                <strong>
                Phone: <br />
                </strong>
                +234 812 345 6789
            </a>
            <br />
            <a href="mailto:interns@hng.tech">
                <strong>
                Email: <br />
                </strong>
                interns@hng.tech
            </a>
            </div>
            </section>
            <section>
                <h2 class="skyblue-text">Office Address</h2>
                <p id="address">
                3 Birrel Avenue <br /> Sabo, Yaba, <br /> Lagos state
                </p>
            </section>
            <section>
            <h2 class="skyblue-text">Follow Us</h2>
            <div id="socials">
                <a href="https://twitter.com" title="Follow on Twitter!"><img
                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/twitter-logo_m1mgzi.svg"></a>
                <a href="https://facebook.com"><img title="Follow on Facebook!"
                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/facebook-logo_bw1hal.svg"></a>
                <a href="https://dribble.com"><img title="Follow on Dribble!"
                    src="https://res.cloudinary.com/jaycodist/image/upload/v1570722900/dribble-logo_w4vwuz.svg"></a>
            </div>
            </section>
            </nav>
            <p class="center-text darkblue-text">&copy 2019, HGN Internship. All rights reserved.</p>
        </footer> -->
       
        <script src="js/jquery-3.4.1.js"></script>
        <script src="js/jspdf.js"></script>
        <script src="js/jspdf.plugin.autotable.min.js"></script>
        <script src="js/paginator.js"></script>
        <script>
                

                const mentorTable = document.querySelector("#table_mentors table")
                const internTable = document.querySelector("#table_interns table")
                const tableHeaders = document.querySelectorAll('.table-headers');
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

                createPages('table_mentors')
                createPages('table_interns')
                
                
                //To convert the HTML tables to an Array of Objects
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
                const internData = tableToArray(internTable)

                
            //This function creates tableRows when fed an array of objects. 
                const loadTable=(userData, tableBody)=>{
                    
                    let sn = 1
                    let dataHTML = '';
                    userData.forEach((user, index)=>{
                       
                        if(!Array.isArray(user)){
                            dataHTML += `<tr class="table-input">
                                            <th scope="row">${sn++}</th>
                                            <td>${user.name}</td>
                                            <td>${user.tracks}</td>
                                            <td>${user.sex}</td>
                                            <td>${user.phone}</td>
                                            <td>${user.state}</td>
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
                            sortNumberColumn(sortDirection, columnName,userData);
                            break;
                        case 'string':
                            sortStringColumn(sortDirection, columnName,userData);
                            break;
                    }
                    loadTable(userData,tableBody)
                }

                const sortNumberColumn =(sortDirection,columnName)=>{
                    userData = userData.sort((u1, u2)=>{
                        return sortDirection ? u1[columnName] - u2[columnName] : u2[columnName] - u1[columnName] 
                    })
                }

                const sortStringColumn =(sortDirection,columnName,userData)=>{
                    if(sortDirection){
                        userData = userData.sort((u1, u2)=> (u1[columnName] > u2[columnName]) ? 1: ((u2[columnName] > u1[columnName])? -1 : 0 ))
                    }else{
                        userData = userData.sort((u1, u2)=> (u1[columnName] > u2[columnName]) ? 1: ((u2[columnName] > u1[columnName])? -1 : 0 )).reverse()
                    }
                }

                
                tableHeaders.forEach(tableHeader => {
                    tableHeader.addEventListener('click', (e)=>{
                    
                    if(e.target.tagName == 'I'){
                        const tableBody = e.target.parentElement.parentElement.parentElement.nextElementSibling
                        const columnName = e.target.parentElement.dataset.heading
                        if(e.target.parentElement.classList.contains('prop-mentor')){
                            sortColumn(columnName, mentorData,tableBody)
                        }else if(e.target.parentElement.classList.contains('prop-intern')){
                            sortColumn(columnName, internData, tableBody)
                        }
                            Array.from(e.target.parentElement.children).forEach(child=>{
                            child.style.display = ""
                        })
                            e.target.style.display = "none"         
                        }
                })
            })

            

             //EXPORT TO PDF             
             const genPDF =()=>{
                let doc = new jsPDF()
                // doc.autoTable({html: '#my-table'});
                doc.autoTable({
                    head: toExportHead,
                    body: toExportBody
                });
                doc.save('Lists.pdf')
            }
         
             const pdfDownload = document.querySelectorAll('.btn-lg')
             pdfDownload.forEach(btn=>{
                let toExport;
                 btn.addEventListener('click',(e)=>{
                     if(e.target.id === "exportInterns"){
                        toExport = inputForPDF(internData)
                     }else if(e.target.id === "exportMentors"){
                        toExport = inputForPDF(mentorData)
                     }
                     toExportHead = toExport.splice(0,1)
                     toExportBody = toExport
                    genPDF()
                 })
             })
            
             const inputForPDF =(userData)=>{
                let newUserArray = [];
                userData.forEach((user,index)=>{
                    newUserArray[index] =[];
                    for(key in user){
                    newUserArray[index].push(user[key])
                }
                })
                return newUserArray
            }

        </script>
    </body>
</html>