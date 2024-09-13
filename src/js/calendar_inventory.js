
window.onload = (e)=>{

	// Calendar
	const elem = document.getElementById("calendar_dateSelect");
	const calendar = new FullCalendar.Calendar(elem, {
		// initialView: "dayGridMonth",
		dateClick: (e)=>{
			console.log("dateClick:", e);
		},
    navLinks: false,
    editable: false,
    locale: 'ja',
    contentHeight: 'auto',
	});
	calendar.render();
}
