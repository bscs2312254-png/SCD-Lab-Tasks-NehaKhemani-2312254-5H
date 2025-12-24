let input = document.getElementById("taskinput");
let addbtn = document.getElementById("addbtn");
let clearbtn = document.getElementById("clearbtn");
let list = document.getElementById("tasklist");

window.onload = function(){
    let saved = localStorage.getItem("tasks");
    if(saved){
        list.innerHTML = saved;
    }
}

addbtn.onclick = function(){
    let val = input.value.trim();
    if(val != ""){
        let li = document.createElement("li");
        li.innerHTML = val + " <button onclick='deltask(this)'>Delete</button>";
        list.appendChild(li);
        input.value = "";
        alert("Task added successfully");
        saveData();
    }
}

clearbtn.onclick = function(){
    list.innerHTML = "";
    localStorage.removeItem("tasks");
}

function deltask(btn){
    btn.parentElement.remove();
    saveData();
}

function saveData(){
    localStorage.setItem("tasks", list.innerHTML);
}
