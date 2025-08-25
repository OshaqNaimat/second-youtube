<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <?php include './boostrap.php'?>
    <title>create video</title>
</head>

<body>

    <!-- first form -->

    <form method="POST" action="./upload-video.php" enctype="multipart/form-data" 
        
        class="d-flex justify-content-center align-items-center overlay position-fixed top-0 w-100 min-vh-100 ">
            <?php include './channel-content.php'?>
        <div class="col-xl-7 col-lg-9 col-11 mx-auto first-form d-none position-absolute bg-white rounded-4">
            <div class="d-flex justify-content-between p-3">
                <h5 class="m-0">Upload Videos</h5>
                <i class="bi bi-x-lg"></i>
            </div>
            <hr class="m-1">
            <div class="d-flex flex-column justify-content-center align-items-center" style="height: 350px;">
                <label for="video" class="my-2">
                    <i class="bi bi-cloud-arrow-up fs-1 bg-body-secondary rounded-circle d-flex justify-content-center align-items-center"
                        style="width: 100px;height: 100px;"></i>
                </label>
                <input type="file" class="d-none video-input" id="video" name="video">
                <h6 class=" ">Drag and drop video files to upload </h6>
                <p class="text-secondary">Your videos will be private until you publish them.</p>
                <label for="video" class="btn btn-dark rounded-pill">Select Files</label>
            </div>
            <p class="text-secondary mx-auto col-10 text-center" style="font-size: 0.8rem;">By submitting your videos to
                YouTube, you acknowledge that you agree to YouTube's <a href="#" class="text-primary">Terms of
                    Service</a> and <a href="#" class="text-primary">Community Guidelines.</a>

                Please be sure not to violate others' copyright or privacy rights. <a href="#"
                    class="text-primary">Learn more</a></p>
        </div>

        <!-- second form -->

        <div class="col-xl-7 second-form d-none col-lg-9 col-11 mx-auto  bg-white rounded-4">
            <div class="d-flex justify-content-between p-3">
                <i class="bi bi-arrow-left back-first"></i>
                <h5 class="m-0 video-title"></h5>
                <i class="bi bi-x-lg"></i>
            </div>
            <hr class="m-1">
            <div class="col-lg-9 col-10 mx-auto p-3 overflow-scroll" style="height: 350px;">
                <div class="d-flex justify-content-between align-items-center position-relative">
                    <div class="position-absolute  bg-secondary "
                        style="height: 3px;bottom: 15%;width: 91%;left: 4.5%;"></div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Details</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Video Elements</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Checks</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Visibility</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                </div>

                <h4>Details</h4>
                <div class="row position-relative">
                    <div class="col-lg-8 ">
                        <div class="rounded-3 border p-2">
                            <label class="fw-semibold">Title (Required)</label>

                            <textarea rows="3" style="outline-width: 0;" name="title"
                                placeholder="Add a title that describes your video"
                                class="d-block w-100 rounded-3 video-desc border-0">
                            </textarea>


                        </div>

                        <div class="rounded-3 border p-2 my-2">
                            <label class="fw-semibold">Description</label>

                            <textarea rows="5" name="description" style="outline-width: 0;"
                                placeholder="Tell Viewers About your video" class="d-block w-100 rounded-3 border-0 ">
                            </textarea>


                        </div>
                        <h6 class="fw-semibold">
                            Thumbnail
                        </h6>
                        <p class="text-secondary text-md">Set a thumbnail that stands out and draws viewers' attention.
                            Learn more</p>
                        <div class="row">
                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                                <label for="thumbnail" class="card w-100" style="border:2px dashed #ccc;height: 70px;">
                                    <div class="d-flex flex-column justify-content-center align-items-center">
                                        <input type="file" class="d-none" id="thumbnail" name="thumbnail">
                                        <i class="bi bi-image"></i>
                                        <p class="text-secondary m-0">Upload</p>
                                    </div>
                                </label>
                            </div>


                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                                <div class="card w-100" style="border:2px dashed #ccc;height: 70px;">
                                    <div class="d-flex flex-column justify-content-center align-items-center">

                                        <i class="bi bi-image"></i>
                                        <p class="text-secondary m-0">Upload</p>
                                    </div>
                                </div>
                            </div>


                            <div class="col-md-4 d-flex flex-column justify-content-center align-items-center">
                                <div class="card w-100" style="border:2px dashed #ccc;height: 70px;">
                                    <div class="d-flex flex-column justify-content-center align-items-center">

                                        <i class="bi bi-image"></i>
                                        <p class="text-secondary m-0">Upload</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card" style="width: 100%;height: 200px;">
                            <video controls src="" alt="" class="crad-img-top video-preview"></video>
                            <div class="card-body">
                                <div class="d-flex justify-content-center">
                                    <div class="">
                                        <p class="text-secondary" style="font-size: 0.5rem;">
                                            Video Link
                                        </p>
                                        <a href="#" class="text-primary text-decoration-none"
                                            style="font-size: 0.6rem;">
                                            https://youtu.be/_UPyeZyrTnE
                                        </a>
                                    </div>
                                    <i class="bi bi-copy "></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" style="width: max-content;"
                        class="btn end-0 video-elements-btn position-absolute bottom-0  px-4 rounded-pill btn-dark">Next</button>
                </div>
            </div>
        </div>


        <!-- third form -->

        <div class="col-xl-7 d-none third-form col-lg-9 col-11 mx-auto  bg-white rounded-4 ">

            <div class="d-flex justify-content-between p-3">
                <i class="bi bi-arrow-left back-second"></i>
                <i class="bi bi-x-lg"></i>
            </div>
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center position-relative">
                    <div class="position-absolute  bg-secondary "
                        style="height: 3px;bottom: 15%;width: 91%;left: 4.5%;"></div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Details</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Video Elements</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Checks</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Visibility</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                </div>
                <div class="custom-panel">
                    <h4>Video elements</h4>
                    <p>Use cards and an end screen to show viewers related videos, websites, and calls to action. <a
                            href="#" class="learn-more">Learn more</a></p>
                </div>
                <div class="custom-panel">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" class="me-2">
                            <span>Add subtitles</span>
                            <br>
                            <small class="text-muted">Reach a broader audience by adding subtitles to your video</small>
                        </div>
                        <button class="btn btn-outline-dark">Add</button>
                    </div>
                </div>
                <div class="custom-panel">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" class="me-2">
                            <span>Add an end screen</span>
                            <br>
                            <small class="text-muted">Promote related content at the end of your video</small>
                        </div>
                        <div>
                            <button class="btn btn-outline-dark me-2">Import from video</button>
                            <button class="btn btn-outline-dark">Add</button>
                        </div>
                    </div>
                </div>
                <div class="custom-panel">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <input type="checkbox" class="me-2">
                            <span>Add cards</span>
                            <br>
                            <small class="text-muted">Promote related content during your video</small>
                        </div>
                        <button class="btn btn-outline-dark">Add</button>
                    </div>
                </div>
            </div>
            <div class="position-sticky bottom-0 p-3 gap-2 d-flex border-top justify-content-end">
                <button type="button" class="btn btn-light back-second">back</button>
                <button type="button" class="btn btn-dark third-btn ">Next</button>
            </div>
        </div>

        <!-- fourth form -->
        <div class="col-xl-7 fourth-form d-none col-lg-9 col-11 mx-auto  bg-white rounded-4">
            <div class="container mt-4">
                <div class="d-flex justify-content-between align-items-center position-relative">
                    <div class="position-absolute  bg-secondary "
                        style="height: 3px;bottom: 15%;width: 91%;left: 4.5%;"></div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Details</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Video Elements</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Checks</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Visibility</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                </div>
                <div class="custom-panel2">
                    <h4>Checks</h4>
                    <p>We'll check your video for issues that may restrict its visibility and then you will have the
                        opportunity to fix issues before publishing your video. <a href="#" class="learn-more2">Learn
                            more</a></p>
                </div>
                <div class="custom-panel2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div>
                            <h5>Copyright</h5>
                            <p>No issues found <span class="check-icon">✓</span></p>
                        </div>
                    </div>
                </div>
                <div class="custom-panel2">
                    <p class="text-muted">Remember: These check results aren't final. Issues may come up in the future
                        that impact your video. <a href="#" class="learn-more">Learn more</a></p>
                    <div class="text-end">
                        <button class="btn btn-outline-dark">Send feedback</button>
                    </div>
                </div>
            </div>
            <div class="position-sticky bottom-0 p-3 gap-2 d-flex border-top justify-content-end">
                <button type="button" class="btn btn-light back-third ">back</button>
                <button type="button" class="btn btn-dark fourth-btn ">Next</button>
            </div>
        </div>


        <!-- fifth form -->
        <div class="col-xl-7 fifth-form d-none  col-lg-9 col-11 mx-auto   bg-white rounded-4 overflow-scroll"
            style="height:500px;">
            <div class="container mt-4" style="border-radius: 10px;">
                <div class="d-flex justify-content-between align-items-center position-relative">
                    <div class="position-absolute  bg-secondary "
                        style="height: 3px;bottom: 15%;width: 91%;left: 4.5%;"></div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Details</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Video Elements</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Checks</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                    <div class="d-flex align-items-center flex-column">
                        <h6>Visibility</h6>
                        <div class="bg-secondary rounded-circle d-flex justify-content-center align-items-center"
                            style="height: 15px;width: 15px;"></div>
                        <div class="bg-white rounded-circle" style="height: 50%;width: 50%;"></div>
                    </div>
                </div>
                <div class="custom-panel">
                    <h4>Visibility</h4>
                    <p>Choose when to publish and who can see your video</p>
                    <div class="mt-3">
                        <h5>Save or publish</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" id="private">
                            <label class="form-check-label" for="private">Private</label>
                            <p class="text-muted">Only you and people you choose can watch your video</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" id="unlisted" checked>
                            <label class="form-check-label" for="unlisted">Unlisted</label>
                            <p class="text-muted">Anyone with the video link can watch your video</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="visibility" id="public">
                            <label class="form-check-label" for="public">Public</label>
                            <p class="text-muted">Everyone can watch your video</p>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="premiere">
                            <label class="form-check-label" for="premiere">Set as instant Premiere <span
                                    class="text-muted">?</span></label>
                        </div>
                    </div>
                    <div class="video-link ">

                        <p>Video link</p>
                        <p>https://youtu.be/_7F801G7b8U</p>
                    </div>
                </div>
                <div class="custom-panel">
                    <h5>Schedule</h5>
                    <p>Select a date to make your video public.</p>
                    <input type="date" class="form-control mb-2" name="schedule" id="scheduleDate">

                </div>
            </div>
            <div class="position-sticky bottom-0 p-3 gap-2 d-flex  justify-content-end">

                <button class="btn btn-dark last-btn ">publish video</button>
            </div>
        </div>



        <script src="./app.js"></script>


    </form>
</body>

</html>