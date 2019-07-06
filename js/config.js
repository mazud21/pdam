function search(){
    $("#loading").show(); // Tampilkan loadingnya
    
    $.ajax({
          type: "POST", // Method pengiriman data bisa dengan GET atau POST
          url: baseurl + "form/search", // Isi dengan url/path file php yang dituju
          data: {no_pelanggan : $("#no_pelanggan").val()}, // data yang akan dikirim ke file proses
          dataType: "json",
          beforeSend: function(e) {
              if(e && e.overrideMimeType) {
                  e.overrideMimeType("application/json;charset=UTF-8");
              }
      },
      success: function(response){ // Ketika proses pengiriman berhasil
              $("#loading").hide(); // Sembunyikan loadingnya
              
              if(response.status == "success"){ // Jika isi dari array status adalah success
          $("#no_daftar").val(response.no_daftar); // set textbox dengan id nama
          $("#nama").val(response.nama); // set textbox dengan id nama
          //$("#no_ktp").val(response.no_ktp); // set textbox dengan id jenis kelamin
          //$("#telepon").val(response.telepon); // set textbox dengan id telepon
          //$("#alamat").val(response.alamat); // set textbox dengan id alamat
        }else{ // Jika isi dari array status adalah failed
          alert("Data Tidak Ditemukan");
        }
      },
          error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
        alert(xhr.responseText);
          }
      });
  }
  $(document).ready(function(){
    $("#loading").hide(); // Sembunyikan loadingnya
    
      $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
          search(); // Panggil function search
      });
      
      $("#no_pelanggan").keyup(function(){ // Ketika user menekan tombol di keyboard
      if(event.keyCode == 13){ // Jika user menekan tombol ENTER
        search(); // Panggil function search
      }
    });
  });