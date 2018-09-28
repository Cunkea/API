<h3><strong>JS Kalendar</strong></h3>
<div id="calendar">
	<p id="calendar-day"></p>
	<p id="calendar-date"></p>
	<p id="calendar-month-year"></p>
</div>

<script type="text/javascript">
							
	function calendar(){
    	var day=['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];
    	var month=['January','February','March','April','May','June','July','August','September','October','November','December'];
    	var d=new Date();
    	setText('calendar-day', day[d.getDay()]);
    	setText('calendar-date', d.getDate());
    	setText('calendar-month-year', month[d.getMonth()]+' '+(1900+d.getYear()));
	};
</script>