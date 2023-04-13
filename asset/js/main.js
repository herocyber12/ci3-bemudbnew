(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner();
    
	$('#kirimWa').click(function(){
		window.location.href = "https://wa.me/083843320396";
	})
    // Initiate the wowjs
    new WOW().init();


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.sticky-top').addClass('shadow-sm').css('top', '0px');
        } else {
            $('.sticky-top').removeClass('shadow-sm').css('top', '-100px');
        }
    });
    
    
    // Back to top button
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('.back-to-top').fadeIn('slow');
        } else {
            $('.back-to-top').fadeOut('slow');
        }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


    // Facts counter
    $('[data-toggle="counter-up"]').counterUp({
        delay: 10,
        time: 2000
    });

	//News carousel
	$('.news-carousel').owlCarousel({
		center: true,
		autoplay:true,
		smartSpeed : 1000,
		items:2,
		loop:true,
		dots:true,
		nav : true,
		navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ],
		margin: 4
	});
	
    // Header carousel
    $(".header-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        items: 1,
        dots: true,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-chevron-left"></i>',
            '<i class="bi bi-chevron-right"></i>'
        ]
    });


    // Testimonials carousel
    $(".testimonial-carousel").owlCarousel({
        autoplay: true,
        smartSpeed: 1000,
        center: true,
        dots: false,
        loop: true,
        nav : true,
        navText : [
            '<i class="bi bi-arrow-left"></i>',
            '<i class="bi bi-arrow-right"></i>'
        ],
        responsive: {
            0:{
                items:1
            },
            768:{
                items:2
            }
        }
    });


    // Modal Video
    var $videoSrc;
    $('.btn-play').click(function () {
        $videoSrc = $(this).data("src");
    });
    console.log($videoSrc);
    $('#videoModal').on('shown.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
    })
    $('#videoModal').on('hide.bs.modal', function (e) {
        $("#video").attr('src', $videoSrc);
    })


    // $('.formType').click(function(){
    //     var formType = $(this).val();

    //     if(formType == "keuangan"){
    //         var formHtml = '<input type="text" name="pemasukanKeuangan" class="form-control" placeholde="Masukan Jumlah Pemasukan" id="pemasukanK">';
    //         formHtml += '<label for="pemasukanK">Pemasukan</label>';
    //         formHtml += '<input type="text" name="pengeluaranKeuangan" class="form-control" placeholde="Masukan Jumlah Pengeluaran" id="pengeluaranK">';
    //         formHtml += '<label for="pengeluaranK">Pengeluaran</label>';
    //         formHtml += '<textarea name="keteranganuang" class="form-control" placeholde="Masukan Keterangan">';
    //     } else if(formType == "proker"){
    //         var formHtml = '<input type="text" name="namaproker" class="form-control" placeholde="Masukan Nama Proker" id="nProker">';
    //         formHtml += '<label for="nProker">Proker</label>';
    //         formHtml += '<label>Status</label>';
    //         formHtml += '<div class="btn-group">';   
    //         formHtml += '<button type="submit" name="submit" class="btn btn-success" value="berjalan">Berjalan</button>';   
    //         formHtml += '<button type="submit" name="submit" class="btn btn-success" value="tidak_berjalan">Tidak Berjalan</button>';   
    //         formHtml += '</div>';   
    //     }

    //     $('#form-container').html(formHtml);
    // })
    
})(jQuery);

