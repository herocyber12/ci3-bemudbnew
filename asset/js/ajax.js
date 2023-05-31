$(document).ready(function(){
    getabsensi();
    function getabsensi(){
        $.ajax({
            type: "GET",
            url: "absensi/get_absensi",
            success: function(data) {
                    var dataabs = JSON.parse(data);
                    
                    var html = "";
                    var no = 1;
    
                    for(var i = 0 ; i < dataabs.length ;i++){
                        html += "<tr>"+
                        // "<td>"+no+"</td>"+
                        "<td>"+dataabs[i].id+"</td>"+
                        "<td>"+dataabs[i].nim+"</td>"+
                        "<td>"+dataabs[i].nama+"</td>"+
                        "<td>"+dataabs[i].divisi+"</td>"+
                        "<td>"+dataabs[i].tngl+"</td>"+
                        "<td>"+dataabs[i].jam_skrng+"</td>"+
                        "<td>"+dataabs[i].keterangan+"</td>"+
                        "</tr>";
                    }
                    $('#data_absen').html(html);
                
            }
        });
    }

    $("#input_absensi").click(function(){
        $.ajax({
            type: "POST",
            url: "absensi/input_absen",
            success: function(){
                getabsensi();
            }
        });
    });
});
