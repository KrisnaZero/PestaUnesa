const date = "Tue Dec 13 2022 07:00:00 GMT+0700 (Indochina Time)";

function dateFormat(date) {
  const monthNames = [
    "Jan",
    "Feb",
    "Mar",
    "Apr",
    "May",
    "Jun",
    "Jul",
    "Aug",
    "Sep",
    "Oct",
    "Nov",
    "Dec",
  ];
  // dd/mm/yyyy
  let dd = date.slice(8, 10);
  let mmOnDate = date.slice(4, 7);
  let mm = monthNames.indexOf(mmOnDate) + 1;
  let yyyy = date.slice(11, 16);
  console.log(dd + "/" + mm + "/" + yyyy);
}

dateFormat(date);
