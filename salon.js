const form = document.getElementById("bookingForm");
const message = document.getElementById("message");

form.addEventListener("submit", function(e){

e.preventDefault();

const name = document.getElementById("name").value;
const service = document.getElementById("service").value;
const date = document.getElementById("date").value;
const time = document.getElementById("time").value;

message.innerHTML = ` 
🎉 Thank you <strong>${name}</strong>!<br><br>
Your <strong>${service}</strong> appointment has been booked for
<strong>${date}</strong> at <strong>${time}</strong>.
`;

form.reset();

window.scrollTo({
top:document.body.scrollHeight,
behavior:"smooth"
});

});