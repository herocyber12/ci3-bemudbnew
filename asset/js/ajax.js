
  $(document).ready(function(){
    $("input[name='jenis-form']").change(function () {
            var selectedValue = $("input[name='jenis-form']:checked").val();
            if (selectedValue === "keuangan") {
                $("#keuangan-form").show();
                $("#proker-form").hide();
            } else if (selectedValue === "proker") {
                $("#keuangan-form").hide();
                $("#proker-form").show();
            }
        });
    $('#absensi').click(function(){
      $.ajax({
        url:absenURL,
        type:'post',
        dataType:'JSON',
        success:function(response){
          var html = '';
          for (var i = 0; i< response.data.length; i++){
            html += "<tr>"+
                        "<td>"+ response.data[i].nim+"</td>" +
                        "<td>"+ response.data[i].nama +"</td>"+
                        "<td>"+ response.data[i].divisi+"</td>"+
                        "<td>"+ response.data[i].tngl+"</td>"+
                        "<td>"+ response.data[i].jam_skrng+"</td>"+
                        "<td>"+ response.data[i].keterangan+"</td>"+
                    "</tr>"
          }
          $('#data_absen').html(html);
          
          if(response.status === "berhasil" ){
            Swal.fire({
              icon:'success',
              title:'Berhasil Melakukan Absensi'
            })
          }else if(response.status == 'gagal'){
            Swal.fire({
              icon:'error',
              title:"Gagal melakukan absensi"
            })
          } else {
            Swal.fire({
              icon:'error',
              title:'Terjadi Kesalahan'
            })
          }
        }, error: function(xhr, status, error) {
          console.error(error);
        },
        complete: function() {
                // Aktifkan kembali tombol absen setelah selesai
                $('#absensi').prop('disabled', true);
            }
      });
    }); 

    $('#buat_laporan_proker').click(function(){
      $.ajax({
        url :laporanS,
        type:'post',
        data: $('#my-form').serialize(),
        dataType : 'JSON',
        success: function(response){
          
            var html = '';
            var no = 1;
            for (var i = 0; i< response.data.length; i++){
              html += "<tr>"+
                        "<td>"+ no + "</td>"+
                        "<td>"+ response.data[i].id_lproker+"</td>" +
                        "<td>"+ response.data[i].tanggal +"</td>"+
                        "<td>"+ response.data[i].namaproker+"</td>"+
                        "<td>"+ response.data[i].status+"</td>"+
                        "<td>"+ response.data[i].keterangan+"</td>"+
                      "</tr>"
              no++;
            }
            $('#data_proker').html(html);

            if(response.status === "berhasil" ){
              Swal.fire({
                icon:'success',
                title:'Berhasil Membuat Laporan Proker'
              })
            }else if(response.status == 'gagal'){
              Swal.fire({
                icon:'error',
                title:"Gagal Membuat Laporan Proker"
              })
            } else {
              Swal.fire({
                icon:'error',
                title:'Terjadi Kesalahan'
              })
            }
          
        },error: function(xhr, status, error) {
          console.error(error);
        },
        complete:function(){
          var closeButton = $("#closeModalButton");

// Pemicu peristiwa klik pada tombol close
closeButton.trigger("click");
          document.getElementById('my-form').reset();
        }
      });
    });

    $('#buat_laporan_keuangan').click(function(){
      $.ajax({
        url : laporanS,
        type:'post',
        data: $('#my-form').serialize(),
        dataType : 'JSON',
        success: function(response){
          var html = '';
            var no = 1;
            for (var i = 0; i< response.data.length; i++){
              if(response.data[i].pemasukan > 0){
                var cls = "text-success";
                var syms = "+";
              } else {
                var cls = "";
                var syms = "";
              }if(response.data[i].pengeluaran >0){
                var clss = "text-danger";
                var sym = "-";
              } else {
                
                var clss = "";
                var sym = "";
              }
              html += "<tr>"+
                        "<td>"+ no + "</td>"+
                        "<td>"+ response.data[i].tanggal +"</td>"+
                        "<td class='"+cls+"'> Rp."+ response.data[i].pemasukan+""+syms+"</td>"+
                        "<td class='"+clss+"'> Rp."+ response.data[i].pengeluaran+""+sym+"</td>"+
                        "<td> Rp."+ response.data[i].saldo+"</td>"+
                        "<td>"+ response.data[i].keterangan+"</td>"+
                      "</tr>"
              no++;
            }
            $('#data_keuangan').html(html);

            if(response.status === "berhasil" ){
              Swal.fire({
                icon:'success',
                title:'Berhasil Membuat Laporan Keuangan'
              })
            }else if(response.status == 'gagal'){
              Swal.fire({
                icon:'error',
                title:"Gagal Membuat Laporan Keuangan"
              })
            } else if(response.status === "banned"){
              Swal.fire({
                icon:'error',
                title:"Anda Bukan Bendahara"
              })
            }else {
              Swal.fire({
                icon:'error',
                title:'Terjadi Kesalahan'
              })
            }
          
        },error: function(xhr, status, error) {
          console.error(error);
        },
        complete:function(){
          var closeButton = $("#closeModalButton");

// Pemicu peristiwa klik pada tombol close
closeButton.trigger("click");
          document.getElementById('my-form').reset();
        }
      });
    });
    $('#buat-proker').click(function(){
      $.ajax({
        url : prokerS,
        type:'post',
        data: $('#proker-form').serialize(),
        dataType : 'JSON',
        success: function(response){
        //   console.log(response);
          var html = '';
            var no = 1;
            for (var i = 0; i< response.data.length; i++){
              html += "<tr>"+
                        "<td>"+ no + "</td>"+
                        "<td>"+ response.data[i].divisi+"</td>" +
                        "<td>"+ response.data[i].namaproker+"</td>"+
                        "<td>"+ response.data[i].tanggal +"</td>"+
                        "<td>"+ response.data[i].alasan+"</td>"+
                        "<td>"+ response.data[i].status+"</td>"+
                      "</tr>"
              no++;
            }
            $('#data_proker').html(html);

            if(response.status === "berhasil" ){
              Swal.fire({
                icon:'success',
                title:'Berhasil Membuat Proker'
              })
            }else if(response.status == 'gagal'){
              Swal.fire({
                icon:'error',
                title:"Gagal Membuat Proker"
              })
            } else {
              Swal.fire({
                icon:'error',
                title:'Terjadi Kesalahan'
              })
            }
        },error: function(xhr, status, error) {
          console.error(error);
        }
      });
    });
  });