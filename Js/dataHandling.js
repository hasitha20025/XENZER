var checkIn = document.getElementById('checkIn');
var checkOut = document.getElementById('checkOut');
var numAdult = document.getElementById('adult');
var numChildren = document.getElementById('children');
var numRooms = 0;
$(document).ready(function () {
    findRooms("roomFilterRoomPage");
    findRooms("roomFilterMainPage");
    findRooms("roomFilterMainPageSecond", random = true);


});

window.onscroll = scroolLoader;
function scroolLoader() {
    var roomFilterRoomPage = document.getElementById('fullContainer');
    var contentHeight = roomFilterRoomPage.offsetHeight;
    if (window.pageYOffset + window.innerHeight >= contentHeight) {
        numRooms += 2;
        findRooms("roomFilterRoomPage", numRooms, append = true);
    }
}

function findRooms(section, numrooms = 0, append = false, random = false) {
    let Data = {
        checkInDate: (random) ? "" : checkIn.value,
        checkOutDate: (random) ? "" : checkOut.value,
        children: (random) ? "" : numChildren.value,
        adults: (random) ? "" : numAdult.value,
        offset: (random) ? "" : numrooms
    };
    if (append) {
        $.ajax({
            async: false,
            type: "POST",
            url: "admin/Inc/roomSelecting.php",
            data: { data: Data, selector: section },
            success: function (Data) {
                $(Data).appendTo('#' + section);
            }
        });
    } else {
        numRooms = 0;
        $("#" + section).load(
            "admin/Inc/roomSelecting.php",
            { data: Data, selector: section },
            function () {
                if (section == "roomFilterMainPage") {
                    AOS.init();
                }
            });
    }
}

var isAvailable = false;
var checkInDate = document.getElementById('checkInDate');
var checkOutDate = document.getElementById('checkOutDate');
var lastCost = document.getElementById('lastCost');

var date_2 = new Date(checkInDate.value);
var date_1 = new Date(checkOutDate.value);
var days = (date_1, date_2) => {
    let difference = date_1.getTime() - date_2.getTime();
    let TotalDays = Math.ceil(difference / (1000 * 3600 * 24));
    return TotalDays;
}


function onChange(roomPrice, roomId) {
    var myData = {
        checkInDate: checkInDate.value,
        checkOutDate: checkOutDate.value,
        roomId: roomId
    };
    if (checkInDate.value != "" && checkOutDate.value != "") {
        $.ajax({
            async: false,
            type: "POST",
            url: "admin/Inc/booking.php",
            data: { data: myData, selector: "checkavailable" },
            success: function (Data) {
                // alert(Data);
                if (Data != "booked") {
                    $("#availableLable").html("");
                    $("#checkInBtn").attr({
                        "data-bs-toggle": 'modal',
                        'data-bs-target': '#bookingModal',
                    });
                    isAvailable = true;
                } else {
                    $("#availableLable").html("Room alrady booked in this Period!!");
                    $('#checkInBtn').removeAttr('data-bs-toggle data-bs-target');
                    isAvailable = false;

                }
            }
        });
    }
    let date_2 = new Date(checkInDate.value);
    let date_1 = new Date(checkOutDate.value);
    let Days = (days(date_1, date_2));
    if (isAvailable) {
        lastCost.innerHTML = "Cost : Rs." + (((Days >= 0) ? Days : 0) * roomPrice) + ".00";
    } else {
        lastCost.innerHTML = "Cost : Rs.0.00";
    }
}

function roomBook(price, roomId) {
    onChange(price, roomId);
    if (!isAvailable) {
        document.getElementById("scroolInto").scrollIntoView();
    } else {
        enterRoomData(price, roomId);
        let date_2 = new Date(checkInDate.value);
        let date_1 = new Date(checkOutDate.value);
        let Days = (days(date_1, date_2));
        $("#bookedDate").html("<h6>FROM :  " + checkInDate.value + "</h6><h6> TO : " + checkOutDate.value + "</h6><h4 class='text-info'>Rs." + price * Days + ".00</h4>");
    }
}
function enterRoomData(price, roomId) {
    var myData = {
        checkInDate: checkInDate.value,
        checkOutDate: checkOutDate.value,
        roomId: roomId,
        price: price
    };
    $.ajax({  
        type:"POST",  
        url:"admin/Inc/booking.php",  
        data:{data:myData,selector:"roomBook"},  
        success:function(Data){
           }
        });
}


