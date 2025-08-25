<div class="bg-white z-3 position-sticky top-0">
    <div class="d-flex justify-content-between p-3 gap-3 align-items-center  ">
        <div class="d-flex align-items-center gap-4">
            <i class="bi bi-list nav-list fs-2 text-dark"></i>
            <div class="d-flex">
                <img src="./assets/images/logo.svg" alt="">
                <sup class="text-secondary">PK</sup>
            </div>
        </div>

        <!-- search bar -->
        <div class="d-flex align-items-center d-none position-relative d-sm-flex gap-3 w-50">


            <div class="bg-danger position-absolute" style="width: 90%; top: 10px; border-radius: 10px; z-index: 9990;">

                <div class="shadow position-absolute p-2 d-none droplist"
                    style="width: 90%; top: 45px; border-radius: 10px; z-index: 999999; background: white;">
                    <ul class="list-unstyled d-flex gap-2 flex-column">
                        <li class="l-items">remix</li>
                        <li class="l-items">Anonymous Group</li>
                        <li class="l-items">PNY training institute</li>
                        <li class="l-items">Apna College</li>
                        <li class="l-items">Code with Harry</li>
                        <li class="l-items">Mr Robot</li>
                    </ul>
                </div>

            </div>


            <form
                class="d-flex  ps-3 position-relative overflow-hidden  align-items-center border border-bg-secondary rounded-pill w-100 ">
                <i class="bi bi-search search-icon fs-6  position-absolute"
                    style="top: 50%;transform: translate(-50px,-50%);left: 5px;transition: all 0.7s;"></i>
                <input type="text" placeholder="Search" class="p-2 search-input border-0 w-100 d-none d-sm-block"
                    style="outline-width:0 ;">
                <a href="#" class="text-dark text-decoration-none">
                    <i class="bi bi-search rounded-end-pill background d-flex align-items-center justify-content-center "
                        style="height: 40px;width: 40px;background: #F0F0F0; "></i>
                </a>
            </form>
            <a href="#" class="text-dark text-decoration-none">
                <i class="bi bi-mic-fill background  rounded-circle d-flex justify-content-center align-items-center "
                    style="width: 50px;background: #F0F0F0; clip-path: circle();height: 40px;"></i>
            </a>
        </div>

        <i class="bi bi-search   d-block d-sm-none rounded-circle d-flex justify-content-center align-items-center "
            style="width: 60px;"></i>



        <!-- create section -->
        <div class="d-flex gap-3 align-items-center ">
            <button
                class="btn btn-outline-dark create-video d-flex align-items-center fw-semibold rounded-pill position-relative">
                <i class="bi bi-plus fs-5"></i>
                <span>Create</span>
            </button>
            <div class="d-none  create-video-option position-absolute bg-white shadow rounded-2 px-2"
                style="top: 90%;width: 150px;">
                <ul class="list-unstyled create-btn">
                    
                   
                    <div class="d-flex align-items-center" >
                        <li>
                                <i class="bi bi-play-btn px-1"></i>
                                Upload Video
                            </li>
                        </div>
                    

                </ul>
                <ul class="list-unstyled create-btn ">
                    <div class="d-flex align-items-center">
                        <li><i class="bi bi-broadcast px-1"></i>Go Live</li>
                    </div>
                </ul>
                <ul class="list-unstyled create-btn">
                    <div class="d-flex align-items-center">
                        <li><i class="bi bi-pencil-square px-1"></i>Create Post</li>
                    </div>
                </ul>
            </div>

            <div class="position-relative">
                <a href="#" class="text-dark"><i class="bi bi-bell fs-5"></i></a>
                <p style="right: -10px;font-size: 10px;"
                    class="position-absolute  m-0 bg-danger text-white fw-bold top-0 px-1 rounded-pill">9+</p>
            </div>

            <a href="#" class="text-dark"><i class="bi bi-person fs-4"></i></a>
        </div>
    </div>
</div>

