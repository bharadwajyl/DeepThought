<?php
$data = file_get_contents('https://dev.deepthought.education/assets/uploads/files/others/project.json');
$response = json_decode($data, true);
?>

<!DOCTYPE html>
<html>
<head>

<!--TITLE-->
<title>Deep Thought</title>

<!--SHORTCUT ICON-->
<link rel="shortcut icon" href="assets/images/favicon.ico">

<!--META TAGS-->
<meta charset="UTF-8">
<meta name="language" content="ES">
<meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!--PLUGIN-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<!--STYLE SHEET-->
<link rel="stylesheet" href="assets/css/main.css">
<link rel="stylesheet" href="assets/css/home.css">

</head>
<body>

<!--NAV-->
<nav id="nav">
<h5><b>Journey Board</b> <a href="#nav" id="nav_icon"><i class="fa fa-bars"></i></a></h5>
 <dl>
  <dt><a href="#">1. demo task</a> <a href="#"><b>1</b></a></dt>
  <dd><a href="#">task heading 1</a></dd>
  <dd><a href="#">task heading 2</a></dd>
  <dd><a href="#">task heading 3</a></dd>
  <dd><a href="#">task heading 4</a></dd>
  <dd><a href="#">task heading 5</a></dd>
  <dd><a href="#">task heading 6</a></dd>
  <dd><a href="#">task heading 7</a></dd>
  <dd><a href="#">task heading 8</a></dd>
  <dd><a href="#">task heading 9</a></dd>
</dl> 
</nav>

<!--MENU-->
<menu class="flex">
    <section class="flex-content">
        <img src="assets/images/logo.svg" alt="">
    </section>
    <section class="flex-content">
        <a href="#"><i class="fa fa-home"></i></a>
        <a href="#"><i class="fa fa-road"></i></a>
        <a href="#"><i class="fa fa-wrench"></i></a>
        <a href="#"><i class="fa fa-bell"></i></a>
        <a href="#"><i class="fa fa-ellipsis-v"></i></a>
    </section>
</menu>

<!--MAIN-->
<main>
    <h4 class="title">You Are Taking Challenges Of New Project</h4>
    <div class="container">
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 1
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <p><?php print($response['description']); ?></p>
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 2
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <ul>
                    <li>
                        <label>
                            <strong><input type="checkbox" onclick="ShowThread(this)">Thread 1</strong>
                            <div class="threads">
                                <div class="sub_thread">
                                    <div class="thread_s1 flex">
                                        <section class="flex-content">
                                            <h6>Sub Thread</h6>
                                            <textarea placeholder="Enter Text Here"></textarea>
                                        </section>
                                        <section class="flex-content">
                                            <h6>Sub Interpretation</h6>
                                            <textarea placeholder="Enter Text Here"></textarea>
                                        </section>
                                        </div>
                                        <div class="thread_s2 flex">
                                            <a href="#"><i class="fa fa-lightbulb-o"></i></a>
                                            <a href="#"><i class="fa fa-comment"></i></a>
                                            <select>
                                                <option>Select Category</option>
                                            </select>
                                            <select>
                                                <option>Select Process</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="thread_s3 flex">
                                        <button class="btn btn1" onclick="SubThread(this)"><i class="fa fa-plus"></i> Sub thread</button>
                                    </div>
                                <div class="thread_s1 sub_thread_s1 flex">
                                    <section class="flex-content">
                                        <h6>Summary for thread 1</h6>
                                        <textarea placeholder="Enter Text Here"></textarea>
                                    </section>
                                </div>
                                <div class="thread_s2 sub_thread_s2 flex">
                                    <a href="#">Thread credit <i class="fa fa-pencil"></i></a>
                                    <select>
                                        <option>Select Emotion</option>
                                    </select>
                                </div>
                            </div>
                        </label>
                        <button class="btn btn1 create_thread" onclick="NewThread(this)"><i class="fa fa-plus"></i> New thread</button>
                    </li>
                </ul>
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 3
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <object data="https://research.google.com/pubs/archive/44678.pdf" type="application/pdf">
                    alt : <a href="https://research.google.com/pubs/archive/44678.pdf">test.pdf</a>
                </object>
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 4
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <img src="<?php print($response['tasks']['0']['assets']['4']['display_asset_image']);  ?>" alt="" loading="lazy">
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion accordion_5">
            <label>Asset Heading 5
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                 <audio controls>
                    <source src="#" type="audio/mp3"> </audio> 
                    <p><?php print($obj->asset_description); ?></p>
               
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 6
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                 <iframe src="<?php print($response['tasks']['0']['assets']['8']['display_asset_video']); ?>" title="SD LMS | Teacher Testimonial | TSUS" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion">
            <label>Asset Heading 7
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <textarea placeholder="Reflect as per given guidelines"></textarea>
            </article>
        </div>
        <!--Accordion Ends-->
        <!--Accordion Begining-->
        <div class="accordion accordion_8">
            <label>Asset Heading 8
                <input type="checkbox" class="acc_checkbox">
            </label>
            <article>
                <ul>
                    <li>
                        <label>
                            <strong><input type="checkbox" onclick="ShowThread(this)">Introduction</strong>
                            <div class="threads">
                                <div class="sub_thread">
                                    <div class="thread_s1 flex">
                                        <section class="flex-content">
                                            <textarea placeholder="Enter Text Here"></textarea>
                                        </section>
                                        </div>
                                    </div>
                            </div>
                        </label>
                        <label>
                            <strong><input type="checkbox" onclick="ShowThread(this)">Thread 1</strong>
                            <div class="threads">
                                <div class="sub_thread">
                                    <div class="thread_s1 flex">
                                        <section class="flex-content">
                                            <h6>Example</h6>
                                            <textarea placeholder="Enter Text Here"></textarea>
                                        </section>
                                        </div>
                                        <div class="thread_s3 flex">
                                            <button class="btn btn1" onclick="AddExample(this)"><i class="fa fa-plus"></i> Example</button>
                                        </div>
                                    </div>
                                    <div class="thread_s1 sub_thread_s1 flex">
                                        <section class="flex-content">
                                            <h6>Argument for thread 1</h6>
                                            <textarea placeholder="Enter Text Here"></textarea>
                                        </section>
                                    </div>
                            </div>
                        </label>
                        <button class="btn btn1 create_example" onclick="NewExample(this)"><i class="fa fa-plus"></i> New thread</button>
                        <label>
                            <strong><input type="checkbox" onclick="ShowThread(this)">Conclusion</strong>
                            <div class="threads">
                                <div class="sub_thread">
                                    <div class="thread_s1 flex">
                                        <section class="flex-content">
                                            <textarea placeholder="Enter Conclusion"></textarea>
                                        </section>
                                        </div>
                                       
                                    </div>
                            </div>
                        </label>
                    </li>
                </ul>
            </article>
        </div>
        <!--Accordion Ends-->
    </div>
</main>

<!--JAVASCRIPT-->
<script src="assets/js/main.js"></script>
<script src="assets/js/home.js"></script>
</body>
</html>
