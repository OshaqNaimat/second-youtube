<?php
 session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="./style.css">
    <?php include './boostrap.php' ?>
</head>

<body>
    <?php include './navbar.php' ?>
    <div class="container-fluid">

        <div class="row">
            <ul class="col-xl-2 col-md-1 d-none d-md-block list-unstyled sidebar-parent  p-3"
                style="overflow-y: scroll;height:98vh">
                <?php include './sidebar.php'?>
            </ul>
            <div class="col-xl-10 main-content col-md-11 col-sm-12 p-3" style="overflow-y: scroll;height:98vh">
                <?php include './main-content.php'?>
                <!-- shorts -->
               
            </div>
        </div>
    </div>

     
    <script>
    let create_video = document.querySelector('.create-video');
    let create_video_option = document.querySelector('.create-video-option');
    let search = document.querySelector('.search-input');
    let search_icon = document.querySelector('.search-icon');
    let drop_list = document.querySelector('.droplist'); 
    let bottom = document.querySelector('.sidebar-bottom');
    let list = document.querySelector('.nav-list');
    let sidebar_li = document.querySelectorAll('.top-sidebar');
    let sidebar = document.querySelector('.sidebar-parent');
    let main = document.querySelector('.main-content');
    let btns = document.querySelectorAll('.create-btn');
    let log_form = document.querySelector('.log-form');
    let log_icon = document.querySelector('.log-icon');
   
    log_icon.addEventListener('click',(e)=>{
        e.preventDefault();
        log_form.classList.toggle('d-none');
        // log_form.classList.add('d-flex');
    })



    if (list) {
        list.addEventListener('click', () => {
            sidebar_li.forEach((item) => {
                item.classList.toggle('flex-xl-row');
            });
            bottom.classList.toggle('d-xl-block');
            sidebar.classList.toggle('col-xl-2');
            main.classList.toggle('col-xl-11');
        });
    }

    // if (create_video) {
    //     create_video.addEventListener('click', () => {
    //         create_video_option.classList.remove('d-none');
    //     });
        // create_video.addEventListener('focusout', () => {
        //     create_video_option.classList.add('d-none');
        // });
    // }
    if (create_video) {
    create_video.addEventListener('click', (e) => {
        // Only toggle the menu if you click the button itself, not the link
        if (e.target.closest('a') === null) {
            create_video_option.classList.remove('d-none');
        }
    });
    
    }



    // 

    // console.log(create_video_option) 



    if (search && search_icon && drop_list) {
        search.addEventListener('focus', () => {
            search_icon.style.transform = 'translate(0,-50%)';
            drop_list.classList.remove("d-none");
        });
        search.addEventListener('focusout', () => {
            search_icon.style.transform = 'translate(-50px,-50%)';
            drop_list.classList.add("d-none");
        });
    }

    let thumbnail_image = document.querySelectorAll('.thumbnail-image');
    let thumbnail_video = document.querySelectorAll('.thumbnail-video');

    thumbnail_image.forEach((item, index) => {
        item.addEventListener('mouseover', () => {
            item.classList.add('d-none');
            thumbnail_video[index].classList.remove('d-none');
        });
    });

    thumbnail_video.forEach((item, index) => {
        item.addEventListener('mouseout', () => {
            item.classList.add('d-none');
            thumbnail_image[index].classList.remove('d-none');
        });
    });

    document.getElementById('goto-create').addEventListener('click', function() {
    window.location.href = 'create-video.php';
});

//     goto_create.addEventListener('click',()=>{
    
//    window.location.href = 'http://localhost:3000/create-video.php';    
// })


</script>


</body>

</html>