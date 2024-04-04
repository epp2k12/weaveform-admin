import $ from 'jquery';
import DataTable from 'datatables.net-dt';
// import './test.js';
import testObj from './test.js';


testObj.testHolyMoly();
// import 'datatables.net-responsive-dt';

// var data = [
// 	[
// 		"Tiger Nixon",
// 		"System Architect",
// 		"Edinburgh",
// 		"5421",
// 		"2011/04/25",
// 		"$3,120"
// 	],
// 	[
// 		"Garrett Winters",
// 		"Director",
// 		"Edinburgh",
// 		"8422",
// 		"2011/07/25",
// 		"$5,300"
// 	],
// 	[
// 		"Garrett Winters",
// 		"Director",
// 		"Edinburgh",
// 		"8422",
// 		"2011/07/25",
// 		"$5,300"
// 	]
// ]
// jQuery( document ).ready(function() {
//     // console.log( "ready!" );
//     jQuery('#myTable').DataTable( {
// 		data: data
//     } );
// });

// let table = new DataTable('#myTable', {});

// $(document).ready(function () {

// 	let table = $('#myTable').DataTable();
// 	table.rows.add(data).draw();

// })


var data = [
	[
		"Tiger Nixon",
		"System Architect",
		"Edinburgh",
		"5421",
		"2011/04/25",
		"$3,120"
	],
	[
		"Garrett Winters",
		"Director",
		"Edinburgh",
		"8422",
		"2011/07/25",
		"$5,300"
	],
	[
		"Garrett Winters",
		"Director",
		"Edinburgh",
		"8422",
		"2011/07/25",
		"$5,300"
	]
]

$(function () {

	let table = $('#myTable').DataTable();
	table.rows.add(data).draw();

});



