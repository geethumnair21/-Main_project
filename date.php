<script>
function checkDate() {
   var selectedText = document.getElementById('datepicker').value;
   var selectedDate = new Date(selectedText);
   var now = new Date();
   now.setDate(now.getDate()+2)
   if (selectedDate < now) {
    alert("Date must be in the future");
   }
  
 }
 </script>
 
 <input id="datepicker" onchange="checkDate()" required class="datepicker-input" type="date" data-date-format="yyyy-mm-dd" >
 


 