// Function to add a new task input field
function addTaskField() {
    let list = document.getElementById("todo-list");
    let li = document.createElement('li');
    li.style.display ="inline-block";
     li.innerHTML = 
     `
     <input type="text" class="form-control" name="services[]" placeholder="Add new task..." style="width: 50%;  display:inline-block;"/>
          <button type="button" class="btn btn-danger" onclick="removeTaskField(this)">-</button>
     `;
     list.appendChild(li);
  
  }
  




  