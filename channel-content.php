<?php include './boostrap.php'?>
<style>
    @media (max-width:1201px){
        .c-name{
            display: none;
        }
        .c-icon{
            margin: auto;
            font-size: 1.5rem;
        }
        .c-img{
            font-size: 3rem;
        }
    }
</style>

<div class="container-fluid">
     <?php include './studio-navbar.php'?>

    <div class="row" style="height: 100vh;">
        <!-- Sidebar -->
        <div class="col-xl-2 col-lg-1 col-1 d-flex flex-column p-0" style="height: 100vh;">
            
            <!-- Top section -->
            <div class="flex-xl-column align-items-center justify-content-center d-flex p-2">
                <img class="c-img" style="clip-path: circle();object-fit: cover;" src="https://cdn.iconscout.com/icon/free/png-256/free-channel-logo-icon-svg-png-download-2854232.png" width="100%" alt="">
                <h6 class="c-name">Your channel</h6>
                <p class="text-secondary c-name">Oshaq Naimat</p> 
            </div>
            
            <!-- Scrollable menu -->
            <div class="overflow-auto flex-grow-1">
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                    <i class="bi bi-chat-square-dots-fill c-icon"></i>
                    <span class="fw-semibold c-name">Dashboard</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                    <i class="bi bi-play-btn c-icon"></i>
                    <span class="fw-semibold c-name">Content</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                    <i class="bi bi-bar-chart-line c-icon"></i>
                    <span class="fw-semibold c-name">Analytics</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                   <i class="bi bi-people c-icon"></i>
                    <span class="fw-semibold c-name">Community</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                  <i class="bi bi-calendar4-range c-icon"></i>
                    <span class="fw-semibold c-name">Subtitles</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                    <i class="bi bi-c-circle c-icon"></i>
                    <span class="fw-semibold c-name">Copyright</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                   <i class="bi bi-currency-dollar c-icon"></i>
                    <span class="fw-semibold c-name">Earn</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                    <i class="bi bi-pencil c-icon"></i>
                    <span class="fw-semibold c-name">Customization</span>
                </div>
                <div class="d-flex gap-2 content-items p-2 rounded-2">
                   <i class="bi bi-file-music c-icon"></i>
                    <span class="fw-semibold c-name">Audio library</span>
                </div>
            </div>
            <hr>
            <div class="position-sticky bottom-0 ">
                <div class="d-flex content-items p-2 gap-2 rounded-2">
                    <i class="bi bi-gear c-icon"></i>
                    <span class="c-name ">Setting</span>
                </div>
                <div class="d-flex content-items p-2 gap-2 rounded-2">
                  <i class="bi bi-exclamation-square c-icon"></i>
                    <span class="c-name">Send feedback</span>
                </div>
            </div>
        </div>

        <!-- Main content -->
        <div class="col-xl-10 col-lg-11 col-11"></div>
    </div>
</div>



    
