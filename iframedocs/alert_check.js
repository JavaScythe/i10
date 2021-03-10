var new_day = localStorage.getItem("date");
var dayE = new Date()
var cur_day = dayE.getDate()
if(new_day == cur_day){
  console.log("Already recived this message")
} else{
  localStorage.setItem("date", cur_day);
  alert("These games HAVE SOUND. Remember to always left-click tab, select Mute Tab, then mute system volume too.")
};