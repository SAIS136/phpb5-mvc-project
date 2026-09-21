// UI

const getdots = document.getElementsByClassName('dot'); // HTML collection
const getpages = document.getElementsByClassName('page');
// console.log(getdots);
const getform = document.getElementById('form');
const getprevbtn = document.getElementById('prevbtn');
const getnextbtn = document.getElementById('nextbtn');
const getresultcontainer = document.getElementById('result-container');
const pagekeys = [
    ["email","password","newsletter","newsletter"],    // page 1 : Security
    ["firstname","lastname","profile"],                // page 2 : Personal Info
    ["dob"],                                           // page 3 : Date of birth
    ["phone","address","documents","documents"]          // page 4 : Contact Info
];


let datas = [];
let curridx = 0;

showpage(curridx);

function showpage(num){
    // console.log(num);

    // getpages[num].style.display = "block";

    const pages = document.querySelectorAll(".page")
    pages.forEach((pages,index)=>{
        pages.style.display = index === num ? "block" : "none";
    });

    num === 0 ? getprevbtn.style.display = "none" : getprevbtn.style.display = "inline-block";
    num === (getpages.length-1) ? getnextbtn.textContent = "Submit" : getnextbtn.textContent = "Next";

    dotindicator(num);

}


function dotindicator(num){
    // console.log(num);

    for(let x = 0; x < getdots.length; x++){
        getdots[x].classList.remove('active');
    }

    getdots[num].classList.add("active");

}



function gonow(num){

    // console.log(num); // 1
    // console.log(curridx); // 0

    if(num === 1 && !formvalidation()){
        return;
    }

    getpages[curridx].style.display = "none";
    curridx = curridx+num;

    if(curridx >= getpages.length){
        getform.style.display = 'none';
        getresultcontainer.style.display = "block";
        result(datas);
        return false;
    }

    showpage(curridx);
}



function formvalidation(){

    let valid = true;
    let getcurrentinput = getpages[curridx].getElementsByTagName('input');

    if(!datas[curridx]){
        datas[curridx] = {};
    }

    let currpagekeys = pagekeys[curridx];

    for(let x = 0 ; x < getcurrentinput.length; x++){
        let input = getcurrentinput[x];
        let key = currpagekeys[x];

        if(input.type === "radio"){

            if(input.checked){
                datas[curridx][key] = input.value;
            }

        }else if(input.type === "checkbox"){

            if(!datas[curridx][key]){
                datas[curridx][key] = [];
            }

            if(input.checked){
                datas[curridx][key].push(input.value);
            }

        }else if((input.value).trim() === ''){
            input.classList.add('error');
            valid = false;
        }else{
            input.classList.remove('error');
            datas[curridx][key] = input.value;
        }
    }

    if(valid){
        getdots[curridx].classList.add("done");
    }

    return valid;

}

function result(data){
    // console.log(data);
    const documentlist = data[3].documents && data[3].documents.length > 0 ? data[3].documents.join(', ') : "No Data";

    getresultcontainer.innerHTML = `
        <ul>
            <li>Name : ${data[1].firstname} ${data[1].lastname}</li>
            <li>Agree : ${data[0].newsletter === '1' ? 'Yes' : 'No'}</li>
            <li>Email : ${data[0].email}</li>
            <li>Profile : ${data[1].profile}</li>
            <li>Date of Birth : ${data[2].dob}</li>
            <li>Phone Number : ${data[3].phone}</li>
            <li>Address : ${data[3].address}</li>
            <li>Document : ${documentlist}</li>
        </ul>

        <button type="submit" class="submit-btn" onclick="submitbtn()">Apply Name</button>
    `;
}

function submitbtn(){
    getform.submit();
}