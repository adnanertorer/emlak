$(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        const link = $(this).attr("href");
        Swal.fire({
            title: 'Emin misiniz?',
            text: "Kayıt silinecek",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Evet',
            cancelButtonText: 'Hayır'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = link
                Swal.fire(
                    'Kayıt Silindi!',
                    'Your file has been deleted.',
                    'success'
                )
            }
        })
    });
});
